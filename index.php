<?php

//Initialisation des paramètres du site
require_once "configuration/config.php";

//Lancement de la session
session_start();

//Selection de la page à afficher
if(isset($_GET['page']))
{
	if(is_file(chemin_controleurs.$_GET['page'].".php"))
	{
		$page_title = $_GET['page'];
		$page_url = $_GET['page'].".php";
	}
	else
	{
		$page_title = "Erreur";
		$page_url = "404.php";
	}
}
else
{
	$page_title = "Index";
	$page_url = "index.php";
}

//appel du controlleur
require_once chemin_controleurs.$page_url;

?>
