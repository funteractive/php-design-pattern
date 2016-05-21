<?php
require __DIR__ . '/vendor/autoload.php';

use Iterator\BookShelf;
use Iterator\Book;

$bookShelf = new BookShelf(4);
$bookShelf->appendBook(new Book('Around the World in 80 days'));
$bookShelf->appendBook(new Book('Bible'));
$bookShelf->appendBook(new Book('Cinderella'));
$bookShelf->appendBook(new Book('Daddy-Long-Legs'));

$it = $bookShelf->iterator();

while($it->hasNext()) {
  $book = $it->next();
  echo $book->getName() . PHP_EOL;
}
