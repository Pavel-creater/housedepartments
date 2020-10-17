<?php

session_start();

$user = 'b5736767aa4429';
$password = 'f7147b76';
$db = 'heroku_dd1b5361b8d310d';
$host = 'eu-cdbr-west-03.cleardb.net';

$connect = mysqli_connect($host, $user, $password, $db);
mysqli_query($connect, "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
  )  ENGINE=INNODB");

if(!$connect){
  die("Connection failed:" . mysqli_connect_error());
}


error_reporting(E_ALL);
ini_set('display_errors', 1);
 ?>
