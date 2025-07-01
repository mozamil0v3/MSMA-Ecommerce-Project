<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['Llname'];
        $number = $_POST['cnum'];
        $address = $_POST['address'];
        $gmail = $_POST['gamil'];
        $password = $_post['password'];

        if(!empty($gamil) && !empty($password) && !is_numeric($gmail))
    {

     $query = "insert into form (fname, lname,cnum,address,email,password) values ('$firstname','$lastname','$cnum','$address','$gmail','$password')";

     mysqli_query($con, $query);

     echo"<script type='text/javascript'> alert('successfully register')</script>";

    }
  else
  {
    echo"<script type='text/javascript'> alert('please enter valid information')</script>";
  }


    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <title>sign up</title>
    </head>
    <body>
        <div class="signup-container">
        <div class="sign-up">
            <h1>sign up</h1>

            <div class="social-icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-discord"></i>
            </div>

            <form method="post">
               <div class="input2-group">
                  <label>First name</label>
                  <input type="text" name="fname" required>
    
                  <label>Last name</label>
                  <input type="text" name="lname" required>
            
                  <label>contact</label>
                  <input type="tel" name="number" required>
               
                  <label>address</label>
                  <input type="text" name="address" required>

                  <label>Email</label>
                  <input type="email" name="email" required>

                  <label>password</label>
                  <input type="password" name="password" required>

                </div>

                <div class="btn2-field">
                    <input type="submit">
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </div>
            </form>
        
            <p>by clicking the sign up buton, you agree to our <a href="#">terms and conditions</a> and <a href="#"> privacy policies</a></p>
      
        <div class="login-link">
        <p>Already have an account? <a href="login.php">login here</a></p>
    </div>
        </div>
    </div>
    </body>
</html>