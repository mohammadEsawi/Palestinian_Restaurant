

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palestinian Restaurant</title>
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
<body class="bg-dark" >
<div class="card  card-registration container bg-dark " style="border-radius: 15px;">
    <div class="card-body p-4 p-md-5">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-light">Registration Form</h3>
        <form action="../php/register.php" method="post">

            <div class="row">
                <div class="col-md-6 mb-4">

                    <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                        <input name="userName" type="text" id="firstName" placeholder="Your User Name"  class="form-control form-control-lg" fdprocessedid="mx9x7n">
                        <label class="form-label text-light" for="firstName" style="margin-left: 0px;">User Name</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 70.4px;"></div><div class="form-notch-trailing"></div></div></div>

                </div>
                <div class="col-md-6 mb-4">

                    <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                        <input name="email" type="email" id="lastName" placeholder="Your Email" class="form-control form-control-lg" fdprocessedid="dga2u">
                        <label class="form-label text-light" for="lastName" style="margin-left: 0px;">Email</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 69.6px;"></div><div class="form-notch-trailing"></div></div></div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div data-mdb-input-init="" class="form-outline datepicker w-100" data-mdb-input-initialized="true">
                        <input name="Bdate" type="date" class="form-control form-control-lg" id="birthdayDate" fdprocessedid="t5ttve">
                        <label for="birthdayDate" class="form-label text-light" style="margin-left: 0px;">Birthday</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 55.2px;"></div><div class="form-notch-trailing"></div></div></div>

                </div>
                <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1 text-light">Gender: </h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked="">
                        <label class="form-check-label text-light" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2">
                        <label class="form-check-label text-light" for="maleGender">Male</label>
                    </div>



                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                    <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                        <input name="password" type="password" id="emailAddress" placeholder="Your Password" class="form-control form-control-lg" fdprocessedid="7jrb0j">
                        <label class="form-label text-light" for="emailAddress" style="margin-left: 0px;">Password</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 40px;"></div><div class="form-notch-trailing"></div></div></div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                    <div data-mdb-input-init="" class="form-outline" data-mdb-input-initialized="true">
                        <input name="phone" type="tel" id="phoneNumber" placeholder="phoneNumber" class="form-control form-control-lg" fdprocessedid="6mzjdf">
                        <label class="form-label text-light" for="phoneNumber" style="margin-left: 0px;">Phone</label>
                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 92.8px;"></div><div class="form-notch-trailing"></div></div></div>

                </div>
            </div>


            <div class="mt-4 pt-2">
                <input data-mdb-ripple-init="" class="btn btn-warning btn-lg" type="submit" value="SignUp" fdprocessedid="5r9o6g">
                <p class="text-light small fw-bold mt-2 pt-1 mb-0">Have an account? <a href="Login.php" class="link-danger">press here </a></p>

            </div>

        </form>
    </div>
</div>
</body>
</html>


<?php

$db=new mysqli('localhost','root','','resturant');
$username=$_POST["userName"];
$email=$_POST["email"];
$birthdate=$_POST["Bdate"];
$gender=$_POST["inlineRadioOptions"];
$password=$_POST["password"];
$phone=$_POST["phone"];


if ($gender=="option2"){
    $gender="Male";
}
elseif($gender=="option1") {
    $gender="Female";
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sqlStatment="insert into user(userName,email,bDate,gender,password,phone) values ('$username','$email','$birthdate','$gender','$hashed_password','$phone')";
header("location:login.php");
$db->query($sqlStatment);




?>


