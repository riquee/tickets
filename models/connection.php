<?php

require_once 'configs.php';

class Connection
{
  private static $instance;

  public static function getConn()
  {
    if (!self::$instance) {
      self::$instance = new PDO(
        'mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_DBNAME'],
        $_ENV['MYSQL_USER'],
        $_ENV['MYSQL_PASSWORD'],
      );
    }

    return self::$instance;
  }
}