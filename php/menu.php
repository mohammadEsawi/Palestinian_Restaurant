<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/menu.css">
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
<!--start the navBaar-->
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
<!--end of the navBar-->

<!-- start intro-->

<div class=" container-xll py-5 bg-dark hero-header mb-5 ">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text lg-start ">
                <h4 class=" text-white animated sliderInLeft"> WELCOME TO

                </h4>
                <h1 class="display-3 text-white animated sliderInLeft "> Palestinian  Restaurant <i class="fa-regular fa-user-chef"></i>
                </h1>
                <h5 class="text-white  animated sliderInLeft ">Enjoy Our Delicious Food</h5>
             <a href="#book">   <button type="button" class="btn  btn-warning py-sm-3 px-sm-5 slideInLeft  rounded-pill book-btn ">BOOK A TABLE</button></a>


            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img src="../images/menu.jpg" class="img-fluid rounded-pill" alt="">
            </div>
        </div>
    </div>

    <i class="fa-solid fa-user-chef card-img-top"></i>

</div>
<!--end the intro-->
<hr class="border border-dark border-3 opacity-75">

<!--menu breakfast-->
<div id="break fast">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-warning fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items On BreakFast</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active text-warning" data-bs-toggle="pill" href="#break fast">
                            <i class="fa fa-coffee fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class=" text-warning">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 pb-3 text-warning" data-bs-toggle="pill" href="#lunch">
                            <i class="fa fa-hamburger fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class="text-warning">Special</small>
                                <h6 class="mt-n1 mb-0 text-warning">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-warning" data-bs-toggle="pill" href="# dinner">
                            <i class="fa fa-utensils fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class="text-warning">Lovely</small>
                                <h6 class="mt-n1 mb-0 text-warning">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-2" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/sandwitch.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sandwich</span>
                                            <span class="text-warning">$20</span>
                                        </h5>
                                        <small class="fst-italic">Luncheon meat sandwich, white and yellow cheese, and many sandwiches.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/homoos.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hummus&falafel&foul</span>
                                            <span class="text-warning">$15</span>
                                        </h5>
                                        <small class="fst-italic">Hummus, falafel and foul dishes with Palestinian olive oil.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/meatandhomos.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hummus with meat and liver</span>
                                            <span class="text-warning">$30</span>
                                        </h5>
                                        <small class="fst-italic">Hummus with meat, olive oil, almonds and special seasoning.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/fry.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fry in oil</span>
                                            <span class="text-warning">$25</span>
                                        </h5>
                                        <small class="fst-italic">
                                            French fries, eggplant and cauliflower. </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/makboz.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Bakery</span>
                                            <span class="text-warning">$50</span>
                                        </h5>
                                        <small class="fst-italic">Three pieces of manakish, two pieces of eggs and cheese, and a piece of vegetable pie.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/allbreak.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Restaurant special breakfast</span>
                                            <span class="text-warning">$90</span>
                                        </h5>
                                        <small class="fst-italic">Contains all breakfast dishes</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/eggs.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Omelette</span>
                                            <span class="text-warning">$10</span>
                                        </h5>
                                        <small class="fst-italic">A popular mixture of eggs, parsley and onions.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/tomato.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Shakshouka</span>
                                            <span class="text-warning">$15</span>
                                        </h5>
                                        <small class="fst-italic">A mixture of eggs, tomatoes, onions and hot peppers.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end breakfast-->
<hr class="border border-dark border-3 opacity-75">

<!-- menu lunch-->
<div id="lunch">
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-warning fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items On lunch</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active text-warning" data-bs-toggle="pill" href="#break fast">
                        <i class="fa fa-coffee fa-2x text-warning"></i>
                        <div class="ps-3">
                            <small class=" text-warning">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 pb-3 text-warning" data-bs-toggle="pill" href="#lunch">
                        <i class="fa fa-hamburger fa-2x text-warning"></i>
                        <div class="ps-3">
                            <small class="text-warning">Special</small>
                            <h6 class="mt-n1 mb-0 text-warning">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-warning" data-bs-toggle="pill" href="# dinner">
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
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/manssaf.jpeg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Manssaf</span>
                                        <span class="text-warning">$60</span>
                                    </h5>
                                    <small class="fst-italic">Lamb meat, yoghurt, local wheat bread and rice.</small>
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
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/kabssa.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Kabssa</span>
                                        <span class="text-warning">$55</span>
                                    </h5>
                                    <small class="fst-italic">A meal consisting mainly of long grain rice, fried chicken and yogurt.</small>
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
                                    <small class="fst-italic">
                                        This is the most unique and delicious burger since it combines two types of meat: chicken and beef. </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/muskhan.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Muskhan</span>
                                        <span class="text-warning">$100</span>
                                    </h5>
                                    <small class="fst-italic">Grilled chicken cooked with onions, sumac, allspice, saffron and pine nuts served on taboon bread.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/fish.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Fish</span>
                                        <span class="text-warning">$90</span>
                                    </h5>
                                    <small class="fst-italic">Fresh grilled fish marinated in Palestinian mixture</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/maqloba.jpeg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Maqloba</span>
                                        <span class="text-warning">$70</span>
                                    </h5>
                                    <small class="fst-italic">Rice with a variety of fried vegetables, including eggplant, cauliflower, potatoes, or green beans. A combination of these vegetables may be used, and meat such as lamb or chicken is added to it.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="../images/menu-8.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Steak</span>
                                        <span class="text-warning">$115</span>
                                    </h5>
                                    <small class="fst-italic">Cuts of meat usually associated with beef, lamb and can be chicken.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!--end menu lunch-->
<hr class="border border-dark border-3 opacity-75">

<!--start dinner-->
<div id="dinner">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-warning fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items On Dinner</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active text-warning" data-bs-toggle="pill" href="#break fast">
                            <i class="fa fa-coffee fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class=" text-warning">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 pb-3 text-warning" data-bs-toggle="pill" href="#lunch">
                            <i class="fa fa-hamburger fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class="text-warning">Special</small>
                                <h6 class="mt-n1 mb-0 text-warning">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration: none" class="d-flex align-items-center text-start mx-3 me-0 pb-3 text-warning" data-bs-toggle="pill" href="#dinner">
                            <i class="fa fa-utensils fa-2x text-warning"></i>
                            <div class="ps-3">
                                <small class="text-warning">Lovely</small>
                                <h6 class="mt-n1 mb-0 text-warning">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-3" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/shawrma.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Shawarma</span>
                                            <span class="text-warning">$40</span>
                                        </h5>
                                        <small class="fst-italic">Chicken or veal with potatoes, garlic sauce and Palestinian cola.</small>
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
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/brosted.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>fried chicken</span>
                                            <span class="text-warning">$50</span>
                                        </h5>
                                        <small class="fst-italic"> Fried chicken with the restaurant's secret mixture, with potatoes and delicious sauces.</small>
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
                                        <small class="fst-italic">
                                            This is the most unique and delicious burger since it combines two types of meat: chicken and beef. </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/mashwe.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Grills</span>
                                            <span class="text-warning">$150</span>
                                        </h5>
                                        <small class="fst-italic">Fresh grilled chicken, lamb, liver, and hot and non-spicy chicken wings.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/fish.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fish</span>
                                            <span class="text-warning">$90</span>
                                        </h5>
                                        <small class="fst-italic">Fresh grilled fish marinated in Palestinian mixture</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/cheken.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>grilled chicken</span>
                                            <span class="text-warning">$60</span>
                                        </h5>
                                        <small class="fst-italic">Charcoal grilled chicken with potatoes and sauces.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="../images/pasta.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pasta</span>
                                            <span class="text-warning">$45</span>
                                        </h5>
                                        <small class="fst-italic">Delicious pasta with tomatoes, sauces, or a mixture of bechamel and mozzarella cheese.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<hr class="border border-dark border-3 opacity-75">
<!--end dinner-->

<!--Reservation-->
<div id="book">
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=NXF3q-F4bzQ" data-bs-target="#videoModal">
                    <span> </span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-warning fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="datetime-local" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="datetime">Date & Time</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select"  id="select1">
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
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
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

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--end the reservation-->

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