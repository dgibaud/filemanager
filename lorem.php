<?php
	require_once 'inc/config.php';

$contents = nl2br(file_get_contents('lorem.txt'));
$contents = explode('<br />'.PHP_EOL.'<br />'.PHP_EOL, $contents);

debug($contents);

foreach ($contents as $key => $content) {
	// 1 : on ouvre le fichier
	$monfichier = fopen("lorem/lorem$key.txt", 'c+');

	if($monfichier){
		// 2 : on fera ici nos opérations sur le fichier...
		fputs($monfichier, $content);

		// 3 : quand on a fini de l'utiliser, on ferme le fichier
		fclose($monfichier);
	}
}