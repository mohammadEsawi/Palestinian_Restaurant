
<?php

$ID=$_GET['id'];



if (isset($_POST['BTN'])) {



    $id=$_POST['id'];
    $name = $_POST['resName'];
    $tableType = $_POST['tableValue'];
    $date = $_POST['Date'];
    $noOfPeople = $_POST['people'];
    $specialRequest = $_POST['Request'];


echo "the id is $id";


    $db = new mysqli('localhost', 'root', '', 'resturant');


    $updateQry = "UPDATE resrvation SET " .
        "id = '$id', " .
        "name = '$name', " .
        "tableType = '$tableType', " .
        "date = '$date', " .
        "noOfPeople = '$noOfPeople', " .
        "specialRequest = '$specialRequest' " .
        "WHERE id = '$id'";


    $db->query($updateQry);

    


}


?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
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
<body class="bg-dark">
<!--Reservation-->
<div id="reservation" >
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="video ">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=iKDSykOZjM0" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-warning fw-normal">Reservation</h5>
                    <h1 class="text-white mb-4">Book A Table Online</h1>
                    <form action="edit.php" method="post"><!--reservation form -->


                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input style="display: none" name="id" type="hidden" class="form-control" value="<?php echo $ID; ?>">

                                </div>
                            </div>




                            <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="resName" type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">New Name</label>
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
                                    <label for="datetime">New Date & Time</label>
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
                                <button name="BTN" class="btn btn-warning w-100 py-3" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end Reservation-->

</body>
</html>



<?php


?>



