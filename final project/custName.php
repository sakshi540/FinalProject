<?php 
include('dbconnection.php');

 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}else{
  echo "<script> location.href='index.php'; </script>";
}
 $sql = "SELECT  db_name, db_jobExperience, db_jobOpted, db_address, db_salary, db_phone, db_email, db_pass FROM users WHERE db_email = '$rEmail'";

 $result = $conn->query($sql);
 if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $rName = $row['db_name'];
    $rJobE = $row['db_jobExperience'];
    $rJobO =$row['db_jobOpted'];
    $rAddress = $row['db_address'];
    $rSalary = $row['db_salary'];
    $rContact = $row['db_phone'];
    $rEmail = $row['db_email'];
    $rPass = $row['db_pass'];
 }
 ?>