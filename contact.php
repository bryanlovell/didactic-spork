<?php
	session_start();
	
	require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Engineers &mdash; Bayan Baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="index.html">
              <img src="images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">

            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-placeholder text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">Bayan Baru</span>
                <span class="caption-text">Jalan Sultan Shah, 11900</span>
              </div>
            </div>

          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-call text-primary"></span>
              </div>
              <div class="text">
               <span class="h4 d-block">04-65604234</span>
                <span class="caption-text">Toll free</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-email text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block"><a href="mailto:BYengineers@gmail.com">BYengineers@gmail.com</a></span>
                <span class="caption-text">Click the email to email us!</span>
              </div>
            </div>
          </div>

          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li>
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="about.php" class="nav-link text-left">About Us</a>
                </li>
                <li>
                  <a href="works.php" class="nav-link text-left">Our Projects</a>
                </li>
                <li>
                    <a href="testimonials.php" class="nav-link text-left">Testimonials</a>
                </li>
                <li><a href="blog.php" class="nav-link text-left">Blog</a></li>
                <li class="active">
                    <a href="contact.php" class="nav-link text-left">Contact</a>
                </li>
				<li>
					Welcome! <?php
						if (empty($_SESSION['login'])) {
							echo 'Guest user';
							echo '<li>
								<a href="signIn.php" class="nav-link text-left">Sign In</a>
								 </li>';
						} else {
							echo $_SESSION['id'];
							echo '<li><a href="logout.php">Logout</a></li>';
						}
					?>
				</li>
              </ul>                                                                                                                                                                                                                                                                                          
            </nav>

          </div>
          
         
        </div>
      </div>

    </div>
    
    </div>
    



    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Work With Us!</h1>
            <p class="text-white text-center">
              <a href="index.php">Home</a>
              <span class="mx-2">/</span>
              <span>Contact Us</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <form method="post" enctype="multipart/form-data">
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control form-control-lg" value="<?php 
					if (isset($_POST['fname'])){ 
						echo htmlspecialchars($_POST['fname']); //make form sticky 
					} ?>">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control form-control-lg" value="<?php 
					if (isset($_POST['lname'])){ 
						echo htmlspecialchars($_POST['lname']); //make form sticky 
					} ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email Address</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="<?php 
					if (isset($_POST['email'])){ 
						echo htmlspecialchars($_POST['email']); //make form sticky 
					} ?>">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Tel. Number</label>
                    <input type="text" name="tel" class="form-control form-control-lg" value="<?php 
					if (isset($_POST['tel'])){ 
						echo htmlspecialchars($_POST['tel']); //make form sticky 
					} ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="jobs">Job Desired</label><br />
                    <select name="jobs" class="form-control form-control-lg">
						<option value="">- Select One -</option>
						<option value="engineer">Engineer</option>
						<option value="hr">Human Resource</option>
						<option value="sales">Sales &amp; Marketing</option>
						<option value="security">Security</option>
						<option value="driver">Driver</option>
						<option value="it">IT Department</option>
						<option value="hire">Hire <b>us</b> for jobs</option>
					</select>
                </div>
            </div>
			
            <div class="row">
                <div class="col-12">
                    <input type="submit" name="apply" value="Apply" class="btn btn-primary rounded-0 px-3 px-5">
                </div>
            </div>
			
			<div class="col-md-12 form-group">
                <?php
					if (isset($_POST['apply'])){
						if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['jobs'])){
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];
							$tel = $_POST['tel'];
							$jobs = $_POST['jobs'];
						
							
							$query = "INSERT INTO jobs (first_name,last_name,email,job,tel) VALUES ('$fname','$lname','$email','$jobs','$tel')";
							
							$result = mysqli_query($db,$query);
							
							echo '<script language="javascript">alert("We will contact you shortly! Thank you!")</script>';
							
						} else {
							if (empty($_POST['fname'])){
								echo '<p style="color: red">Please fill up first name!</p>';
							} else if (empty($_POST['lname'])){
								echo '<p style="color: red">Please fill up last name!</p>';
							} else if (empty($_POST['email'])){
								echo '<p style="color: red">Please fill up email!</p>';
							} else if (empty($_POST['tel'])){
								echo '<p style="color: red">Please fill up telephone number!</p>';
							} else if (empty($_POST['jobs'])){
								echo '<p style="color: red">Please select desired job!</p>';
							} 
						}
					}
				?>
			</div>
        </div>
    </div>
	</form>

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>
    
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo2.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Company</span></h3>
            <ul class="list-unstyled">
                <li><a href="index.php">About</a></li>
                <li><a href="blog.php">News</a></li>
                <li><a href="about.php">Our Team</a></li>
                <li><a href="contact.php">Careers</a></li>
                <li><a href="works.php">Projects</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="https://www.facebook.com/INTI.edu/">Facebook</a></li>
                  <li><a href="mailto:BYengineers@gmail.com">Email Us</a></li>
              </ul>
          </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>