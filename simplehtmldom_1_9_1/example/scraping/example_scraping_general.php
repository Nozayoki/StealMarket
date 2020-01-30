<?php
include_once('simple_html_dom.php');

function scraping_generic($url, $search) {
	// Didn't find it yet.
	$return = false;

	//echo "reading the url: " . $url . "<br/>";
    // create HTML DOM
    $html = file_get_html($url);
	//echo "url has been read.<br/>";

    // get article block
    /*foreach($html->find($search) as $found) {
		// Found at least one.
		//$return - true;
		echo "found a: " . $search . "<br/><pre>";
		$found->dump();
		//echo "</pre><br/>";
    }*/
    
	// clean up memory
	$found=$html->find($search);
	$found1=$found[1];
	$found2=$found[3];
	//print_r( $found);
	$a= $found1->content;
	$ba= $found2->content;
	$b="";
	for ($p=3;$p<12;$p++){
		$b=$b.htmlspecialchars( $a[$p]);
		
	}//*/
	//$found=$array["content"];
	//$return - true;
	//$found->dump();
	//echo "</pre><br/>";
    $html->clear();
	unset($html);
	$ca=[$b,$ba];
    return $ca;
}


// ------------------------------------------
error_log ("post:" . print_r($_POST, true));
$url = "";
if (isset($_POST['url']))
{
	$url = $_POST['url'];
}
$search = "";
if (isset($_POST['search']))
{
	$search = $_POST['search'];
}
?>
<form method="post">
	URL: <input name="url" type="text" value="<?=$url;?>"/><br/>
	Search: <input name="search" type="text" value="<?=$search;?>"/>
	<input name="submit" type="submit" value="Submit"/>
</form>
<?php
// -----------------------------------------------------------------------------
// test it!
if (isset ($_POST['submit']))
{
	$response = scraping_generic($_POST['url'], $_POST['search']);
	if (!$response)
	{
		echo "Did not find any: " . $_POST['search'] . "<br />";
	}
}
?>