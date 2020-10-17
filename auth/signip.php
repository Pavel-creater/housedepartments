<?php

require_once 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
$has_user = mysqli_num_rows($check_user);
if($has_user){
  $_SESSION['message'] = 'Вы авторизированны';
  header('Location: ../index2.php');
}else{
 $_SESSION['message'] = 'Вы не аторизированны';
 header('Location: ../index.php');

}
?>
