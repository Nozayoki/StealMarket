<?php
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/*                Fonctions de base de gestion du panier                   */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

/**
* Ajoute un article dans le panier après vérification que nous ne somme pas en phase de paiement
*
* param array  $select variable tableau associatif contenant les valeurs de l'article
* return Mixed Retourne VRAI si l'ajout est effectué, FAUX sinon voire une autre valeur si l'ajout
*               est renvoyé vers la modification de quantité.
*/
function ajout($select)
{
    $ajout = false;
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false)
    {
        if(!verif_panier($select['id']))
        {
            array_push($_SESSION['panier']['id_article'],$select['id']);
            array_push($_SESSION['panier']['qte'],$select['qte']);
            array_push($_SESSION['panier']['taille'],$select['taille']);
            array_push($_SESSION['panier']['prix'],$select['prix']);
            $ajout = true;
        }
        else
        {
            $ajout = modif_qte($select['id'],$select['qte']);
        }
    }
    return $ajout;
}

/**
* Modifie la quantité d'un article dans le panier après vérification que nous ne somme pas en phase de paiement
*
* param String $ref_article    Identifiant de l'article à modifier
* param Int $qte               Nouvelle quantité à enregistrer
* return Mixed                 Retourne VRAI si la modification a bien eu lieu,
*                               FAUX sinon,
*                               "absent" si l'article est absent du panier,
*                               "qte_ok" si la quantité n'est pas modifiée car déjà correctement enregistrée.
*/
function modif_qte($ref_article, $qte)
{
    /* On initialise la variable de retour */
    $modifie = false;
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false)
    {
        if(nombre_article($ref_article) != false && $qte != nombre_article($ref_article))
        {
            /* On compte le nombre d'articles différents dans le panier */
            $nb_articles = count($_SESSION['panier']['id_article']);
            /* On parcoure le tableau de session pour modifier l'article précis. */
            for($i = 0; $i < $nb_articles; $i++)
            {
                if($ref_article == $_SESSION['panier']['id_article'][$i])
                {
                    $_SESSION['panier']['qte'][$i] = $qte;
                    $modifie = true;
                }
            }
        }
        else
        {
            /* L'article est absent du panier, donc on ne peut pas modifier la quantité ou bien
            * le nombre est exactement le même et il est inutile de le modifier
            * Si l'article est absent, comme on a ni la taille  ni le prix, on ne peut pas l'ajouter
            * Si le nombre est le même, on ne fait pas de changement. On peut donc retourner un autre
            * type de valeur pour indiquer une erreur qu'il faudra traiter à part lors du retour d'appel
            */
            if(nombre_article($ref_article) != false)
            {
                $modifie = "absent";
            }
            if($qte != nombre_article($ref_article))
            {
                $modifie = "qte_ok";
            }
        }
    }
    return $modifie;
}

/**
* Supprimer un article du panier après vérification que nous ne somme pas en phase de paiement
*
* param String     $ref_article numéro de référence de l'article à supprimer
* return Mixed     Retourne TRUE si la suppression a bien été effectuée,
*                   FALSE sinon, "absent" si l'article était déjà retiré du panier
*/
function supprim_article($ref_article)
{
    $suppression = false;
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false)
    {
        /* On vérifie que l'article à supprimer est bien présent dans le panier */
        if(nombre_article($ref_article) != false)
        {
            /* création d'un tableau temporaire de stockage des articles */
            $panier_tmp = array("id_article"=>array(),"qte"=>array(),"taille"=>array(),"prix"=>array());
            /* Comptage des articles du panier */
            $nb_articles = count($_SESSION['panier']['id_article']);
            /* Transfert du panier dans le panier temporaire */
            for($i = 0; $i < $nb_articles; $i++)
            {
                /* On transfère tout sauf l'article à supprimer */
                if($_SESSION['panier']['id_article'][$i] != $ref_article)
                {
                    array_push($panier_tmp['id_article'],$_SESSION['panier']['id_article'][$i]);
                    array_push($panier_tmp['qte'],$_SESSION['panier']['qte'][$i]);
                    array_push($panier_tmp['taille'],$_SESSION['panier']['taille'][$i]);
                    array_push($panier_tmp['prix'],$_SESSION['panier']['prix'][$i]);
                }
            }
            /* Le transfert est terminé, on ré-initialise le panier */
            $_SESSION['panier'] = $panier_tmp;
            /* Option : on peut maintenant supprimer notre panier temporaire: */
            unset($panier_tmp);
            $suppression = true;
        }
        else
        {
            $suppression == "absent";
        }
    }
    return $suppression;
}

/**
* Supprimer un article du panier : autre méthode.
*
* param String     $ref_article numéro de référence de l'article à supprimer
* param Boolean    $reindex : facultatif, par défaut, vaut true pour ré-indexer le tableau après
*                   suppression. On peut envoyer false si cette ré-indexation n'est pas nécessaire.
* return Mixed     Retourne TRUE si la suppression a bien été effectuée,
*                   FALSE sinon, "absent" si l'article était déjà retiré du panier
*/
function supprim_article2($ref_article, $reindex = true)
{
    $suppression = false;
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false)
    {
        $aCleSuppr = array_keys($_SESSION['panier']['id_article'], $ref_article);

        /* sortie la clé a été trouvée */
        if (!empty ($aCleSuppr))
        {
            /* on traverse le panier pour supprimer ce qui doit l'être */
            foreach ($_SESSION['panier'] as $k=>$v)
            {
                foreach($aCleSuppr as $v1)
                {
                    unset($_SESSION['panier'][$k][$v1]);    // remplace la ligne foireuse
                }
                /* Réindexation des clés du panier si l'option $reindex a été laissée à true */
                if($reindex == true)
                {
                    $_SESSION['panier'][$k] = array_values($_SESSION['panier'][$k]);
                }
                $suppression = true;
            }
        }
        else
        {
            $suppression = "absent";
        }
    }
    return $suppression;
}

/**
* Fonction qui supprime tout le contenu du panier en détruisant la variable après
* vérification qu'on ne soit pas en phase de paiement.
*
* return Mixed    Retourne VRAI si l'exécution s'est correctement déroulée, Faux sinon et "inexistant" si
*                  le panier avait déjà été détruit ou n'avait jamais été créé.
*/
function vider_panier()
{
    $vide = false;
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false)
    {
        if(isset($_SESSION['panier']))
        {
            unset($_SESSION['panier']);
            if(!isset($_SESSION['panier']))
            {
                $vide = true;
            }
        }
        else
        {
            /* Le panier était déjà détruit, on renvoie une autre valeur exploitable au retour */
            $vide = "inexistant";
        }
    }
    return $vide;
}

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/*                 AUTRE FONCTION de gestion du panier                  */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

/**
* Vérifie la quantité enregistrée d'un article dans le panier
*
* param String $ref_article référence de l'article à vérifier
* return Mixed Renvoie le nombre d'article s'il y en a, ou Faux si cet article est absent du panier
*/
function nombre_article($ref_article)
{
    /* On initialise la variable de retour */
    $nombre = false;
    /* Comptage du panier */
    $nb_art = count($_SESSION['panier']['id_article']);
    /* On parcoure le panier à la recherche de l'article pour vérifier le cas échéant combien sont enregistrés */
    for($i = 0; $i < $nb_art; $i++)
    {
        if($_SESSION['panier']['id_article'][$i] == $ref_article)
        $nombre = $_SESSION['panier']['qte'][$i];
    }
    return $nombre;
}

/**
* Calcule le montant total du panier
*
* return Double
*/
function montant_panier()
{
    /* On initialise le montant */
    $montant = 0;
    /* Comptage des articles du panier */
    $nb_articles = count($_SESSION['panier']['id_article']);
    /* On va calculer le total par article */
    for($i = 0; $i < $nb_articles; $i++)
    {
        $montant += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i];
    }
    /* On retourne le résultat */
    return $montant;
}

/**
* Vérifie la présence d'un article dans le panier
*
* param String $ref_article référence de l'article à vérifier
* return Boolean Renvoie Vrai si l'article est trouvé dans le panier, Faux sinon
*/
function verif_panier($ref_article)
{
    /* On initialise la variable de retour */
    $present = false;
    /* On vérifie les numéros de références des articles et on compare avec l'article à vérifier */
    if( count($_SESSION['panier']['id_article']) > 0 && array_search($ref_article,$_SESSION['panier']['id_article']) !== false)
    {
        $present = true;
    }
    return $present;
}

/**
* Fonction de verrouillage du panier pendant la phase de paiement.
*
*/
function preparerPaiement()
{
    $_SESSION['panier']['verrouille'] = true;
    header("Location: URL_DU_SITE_DE_BANQUE");
}

/**
* Fonction qui va enregistrer les informations de la commande dans
* la base de données et détruire le panier.
*
*/
function paiementAccepte()
{
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    /*   Stockage du panier dans la BDD   */
    /* code a creer*/
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    unset($_SESSION['panier']);
}
?> 