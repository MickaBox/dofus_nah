<?php
// gestion de la page à afficher au centre

if (isset($_GET['page_bisbis'])) 
	{
		$page_bisbis="./page_bisbis/".$_GET['page_bisbis'].".php";
	}
else 
	{
		$page_bisbis="./page_bisbis/fond_fictif.php";
	}

// affichage de la page correspondante
include($page_bisbis);
?>