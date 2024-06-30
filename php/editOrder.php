<?php

$ID=$_GET['id'];


if (isset($_POST['BTN'])) {



    $id=$_POST['id'];
    $name = $_POST["orderName"];
    $phone = $_POST['orderPhone'];
    $address = $_POST['orderAddress'];
    $details = $_POST['orderDetails'];
    $method = $_POST['method'];


    echo "the id is $id";


    $db = new mysqli('localhost', 'root', '', 'resturant');


    $updateQry = "UPDATE online_order SET " .
        "id = '$id', " .
        "full_name = '$name', " .
        " phone= '$phone', " .
        "address = '$address', " .
        "details = '$details', " .
        "payment_method = '$method' " .
        "WHERE id = '$id'";


    $db->query($updateQry);




}?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit your order</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesOrder.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center text-warning">Online Food Delivery</h1>
    <form action="editOrder.php" method="post" id="food-delivery-form">


        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input name="id" type="hidden" class="form-control" value="<?php echo $ID; ?>">

                </div>
            </div>


        <div class="form-group">
            <label class="text-light" for="name">Full Name</label>
            <input name="orderName" type="text" class="form-control" id="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label class="text-light" for="phone">Phone Number</label>
            <input name="orderPhone" type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label class="text-light" for="address">Delivery Address</label>
            <input name="orderAddress" type="text" class="form-control" id="address" placeholder="Enter your delivery address" required>
        </div>
        <div class="text-light" class="form-group">
            <label class="text-light" for="order">Order Details</label>
            <textarea name="orderDetails" class="form-control" id="order" rows="3" placeholder="Enter your order details" required></textarea>
        </div>
        <div class="form-group">
            <label class="text-light" for="payment">Payment Method</label>
            <select name="method" class="form-control" id="payment" required>
                <option value="">Select a payment method</option>
                <option value="credit_card">Credit Card</option>
                <option value="debit_card">Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="cash_on_delivery">Cash on Delivery</option>
            </select>
        </div>
        <button name="subOrder" type="submit" class="btn btn-warning">Submit Order</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
