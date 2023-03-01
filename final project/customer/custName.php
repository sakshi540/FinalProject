<?php
include('..//dbconnection.php');
// login check 
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
}else{
 echo "<script> location.href='../index.php'; </script>";
}

$sql = "SELECT * FROM customer WHERE db_email = '$rEmail'";

$result = $conn->query($sql);
if ($result->num_rows == 1) {
   $row = $result->fetch_assoc();
   $rName = $row['db_name'];
   $rEmail = $row['db_email'];
   
}
?>