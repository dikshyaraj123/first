<?php

include_once("config.php");


// Insert data into orders table
$sql = "INSERT INTO orders(name, orders, price,status) VALUES('{$_GET['name']}', '{$_GET['order_name']}', '{$_GET['price']}', 'Pending')";

// Execute the query
$res = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .row p{
        padding: 20px 0;
    }
    .row a{
        margin-bottom: 20px;
    }
    table{
        margin: auto;
    }
    table tr td{
        border: 1px solid #000;
        padding: 5px;
    }
    table tr th{
        border: 1px solid #000;
        background-color: skyblue;
        color: #000;
        font-size: 25px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h1>Thank You for Your Order!</h1>
                <p>Your order has been successfully placed.</p>
                <a class="btn btn-primary" href="http://localhost/project/final/menu.php">Back to Menu</a>
                <table border="1" width="60%" cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Name</th>
                        <th>Order's Food</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td><?php echo $_GET['name']; ?></td>
                        <td><?php echo $_GET['order_name']; ?></td>
                        <td><?php echo $_GET['price']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
