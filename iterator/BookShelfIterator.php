<?php
if(!interface_exists('Iterator')) {
  require('MyIterator.php');
}

class BookShelfIterator implements MyIterator
{
  private $bookShelf;
  private $index;

  public function __construct(BookShelf $bookShelf)
  {
    $this->bookShelf = $bookShelf;
    $this->index = 0;
  }

  public function hasNext()
  {
    if($this->index < $this->bookShelf->getLength()) {
      return true;
    } else {
      return false;
    }
  }

  public function next()
  {
    $book = $this->bookShelf->getBookAt($this->index);
    $this->index++;
    return $book;
  }
}
