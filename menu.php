<?php 
session_start();

if( isset( $_SESSION['user'] ) ){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container ">
        <div class="row">
            <div class="col-2 offset-10 mt-5 text-right">
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
<?php
include 'config.php';
//Retrieves menu items from the "pizza_menu" table in the database.

$sql = "SELECT * FROM pizza_menu";
$result = $conn->query($sql);
?>
 <!-- Displaying the menu items fetched from the database -->
<div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">
    
    <?php
        if ($result->num_rows > 0) {
            // Output an HTML table            
        
            while ($row = $result->fetch_assoc()) { ?> 
             <!-- Displaying each menu item -->
            <div class="menu_card">
                <div class="menu_image">
                <?php echo "<img src=' ".'admin/'. $row['image_path'] . "'>"?>
                
                </div>
                <div class="menu_info">
                    <h2><?php echo  $row['name'] ; ?></h2>
                    
                    <h3>Rs. <?php echo  $row['price'] ; ?></h3>
                    
                    <?php 
                    // session_start();
                    if(  !empty( $_SESSION['username'] )  == 'admin' ) {
                        echo "
                        <a href='admin/index.php?id=" . $row['id'] . "' class='menu_btn '  >order now </a>"; 
                        
                        
                    } else {
        
                        ?>
                        <a href="order.php?price=<?php echo $row['price']; ?>&id=<?php echo $row['id']; ?>&name=<?php echo $_SESSION['user']; ?>&order_name=<?php echo $row['name']; ?>"><button class="menu_btn order_btn" id="order_btn">order now</button></a>
                       
                         <?php
                    }
                    ?>                    
                </div>
            </div> 

            
        <?php }
        } 

        
// Close the database connection
$conn->close();
    }
    else{
        header( "Location: http://localhost/project/final/login.php");
    }
?>
            
        </div>

    </div>

    <script type="text/javascript">
        const orderBtns = document.querySelectorAll(".order_btn");
        orderBtns.forEach(function(orderBtn) {
            orderBtn.addEventListener("click", function()  {
                alert("Order Successfully!!!");
             
            })
        })

        
    </script>
</body>
</html>