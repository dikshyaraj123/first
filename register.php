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
            <h2 class="text-center my-3" >Register</h2>
        <form action="admin/login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" name="username" id="username" aria-describedby="emailHelp">               
            </div>
            <div class="mb-3">
                <label for="Email1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="Email1" aria-describedby="emailHelp">               
            </div>

            <div class="mb-3">
                <label for="Password1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="Password1">
            </div>
        
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        </div>
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    
  </body>
</html>
