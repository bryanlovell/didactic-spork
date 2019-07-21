<?php
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
                                        <li>
                                            <a href="contact.php" class="nav-link text-left">Contact</a>
                                        </li>
                                        <li>
                                            Welcome! Guest user
                                        </li>
										<li>
											<a href="signIn.php" class="nav-link text-left">Sign In</a>
										</li>;
                                    </ul>
                                </nav>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

          
			

            <form method="post" action="signup.php">
                <div class="site-section">
                    <div class="container">
						<div style="text-align:center; padding-bottom: 25px; padding-top: 25px;">
							<h1>Sign Up</h1>
						</div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input type="text" name="firstName" class="form-control form-control-lg" value="<?php 
									if(isset($_POST['firstName'])){
										echo htmlspecialchars($_POST['firstName']); //make form sticky 
									} ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastName" class="form-control form-control-lg" value="<?php if (isset($_POST['lastName'])){ 
										echo htmlspecialchars($_POST['lastName']); //make form sticky 
									} ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Username</label>
                                <input type="text" name="id" class="form-control form-control-lg" value="<?php if (isset($_POST['id'])){ 
										echo htmlspecialchars($_POST['id']); //make form sticky 
									} ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Gender</label>
                                <br />
                                <input type="radio" name="gender" value="male" checked>Male
                                <br />
                                <input type="radio" name="gender" value="female">Female
                                <br />
                                <input type="radio" name="gender" value="other">Other
                                <br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control form-control-lg" value="<?php if (isset($_POST['email'])){ 
										echo htmlspecialchars($_POST['email']); //make form sticky 
									} ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Reconfirm Password</label>
                                <input type="password" name="password_confirm" class="form-control form-control-lg">
                            </div>
							<div class="col-md-12 form-group">
                            <?php
							if (isset($_POST['register'])){
								if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['id']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])){
									$fname = $_POST['firstName'];
									$lname = $_POST['lastName'];
									$username = $_POST['id'];
									$gender = $_POST['gender'];
									$password = $_POST['password'];
									$confirmpass = $_POST['password_confirm'];
									$email = $_POST['email'];
									
									$sql_username = mysqli_query($db,"SELECT username FROM engineer_users WHERE username = '$username' limit 1");
									$sql_email = mysqli_query($db,"SELECT email FROM engineer_users WHERE email = '$email' limit 1");

									if (mysqli_num_rows($sql_username) > 0){
										echo '<p style="color:red">This username is already taken.</p>';
									} else if (mysqli_num_rows($sql_email) > 0){
										echo '<p style="color:red">This email has already registered.</p>';
									} else {
										if ($password == $confirmpass) {
											$query = "INSERT INTO engineer_users (first_name,last_name,username,gender,password,email) VALUES ('$fname','$lname','$username','$gender','$password','$email')";
										
											mysqli_query($db,$query);
											
										
											echo '<script language="javascript">alert("Registration success!")</script>';
										} else {
											echo '<p style="color: red">Both passwords are not the same!</p>';
										}
									}
								} else {
									echo '<script language="javascript">alert("Please fill up all areas!")</script>';
								}
							}
							?>
							</div>

                        </div>

                        <div class="row">
                            <div class="col-12">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" name="register" value="Register" class="btn btn-primary rounded-0 px-3 px-5" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <p>
                                    <br />Already have an account? <a href="signIn.php">Sign in here!</a></p>
                            </div>
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
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                            <span class="icon flaticon-library"></span>
                            <h3>Key of Success</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
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
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
            <div id="loader" class="show fullscreen">
                <svg class="circular" width="48px" height="48px">
                    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" />
                </svg>
            </div>

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