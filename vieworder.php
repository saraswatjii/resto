<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view order</title>
</head>
<body>
<h1 align="center">PENDING ORDERS</h1>
    <table border='1px' cellspacing = 0 width='100%'>
        <thead>
            <tr>
                <th>name</th>
                <th>number</th>
                <th>order</th>
                <th>quantity</th>
                <th>details</th>
                <th>time</th>
                <th>address</th>
            </tr>
        </thead>
        <?php 
            include('config_db.php');
             $sql =  "SELECT * FROM form";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td> <?= $row['customer_name'] ?></td>
                <td> <?= $row['customer_number'] ?></td>
                <td> <?= $row['order_quantity'] ?></td>
                <td> <?= $row['order'] ?></td>
                <td> <?= $row['customer_details'] ?></td>
                <td> <?= $row['pickup_time'] ?></td>
                <td> <?= $row['customer_address'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>