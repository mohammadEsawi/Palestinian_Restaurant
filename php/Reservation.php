<?php
session_start();
$db=new mysqli("localhost","root","","resturant");



$qry="SELECT * FROM resrvation";
$result=$db->query($qry);

//$row=$result->fetch_assoc();





?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservations</title>




    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="bg-dark">

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">Reservations</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <td> ID </td>
                            <td> userName </td>
                            <td> name </td>
                            <td> tableType </td>
                            <td> date </td>
                            <td> noOfPeople </td>
                            <td> specialRequest </td>
                            <td>Edit</td>
                            <td>Delete</td>

                        </tr>


                        <tr >
                        <?php

                        while ($row=$result->fetch_assoc()){

                            ?>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["userName"]?></td>
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["tableType"]?></td>
                            <td><?php echo $row["date"]?></td>
                            <td><?php echo $row["noOfPeople"]?></td>
                            <td><?php echo $row["specialRequest"]?></td>

                            <td><?php echo "<a target='_blank' class='btn btn-primary' href='edit.php?id=$row[id]'>Edit</a>"?></td>
                            <td><?php echo "<a  class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>"?></td>


                        </tr>
                        <?php
                        }

                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>