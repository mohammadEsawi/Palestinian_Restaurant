<?php
session_start();


$username=$_SESSION["username"];


if (isset($_POST["contactnote"])) {
    $note = $_POST["contactnote"];


    $db = new mysqli("localhost", "root", "", "resturant");

    $qry = "insert into contactnotes (userName,noteContent) values ('$username','$note')";
    $db->query($qry);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="website icon " href="../images/resturant%20logo.PNG" type="png">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../webfonts/all.min.css">
    <link rel="stylesheet" href="../webfonts/all.css">
    <link rel="stylesheet" href="../js/all.min.js">
    <link rel="stylesheet" href="../js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">

</head>
<body>
<!--start nav-->
<nav class="navbar navbar-expand-lg bg-dark position-sticky p-0">
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
                        <li><a class="dropdown-item" href="#break fast"> Breakfast</a></li>
                        <li><a class="dropdown-item" href="#lunch">Lunch</a></li>
                        <li><a class="dropdown-item" href="#dinner">Dinner</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contactnotes.php">CONTACT US</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!--end the nav-->
<!--intro-->
<div class="container text-center  edit-head "><p>Contact Us</p></div>
<!--end intro-->

<!--map-->
<div class=" container-xll py-5 bg-dark hero-header mb-5 d-flex ">
    <div class="container my-5 justify-content-center ">
        <h2 class="text-center text-warning">Palestinian Restaurant </h2>
        <h5 class="text-center text-white"> Rafedea,Nablus</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3375.0529470633815!2d35.238871624642044!3d32.229740811753615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ce040950a74e9%3A0x5c94e9282061ea18!2z2YXYt9i52YUg2KfZhNmBINmE2YrZhNipINmI2YTZitmE2Kkg2YbYp9io2YTYsw!5e0!3m2!1sar!2s!4v1717243431372!5m2!1sar!2s" width="1200" height="500" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <p class="text-center text-white mt-3">Do you have any questions? Do not hesitate to contact us, and we will try to accommodate you.</p>
        <h2  class="text-center text-white mt-3">Contact Us   </h2>

        <form action="contactnotes.php" method="post" class="mt-5">

                <div class="col-9">
                    <div class="form-floating mb-2 mt-5">
                        <textarea name="contactnote" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                        <label for="message">Leave a note</label>
                    </div>
                </div>
                <div class="col-6 d-flex">
                    <button class="btn btn-warning justify-content-center  py-3" type="submit">Send</button>
                </div>
            </div>

        </form>
    </div>
</div>
<!--end the map -->
<!--contact info-->
<div class="container ">
    <p class="text-dark fs-3">
        We love hearing from our guests and are here to assist you with any inquiries or feedback you may have. Whether you want to make a reservation, inquire about catering services, or have any questions, our team is ready to help. You can reach us by phone, email, or by filling out the contact form below. We strive to respond promptly and ensure your dining experience at Palestinian Restaurant is exceptional. We look forward to connecting with you!"
    </p>
    
</div>
<!--end contact info-->
<!-- start footer-->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-warning fw-normal mb-4">Company</h4>
                <a class="btn btn-link text-warning" href="about.php">About Us</a>
                <a class="btn btn-link text-warning" href="contact.php">Contact Us</a>
                <a class="btn btn-link text-warning" href="menu.php">Reservation</a>
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
                        <a class="text-warning" href="../html/index.html">Home</a>
                        <a class="text-warning" href="">Cookies</a>
                        <a class="text-warning" href="">Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end footer-->

<script src="../js/contact.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>