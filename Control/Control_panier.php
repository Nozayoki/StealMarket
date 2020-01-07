<?php
/* Démarrage ou prolongation de la session */
session_start();
/* Article exemple */
/*
$select = array();
$select['id'] = "phlevis501";
$select['qte'] = 2;
$select['taille'] = "56";
$select['prix'] = 84.95;
*/
/* On vérifie l'existence du panier, sinon, on le crée */
if(!isset($_SESSION['panier']))
{
    /* Initialisation du panier */
    $_SESSION['panier'] = array();
    /* Subdivision du panier qui sert a organiser puis trier le contenu*/
    $_SESSION['panier']['qte'] = array();
    $_SESSION['panier']['taille'] = array();
    $_SESSION['panier']['prix'] = array();
}

/* Ici, on sait que le panier existe, donc on ajoute l'article dedans. */
array_push($_SESSION['panier']['id_article'],$select['id']);
array_push($_SESSION['panier']['qte'],$select['qte']);
array_push($_SESSION['panier']['taille'],$select['taille']);
array_push($_SESSION['panier']['prix'],$select['prix']);

/* Affichons maintenant le contenu du panier : */
?>
<pre>
<?php
var_dump($_SESSION['panier']);
?>
</pre>