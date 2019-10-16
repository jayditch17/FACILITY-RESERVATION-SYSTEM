<?php 
    session_start();
    // DB credentials.
    $host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "db_itproject2";
    $message = "";
    // Establish database connection.
    try 
    {
        $db = new PDO("mysql:host=$host; dbname=$db_name", $db_user, $db_pass);  
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST["login"]))  
        {  
             if(empty($_POST["email"]) || empty($_POST["password"]))  
             {  
                  $message = '<label>All fields are required</label>';  
             }  
             else  
             {  
                  $query = "SELECT * FROM guest_user WHERE email = :email AND password = :password"; 
                  $statement = $db->prepare($query);  
                  $statement->execute(  
                       array(  
                            'email'     =>     $_POST["email"],
                            'password'     =>     $_POST["password"]  
                       )  
                  );
                  $count = $statement->rowCount(); 
                  if($count > 0)  
                  {  
                       $_SESSION["email"] = $_POST["email"];
                       $_SESSION['name'] = $name;
                       header("location:../guest_user/guest_user.php"); 
                  }  
                  else  
                  {  
                       $message = "<label>Account doesn't exist! </label>";  
                  }  
             }  
        }  
   }  
   catch(PDOException $error)  
   {  
        $message = $error->getMessage();  
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signin.css" >
    <link rel="stylesheet" type="text/css" href="css/custom.css" >
    <title>Facility Reservation System</title>
</head>
<body class="text-center">
<form class="form-signin" data-gr-c-s-loaded="true" method="POST">
    <img class="mb-2 rounded-circle" src="images/logo/samcis_logo.jpg" alt="" width="82" height="82">
    <h1 class="h3 mb-3 font-weight-normal">Facility Reservation System</h1>
    <h1 class="h4 mb-3 font-weight-normal">Login</h1>
    <?php
    if(isset($message)){
        echo'<label class="text-danger">'.$message.'</label>'; 
    }
    ?>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name = "email" id="email" class="form-control mb-2" placeholder="Email address" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name = "password" id="password" class="form-control mb-2" placeholder="Password" required="">
    <div class="checkbox">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
    </div>
    <input type="submit" name="login" class="btn btn-primary" value="Log in"/>
    <p class="mt-1 mb-1 text-primary"><a href="#">forgot password?</a></p>
    <p class="mt-2 mb-1">&copy; 2019</p>
</form>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>