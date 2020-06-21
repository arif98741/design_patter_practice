<?php


namespace App;


class Book
{
    private $name;
    private $author;
    const BR = '<br>';


    /**
     * Book constructor.
     * @param $name
     * @param $author
     */
    public function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getNameAndAuthor()
    {
        return 'Book name is ' . $this->name . self::BR .' Author is : ' . $this->author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}