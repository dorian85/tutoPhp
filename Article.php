<?php

class Article {
	private $_title;
	private $_category;
	private $_createdAt;
	private $_author;
	private $_content;

	public function __construct(
		$title,
		$category,
		$author,
		$content
	) {
		$this->_title = $title;
		$this->_category = $category;
		$this->_createdAt = date('d/m/Y');
		$this->_author = $author;
		$this->_content	= $content;
	}

	public function setTitle($title) {
		$this->_title = $title;
	}

	public function setCategory($category) {
		$this->_category = $category;
	}

	public function setAuthor($author) {
		$this->_author = $author;
	}

	public function setContent($content) {
		$this->_content = $content;
	}

	public function getTitle() {
		return $this->_title;
	}

	public function getCategory() {
		return $this->_category;
	}

	public function getAuthor() {
		return $this->_author;
	}

	public function getContent() {
		return $this->_content;
	}

	public function getCreatedAt() {
		return $this->_createdAt;
	}
}
