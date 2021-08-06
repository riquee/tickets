<?php

$host = 'localhost';
$username = 'riquee';
$password = 'Somsm123';

class Connection
{
  private static $instance;

  public static function getConn()
  {
    if (!self::$instance) :
      self::$instance = new PDO('mysql'); 
    else :
      return self::$instance;
    endif;
  }
}
