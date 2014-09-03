<?php
require 'config.php';
require 'helpers.php';



//Library de objetos
require 'library/Request.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';




if(empty($_GET['url']))
{
	$url = "";
}
else
{
	$url = $_GET['url'];
}

//index.php
$request = new Request($url);
$request->execute();