<?php

require_once './models/connection.php';

class User
{
  public static function verify($username, $password)
  {
    $stmt = Connection::getConn()->prepare('SELECT * FROM users WHERE nome = ? and password = ?');
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    $stmt->execute();
    return $stmt->fetch(\PDO::FETCH_ASSOC);
  }
}
