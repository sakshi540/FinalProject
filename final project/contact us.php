
<?php

include('loginCheck.php');
include('custName.php');
if(isset($_REQUEST['rSendMsg'])){
    $cName = $_REQUEST['cName'];    
    $cEmail = $_REQUEST['cEmail'];    
    $cSubject = $_REQUEST['cSubject'];    
   @ $cMessage = $_REQUEST['cMessage'];    

    $sql = "INSERT INTO `contact`(`c_name`, `c_email`, `c_subject`, `c_message`) VALUES ('$cName','$cEmail','$cSubject','$cMessage')";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        
    }
    else{
        $msg =' <div class="alert alert-success">
        <strong>Successfully!</strong> Your Message is sent to admin.
      </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Contact Us</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="contact.css">

<link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>

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
<a class="nav-link" href=""><b><i class="fa fa-envelope" aria-hidden="true"></i>Contact</b></a>
</li>
</ul>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item ">
          <a class="nav-link " href=""><i class="fa fa-user " aria-hidden="true"></i> <b><?php echo $rName ?></b></a>
</li>
<li class="nav-item active" >
<!-- <a href="" class="nav-item nav-link"><i class="fa fa-sign-in"></i>logout</a> -->
<a class="nav-link" href="logout.php"><i class="fa fa-power-off " style="font-size: 17px;"></i> Logout</a>
        
</li>
</ul>

</div>
</nav>
</body>
<br>
<br>
<br>

<!-- contact1 -->
<section class="container w3l-contact-1 shadow-lg p-4 mb-5">
    <div class="contacts-9 section-gap">
      <div class="wrapper">
        <!-- <h4 class="sub-title text-center">Find us</h4> -->
        <h3 class="global-title text-center">Contact us</h3>
        <div class="d-grid contact-view">
          <div class="cont-details">
            <div class="cont-top">
              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:+44 99 555 42">+123 45 67 89</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Address</h6>
                <p>Address here, 208 Trainer Avenue street, Illinois, UK - 62617.</p>
              </div>
            </div>
          </div>
          <div class="map-content-9">
            <form action="" method="post">
              <div class="twice-two">
                <input type="text" class="form-control" name="cName" value="<?php echo $rName?>" readonly>
                <input type="email" class="form-control" name="cEmail" value="<?php echo $rEmail?>"
                  readonly>
              </div>
              <div class="twice">
                <input type="text" class="form-control" name="cSubject"  placeholder="Subject"
                  required>
              </div>
              <textarea class="form-control" name="cMessage"  placeholder="Message"
                required></textarea>
              <button type="submit" class="btn btn-contact mb-3" name="rSendMsg">Send Message</button>
              <?php if(isset($msg)) echo $msg  ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact1 -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<footer class="footer_area section_padding_130_0">
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
