<?php
	require_once('Hasher.php');

	$hasher = new PHPHasher();
	$hasher->initialize("Gourab", "ripemd256");
	$hasher->execute();
	print_r($hasher->getHash());
	echo "\n";
	print_r($hasher->getAvailableAlgos());
?>
