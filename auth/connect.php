<?php

session_start();

$user = 'b5736767aa4429';
$password = 'f7147b76';
$db = 'heroku_dd1b5361b8d310d';
$host = 'eu-cdbr-west-03.cleardb.net';

$connect = mysqli_connect($host, $user, $password, $db);

if(!$connect){
  die("Connection failed:" . mysqli_connect_error());
}
mysql://b5736767aa4429:f7147b76@eu-cdbr-west-03.cleardb.net/heroku_dd1b5361b8d310d?reconnect=true
 ?>
