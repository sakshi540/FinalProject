<?php
include('../dbconnection.php');
//include('loginConnection.php');

session_start();

 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}else{
  echo "<script> location.href='adminLogin.php'; </script>";
}

// update data from users tables
if(isset($_REQUEST['rUpdate'])){
    $jobE = $_REQUEST['rJobE'];
    $jobO = $_REQUEST['rJobO'];
    $address = $_REQUEST['rAddress'];
    $salary = $_REQUEST['rSalary'];
    $phone = $_REQUEST['rPhone'];
    $pass = $_REQUEST['rPass'];

    $sql =  " UPDATE users SET db_jobExperience='$jobE',db_jobOpted='$jobO',db_address='$address',db_salary='$salary',
    db_phone='$phone',db_pass='$pass'
    WHERE id = {$_REQUEST['id']}";
    if(mysqli_query($conn,$sql)){
        $msgU =' <div class="alert alert-success"roll="alert">Updated successfully</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;423&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <!--gallery links-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

     <!--icons link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>User Update</title>
</head>
<body>
    <div class="container text-center">
        <h1>Quick <b class=" text-primary">Action</b></h1>
    </div>
<!--start user profile-->
<div class="container my-3 shadow-lg p-4">
        <?php
        if(isset($_REQUEST['rEdit'])){
        $sql = " SELECT * FROM users WHERE id = {$_REQUEST['id']}";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        }
        ?>
        
      <h4 class="mb-3 text-center">Update data </h4><hr>
   <form action="" method="POST" class="shadow-lg p-4">
    <div class="row">
      <div class="col-lg-6 col-md-4 col-12">
        
                
                <div class="form-group">
                    <label for="jobExperience">job Experience:</label>
                    <input type="text" class="form-control "name="rJobE" id="rJobE" value="<?php
                     if(isset($row['db_jobExperience'])){ echo $row['db_jobExperience'];}?>">
                </div>
                <div class="form-group">
                    <label for="jobOpted">job Opted:</label>
                    <input type="text" class="form-control "name="rJobO" id="rJobO" value="<?php
                     if(isset($row['db_jobOpted'])){ echo $row['db_jobOpted'];}?>">
                </div>
                <div class="form-group">
                    <label for="name">Address:</label>
                    <input type="text" class="form-control "name="rAddress" id="rAddress" value="<?php
                     if(isset($row['db_address'])){ echo $row['db_address'];}?>">
                </div>
                <div class="form-group">
                    <label for="salary">Salary Expectation:</label>
                    <input type="text" class="form-control "name="rSalary" id="rSalary" value="<?php
                     if(isset($row['db_salary'])){ echo $row['db_salary'];}?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number:</label>
                    <input type="text" class="form-control "name="rPhone" id="rPhone" value="<?php
                     if(isset($row['db_phone'])){ echo $row['db_phone'];}?>">
                </div>
                
        
      </div>
      <div class="col-lg-6 col-md-4 col-12">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control "name="rName" id="rName" value="<?php
                     if(isset($row['db_name'])){ echo $row['db_name'];}?>" readonly>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" class="form-control "name="rGender" id="rGender" value="<?php
                     if(isset($row['db_gender'])){ echo $row['db_gender'];}?>" readonly>
                </div>
                <div class="form-group">
                    <label for="dob">Date of birth:</label>
                    <input type="text" class="form-control "name="rDOB" id="rDOB" value="<?php
                     if(isset($row['db_dob'])){ echo $row['db_dob'];}?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control "name="rEmail" id="rEmail" value="<?php
                     if(isset($row['db_email'])){ echo $row['db_email'];}?>" readonly>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control "name="rPass" id="rPass" value="<?php
                     if(isset($row['db_pass'])){ echo $row['db_pass'];}?>">
                </div>
                <input type="hidden" name="id" value=" <?php echo $row['id'];?>">
                <button type="submit" class="btn btn-outline-success mb-3 font-weight-bold" name="rUpdate">Update</button>
            <?php if(isset($msgU)){ echo $msgU;}?>
                <span class="text-right" >
                   <a href="users.php" style="text-decoration: none"> Go Back</a> 
                </span>
      </div>

    </div>

  </form>
</div>
<!--end user profile-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

 <!--icons script-->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>