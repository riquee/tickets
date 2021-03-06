<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <link href="./css/style.css" rel="stylesheet">

</head>

<body>

  <?php

  session_start();
  require_once './controller/User.php';

  if ($_POST['username']) {

    $user = User::verify($_POST['username'], $_POST['password']);

    if ($user) :
      $_SESSION['user'] = $user;
      header('Location: dashboard.php');
    else :
      echo '<div class="card-panel red lighten-3">Usuario ou senha invalidos</div>';
    endif;
  }
  ?>

  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="./images/logo.png" />
      <div class="section"></div>

      <h5 class="indigo-text">Sistema de Tickets</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form action="<?php echo $__SERVER['PHP-SELF']; ?>" class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='username' required/>
                <label for='username'>Digite o nome do usuario</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required/>
                <label for='password'>Digite sua senha</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</html>