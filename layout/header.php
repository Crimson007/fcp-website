<?php
// initiate the session
session_start();

$authenticated = false;
if (isset($_SESSION["email"])) {
  $authenticated = true;
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faith Community Pathways</title>
  <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/style.css">
<link rel="icon" type="image/x-icon" href="../images/logo-white.jpg"></head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>

  <!--Header Section-->
  <div class="container-fluid bg-white sticky-top shadow-sm">

  <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
  <div class="container">
  <a href="index.html" class="navbar-brand">
              <img style="width: 50px; height: 50px" src="../images/logo.png" alt="Logo">
          </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-0">

        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link"> About</a></li>
        <li class="nav-item"><a href="contact.html" class="nav-item nav-link">Contact</a></li>
        <li class="nav-item"><a href="single.html" class="nav-item nav-link">Blog</a></li>
        
      </ul>
      <div class="col-md-6 text-md-right"> 
    <a href="https://www.facebook.com/people/Faith-community-pathway/61558574967566/?mibextid=LQQJ4d" class="p-3"><span class="material-icons" style="color: green;">Facebook</span></a>
    <a href="#" class="p-3"><span class="material-icons" style="color: green;">TwitterX</span></a>
    <a href="#" class="p-3"><span class="material-icons" style="color: green;">WhatsApp</span></a>
    <a href="#" class="p-3"><span class="material-icons" style="color: green;">Instagram</span></a>
</div>

<?php
if ($authenticated) {
  ?>

      <ul class="navbar-nav">
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
      </ul>
<?php
} else {
  ?>

      <ul class="navbar-nav">

        <li class="nav-item"><a href="register.php" class="btn btn-outline-success me-2">Register</a></li>
        <li><hr class="dropdown-divider"></li>
        <li class="nav-item"><a href="login.php" class="btn btn-success">Login</a></li>
       </ul>
       <?php } ?>
  </div>
</nav>

  </div>

