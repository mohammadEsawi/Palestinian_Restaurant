<?php
session_start();
$db=new mysqli("localhost","root","","resturant");



$qry="SELECT * FROM online_order";
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
    <title>Orders</title>




    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="bg-dark">

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">Orders</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <td> ID </td>
                            <td> userName </td>
                            <td> phone </td>
                            <td> full name </td>
                            <td> address </td>
                            <td> details </td>
                            <td> payment method </td>
                            <td>Edit</td>
                            <td>Delete</td>

                        </tr>


                        <tr >
                            <?php

                            while ($row=$result->fetch_assoc()){

                            ?>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["userName"]?></td>
                            <td><?php echo $row["phone"]?></td>
                            <td><?php echo $row["full_name"]?></td>
                            <td><?php echo $row["address"]?></td>
                            <td><?php echo $row["details"]?></td>
                            <td><?php echo $row["payment_method"]?></td>

                           


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