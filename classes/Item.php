<?php

abstract class Item
{
    protected $title;
    protected $author;
    protected $coverImage;

    public function __construct($title, $author, $coverImage)
    {
        $this->title = $title;
        $this->author = $author;
        $this->coverImage = $coverImage;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getCoverImage()
    {
        return $this->coverImage;
    }

    public function setCoverImage($coverImage)
    {
        $this->coverImage = $coverImage;
    }

    abstract public function getInfo();
}
