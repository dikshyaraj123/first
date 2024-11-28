<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
    </head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-4 offset-4 my-5 login-two">
            <h2 class="text-center my-3" >Login</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" name="username" id="username" required>               
            </div>
            <div class="mb-3">
                <label for="Password1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="Password1" required>
            </div>
            <div class="mb-2 d-flex justify-content-between">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            <a href=" register.php" class="btn btn-primary ">create new</a>
            </div>
        </form>
        
        </div>
    </div>
</div>

<?php

if( isset( $_POST["login"] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    session_start();

    
    $_SESSION['pass'] = $password;
    
    
    if( $username == 'admin' && $password == 12345 ){
         // Redirect to admin page if credentials match
    $_SESSION['user'] = $username;
    header('location: http://localhost/project/final/admin/index.php');
} else {  
     // Check user credentials from the database
    include "config.php";
    $sql1 = "SELECT * FROM user";
        $result1 = mysqli_query($conn, $sql1);
        if( mysqli_num_rows($result1) > 0 ){
            while ($row1 = mysqli_fetch_assoc($result1)) {
                // Check if username and password match database entry
                if( $row1['username'] == $_POST['username'] && $row1['password'] == $_POST['password']) {
                    $_SESSION['user'] = $row1['username'];
                    // $_SESSION['user_name'] = $row1['username'];
                    header('location: http://localhost/project/final/menu.php');
                } 
            }
           
                // Display error if credentials do not match any database entry
                echo "<div class='text-danger text-center'>Username and Password are not matched!!!</div>"; 
          
        }
    
}
}



?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    
  </body>
</html>
