<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#282828"/>
<title>Naser Group </title>
<meta name="author" content="Adee Anchan">
<meta name="description" content="Naser Group | Real Estate & Luxury Homes | Australia & Dubai">
<meta name="keywords" content="Naser Group, The Collection, Buy Homes, Australia Homes, Dubai Properties, Buy Apartment, Buy Villa, Meydan Property">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Naser Group | Real Estate & Luxury Homes">
<meta property="og:image" content="https://res.cloudinary.com/dcesrrt95/image/upload/v1694284922/valcom/nasser/naser-group/3-min_fr731n.png">
<meta property="og:site_name" content="Naser Group">
<meta property="og:title" content="Naser Group">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.nasergroup.ae">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@nasergroup">
<meta name="twitter:creator" content="@nasergroup">
<meta name="twitter:title" content="Naser Group">
<meta name="twitter:description" content="Naser Group | Real Estate & Luxury Homes">
<meta name="twitter:image" content="https://res.cloudinary.com/dcesrrt95/image/upload/v1694284922/valcom/nasser/naser-group/3-min_fr731n.png">

<!-- FAVICON FILES -->
<link rel="apple-touch-icon" sizes="180x180" href="/ico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/ico/favicon-16x16.png">
<link rel="manifest" href="/ico/site.webmanifest">

<!-- CSS FILES -->
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/odometer.min.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    if(!empty($_POST["send"])) {
      $userName = $_POST["userName"];
      $userEmail = $_POST["userEmail"];
      $userPhone = $_POST["userSubject"];
      $userMessage = $_POST["userMessage"];
      $toEmail = "sm@valcom.ae";
      
      $mailHeaders = "Name: " . $userName .
      "\r\n Email: ". $userEmail  . 
      "\r\n Phone: ". $userPhone  . 
      "\r\n Message: " . $userMessage . "\r\n";

      if(mail($toEmail, $userName, $mailHeaders)) {
          $message = "Your contact information is received successfully.";
      }
    }
  ?>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure><img src="images/preloader.gif" alt="Image"></figure>
    <p><span class="text-rotater" data-text="Naser Group | Elements | Loading">Loading</span></p>
  </div>
  <!-- end inner --> 
</div>
<!-- end prelaoder -->
<div class="transition-overlay">
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<div class="side-navigation">
  <div class="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about-naser.php">About Us</a>
      </li>
      <li><a href="our-communities.php">Our Communities</a>
      </li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <!-- end menu -->
  <div class="side-content">
    <figure> <img src="https://res.cloudinary.com/dcesrrt95/image/upload/v1691435691/valcom/nasser/logo/naser_logo_white_transparent_ysxpa5.png" alt="Image"> </figure>
    <p>We are construction and development company specializing in the construction and interior fit out of residential, commercial and industrial projects.</p>
    <ul class="gallery">
      <li><a href="https://res.cloudinary.com/dcesrrt95/image/upload/v1694284922/valcom/nasser/naser-group/3-min_fr731n.png" data-fancybox><img src="https://res.cloudinary.com/dcesrrt95/image/upload/v1694284922/valcom/nasser/naser-group/3-min_fr731n.png" alt="Image"></a></li>
      <li><a href="https://res.cloudinary.com/dcesrrt95/image/upload/v1694286327/valcom/nasser/naser-group/26_hyjdxl.png" data-fancybox><img src="https://res.cloudinary.com/dcesrrt95/image/upload/v1694286327/valcom/nasser/naser-group/26_hyjdxl.png" alt="Image"></a></li>
      <li><a href="https://res.cloudinary.com/dcesrrt95/image/upload/v1694284921/valcom/nasser/naser-group/1-min_go1a3x.png" data-fancybox><img src="https://res.cloudinary.com/dcesrrt95/image/upload/v1694284921/valcom/nasser/naser-group/1-min_go1a3x.png" alt="Image"></a></li>
    </ul>
    <address>
    O 14 Tower, Marasi Drive, Business Bay, Dubai, United Arab Emirates
    </address>
    <h6>+971 4 492 7000</h6>
    <!-- <h6>+971 42 810 984</h6> -->
    <p><a href="mailto:info@valcom.ae">info@valcom.ae</a></p>
    <small>© 2023 Nasergroup | by Valcom Properties</small> </div>
  <!-- end side-content --> 
</div>
<!-- end side-navigation -->
<nav class="navbar">
  <div class="container">
    <div class="upper-side">
      <div class="logo"> <a href="index.php"><img src="https://res.cloudinary.com/dcesrrt95/image/upload/v1691435691/valcom/nasser/logo/naser_logo_white_transparent_ysxpa5.png" alt="Image"></a> </div>
      <!-- end logo -->
      <div class="phone-email"> <img src="images/icon-phone.png" class="pr-4" alt="Image">
        <h4>+971 4 492 7000</h4>
        <small><a href="#">info@valcom.ae</a></small> </div>
      <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
      <!-- end hamburger --> 
    </div>
    <!-- end upper-side -->
    <div class="menu"  style="text-transform: uppercase!important;">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about-naser.php">About Us</a>
        </li>
        <li><a href="our-communities.php">Our Communities</a>
        </li>
        
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <!-- end menu --> 
  </div>
  <!-- end container --> 
</nav>
<!-- end navbar -->
<header class="page-header" data-background="https://res.cloudinary.com/dcesrrt95/image/upload/v1694383637/valcom/nasser/naser-group/page_bfqnhz.jpg" data-stellar-background-ratio="1.15">
	<div class="container">
		<h1>Contact</h1>
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="contact">
  <div class="container">
    <div class="row align-items-center">
   	<div class="col-lg-6 wow fadeInUp"> <b>01</b>
        <h4><span>Naser</span> Living Spaces</h4>
        <small>Let us connect</small> </div>
        <!-- end col-6 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
        <address>
        	<strong>Visit Us</strong>
        	<p>O 14 Tower, Marasi Drive, Business Bay, Dubai, United Arab Emirates</p>
        </address>
	   </div>
        <!-- end col-3 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
        <address>
        	<strong>Say Hello</strong>
        	<p><a href="#">info@valcom.ae</a> </p>
          <p><a href="tel:97144927000">+971 4 492 7000</a> </p>
        	
        </address>
	   </div>
        <!-- end col-3 -->
	  </div>
       <!-- end row -->
    <div class="row align-items-center">
        <div class="col-lg-6">
        	 <div class="map">
          <div class="holder" data-stellar-ratio="1.07"> 
    <img src="https://res.cloudinary.com/dcesrrt95/image/upload/v1694288266/valcom/nasser/naser-group/image_prlo9p.png" alt="">
         </div>
          <!-- end holder --> 
        </div>
        <!-- end map -->
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
        	<div class="contact-form">	
			 <form id="contact" name="contact" method="post">
          <div class="form-group">
            <input type="text" name="userName" id="name" autocomplete="off" required>
             <span>Your name</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="userEmail" id="email" autocomplete="off" required>
            <span>Your e-mail</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <input type="text" name="userSubject" id="subject" autocomplete="off" required>
            <span>Subject</span>
          </div>
          <!-- end form-group -->
          <div class="form-group"> 
            <textarea name="userMessage" id="message" autocomplete="off" required></textarea>
            <span>Your message</span>
          </div>
          
          <!-- end form-group -->
          <div class="form-group">
            <button id="submit" type="submit" value="submit" name="send">
				Submit
         </button>
          </div>
          <!-- end form-group -->
        </form>
        <?php if (!empty($successMessage)) { ?>
                <div class="success">
                    <strong><?php echo $successMessage; ?></strong>
                </div>
            <?php } ?>

            <?php if (!empty($errorMessage)) { ?>
                <div class="error">
                    <strong><?php echo $errorMessage; ?></strong>
                </div>
            <?php } ?>
        <!-- end form --> 
         <div class="form-group">
          <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error --> 
        </div>
        <!-- end form-group -->
        </div>
        <!-- end contact-form -->
        </div>
        <!-- end col-6 -->
   </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end contact -->
<section class="footer-bar">
  <div class="container">
    <div class="inner wow fadeIn">
      <div class="row">
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
          <figure><img src="images/footer-icon01.png" alt="Image"></figure>
          <h3>Address</h3>
          <p>WHP2-Block-A Commercial
            Saih Shuaib 3, 13-0
            Dubai, United Arab Emirates</p>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
          <figure><img src="images/footer-icon02.png" alt="Image"></figure>
          <h3>Working Hours</h3>
          <p>Monday to Friday <strong>09:00</strong> to <strong>18:30</strong> <br>
            Saturday to Sunday <strong>10:00</strong> to <strong>17:30</strong></p>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
          <figure><img src="images/footer-icon03.png" alt="Image"></figure>
          <h3>Sales Office</h3>
          <p>Valcom Properties, O 14 Tower, Marasi Drive, Business Bay, Dubai, United Arab Emirates</p>
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end inner --> 
  </div>
  <!-- end container --> 
</section>
<!-- end footer-bar -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s"> <img src="https://res.cloudinary.com/dcesrrt95/image/upload/v1691435691/valcom/nasser/logo/naser_logo_white_transparent_ysxpa5.png" alt="Image" class="logo">
        <p>We are construction and development company specializing in the construction and interior fit out of residential, commercial and industrial projects.</p>
      </div>
      <!-- end col-4 -->
      <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
        <ul class="footer-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="about-naser.php">About us</a></li>
          <li><a href="our-communities.php">Our Communities</a></li>
          <li><a href="about-naser.php#milestones">Milestone</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
        <div class="contact-box">
          <h5>CALL CENTER</h5>
          <h3>+971 4 492 7000</h3>
          <p><a href="#">info@valcom.ae</a></p>
        </div>
        <!-- end contact-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-12"> <span class="copyright">© 2023 Nasergroup | Valcom Properties</span> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</footer>
<!-- end footer --> 

<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/swiper.min.js"></script> 
<script src="js/fancybox.min.js"></script> 
<script src="js/odometer.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/text-rotater.js"></script> 
<script src="js/jquery.stellar.js"></script> 
<script src="js/isotope.min.js"></script> 
<script src="js/scripts.js"></script>
<script>
  $(document).ready(function () {
    // Initialize Fancybox with custom options
    $('[data-fancybox="images"]').fancybox({
        touch: false, // Disable vertical movement on touch devices
        wheel: false, // Disable scrolling with the mouse wheel
    });
});
</script>
</body>
</html>