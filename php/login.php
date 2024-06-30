<?php
session_start();



    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        try {
            $db = new mysqli('localhost', 'root', '', 'resturant');
            $qry="select * from user";
            $res=$db->query($qry);
            for ($i=0;$i<$res->num_rows;$i++) {
                $row=$res->fetch_assoc();

                if ($row["email"]==$email && $row["password"]==$password) {

                    $_SESSION["username"] = $row["userName"];
                    $_SESSION["password"] = $row["password"];
                    $_SESSION["role"]=$row["role"];
                    $_SESSION["isUserLoggedIn"] = true;


                    header("location:..//php/home.php");

                }
                else{
                    echo "<h3 style='color: red'>Wrong email or password</h3>";

                }

            }
            $db->close();
        }catch(Exception $e){

        }

    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
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
<body class="bg-dark">
<h2 class="text-center fs-2 bg-warning shadow">Palestinian Restaurant</h2>
<div class="container row d-flex justify-content-center align-items-center h-100 ">
    <div class="col-md-9 col-lg-6 col-xl-6 my-lg-5 py-lg-5">
        <h2 class="text-warning ps-3 fs-2">Welcome to Our Restaurant! </h2>
        <img  src="../images/resturant%20logo.PNG" class="img-fluid" alt="Sample image">
    </div>
    <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1 my-lg-5 py-lg-5">
        <form action="login.php" method="post">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3 text-light">Sign in with</p>
                <button type="button" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-warning btn-floating mx-1" data-mdb-button-initialized="true" fdprocessedid="k3rl9j">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-warning btn-floating mx-1" data-mdb-button-initialized="true" fdprocessedid="4ts2o2">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-warning btn-floating mx-1" data-mdb-button-initialized="true" fdprocessedid="86tpzw">
                    <i class="fab fa-linkedin-in"></i>
                </button>
            </div>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center text-light fw-bold mx-3 mb-0">Or</p>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                <input name="email" type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email" fdprocessedid="u0vwzh">
                <label class="form-label text-light" for="form3Example3" style="margin-left: 0px;">User Name</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>
            <!--end email-->

            <!-- Password input -->
            <div data-mdb-input-init="" class="form-outline mb-3" data-mdb-input-initialized="true">
                <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" fdprocessedid="3fu9ak">
                <label class="form-label text-light" for="form3Example4" style="margin-left: 0px;">Password</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div></div>
            <!--end pass-->


            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" data-mdb-button-init="" data-mdb-ripple-init="" class="btn btn-warning btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" data-mdb-button-initialized="true" fdprocessedid="7cypye">Login</button>
                <p class="text-light small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="../php/register.php" class="link-danger">Register</a></p>
            </div>

        </form>
    </div>
</div>


</body>
</html>








