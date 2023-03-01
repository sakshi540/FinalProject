<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname= "final_project";
$conn = mysqli_connect($host, $user,$pass, $dbname);
if (!$conn){
	echo "conntection successsfully ";
}
?>