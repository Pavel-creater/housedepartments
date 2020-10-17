<?php

require_once 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$password = md5($password);

mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')");

$_SESSION['message'] = 'Регистрация прошла успешно, авторизируйтесь';
header('Location: ../index.php');
 ?>
