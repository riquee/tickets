<?php

require_once 'global.php';

class Connection
{
  private static $instance;

  public static function getConn()
  {
    if (!self::$instance) :
      self::$instance = new PDO(
        'mysql:host=' . $_ENV['MYSQL_HOST'] . 'dbname=sgpWeb;',
        $_ENV['MYSQL_USER'],
        $_ENV['MYSQL_PASSWORD']
      );
    else :
      return self::$instance;
    endif;
  }
}
