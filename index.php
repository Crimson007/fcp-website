<?php
// initiate the session
session_start();

$authenticated = false;
if (isset($_SESSION["email"])) {
  $authenticated = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Faith Community Pathways</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/logo-white.jpg">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <!-- Header Section -->
  <div class="container-fluid bg-white sticky-top shadow-sm">
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img style="width: 50px; height: 50px" src="/images/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-4 mb-lg-0">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-item nav-link">Contact</a></li>
            <li class="nav-item"><a href="single.html" class="nav-item nav-link">Blog</a></li>
          </ul>
         <div class="col-md-6 text-md-right">
            <a href="https://www.facebook.com/people/Faith-community-pathway/61558574967566/?mibextid=LQQJ4d" class="btn btn-primary btn-sm rounded-circle">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-secondary btn-sm rounded-circle">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="btn btn-success btn-sm rounded-circle">
                <i class="bi bi-whatsapp"></i>
            </a>
            <a href="#" class="btn btn-danger btn-sm rounded-circle">
                <i class="bi bi-instagram"></i>
            </a>
          </div>


          <?php if ($authenticated): ?>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          <?php else: ?>
            <ul class="navbar-nav">
              <li class="nav-item"><a href="register.php" class="btn btn-outline-success me-2">Register</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item"><a href="login.php" class="btn btn-success">Login</a></li>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </nav>
  </div>

<!-- Carousel -->

<div class="owl-carousel-wrapper">

      

      <div class="box-92819">
        <h1 class="text-white mb-3">Join us in the Movement To Empower the Youth</h1>
        <p>
          <a href="./register.php" class="btn btn-success py-2 px-4 rounded-10">Join us Today</a>
          <a href="#form" class="btn btn-outline-secondary btn-outline-success px-3">Donate Now</a>
        </p>
      </div>

      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg');"></div>
        
      </div>
    </div>



<!--1st collection-->
<div class="container">
      <div class="feature-29192-wrap d-md-flex" style="margin-top: -20px; position: relative; z-index: 2;">

        <a href="#" class="feature-29192 overlay-danger" style="background-image: url('images/drugs.jpg');">
          <div class="text">
            <span class="meta">Awareness</span>
            <h3 class="text-cursive text-white h1">Fighting drug abuse</h3>
          </div>
        </a>

        <a class="feature-29192 overlay-success" style="background-image: url('images/img_2_gray.jpg');">
          <div class="text">
            <span class="meta">Family</span>
            <h3 class="text-cursive text-white h1">unity</h3>
          </div>
        </a>

        <a class="feature-29192 overlay-danger" style="background-image: url('images/living.jpg');">
          <div class="text">
            <span class="meta">Poverty</span>
            <h3 class="text-cursive text-white h1">Changing living standards</h3>
          </div>
        </a>

        <div class="feature-29192 overlay-success" style="background-image: url('images/pregnancy.jpg');">
          <div class="text">
            <span class="meta">School</span>
            <h3 class="text-cursive text-white h1">Teenage Pregnany</h3>
          </div>
        </div>

      </div>
    </div>


<!--Hero section-->

<div class="container col-xxl-8 px-4 py-5">
 <div class="row flex-lg-row-forward align-items-center g-5 py-5">
  <div class="col-lg-6">
    <img class="d-block mx-auto mb-4" src="images/logo.png" alt="logo" width="500" height="500">
  </div>
  <div class="col-lg-5 mx-auto">
    <h1 class="display-5 fw-bold text-body-emphasis">Faith Community Pathways</h1>
    <p class="lead mb-4">We strongly believe that establishing an Empowerment Center dedicated to addressing Modern life challenges, physical health, mental well-bieng, poverty, drugs and substance abuse, underperformance, poor quality life, will provide appropriate life skills and mentorship programs among the youth which will significantly impact and foster a healthier and more productivelife.
       We believe that the success of this program hinges on the support and partnership of individuals and organizations who share our vision for a healthier, empowered youth population.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="/register"><button type="button" class="btn btn-success btn-lg px-4 gap-3">Register Now </button></a>

    </div>
  </div>
</div>

</div>


<!--Cards-->
    <div class="site-section">
      <div class="container">
        <!--Vision and Mission-->
        <div class="row mb-5 align-items-st">
          <div class="col-md-4">
            <div class="heading-20219">
              <h2 class="title text-cursive">Vision</h2>
            </div>
          </div>
          <div class="col-md-8">
            <p>Empowering a thriving community of resilient youth and families, equipped with skills and the tools to navigate life's challenges and unlock their full potential.</p>
          </div>
        </div>
        <div class="row mb-5 align-items-st">
          <div class="col-md-4">
            <div class="heading-20219">
              <h2 class="title text-cursive">Mission</h2>
            </div>
          </div>
          <div class="col-md-8">
            <p>We provide a safe and supportive space for youth and the community to nurture a future where the next generation not only survives but thrives by inspiring hope, fostering resilience, and empowering the youth and community through education, mentorship, and holistic support.
               With a steadfast commitment to mental health and build emotional intelligence.
               We aim to create a community where every individual has the tools, life skills and opportunities to flourish, fostering a culture of all rounded individuals in the community for today and tomorrow.</p>
          </div>
        </div>

  <!--Contributions Card-->
        <div class="row">
          <!--Skills-->
          <div class="col-md-3">
            <div class="cause shadow-sm">
            
              <a href="#" class="cause-link d-block">
                <img src="images/skills.png" alt="Image" class="img-fluid">
                <div class="custom-progress-wrap">
                  <span class="caption">80% complete</span>
                  <div class="custom-progress-inner">
                    <div class="custom-progress bg-danger" style="width: 80%;"></div>
                  </div>
                </div>
              </a>

              <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block">Skills Program</span>
                <h3 class="mb-4"><a href="#">Funds collected to impart skills to youth so that they can earn a living and grow independantly.</a></h3>
                <div class="border-top border-light border-bottom py-2 d-flex">
                  <div>Donated</div>
                  <div class="ml-auto"><strong class="text-success">Ksh 32,000</strong></div>
                </div>
                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <a href="#form" class="btn btn-outline-secondary btn-outline-success px-3">Contribute</a>
                    </div>
                  </div>
                


              </div>
            
            </div>
        </div>

          <!--Health-->
          <div class="col-md-3">
            
            <div class="cause shadow-sm">
              
                <a href="#" class="cause-link d-block">
                  <img src="images/living.jpg" alt="Image" class="img-fluid">
                  <div class="custom-progress-wrap">
                    <span class="caption">50% complete</span>
                    <div class="custom-progress-inner">
                      <div class="custom-progress bg-primary" style="width: 50%;"></div>
                    </div>
                  </div>
                </a>

                <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                  <span class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">Health Fund</span>
                  <h3 class="mb-4"><a href="#">Contributions towards helping youth combat drug abuse through rehabilitation, awareness and counseling.</a></h3>
                  <div class="border-top border-light border-bottom py-2 d-flex">
                    <div>Donated</div>
                    <div class="ml-auto"><strong class="text-success">Ksh 12,919</strong></div>
                  </div>
                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <a href="#form" class="btn btn-outline-secondary btn-outline-success px-3">Contribute</a>
                    </div>
                  </div>
                  
                </div>
              
              </div>

          </div>

          <!--Livelihood-->
          <div class="col-md-3">
            
            <div class="cause shadow-sm">
              
                <a href="#" class="cause-link d-block">
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                  <div class="custom-progress-wrap">
                    <span class="caption">60% complete</span>
                    <div class="custom-progress-inner">
                      <div class="custom-progress bg-warning" style="width: 60%;"></div>
                    </div>
                  </div>
                </a>

                <div class="px-3 pt-3 border-top-0 border border ">
                  <span class="badge-warning py-1 small px-2 rounded mb-3 d-inline-block">Changing Livelihood</span>
                  <h3 class="mb-4"><a href="#">This money is centered on buying resources such as food and clothing for ophans and people in dire states.</a></h3>
                  <div class="border-top border-light border-bottom py-2 d-flex">
                    <div>Donated</div>
                    <div class="ml-auto"><strong class="text-success">Ksh 20,900</strong></div>
                  </div>
                  <div class="py-4">
                    <div class="d-flex align-items-center">
                      <a href="#form" class="btn btn-outline-secondary btn-outline-success px-3">Contribute</a>
                    </div>
                  </div>
                  
                </div>
              
              </div>

          </div>
          <!--Education-->
          <div class="col-md-3">
            <div class="cause shadow-sm">
            
              <a href="#" class="cause-link d-block">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="custom-progress-wrap">
                  <span class="caption">80% complete</span>
                  <div class="custom-progress-inner">
                    <div class="custom-progress bg-danger" style="width: 80%;"></div>
                  </div>
                </div>
              </a>

              <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block">Education Program</span>
                <h3 class="mb-4"><a href="#">Funds collected to assist students unable to pay fees and in amenities such as sanitary towels.</a></h3>
                <div class="border-top border-light border-bottom py-2 d-flex">
                  <div>Donated</div>
                  <div class="ml-auto"><strong class="text-success">Ksh 32,919</strong></div>
                </div>
                <div class="py-4">
                  <div class="d-flex align-items-center">
                    <a href="#form" class="btn btn-outline-secondary btn-outline-success px-3">Contribute</a>
                  </div>
                </div>

              </div>
            
            </div>
        </div>
        </div>
      </div>
    </div>

<!--Choose Us secion-->
    <div class="bg-image overlay site-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-12">
            <div class="row mb-5">
              <div class="col-md-7">
                <div class="heading-20219">
                  <h2 class="title text-white mb-4 text-cursive">Why Choose Us</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>1</span></div>
                  <div>
                    <h3>Holistic Support</h3>
                    <p>We provide comprehensive programs that address the educational, emotional, and social needs of youth and their families, ensuring a well-rounded approach to development and empowerment</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>2</span></div>
                  <div>
                    <h3>Experienced Team</h3>
                    <p>Our team consists of dedicated professionals with extensive experience in education, mentorship, and mental health support, committed to making a positive impact in the community.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>3</span></div>
                  <div>
                    <h3>Community Focused</h3>
                    <p>We believe in the power of community and work collaboratively with local organizations and stakeholders to create a supportive network for youth and families.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-5">
                <div class="feature-29012 d-flex">
                  <div class="number mr-4"><span>4</span></div>
                  <div>
                    <h3>Proven Success</h3>
                    <p> Our programs have a track record of success, helping countless individuals build resilience, achieve their goals, and contribute positively to society.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--Latest Events-->
<div class="site-section">
  <div class="container">
    <div class="heading-20219 mb-5">
      <h2 class="title text-cursive">Latest Events</h2>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4">
        <div class="event-29191">
          <a href="#" class="d-block mb-3"><img src="images/pexels-iterpeal-1102570.jpg" alt="Image" class="img-fluid rounded"></a>
          <div class="px-3 d-flex">
            <div class="bg-success p-3 d-inline-block text-center rounded mr-4 date">
              <span class="text-white h3 m-0 d-block">10</span>
              <span class="text-white small">Oct 2034</span>
            </div>
            <div>
              <div class="mb-3">
                <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                <span> <span class="icon-room mr-2 text-muted"></span>Nairobi Kenya</span>
              </div>
              <h3><a href="single.html">Breakfast before school Programme</a></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-4">
        <div class="event-29191">
          <a href="#" class="d-block mb-3"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>
          <div class="px-3 d-flex">
            <div class="bg-success p-3 d-inline-block text-center rounded mr-4 date">
              <span class="text-white h3 m-0 d-block">22</span>
              <span class="text-white small">Oct 2024</span>
            </div>
            <div>
              <div class="mb-3">
                <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                <span> <span class="icon-room mr-2 text-muted"></span>Nyahururu Town</span>
              </div>
              <h3><a href="single.html">Assisting in restoring displaced people affected by the floods.</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Form-->
<section id="form">
  <div class="site-section bg-image overlay-primary" style="background-image: url('images/hero_3.jpg');">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-md-6">
          <img src="images/form.png" alt="Image" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
          <div class="bg-white h-100 p-4 shadow">
            <h3 class="mb-4 text-cursive">Register and Donate Now 
              <!-- <img src="images/mpesaa.png" alt="Mpesa" style="width: 120px; height: 50px" class="img-fluid"> -->
            </h3>
            
            <form name="PrePage" method="post" action="https://Simplecheckout.authorize.net/payment/CatalogPayment.aspx" onsubmit="return validateForm()">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" pattern="[A-Za-z\s]+" required>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone number" name="phone" maxlength="13" pattern="\d{1,13}" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Amount in $" name="amount" id="amount" required>
              </div>
              <input type="hidden" name="LinkId" value="53c21eab-dc10-4602-9258-ec88a04c554e" />
              <div class="form-group">
                <input type="image" src="//content.authorize.net/images/donate-blue.gif" alt="Donate">
                <h5 class="text-cursive">Any amount however the size Matters!</h5>
              </div>
              <img src="images/QR 1.png" alt="Image" class="img-fluid shadow">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<!--Just a Card-->
<div class="site-section">
      <div class="container">
        
            <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
              <div class=""><h2 class="text-cursive">Conecting people, Transforming communities</h2></div>
              <div class="ml-auto"><a href="./register.php" class="btn btn-success">Join us Today</a></div>
            </div>
        
      </div>
    </div>
  
<!--Footer-->    
    <footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-lg-4">
                <img class="d-block mx-auto mb-4" src="images/logo.png" alt="logo" width="250" height="250">
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-success text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                  
            </div>


            <h2 class="footer-heading mb-4">Follow Us</h2>

 <div class="col-md-6 text-md-right">
            <a href="https://www.facebook.com/people/Faith-community-pathway/61558574967566/?mibextid=LQQJ4d" class="btn btn-primary btn-sm rounded-circle">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-secondary btn-sm rounded-circle">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="btn btn-success btn-sm rounded-circle">
                <i class="bi bi-whatsapp"></i>
            </a>
            <a href="#" class="btn btn-danger btn-sm rounded-circle">
                <i class="bi bi-instagram"></i>
            </a>
          </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and Coded with <i class="icon-heart text-danger" aria-hidden="true"></i> by Crimson +254790802553</a>
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
 
    <!--Updated CDNs-->
    
   <!-- JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
</body>
</html>