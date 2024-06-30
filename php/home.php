<?php
session_start();
if (isset($_POST["logout"])) {
    session_destroy();
    echo "<script>alert('Farewell')</script>";
    header("location:login.php");
}

if ($_SESSION["isUserLoggedIn"] == true && $_SESSION["role"]=="admin") {
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Palestinian Restaurant</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="website icon " href="../images/resturant%20logo.PNG" type="png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <script src="../js/myJS.js"></script>
</head>
<body >
<nav class="navbar navbar-expand-lg bg-dark position-sticky  p-0">
    <div class="container">
        <img  class="icon-img" src="../images/resturant%20logo.PNG" alt="">


        <h2 class="navbar-brand p-3 logo fs-2 text " style="color:  #ffc400"  href="#">Palestinian Restaurant</h2>
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
                    <a class="nav-link" href="order.php">Order</a>
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
                        <li><a class="dropdown-item" href="menu.php">Breakfast   </a></li>
                        <li><a class="dropdown-item" href="menu.php">Lunch</a></li>
                        <li><a class="dropdown-item" href="menu.php">Dinner</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contactnotes.php">CONTACT US</a>
                </li>

            </ul>
            <form action="home.php" method="post">
            <button name="logout" type="submit" value="logout" class="btn  btn-warning rounded-pill book-btn " href="../php/register.php" > Logout</button>
            </form>
                <a style="margin-left: 5px; display: block" id="reservBTN" class="btn  btn-warning rounded-pill book-btn " href="Reservation.php"  > Reservation</a>
            <a style="margin-left: 5px; display: block" id="noteBTN" class="btn  btn-warning rounded-pill book-btn " href="Notes.php" >User Notes</a>
            <a style="margin-left: 5px; display: block" id="noteBTN" class="btn  btn-warning rounded-pill book-btn " href="order_table.php" > Orders</a>


        </div>
    </div>
</nav>
<!--end of the navBar-->
<!--intro-->
<div class=" container-xll py-5 bg-dark hero-header mb-5 ">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text lg-start ">
                <h3 class=" text-white animated sliderInLeft"> WELCOME TO

                </h3>
                <h1 class="display-3 text-white animated sliderInLeft "> Palestinian  Restaurant <i class="fa-regular fa-user-chef"></i>
                </h1>
                <p class="text-white  animated sliderInLeft ">Enjoy Our Delicious Food</p>
                <a  class="btn  btn-warning py-sm-3 px-sm-5 slideInLeft rounded-pill book-btn "  href="#reservation">BOOK A TABLE</a>


            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img src="../images/intro-img.jpg" width="490 px"  class="img-fluid rounded-pill" alt="">
            </div>
        </div>
    </div>

</div>
<!--end the intro-->

<!--Fetures-->
<div class="fetures_mid  row g-4 py-5 row-cols-1 row-cols-lg-3" >
    <div class="feature col">
        <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
            <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Master Chefs</h3>
        <p>We have the best chefs availabile in town that are ready to serve you at any time.</p>

    </div>
    <div class="feature col">
        <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
            <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
                <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
            </svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Quality meals</h3>
        <p> Best meals, traditional and other meals served to our customers.</p>

    </div>
    <div class="feature col">
        <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <h3 class="fs-2 text-body-emphasis">Online Order</h3>
        <p>We are ready to recieve your orders and deliver them at any time.</p>

    </div>

    <div class="feature col">
        <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
            <i class="fa-solid fa-headphones"></i>
        </div>
        <h3 class="fs-2 text-body-emphasis">Featured title</h3>
        <p>Contact us for any questions and we will respond at any time.</p>

    </div>
</div>

<!-- menu-->

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-warning fw-normal">Food&Drink Menu</h5>
            <a  class="text-warning" href="menu.html">GO to Menu</a>
            <h1 class="mb-5">Most Popular Items In Our Restaurant</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active text-warning" data-bs-toggle="pill">
                        <i class="fa fa-coffee fa-2x text-warning"></i>
                        <div class="ps-3">
                            <small class=" text-warning">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast&Drink</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 pb-3 text-warning" data-bs-toggle="pill" >
                        <i class="fa fa-hamburger fa-2x text-warning"></i>
                        <div class="ps-3">
                            <small class="text-warning">Special</small>
                            <h6 class="mt-n1 mb-0 text-warning">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-warning" data-bs-toggle="pill" >
                        <i class="fa fa-utensils fa-2x text-warning"></i>
                        <div class="ps-3">
                            <small class="text-warning">Lovely</small>
                            <h6 class="mt-n1 mb-0 text-warning">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/homoos.jpeg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Hummus&falafel&foul</span>
                                        <span class="text-warning">$15</span>
                                    </h5>
                                    <small class="fst-italic">Hummus, falafel and foul dishes with Palestinian olive oil.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/hotdrink.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Hot Drinks& Sweets</span>
                                        <span class="text-warning">$25</span>
                                    </h5>
                                    <small class="fst-italic">Hot drinks tea coffee Nescafe and some sweets donuts and cookies</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/shawrma.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Shawarma</span>
                                        <span class="text-warning">$40</span>
                                    </h5>
                                    <small class="fst-italic"> Chicken or veal with potatoes, garlic sauce and Palestinian cola.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/cooldrink.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Cool Drink</span>
                                        <span class="text-warning">$17</span>
                                    </h5>
                                    <small class="fst-italic">Some cold drinks with all flavors and foods in addition to natural juices</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/burger.PNG" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken&Beef Burger</span>
                                        <span class="text-warning">$80</span>
                                    </h5>
                                    <small class="fst-italic"> This is the most unique and delicious burger since it combines two types of meat: chicken and beef.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/kunaf.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Kunafa Nablus</span>
                                        <span class="text-warning">$20</span>
                                    </h5>
                                    <small class="fst-italic">Palestinian Nablus Kunafa Sweets</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/pizza.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Pepperoni Pizza</span>
                                        <span class="text-warning">$75</span>
                                    </h5>
                                    <small class="fst-italic">This pepperoni pizza recipe produces a quick and easy classic! Delicious homemade pizza crust and tomato sauce have never been easier.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/nargela.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Hookah</span>
                                        <span class="text-warning">$15</span>
                                    </h5>
                                    <small class="fst-italic">Palestinian hookah with all foods</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end the menu-->
<!--Reservation-->
<div id="reservation">
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=iKDSykOZjM0" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-warning fw-normal">Reservation</h5>
                    <h1 class="text-white mb-4">Book A Table Online</h1>
                    <form action="ReservationHandle.php" method="post"><!--reservation form -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="resName" type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="col-md-15">
                                        <div class="form-floating">
                                            <select name="tableValue" class="form-select" id="select1">
                                                <option value="Normal Table">Normal Table</option>
                                                <option value="Window Table">Window Table</option>
                                                <option value="VIP Table">VIP Table</option>
                                            </select>
                                            <label for="select1">Table Type</label>
                                        </div>
                                    </div>                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input name="Date" type="datetime-local" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="people" class="form-select" id="select1">
                                        <option value="1">People 1</option>
                                        <option value="2">People 2</option>
                                        <option value="3">People 3</option>
                                        <option value="4">People 4</option>
                                        <option value="5">People 5</option>
                                        <option value="6">People 6</option>
                                        <option value="7">People7</option>
                                        <option value="8">People 8</option>
                                        <option value="9">People 9</option>
                                        <option value="10">People 10</option>
                                        <option value="20">more than 10</option>
                                    </select>
                                    <label for="select1">No Of People</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="Request" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end Reservation-->

<!--team-->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h5 class="section-title ff-secondary text-center text-warning fw-normal">
                Team Members
            </h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="../images/team-1.jpg">
                </div>
                <h5 class="mb-0">Musa Omar</h5>
                <small>Food Manager</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="../images/team-2.jpg">
                </div>
                <h5 class="mb-0">Ahmad Khaled</h5>
                <small>Grill Manager</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="../images/team-3.jpg">
                </div>
                <h5 class="mb-0">Saed Jaber</h5>
                <small>Drinks Manager</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                    <img class="img-fluid" src="../images/team-4.jpg">
                </div>
                <h5 class="mb-0">Rami Ahmad</h5>
                <small>Chef's assistant</small>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

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

    <?php




    ?>

<?php

}


elseif ($_SESSION["isUserLoggedIn"] == true && $_SESSION["role"]=="customer") {

    ?>
    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Palestinian Restaurant</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="website icon " href="../images/resturant%20logo.PNG" type="png">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
        <script src="../js/myJS.js"></script>
    </head>
    <body >
    <nav class="navbar navbar-expand-lg bg-dark position-sticky  p-0">
        <div class="container">
            <img class="icon-img" src="../images/resturant%20logo.PNG" alt="">


            <h2 class="navbar-brand p-3 logo fs-2 text " style="color:  #ffc400"  href="#">Palestinian Restaurant</h2>
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
                        <a class="nav-link" href="order.php">Order</a>
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
                            <li><a class="dropdown-item" href="menu.php">Breakfast   </a></li>
                            <li><a class="dropdown-item" href="menu.php">Lunch</a></li>
                            <li><a class="dropdown-item" href="menu.php">Dinner</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html/contact.html">CONTACT US</a>
                    </li>

                </ul>
                <form action="home.php" method="post">
                    <button name="logout" type="submit" value="logout" class="btn  btn-warning rounded-pill book-btn " href="../php/register.php" > Logout</button>
                </form>
                <a style="margin-left: 5px; display: none" id="reservBTN" class="btn  btn-warning rounded-pill book-btn " href="../html/login.html" > Reservation</a>

            </div>
        </div>
    </nav>
    <!--end of the navBar-->
    <!--intro-->
    <div class=" container-xll py-5 bg-dark hero-header mb-5 ">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text lg-start ">
                    <h3 class=" text-white animated sliderInLeft"> WELCOME TO

                    </h3>
                    <h1 class="display-3 text-white animated sliderInLeft "> Palestinian  Restaurant <i class="fa-regular fa-user-chef"></i>
                    </h1>
                    <p class="text-white  animated sliderInLeft ">Enjoy Our Delicious Food</p>
                    <a  class="btn  btn-warning py-sm-3 px-sm-5 slideInLeft rounded-pill book-btn "  href="#reservation">BOOK A TABLE</a>


                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img src="../images/intro-img.jpg" width="490 px"  class="img-fluid rounded-pill" alt="">
                </div>
            </div>
        </div>

    </div>
    <!--end the intro-->

    <!--Fetures-->
    <div class="fetures_mid  row g-4 py-5 row-cols-1 row-cols-lg-3" >
        <div class="feature col">
            <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
                <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
            </div>
            <h3 class="fs-2 text-body-emphasis">Master Chefs</h3>
            <p>We have the best chefs availabile in town that are ready to serve you at any time.</p>

        </div>
        <div class="feature col">
            <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
                <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
                    <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
                </svg>
            </div>
            <h3 class="fs-2 text-body-emphasis">Quality meals</h3>
            <p> Best meals, traditional and other meals served to our customers.</p>

        </div>
        <div class="feature col">
            <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Online Order</h3>
            <p>We are ready to recieve your orders and deliver them at any time.</p>

        </div>

        <div class="feature col">
            <div style="border-radius: 30%" class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-2 mb-3">
                <i class="fa-solid fa-headphones"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Contact us for any questions and we will respond at any time.</p>

        </div>
    </div>

    <!-- menu-->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-warning fw-normal">Food&Drink Menu</h5>
                <a  class="text-warning" href="menu.html">GO to Menu</a>
                <h1 class="mb-5">Most Popular Items In Our Restaurant</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active text-warning" data-bs-toggle="pill">
                            <i class="fa fa-coffee fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class=" text-warning">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast&Drink</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 pb-3 text-warning" data-bs-toggle="pill" >
                            <i class="fa fa-hamburger fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class="text-warning">Special</small>
                                <h6 class="mt-n1 mb-0 text-warning">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-warning" data-bs-toggle="pill" >
                            <i class="fa fa-utensils fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class="text-warning">Lovely</small>
                                <h6 class="mt-n1 mb-0 text-warning">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/homoos.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hummus&falafel&foul</span>
                                            <span class="text-warning">$15</span>
                                        </h5>
                                        <small class="fst-italic">Hummus, falafel and foul dishes with Palestinian olive oil.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/hotdrink.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hot Drinks& Sweets</span>
                                            <span class="text-warning">$25</span>
                                        </h5>
                                        <small class="fst-italic">Hot drinks tea coffee Nescafe and some sweets donuts and cookies</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/shawrma.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Shawarma</span>
                                            <span class="text-warning">$40</span>
                                        </h5>
                                        <small class="fst-italic"> Chicken or veal with potatoes, garlic sauce and Palestinian cola.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/cooldrink.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cool Drink</span>
                                            <span class="text-warning">$17</span>
                                        </h5>
                                        <small class="fst-italic">Some cold drinks with all flavors and foods in addition to natural juices</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/burger.PNG" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken&Beef Burger</span>
                                            <span class="text-warning">$80</span>
                                        </h5>
                                        <small class="fst-italic"> This is the most unique and delicious burger since it combines two types of meat: chicken and beef.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/kunaf.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kunafa Nablus</span>
                                            <span class="text-warning">$20</span>
                                        </h5>
                                        <small class="fst-italic">Palestinian Nablus Kunafa Sweets</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/pizza.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pepperoni Pizza</span>
                                            <span class="text-warning">$75</span>
                                        </h5>
                                        <small class="fst-italic">This pepperoni pizza recipe produces a quick and easy classic! Delicious homemade pizza crust and tomato sauce have never been easier.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/nargela.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hookah</span>
                                            <span class="text-warning">$15</span>
                                        </h5>
                                        <small class="fst-italic">Palestinian hookah with all foods</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end the menu-->
    <!--Reservation-->
    <div id="reservation">
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=iKDSykOZjM0" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-warning fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form action="ReservationHandle.php" method="post"><!--reservation form -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="resName" type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <div class="col-md-15">
                                            <div class="form-floating">
                                                <select name="tableValue" class="form-select" id="select1">
                                                    <option value="Normal Table">Normal Table</option>
                                                    <option value="Window Table">Window Table</option>
                                                    <option value="VIP Table">VIP Table</option>
                                                </select>
                                                <label for="select1">Table Type</label>
                                            </div>
                                        </div>                               </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input name="Date" type="datetime-local" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select name="people" class="form-select" id="select1">
                                            <option value="1">People 1</option>
                                            <option value="2">People 2</option>
                                            <option value="3">People 3</option>
                                            <option value="4">People 4</option>
                                            <option value="5">People 5</option>
                                            <option value="6">People 6</option>
                                            <option value="7">People7</option>
                                            <option value="8">People 8</option>
                                            <option value="9">People 9</option>
                                            <option value="10">People 10</option>
                                            <option value="20">more than 10</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="Request" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-warning w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Reservation-->

    <!--team-->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <h5 class="section-title ff-secondary text-center text-warning fw-normal">
                    Team Members
                </h5>
                <h1 class="mb-5">Our Master Chefs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="../images/team-1.jpg">
                    </div>
                    <h5 class="mb-0">Musa Omar</h5>
                    <small>Food Manager</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="../images/team-2.jpg">
                    </div>
                    <h5 class="mb-0">Ahmad Khaled</h5>
                    <small>Grill Manager</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="../images/team-3.jpg">
                    </div>
                    <h5 class="mb-0">Saed Jaber</h5>
                    <small>Drinks Manager</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="../images/team-4.jpg">
                    </div>
                    <h5 class="mb-0">Rami Ahmad</h5>
                    <small>Chef's assistant</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-warning mx-1" target="_blank" href="http://facebook.com"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-warning mx-1" href="http://linkedin.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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



    <?php

}



else{
    header("location:login.php");
}

?>
