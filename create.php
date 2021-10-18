<?php

require_once "config.php";

$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
  
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
   
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
       
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
         
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong.";
            }
        }
         
        
        mysqli_stmt_close($stmt);
    }
    
   
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Employee Record</title>
    <link rel="stylesheet" href="style.css">
    
 
</head>
<body>
    <div class="wrap">
        <div>
            <div>
                <div>
                    <h2>Create Employee Record</h2>
                    <p>Please fill this form with the employees name, address, and salary and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div>
                            <label class='label'>Name:</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span><?php echo $name_err;?></span>
                        </div>
                        <div>
                            <label class='label'>Address:</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span><?php echo $address_err;?></span>
                        </div>
                        <div>
                            <label class='label'>Salary:</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn" value="Submit">
                        <a href="index.php" ><button class="btn">cancel</button> </a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>