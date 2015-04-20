<?php
use \Login\PHPLogin;
class LibraryTest extends PHPUnit_Framework_TestCase
{
  public function testLibrary()
  {
    $login = new PHPLogin();
    $this->assertEquals($login->isUserLoggedIn(),false)
    
  } 
}
