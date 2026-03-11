<?php

require_once 'Item.php';

class Library
{
	private static $totalItems = 0;
	private $items = [];

	public function addItem(Item $item)
	{
		$this->items[] = $item;
		self::$totalItems++;
	}

	public function getItems()
	{
		return $this->items;
	}

	public static function getTotalItems()
	{
		return self::$totalItems;
	}
}
