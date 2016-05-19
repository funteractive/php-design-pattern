<?php
if(!interface_exists('MyIterator')) {
  require('MyIterator.php');
}

interface Aggregate
{
  public function iterator();
}
