<?php
require 'App/Book.php';
require 'App/Bookfactory.php';

use App\Bookfactory;

$book1 = Bookfactory::create('History of Science', 'Adam Hough');
$book2 = Bookfactory::create('Bigbang Theory', 'Eienstain ');
echo '<pre>';
print_r($book2->getNameAndAuthor()); exit;
