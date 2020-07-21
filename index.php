<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstarp css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawsome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/custom.css">

    <title>Online Service Management System</title>
</head>
<body>
<!-- Navigation bar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text pl-3">Being of Service to others is what Brings True Happiness.</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>  
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
            <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            
        </ul>
    </div>
</nav><!--Navigation end-->

<!-- bootstrarp jumbotron start -->
<header class="jumbotron back-image" style="background-image: url(images/tecnician.jpg)">
    <div class="myclass mainHeading">
        <h1 class="text-uppercase text-danger font-italicweight-bold">Welcome To OSMS</h1>
        <p class="font-italic">Customer's Happiness is our Aim</p>
        <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
        <a href="#registration" class="btn btn-danger mr-4">SignUp</a>
    </div>
</header>
<!-- bootstrarp jumbotron end -->
<!-- start intro services -->
<div class="container">
    <div class="jumbotron">
        <h3 class="text-center">OSMS SERVICES</h3>
        <p class="text-center">Service management systems are large modular systems which incorporate all or most aspects of a service-oriented organization. To have a service-management mindset, an organization must understand the level of process maturity that is required to become a service-oriented organization.

        Standardization organizations such as the Information Technology Infrastructure Library (ITIL) and the International Organization for Standardization/International Electrotechnical Commission (ISO/IEC) provide standard frameworks for the creation of service management systems as well as provide the concepts and best practices behind service management itself.</p>
    </div>
</div>
<!-- end intro services -->

<!-- start services section -->
<div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
            <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
            <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repair</h4>
        </div>
    </div>
</div>
<!-- end services section -->

<!-- Start registration fotrm start -->
     <?php
      include ('userRegistration.php');
     ?>



<!-- end registration fotrm -->



<!-- start Happy customer -->
    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-black">Happy Customers</h2>
            <div class="row mt-5">
                <!-- start 1st column -->
                <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="images/avatar1.jpg" class="img-fluid" alt="avt1" style="border-radius: 100px; width: 65px; height: 65px;">
                             <h4 class="card-title">Rahul Kumar</h4>
                             <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiust tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                         </div>
                     </div>
                </div>
                <!-- end 1st column -->
                <!-- start 1st column -->
                <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="images/avatar2.jpg" class="img-fluid" alt="avt1" style="border-radius: 100px; width: 65px; height: 65px;">
                             <h4 class="card-title">Sonam Kapoor</h4>
                             <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiust tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                         </div>
                     </div>
                </div>
                <!-- end 1st column -->
                <!-- start 1st column -->
                <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="images/avatar3.jpg" class="img-fluid" alt="avt1" style="border-radius: 100px; width: 65px; height: 65px;">
                             <h4 class="card-title">Prince Jutt</h4>
                             <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiust tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                         </div>
                     </div>
                </div>
                 <!-- end 1st column -->
                 <!-- end 1st column -->
                <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body text-center">
                             <img src="images/avatar4.jpg" class="img-fluid" alt="avt1" style="border-radius: 100px; width: 65px; height: 65px;">
                             <h4 class="card-title">Sumit Ayas</h4>
                             <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiust tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                         </div>
                     </div>
                </div>
                <!-- end 1st column -->
            </div>
        </div>
    </div>
<!-- end Happy customer -->

<!-- start contact form -->
    <?php
      include ('contactform.php');
    ?>
<!-- end contact form -->

<!-- Start footer -->
<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6"><!-- start 1nd columns -->
                <span class="pr-2">Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                 <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                  <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                   <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
            </div><!-- end 1nd columns -->
            <div class="col-md-6 text-right"><!-- start 2nd columns -->
                <small>Designed By Nouman Qaiser &copy; 2020</small>
                <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->







<!-- javascript start -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
    
</body>
</html>