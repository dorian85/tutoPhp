<?php

require_once "BddHandler.php";
require_once "Article.php";

$bdd = BddHandler::getBdd();

$query = "SELECT * FROM article";
$result = $bdd->prepare($query);
$result->execute();

$articlesFromTable = $result->fetchAll();
$articles = [];

foreach ($articlesFromTable as $article) {
	$articles[] = new Article(
		$article['title'],
		$article['category'],
		$article['author'],
		$article['content']
	);
}

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