<!DOCTYPE>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title></title>
  </head>
  <body>
    <body background="kuhnya-1920x1080-gostinaya-dom-klassicheskiy-elegantniy-ukrashenie-4364.jpg">
    </body>
    <div class="container">
      <form action="auth/signip.php" method="post">
        <div class="dws-input">
        <input type="text" name="username" placeholder="Введите логин">
      </div>
      <div class="dws-input">
        <input type="text" name="password" placeholder="Введите пароль">
      </div>
        <input class="dws-submit" type="submit" name="submit" value="Войти">
      </div>
      <p class="text-center">У вас нет аккаунта,<a href="Register.php">Зарегистрируйтесь</a></p>
      </form>
        <div class="social ">
        <i class="fa fa-vk" aria-hidden="true"></i>
        <i class="fa fa-telegram" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </div>
    </div>

     <?php
    session_start();
    if ($_SESSION['message']){
      echo '<p class="msg-center">' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
     ?>
  </body>
</html>
