<?php
$db=new mysqli("localhost","root","","resturant");
$qry="select * from contactnotes";

$result=$db->query($qry);


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>




    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="bg-dark">

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">Notes</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <td> ID </td>
                            <td> userName </td>
                            <td> noteContent </td>


                        </tr>


                        <tr >
                            <?php

                            while ($row=$result->fetch_assoc()){

                            ?>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["userName"]?></td>
                            <td><?php echo $row["noteContent"]?></td>

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