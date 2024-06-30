<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

<link rel="stylesheet" href="../css/about.css">
<link rel="website icon " href="../images/resturant%20logo.PNG" type="png">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../webfonts/all.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css.map" />

<link rel="stylesheet" href="../css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
</head>
<body >
<!--start the navBaar-->
<nav class="navbar navbar-expand-lg bg-dark sticky-top position-relative p-0">
    <div class="container">
        <img class="icon-img" src="../images/resturant%20logo.PNG" alt="">


        <a  href="#" class="text-decoration-none"><h2 class="navbar-brand p-3 logo fs-2 text " style="color:  #ffc400" >Palestinian Restaurant</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0  ">
                <li class="nav-item">
                    <a class="nav-link  " aria-current="page" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">SERVICE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MENU
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="menu.php">Menu</a></li>
                        <li><a class="dropdown-item" href="menu.php">Breakfast  </a></li>
                        <li><a class="dropdown-item" href="menu.php">Lunch</a></li>
                        <li><a class="dropdown-item" href="menu.php">Dinner</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactnotes.php">CONTACT US</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!--end of the navBar-->
<!--intro-->
<div class="container text-center  edit-head "><p>About Us</p>
<p class="text-warning text-center fs-4 text">Where every meal is a celebration and every guest is family.
</p>
</div>
<!--end intro-->

<!--start slides-->
<div class="container-xll py-4 bg-dark hero-header mb-5 d-flex">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../images/rest1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Our Restaurant</h5>
                    <p class="text-warning"> This our restaurant from inside  </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../images/rest2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Our Restaurant from out</h5>
                    <p class="text-warning">This our restaurant from outside </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../images/rest3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Foreign food</h5>
                    <p class="text-warning">Some foreign food in our restaurant.</p>
                </div >
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="../images/rest5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Our Drinks</h5>
                    <p class="text-warning">Some of the drinks, whether hot or cold, that we offer in our restaurant.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="../images/rest4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Grills</h5>
                    <p class="text-warning">Some of the grills, whether chicken or meat, in our restaurant.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--end the slides-->
<!-- start info-->
<div class="container">
    <p class="text-dark fs-3">At Palestinian Restaurant, we believe that dining is not just about food—it's about creating memories. Our passion for culinary excellence, combined with a warm and inviting atmosphere, ensures that every visit feels like a special occasion. From farm-fresh ingredients to time-honored recipes, we craft each dish with love and dedication. Join us, and become part of our family, where every meal tells a story and every guest leaves with a smile.</p>
    <p class="text-dark fs-4">we believe that dining is an experience to be savored, a celebration of flavors and moments. Our journey began with a passion for bringing people together over delicious, thoughtfully prepared meals. Every dish we serve is a testament to our commitment to quality, using only the freshest ingredients sourced from local farmers and artisans. Our chefs pour their hearts into every creation, blending tradition with innovation to offer a menu that delights the senses. Beyond the plate, we strive to create an ambiance that feels like home, where laughter is shared, stories are told, and every guest is treated like family. Whether you're joining us for a special occasion or a casual meal, we promise an experience that is both memorable and unique. Come, be part of our story, and let us make every visit a cherished memory.</p>
</div>
<!--end info-->
<!-- start footer-->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Company</h4>
                <a class="btn btn-link text-warning" href="about.html">About Us</a>
                <a class="btn btn-link text-warning" href="contact.html">Contact Us</a>
                <a class="btn btn-link text-warning" href="menu.html">Reservation</a>
                <a class="btn btn-link text-warning" href="">Privacy Policy</a>
                <a class="btn btn-link text-warning" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rafedea Street, Nablus, palestine</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+970 592163158</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" target="_blank" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="http://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="http://youtube.com"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="http://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Our Time to Open</h5>
                <a href="../html/service.html" class="text-warning">Service</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Newsletter</h4>
                <p>Dear Customer,
                    Welcome to the new edition of the Palestinian Restaurant newsletter! We're thrilled to keep you updated on the latest happenings, special events, and exclusive offers at Restaurant . Thank you for being a valued member of our community.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-warning w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <a href="register.html"><button type="button" class="btn btn-warning py-2 position-absolute top-0 end-0 mt-2 me-2" >SignUp</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center mb-5 ">
                    &copy; <a class="border-bottom text-warning" href="#">BY Mhmd&Jawad</a> | All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a class="text-warning" href="">Home</a>
                        <a class="text-warning" href="">Cookies</a>
                        <a class="text-warning" href="">Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>