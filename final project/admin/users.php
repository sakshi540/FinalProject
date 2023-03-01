<?php
include('../dbconnection.php');
//include('loginConnection.php');

session_start();

 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}else{
  echo "<script> location.href='adminLogin.php'; </script>";
}
if(isset($_REQUEST['rDelete'])){
  $sql = " DELETE FROM users WHERE id = {$_REQUEST['id']}";
  if(mysqli_query($conn,$sql)){
      echo'<script> alert("delete row")</script>';
  }
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;423&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <!--gallery links-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

     <!--icons link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--style css-->
<link rel="stylesheet" type="text/css" href="../style.css">
  <title>Admin</title>
 

</head>
<body >
<marquee>Our mission is what drives us to do everything possible to expand human potential. We do that   by creating groundbreaking innovations, by making  our products more sustainably, by building a creative and  diverse global team and by making positive impact in communities we live and work.</marquee>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="" class="navbar-brand">Auction<b>Quick</b></a>  	
<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="users.php"><b><i class="fa fa-user" aria-hidden="true"></i> User's</b></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="customers.php"><b><i class="fa fa-user" aria-hidden="true"></i> Customer's</b></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="messages.php"><b><i class="fa fa-file" aria-hidden="true"></i> Message's</b></a>
    </li>
</ul>
    <ul class="navbar-nav ml-auto">
        
         <li class="nav-item active">
          <a class="nav-link" href="../logout.php"><i class="fa fa-power-off " style="font-size: 17px;"></i> Logout</a>
        </li>
      </ul>



  </nav>


  <div class="text-danger mt-5" style="text-align : center">
    <h1>user details</h1>
  </div>



<div class="">
        <?php
          $sql = "select * from users";
          $result = mysqli_query($conn,$sql);
          if(mysqli_num_rows($result) > 0){
              echo '<table class="table ">';
                  echo"<thead>";
                      echo"<tr>";
                          echo"<th>ID</th>";
                          echo"<th>NAME</th>";
                          echo"<th>Job Experience</th>";
                          echo"<th>Job Opted</th>";
                          echo"<th>Address</th>";
                          echo"<th>Gender </th>";
                          echo"<th>Date of Birth</th>";
                          echo"<th>Salary</th>";
                          echo"<th>Phone</th>";
                          echo"<th>email</th>";
                          echo"<th>pass</th>";
                          echo"<th>Action: DELETE</th>";
                          echo"<th>Action: EDIT</th>";
                      echo"</tr>";
                  echo"</thead>";
              echo"<tbody>";
                  while($row = mysqli_fetch_assoc($result)){
                      echo"<tr>";
                          echo"<td>" . $row["id"] . "</td>";
                          echo"<td>" . $row["db_name"] . "</td>";
                          echo"<td>" . $row["db_jobExperience"] . "</td>";
                          echo"<td>" . $row["db_jobOpted"] . "</td>";
                          echo"<td>" . $row["db_address"] . "</td>";
                          echo"<td>" . $row["db_gender"] . "</td>";
                          echo"<td>" . $row["db_dob"] . "</td>";
                          echo"<td>" . $row["db_salary"] . "</td>";
                          echo"<td>" . $row["db_phone"] . "</td>";
                          echo"<td>" . $row["db_email"] . "</td>";
                          echo"<td>" . $row["db_pass"] . "</td>";
                          echo'<td><form action="" method="post">
                        <input type="hidden" name="id" value=' . $row['id'] . '>
                        <input type="submit" class="btn ntn-sm btn-outline-danger" 
                        name="rDelete" value="Delete"></form></td>';
                          echo'<td><form action="updateUsers.php" method="post">
                        <input type="hidden" name="id" value=' . $row['id'] . '>
                        <input type="submit" class="btn ntn-sm btn-outline-secondary" 
                        name="rEdit" value="Edit" ></form></td>';
                      echo"</tr>";
                }
              echo"</tbody>";
              echo"</table>";

          }else{
              echo" Empty";
          }
        ?>
        <hr>
</div>

<!-- start footer -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<footer class="footer_area section_padding_130_0">
<div class="container">
<div class="row">
<div class="col-12 col-sm-6 col-lg-4">
<div class="single-footer-widget section_padding_0_130">
<h5 class="widget-title">Mission</h5>

<p>Our mission is what drives us to do everything possible to expand human potential. We do that   by creating groundbreaking innovations, by making  our products more sustainably, by building a creative and  diverse global team and by making positive impact in communities we live and work.</p>
</div>
</div>

<!-- Single Widget-->
<div class="col-12 col-sm-6 col-lg">
<div class="single-footer-widget section_padding_0_130">
<!-- Widget Title-->
<h5 class="widget-title">Links</h5>
<!-- Footer Menu-->
<div class="footer_menu">
<ul>
	
<li><a href="#">About Us</a></li>
<li class="dropdown">
<a href="#" data-toggle="dropdown" role="button" id="drop5" class="dropdown-toggle">Services<b class="caret"></b></a>
<ul aria-labelledby="drop5" role="menu" class="dropdown-menu" id="menu2">
<li role="presentation"><a href="" tabindex="-1" role="menuitem">construction labours</a></li>
<li role="presentation"><a href="" tabindex="-1" role="menuitem">Plumbers</a></li>
<li role="presentation"><a href="" tabindex="-1" role="menuitem">Cleaners</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

<!-- Single Widget-->
<div class="col-12 col-sm-6 col-lg">
<div class="single-footer-widget section_padding_0_130">
<!-- Widget Title-->
<h5 class="widget-title">Contact</h5>
<!-- Footer Menu-->
<div class="footer_menu">
<ul>
<li><a href="tel:+91 7821040312">+91 7821040312</a></li>
<li><a href="tel:+91 9699229733">+91 9699229733</a></li>
<li><a href="sakshishendurkar@gmail.com">auctionquick@gmail.com</a></li>
<!-- <h5><a href="admin/adminLogin.php" style="text-decoration: none; color:black;" ><b>AdminLogin</b></a></h5> -->
</ul>
</div>
</div>
</div>

<!-- Single Widget-->
<div class="col-12 col-sm-6 col-lg">
<div class="single-footer-widget section_padding_0_130">
<!-- Widget Title-->
<h5 class="widget-title">Scope</h5>
<p>Build a user friendly auctioning website, where user will be able to auctioned labours . By using Online Auction for labours  management system it will be easy for auction to make an auction and time saving also</p>
</div>
</div>
</div>
 </div>
</footer>
<!--End Footer-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

 <!--icons script-->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>