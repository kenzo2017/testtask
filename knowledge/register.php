<?php include 'db.php'; 
$firstNameErr = $lastNameErr = $emailErr = "";
$firstName = $lastName = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $nameErr = "First name is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firstNameErr = "Only letters and white space allowed"; 
    }
  }
        if (empty($_POST["lastName"])) {
    $nameErr = "Last name is required";
  } else {
    $lastName = test_input($_POST["lastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lastNameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
    if($login->register($firstName,$lastName,$email)){
        header("Location:register.php?msz");
        
        
    }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta discription="dating site" content ="width = device-width initial-scale = 1.0">
        <link rel="stylesheet" href="mystyle.css">
        <title>Itsok sign Up Form</title>
        <style>.error{color: #FF0000;}</style>
    </head>
    <body>
        <div class="wrap">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h2 style="color: white">Sign Up Form</h2>
                <input type="text" name="firstName" placeholder="Enter First Name" value="<?php echo $firstName;?>" required>
                <span class="error">* <?php echo $firstNameErr;?></span>
                <input type="text" name="lastName" placeholder="Enter Last Name" value="<?php echo $lastName;?>" required>
                <span class="error">* <?php echo $lastNameErr;?></span>
                <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email;?>" required>
                <span class="error">* <?php echo $emailErr;?></span>
                
                <input type="password" name="password" placeholder="Enter password">
                <input type="password" name="confirmpassword" placeholder="Reconfirm your password">
                <div class="radio">
                <input type="radio" name="male" value="male">Male
                <input type="radio" name="female" value="female">Female
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        
    </body>
</html>