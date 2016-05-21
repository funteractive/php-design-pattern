<?php
use Iterator\Book;

class BookTest extends PHPUnit_Framework_TestCase
{
  public function testGetName()
  {
    $book = new Book('Test');
    $this->assertEquals('Test', $book->getName());
  }
}
