<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    
    $sql = "SELECT * FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        
        $param_id = trim($_GET["id"]);
        
       
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
               
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
               
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
            } else{
                
                header("error");
                exit();
            }
            
        } else{
            echo "Something went wrong. Please try again.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("Error");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  
  
</head>
<body>
    <div class="wrap">
        <div>
            <div>
                <div>
                    <h1>View Record</h1>
                    <div class='record'>
                        <label class='label'>Name:</label>
                        <p><b><?php echo $row["name"]; ?></b></p>
                    </div>
                    <div class='record'>
                        <label class='label'>Address:</label>
                        <p><b><?php echo $row["address"]; ?></b></p>
                    </div>
                    <div class='record'>
                        <label class='label'>Salary:</label>
                        <p><b><?php echo $row["salary"]; ?></b></p>
                    </div>
                    <a href="index.php" ><button class="btn">Back</button> </a>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
