<?php
require('../BookShelf.php');

class BookShelfTest extends PHPUnit_Framework_TestCase
{
  public function setUp()
  {
    $this->bookShelf = new BookShelf(5);
    $this->bookShelf->appendBook(new Book('Around the World in 80 days'));
    $this->bookShelf->appendBook(new Book('Bible'));
    $this->bookShelf->appendBook(new Book('Cinderella'));
    $this->bookShelf->appendBook(new Book('Daddy-Long-Legs'));
  }

  public function testGetBookAt()
  {
    $this->assertInstanceOf('Book', $this->bookShelf->getBookAt(0));
  }

  public function testAppendBook()
  {
    $this->bookShelf->appendBook(new Book('Test Book'));
    $this->assertEquals(5, $this->bookShelf->getLength());
  }

  /**
   * 最大値以上の数の本を追加すると例外を投げる
   * @expectedException RuntimeException
   * @expectedExceptionMessage Index invalid or out of range
   */
  public function testThrowCorrectException()
  {
    $this->bookShelf->appendBook(new Book('Fifth Book'));
    $this->bookShelf->appendBook(new Book('Sixth Book'));
  }

  public function testGetLength()
  {
    $this->assertEquals(4, $this->bookShelf->getLength());
  }

  public function testIterator()
  {
    $this->assertInstanceOf('BookShelfIterator', $this->bookShelf->iterator($this->bookShelf));
  }
}