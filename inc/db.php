<?php

include ('db.php');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shop');

try {

	$db_options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",	// Force l'encodage en UTF8
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,	// Force le résultat en tableau associatif (clés textes)
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING			// Force l'affichage des erreurs
	);

	$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, $db_options);
} catch(Exception $e) {
	die("mySQL Error >> ".$e->getMessage());
}