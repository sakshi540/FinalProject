<?php 
include('dbconnection.php');
//include('loginConnection.php');

session_start();

 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}else{
  echo "<script> location.href='index.php'; </script>";
}

 ?>
