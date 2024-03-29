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
                <li class="active">
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
              </ul>                                                                                                                                                                                                                                                                                          </ul>
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
            <h1>About Us</h1>
            <p class="text-white text-center">
              <a href="index.php">Home</a>
              <span class="mx-2">/</span>
              <span>About</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
              <h3 class="section-subtitle">Our Team</h3>
              <h2 class="section-title text-black mb-4">We have a <strong>Good and Expert Team</strong></h2>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Craig Daniel</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Peter Silk</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Evan Brook</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Kyle Lucas</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>

    <div class="site-section services-1-wrap">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-5">
              <h3 class="section-subtitle">What We Do</h3>
              <h2 class="section-title mb-4 text-black">We Are <strong>Leading Industry</strong> of Engineering. We Love What We Do</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">01</span>
              <div class="service-1-icon">
                <span class="flaticon-engineer"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Professional Team</h3>
                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">02</span>
              <div class="service-1-icon">
                <span class="flaticon-compass"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Great Ideas</h3>
                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">03</span>
              <div class="service-1-icon">
                <span class="flaticon-oil-platform"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Quality Building</h3>
                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">04</span>
              <div class="service-1-icon">
                <span class="flaticon-crane"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Quality Works</h3>
                <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END services -->

    <div class="site-section pb-0">
      <div class="block-2 pb-0 mb-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="images/about_1.jpg" alt="Image " class="img-fluid img-overlap">
            </div>
            <div class="col-lg-5 ml-auto">
              <h3 class="section-subtitle">Why Choose Us</h3>
              <h2 class="section-title mb-4">More than <strong>50 year experience</strong> in industry</h2>
              <p>Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum minima nostrum perspiciatis error consequatur sit nulla.</p>

              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Expert in Builings</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Modern Design</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center">
                  <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Leading In Floor Planning</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>



              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END block-2 -->


    
    
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