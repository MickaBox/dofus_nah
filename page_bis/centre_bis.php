<?php
// gestion de la page à afficher au centre

if (isset($_GET['page_bis'])) 
	{
		$page_bis="./page_bis/".$_GET['page_bis'].".php";
	}
else 
	{
		$page_bis="./page_bis/fond_fictif.php";
	}

// affichage de la page correspondante
include($page_bis);
?>