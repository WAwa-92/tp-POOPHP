<?php

abstract class Item
{
    protected $title;
    protected $author;
    protected $coverImage;

    public function __construct($title, $author, $coverImage)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setCoverImage($coverImage);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if (!is_string($title) || trim($title) === '') {
            throw new InvalidArgumentException('Le titre doit être une chaîne non vide.');
        }

        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        if (!is_string($author) || trim($author) === '') {
            throw new InvalidArgumentException('L\'auteur doit être une chaîne non vide.');
        }

        $this->author = $author;
    }

    public function getCoverImage()
    {
        return $this->coverImage;
    }

    public function setCoverImage($coverImage)
    {
        if (!is_string($coverImage) || trim($coverImage) === '') {
            throw new InvalidArgumentException('L\'image de couverture doit être une chaîne non vide.');
        }

        $this->coverImage = $coverImage;
    }

    abstract public function getInfo();
}
