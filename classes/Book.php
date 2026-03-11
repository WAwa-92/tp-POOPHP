<?php

require_once 'Item.php';

class Book extends Item
{
	private $pageCount;

	public function __construct($title, $author, $coverImage, $pageCount)
	{
		parent::__construct($title, $author, $coverImage);
		$this->setPageCount($pageCount);
	}

	public function getPageCount()
	{
		return $this->pageCount;
	}

	public function setPageCount($pageCount)
	{
		if (!is_int($pageCount) || $pageCount <= 0) {
			throw new InvalidArgumentException('Le nombre de pages doit être un entier strictement positif.');
		}

		$this->pageCount = $pageCount;
	}

	public function getInfo()
	{
		return 'Livre de ' . $this->pageCount . ' pages';
	}
}
