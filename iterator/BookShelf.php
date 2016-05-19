<?php
require('Aggregate.php');
require('BookShelfIterator.php');
require('Book.php');

class BookShelf implements Aggregate
{
  private $books;
  private $last = 0;

  public function __construct($maxsize)
  {
    $this->books = new SplFixedArray($maxsize);
  }

  public function getBookAt($index)
  {
    return $this->books[$index];
  }

  public function appendBook(Book $book)
  {
    $this->books[$this->last] = $book;
    $this->last++;
  }

  public function getLength()
  {
    return $this->last;
  }

  public function iterator()
  {
    return new BookShelfIterator($this);
  }
}
