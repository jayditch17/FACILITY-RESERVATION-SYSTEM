<?php
// Check existence of id parameter before processing further
if(isset($_GET["officeID"]) && !empty(trim($_GET["officeID"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM account_office WHERE officeID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["officeID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $firstName = $row["firstName"];
                $lastName = $row["lastName"];
                $dept = $row["depOfc"];
                $email = $row["email"];
                $pass = $row["password"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>ID:</label>
                        <p class="form-control-static"><?php echo $row["officeID"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>First Name:</label>
                        <p class="form-control-static"><?php echo $row["firstName"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <p class="form-control-static"><?php echo $row["lastName"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Department:</label>
                        <p class="form-control-static"><?php echo $row["depOfc"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <p class="form-control-static"><?php echo $row["email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <p class="form-control-static"><?php echo $row["password"]; ?></p>
                    </div>
                    <p><a href="../office_account.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>