<?php
include ('config_db.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['customer_number'];
    $order = $_POST['customer_order'];
    $quantity = $_POST['order_quantity'];
    $details = $_POST['customer_details'];
    $time = $_POST['pickup_time'];
    $address = $_POST['customer_address'];


    $sql = "INSERT INTO `form` (`customer_name`, `customer_number`, `order_quantity`,`order`, `customer_details`, `pickup_time`, `customer_address`) 
    VALUES
     ('$name', '$number', '$order', '$quantity', '$details', '$time','$address')";
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('order placed successfully!') </script>";
        echo "<script> window.location.href='index.php' </script>";
    } else {
        echo 'server down';
    }
}
?>