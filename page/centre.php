<?php
// gestion de la page � afficher au centre

if (isset($_GET['page'])) 
	{
		$page="./page/".$_GET['page'].".php";
	}
else 
	{
		$page="./page/bienvenue.php";
	}

// affichage de la page correspondante
include($page);
?>