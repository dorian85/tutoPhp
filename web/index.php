<?php

require_once __DIR__."/../vendor/autoload.php";

require_once __DIR__."/../src/Blog/Repository/ArticleRepository.php";

$articles = (new ArticleRepository())->findAll();

require_once __DIR__."/../src/Blog/Resources/views/home.php";


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