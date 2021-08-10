<?php

require_once './models/connection.php';

class Tickets
{
  public static function getAll()
  {
    $stmt = Connection::getConn()->prepare('
    SELECT TK.*, AG.nome `agf_nome`,  US.nome `user_nome` FROM tickets AS TK
    JOIN agfs AS AG ON TK.agf_id = AG.id 
    JOIN users AS US ON TK.user_id = US.id;
    ');
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
}
