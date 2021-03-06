<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <link href="./css/style.css" rel="stylesheet">
  <title>Dashboard</title>
</head>

<body>
  <?php
  session_start();
  require_once './models/Tickets.php';
  $tickets = Tickets::getAll();
  $user = $_SESSION['user'];
  ?>

  <nav>
    <div class="nav-wrapper light-blue darken-4">
      <a href="" class="brand-logo">sgpWeb</a>
      <p class="right">Username: <?php echo $user['nome'] ?></p>
    </div>
  </nav>

  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Data</th>
        <th>Descrição</th>
        <th>Cliente Final</th>
        <th>Agf</th>
        <th>Usuario</th>
        <th>Problema</th>
      </tr>
    </thead>

    <tbody>
      <?php

      foreach ($tickets as $row) {
      ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['data'] ?></td>
          <td><?php echo $row['descricao'] ?></td>
          <td><?php echo $row['cliente_final'] ?></td>
          <td><?php echo $row['agf_nome'] ?></td>
          <td><?php echo $row['user_nome'] ?></td>
          <td><?php echo $row['problema'] ?></td>
          <td><button type="button">Excluir</button></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</html>