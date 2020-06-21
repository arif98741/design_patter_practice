<?php


namespace App;


class Bookfactory
{
    /**
     * @param $name
     * @param $author
     * @return Book
     */
    public static function create($name, $author)
    {
        return new Book($name, $author);
    }
}