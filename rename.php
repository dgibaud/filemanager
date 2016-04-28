<?php
	require_once 'inc/config.php';

	$pictures = glob("img/*");

	debug($pictures);

	$query = $db->prepare('SELECT name, id, picture FROM products WHERE picture = :picture LIMIT 1');
	$query->bindParam(':picture', $picture, PDO::PARAM_STR);

	foreach ($pictures as $key => $image) {
		$picture = basename($image);
		$query->execute();
		$results[] = $query->fetch();
	}

debug($results);

	foreach ($results as $key => $result) {
		$result['name'] = slugify($result['name']);
		$filename_picture = $result['picture'];
		$extension_file = pathinfo($filename_picture, PATHINFO_EXTENSION);
		$product_name = $result['name'];
		echo "img/$filename_picture"." = "."img/$product_name$extension_file"."<br>";
		//rename("img/$filename_picture","img/$product_name$extension_file");
	}

	$pictures = glob("img/*");

	debug($pictures);
