<?php

require_once 'Item.php';

class Magazine extends Item
{
	private $issueNumber;

	public function __construct(string $title, string $author, string $coverImage, int $issueNumber)
	{
		parent::__construct($title, $author, $coverImage);
		$this->setIssueNumber($issueNumber);
	}

	public function getIssueNumber()
	{
		return $this->issueNumber;
	}

	public function setIssueNumber($issueNumber)
	{
		if (!is_int($issueNumber) || $issueNumber <= 0) {
			throw new InvalidArgumentException('Le numéro d\'édition doit être un entier strictement positif.');
		}

		$this->issueNumber = $issueNumber;
	}

	public function getInfo()
	{
		return 'Magazine n° ' . $this->issueNumber;
	}
}
