<?php
include('dbconnection.php');
if(isset($_REQUEST['rSignup'])){
	$sql = " SELECT db_email FROM users WHERE db_email = '".$_REQUEST['rEmail'] ."'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) == 1){
        $msg1 = '<div class="alert alert-danger mt-2" role="alert">already exit Email</div>';
	}
	else{
		$name = $_REQUEST['rName'];
		$jobE = $_REQUEST['rJobExperience'];
		$jobO = $_REQUEST['rJobOpted'];
		$add = $_REQUEST['rAddress'];
		$gender = $_REQUEST['rGender'];
		$dob = $_REQUEST['rDOB'];
		$salary = $_REQUEST['rSalary'];
		$phone = $_REQUEST['rPhone'];
		$email = $_REQUEST['rEmail'];
		$pass = $_REQUEST['rPassword'];

		$sql = " INSERT INTO `users`(`db_name`, `db_jobExperience`, `db_jobOpted`, `db_address`, `db_gender`, `db_dob`, `db_salary`, `db_phone`, `db_email`, `db_pass`) 
		VALUES('$name','$jobE','$jobO','$add','$gender','$dob','$salary','$phone','$email','$pass')";
		if($conn->query($sql)== true){
			$msg1 = '<div class="alert alert-success mt-2" role="alert"> account created successfully </div>';
		}
	}
}
session_start();
  if(!isset($_SESSION['is_login'])){
    if(isset($_REQUEST['rEmail'])){
      $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
      $rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword'])) ;
	$sql = "SELECT db_email, db_pass FROM  users WHERE db_email='".$rEmail."' AND db_pass='".$rPassword."' limit 1";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
              $_SESSION['is_login'] = true;
        $_SESSION['rEmail'] = $rEmail;
        echo "<script> location.href='home.php'; </script>";
        exit;
      }else{
        $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
      }
      }
	}else {
		echo "<script> location.href='home.php'; </script>";
	  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>customer Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="customer/login.css">
</head>

<body>
<br>
<div class="container " id="container" >
<div class="form-container sign-up-container">

<form action="" method="POST" class="py-5">
	<input type="text" name="rName" placeholder="User Name (name_surname)" required>
	<input type="text" name="rJobExperience" placeholder="Job Experience"required>
	<input type="text" name="rJobOpted" placeholder="Job opted for"required>
    <input type="text" name="rAddress" placeholder="Address" required>
	<input type="text" name="rGender" placeholder="Gender" required>
	<input type="date" name="rDOB" placeholder="DOB" required>
	<input type="text" name="rSalary" placeholder="salary expectation" required>
	<input type="text" name="rPhone" placeholder="phone no." required>
	<input type="email" name="rEmail" placeholder="Email" required>
	<input type="password" name="rPassword" placeholder="password" required>
	<button name="rSignup">SignUp</button>
	<!-- <button name="rSubmit">SignUp</button> -->
	<?php if(isset($msg1)) echo $msg1; ?>

	<!-- <input type="text" name="First Name" placeholder="Full Name">
	<input type="email" name="job experience" placeholder="Job Experience">
	<input type="email" name="job opted for" placeholder="Address">
    <input type="email" name="address" placeholder="Gender">
	<input type="email" name="Gender" placeholder="DOB">
	<input type="email" name="DOB" placeholder="Working at">
	<input type="email" name="Salary expectation" placeholder="working as">
	<input type="email" name="phone no." placeholder="phone no.">
	<input type="email" name="email id" placeholder="Email">
	<input type="email" name="password" placeholder="password">
	<button>SignUp</button> -->
</form>
</div>
<div class="form-container sign-in-container">
	<form action="" method="POST" class="py-5">	
		<h3>Users</h3>
		<h1>Log In</h1>
	<span>use your account</span>
	<input type="email" name="rEmail" placeholder="Email" required>
	<input type="password" name="rPassword" placeholder="password" required>
	<a href="#">Forgot Your Password</a>
	<button name="rLogin">Log in</button>
	<?php if(isset($msg)) echo $msg; ?>
	<!-- <button>Log In</button> -->
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>CREATE ACCOUNT</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Log In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>



<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>