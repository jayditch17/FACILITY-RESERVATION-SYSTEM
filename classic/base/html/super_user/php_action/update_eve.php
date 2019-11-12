<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$firstName = $lastName = $org = $eve = $ven = $part = $sd = $ed = $st = $et ="";
//$name_err = $address_err = $salary_err = "";
$firstName_err = $lastName_err = $org_err = $eve_err = $ven_err = $part_err = $sd_err = $ed_err = $st_err = $et_err ="";
 
// Processing form data when form is submitted
if(isset($_POST["eventID"]) && !empty($_POST["eventID"])){
    // Get hidden input value
    $eventID = $_POST["eventID"];
    
                        $input_fname = trim($_POST["firstName"]);
                        if(empty($input_fname)){
                            $firstName_err = "Please enter a name.";
                        } elseif(!filter_var($input_fname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
                            $firstName_err = "Please enter a valid name.";
                        } else{
                            $firstName = $input_fname;
                        }
                        
                        $input_lname = trim($_POST["lastName"]);
                        if(empty($input_lname)){
                            $lastName_err = "Please enter a name.";
                        } elseif(!filter_var($input_lname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
                            $lastName_err = "Please enter a valid name.";
                        } else{
                            $lastName = $input_lname;
                        }

                        $input_org = trim($_POST["org"]);
                        if(empty($input_org)){
                            $org_err = "Please enter a name.";
                        } elseif(!filter_var($input_org, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
                            $org_err = "Please enter a valid name.";
                        } else{
                            $org = $input_org;
                        }

                        $input_eve = trim($_POST["eve"]);
                        if(empty($input_eve)){
                            $eve_err = "Please enter a name.";
                        } elseif(!filter_var($input_eve, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
                            $eve_err = "Please enter a valid name.";
                        } else{
                            $eve = $input_eve;
                        }

                        $input_ven = trim($_POST["ven"]);
                        if(empty($input_ven)){
                            $ven_err = "Please enter a name.";
                        } else{
                            $ven = $input_ven;
                        }
                        $input_part = trim($_POST["part"]);
                        if(empty($input_part)){
                            $part_err = "Please enter a name.";
                        } else{
                            $part = $input_part;
                        }
                        $input_sd = trim($_POST["sd"]);
                        if(empty($input_sd)){
                            $sd_err = "Please enter a name.";
                        } else{
                            $sd = $input_sd;
                        }
                        $input_ed = trim($_POST["ed"]);
                        if(empty($input_ed)){
                            $ed_err = "Please enter a name.";
                        } else{
                            $ed = $input_ed;
                        }
                        $input_st = trim($_POST["st"]);
                        if(empty($input_st)){
                            $st_err = "Please enter a name.";
                        } else{
                            $st = $input_st;
                        }
                        $input_et = trim($_POST["et"]);
                        if(empty($input_et)){
                            $et_err = "Please enter a name.";
                        } else{
                            $et = $input_et;
                        }
    
    // Check input errors before inserting in database
    if(empty($firstName_err) && empty($lastName_err) && empty($org_err) && empty($eve_err) && empty($ven_err) && empty($part_err) && empty($sd_err) && empty($ed_err) && empty($st_err) && empty($et_err)){
        // Prepare an update statement
        $sql = "UPDATE events SET firstName=?, lastName=?, eventOrg=?, actEve=?, actVenue=?, numPart=?, startDate=?, endDate=?, startTime=?, endTime=? WHERE eventID=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssi", $param_fname, $param_lName, $param_org, $param_eve, $param_ven, $param_part, $param_sd, $param_ed, $param_st, $param_et, $param_eventID);
            
            // Set parameters
            $param_fname = $firstName;
             $param_lName = $lastName;
             $param_org = $org;
             $param_eve = $eve;
             $param_ven = $ven;
             $param_part = $part;
              $param_sd = $sd;
              $param_ed = $ed;
              $param_st = $st;
              $param_et = $et;
              $param_eventID = $eventID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: ../events.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.". mysqli_error($link);
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["eventID"]) && !empty(trim($_GET["eventID"]))){
        // Get URL parameter
        $eventID =  trim($_GET["eventID"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM events WHERE eventID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_eventID);
            
            // Set parameters
            $param_eventID = $eventID;
            
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
                $org = $row["eventOrg"];
                $eve = $row["actEve"];
                $ven = $row["actVenue"];
                $part = $row["numPart"];
                $sd = $row["startDate"];
                $ed = $row["endDate"];
                $st = $row["startTime"];
                $et = $row["endTime"];

                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.". mysqli_error($link);
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                       <div class="form-group <?php echo (!empty($firstName_err)) ? 'has-error' : ''; ?>">
                            <label>First Name</label>
                            <input type="text" name="firstName" class="form-control" value="<?php echo $firstName; ?>">
                            <span class="help-block"><?php echo $firstName_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($lastName_err)) ? 'has-error' : ''; ?>">
                            <label>Last Name</label>
                            <input type="text" name="lastName" class="form-control" value="<?php echo $lastName; ?>">
                            <span class="help-block"><?php echo $lastName_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($org_err)) ? 'has-error' : ''; ?>">
                            <label>Organization</label>
                            <input type="text" name="org" class="form-control" value="<?php echo $org; ?>">
                            <span class="help-block"><?php echo $org_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($eve_err)) ? 'has-error' : ''; ?>">
                            <label>Event</label>
                            <input type="text" name="eve" class="form-control" value="<?php echo $eve; ?>">
                            <span class="help-block"><?php echo $eve_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($ven_err)) ? 'has-error' : ''; ?>">
                            <label>Venue</label>
                            <input type="text" name="ven" class="form-control" value="<?php echo $ven; ?>">
                            <span class="help-block"><?php echo $ven_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($part_err)) ? 'has-error' : ''; ?>">
                            <label>Number of Participants</label>
                            <input type="text" name="part" class="form-control" value="<?php echo $part; ?>">
                            <span class="help-block"><?php echo $part_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sd_err)) ? 'has-error' : ''; ?>">
                            <label>Start Date</label>
                            <input type="text" name="sd" class="form-control" value="<?php echo $sd; ?>">
                            <span class="help-block"><?php echo $sd_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($ed_err)) ? 'has-error' : ''; ?>">
                            <label>End Date</label>
                            <input type="text" name="ed" class="form-control" value="<?php echo $ed; ?>">
                            <span class="help-block"><?php echo $ed_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($st_err)) ? 'has-error' : ''; ?>">
                            <label>Start Time</label>
                            <input type="text" name="st" class="form-control" value="<?php echo $st; ?>">
                            <span class="help-block"><?php echo $st_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($et_err)) ? 'has-error' : ''; ?>">
                            <label>End Time</label>
                            <input type="text" name="et" class="form-control" value="<?php echo $et; ?>">
                            <span class="help-block"><?php echo $et_err;?></span>
                        </div>

                        <input type="hidden" name="eventID" value="<?php echo $eventID; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../events.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>