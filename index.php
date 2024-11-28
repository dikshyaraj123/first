<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section id="Home">
        <nav>
            <div class="logo">
                <img src="images/logos.webp">
            </div>
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="#Gallary">Gallery</a></li>

            </ul>

            <div class="login-one">
                <a href="login.php">Login</a>
            </div>

        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Hungry? Order<span>Pizza</span><br>& solve your problems.</h1><br><br>
                <h2>"Order <span> pizza<br></span>& enjoy the taste of happiness."</h2>
            </div>

            <div class="main_image">
                <img src="images/pb.png">
            </div>

        </div>

    </section>



    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="images/a1.jpeg">
            </div>

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Why Choose us?</h3>
                <p><b>We're a team of pizza lovers who are passionate about making the best pizza possible. We believe that pizza is more than just food. It's a way to bring people together and create memories. That's why we're so committed to providing our customers with a great dining experience.
                        <br>Our online pizza ordering system is the best way to get your favorite pizzas delivered to your door.
                        We offer a wide variety of pizzas to choose from, so you're sure to find something you'll love.
                        Our pizzas are made with fresh, high-quality ingredients, and we offer a variety of crusts, and toppings to create a truly custom pizza experience.</b>
                </p>
            </div>

        </div>


    </div>
    <!--Menu-->

    <?php
    include 'config.php';

    $sql = "SELECT * FROM pizza_menu";
    $result = $conn->query($sql);
    ?>
    <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">

            <?php
            if ($result->num_rows > 0) {
                // Output an HTML table            

                while ($row = $result->fetch_assoc()) { ?>
                    <div class="menu_card">
                        <div class="menu_image">
                            <?php echo "<img src=' " . 'admin/' . $row['image_path'] . "'>" ?>
                        </div>
                        <div class="menu_info">
                            <h2><?php echo  $row['name']; ?></h2>

                            <h3>Rs. <?php echo  $row['price']; ?></h3>

                            <a href="login.php" class="menu_btn">Order Now</a>
                        </div>
                    </div>
            <?php }
            }

            ?>


        </div>

    </div>
    <!--Gallary-->

    <div class="gallary" id="Gallary">
        <h1>Our<span>Gallery</span></h1>
        <div class="gallary_image_box">

            <?php
            $sql = "SELECT * FROM gallery";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output an HTML table

                while ($row = $result->fetch_assoc()) {  ?>
                    <div class="gallary_image">
                        <img src="admin/<?php echo $row['image_path']; ?>">
                    </div>
            <?php
                }
            }
            ?>
        </div>

    </div>
    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Kathamndu</p>
                <p>Bhakatapur</p>
                <p>Lalitpur</p>
                <p>Bnaeshwor</p>
                <p>Koteshwor</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                <p>Gallery</p>
                <p>Order</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+977 9810103456</p>
                <p>+977 9812345678</p>
                <p>prajina123@gmail.com</p>
                <p>dikshya123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Delivery</p>
              
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

    

    </footer>




</body>

</html>