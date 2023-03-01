<?php
include('..//dbconnection.php');
session_start();

 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}else{
  echo "<script> location.href='../index.php'; </script>";
}

include('custName.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Home </title> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="home.css">
</head>

<p><a href="#" class="simple-back-to-top"></a></p>
<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
var amountScrolled = 300;
$(window).scroll(function() {
if ( $(window).scrollTop() > amountScrolled ) {
$('a.back-to-top').fadeIn('slow');
} else {
$('a.back-to-top').fadeOut('slow');
}
});
$('a.back-to-top, a.simple-back-to-top').click(function() {
$('html, body').animate({
scrollTop: 0
}, 700);
return false;
});
</script>

<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
e.stopPropagation();
});
</script>
<body>
<marquee>Our mission is what drives us to do everything possible to expand human potential. We do that   by creating groundbreaking innovations, by making  our products more sustainably, by building a creative and  diverse global team and by making positive impact in communities we live and work.</marquee>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a href="" class="navbar-brand">Auction<b>Quick</b></a>  	
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item ">
<a class="nav-link" href="home.php"><b><i class="fa fa-home" aria-hidden="true"></i>Home</b> <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="About.php"><b><i class="fa fa-address-card" aria-hidden="true"></i>About</b></a>
</li>

<div class="nav-item dropdown">
<a href="" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"><i class="fa fa-rocket" aria-hidden="true"></i>Services</a>
<div class="dropdown-menu">					
<a href="" class="dropdown-item"></a>
<a href="constructionlabour.php" class="dropdown-item">construction labours</a>
<a href="plumbers.php" class="dropdown-item">plumbers</a>
<a href="cleaners.php" class="dropdown-item">cleaners</a>
</div>
</div>

<li class="nav-item">
<a class="nav-link" href="contact us.php"><b><i class="fa fa-envelope" aria-hidden="true"></i>Contact</b></a>
</li>
<li class="nav-item">
<a class="nav-link" href="Workers_Employee.php"><b><i class="fa fa-user" aria-hidden="true"></i>Workers/Employee</b></a>
</li> 
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item ">
          <a class="nav-link " href="bidUserCust.php"><i class="fa fa-user " aria-hidden="true"></i> <b><?php echo $rName ?></b></a>
</li>
<li class="nav-item active" >
<!-- <a href="" class="nav-item nav-link"><i class="fa fa-sign-in"></i>logout</a> -->
<a class="nav-link" href="../logout.php"><i class="fa fa-power-off " style="font-size: 17px;"></i> Logout</a>
        
</li> 
</ul>

</div>
</nav>



<!-- start users employees details  -->
<div class="container-fluid my-5">
  <h1 class="text-center" style="color:#A6C606"><b>My Workers and Employee's (details):</b></h1>
    <hr style="background-color: black;" class=" w-75 mx-auto ">
    <div  class="row mt-3">
                      
        <?php
          $sql = "select * from ".$rName;
          $result = mysqli_query($conn,$sql);
          if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          $id = $row["id"] ;
                          $name = $row["b_name"] ;
                          $jobE = $row["b_jobE"] ;
                          $jobO = $row["b_jobO"];
                          $address = $row["b_address"] ;
                          $salary =  $row["b_salaryE"] ;
                          $phone =  $row["b_phone"] ;
                          $email= $row["b_email"] ;
                      echo'<div class="col-lg-4 col-md-4 col-12 my-2"> ';
                        echo'<div class="card shadow p-4">';
                          echo'<div class="card-body">';
                            echo'<div class="card-text">Name : <b style=" color:red;font-size:25px">'.$name.'</b></div>';
                            echo'<div class="card-text">Job Experience : <b>'.$jobE.'</b></div>';
                            echo'<div class="card-text">Job Opted for : <b>'.$jobO.'</b></div>';
                            echo'<div class="card-text">Address : <b>'.$address.'</b></div>';
                            echo'<div class="card-text">Salary Expectation ( per year) : <b>'.$salary.'</b></div>';
                            echo'<div class="card-text">Phone number : <b>'.$phone.'</b></div>';
                            echo'<div class="card-text">Email : <b>'.$email.'</b></div>';
                            
                            
                            // echo'<form action="" method="post">';
                            // echo'<input type="hidden" name="tableName" value=' . $rName. '>';
                            // echo'<input type="hidden" name="bName" value=' . $name. '>';
                            // echo'<input type="hidden" name="bJobE" value=' . $jobE. '>';
                            // echo'<input type="hidden" name="bJobO" value=' . $jobO. '>';
                            // echo'<input type="hidden" name="bAddress" value=' . $address. '>';
                            // echo'<input type="hidden" name="bSalary" value=' . $salary. '>';
                            // echo'<input type="hidden" name="bPhone" value=' . $phone. '>';
                            // echo'<input type="hidden" name="bEmail" value=' . $email. '>';
                            // echo'<button type="submit" class="btn btn-outline-primary mt-3 font-weight-bold" name="rBid"></button>';
                            
                          echo'</div>';
                        echo'</div>';
                      echo'</div>';
                    
                }
          }else{
              echo" Empty";
          }
        ?>
    </div>
</div>

<!-- end users employees details  -->




<footer class="footer_area section_padding_130_0 mt-3">
<div class="container">
<div class="row">
<div class="col-12 col-sm-6 col-lg-4">
<div class="single-footer-widget section_padding_0_130">
<div class="footer-logo mb-3"></div>
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
<li role="presentation"><a href="constructionlabour.html" tabindex="-1" role="menuitem">construction labours</a></li>
<li role="presentation"><a href="plumbers.html" tabindex="-1" role="menuitem">Plumbers</a></li>
<li role="presentation"><a href="cleaners.html" tabindex="-1" role="menuitem">Cleaners</a></li>
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
			
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</html>
