<?php

require_once "vendor/autoload.php";

require_once "ArticleRepository.php";

$articles = (new ArticleRepository())->findAll();

require_once "home.php";


/*
$tab = [
	["ligne1col1", "ligne1col2"],
	["ligne2col1", "ligne2col2"],
	["ligne3col1", "ligne3col2"],
];

foreach ($tab as $row) {
	foreach ($row as $column) {
		echo $column . " ";
	}
	echo "<br>";
}
*/