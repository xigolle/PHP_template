<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include_once "classes/Pagina_Data.class.php";
$paginaData = new Pagina_data();
$paginaData->css ="<link href='css/reset.css' rel='stylesheet'/>";
$paginaData->css .="<link href='css/style.css' rel='stylesheet'/>";

$paginaData->titel ="nieuwe website";
$paginaData->content = "<h1>Hello world</h1>";
<<<<<<< HEAD
$userClicked = isset($_GET['pagina']);
if ($userClicked){
	$fileToLoad = $_GET['pagina'];
}else{
	$fileToLoad = 'zoeken';
}
$paginaData->content .=include_once "views/$fileToLoad.php"; 
=======
$paginaData->content .= include_once "views/navigatie.php";

>>>>>>> origin/master




//laden van de pagina 
$pagina = include_once "templates/pagina.php";
//return de geladen pagina
echo $pagina;
?> 