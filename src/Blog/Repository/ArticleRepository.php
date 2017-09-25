<?php

require_once __DIR__."/../../../app/config/BddHandler.php";
require_once __DIR__."/../Entity/Article.php";

class ArticleRepository
{
	private $_bdd;

	public function __construct() {
		$this->_bdd = BddHandler::getBdd();
	}

	private function buildQuery($query) {
		$result = $this->_bdd->prepare($query);
		$result->execute();
		
		return $result;
	}


	public function findAll() {
		$articlesFromTable = $this->buildQuery('SELECT * FROM article')->fetchAll();
		$articles = [];

		foreach ($articlesFromTable as $article) {
			$articles[] = new Article(
				$article['title'],
				$article['category'],
				$article['author'],
				$article['content']
			);
		}

		return $articles;
	}
}