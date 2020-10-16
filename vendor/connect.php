<?php

session_start();

$user = 'root';
$password = 'root';
$db = 'test';
$host = 'localhost';

$connect = mysqli_connect($host, $user, $password, $db);

if(!$connect){
  die("Connection failed:" . mysqli_connect_error());
}

 ?>
