<?php

session_start();


error_reporting();


if (isset($_POST["login"])) {
    $con = mysqli_connect("localhost", "root", "");

    $c = mysqli_select_db($con,"puzzels");
    $res = mysqli_query($con, $c);


    $_SESSION["email"] = $_POST["email"];
    $_SESSION["pass"] = $_POST["pass"];

    $q = "select * from register where email='$_POST[email]' and pass='$_POST[pass]'";
    $res = mysqli_query($con, $q);

    $c = mysqli_num_rows($res);

    if ($c!= 0) {
        header("location:puzzles.php");
    } 
    else 
    {  
        $var = 'Invalid username & password......';
    }    
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./login/style.css" />
    <title>Puzzels</title>

  </head>
  <body>


    <div class="words word-1">
     <A class="text" style="text-decoration: none; color: rgb(136, 14, 60);" href="index.php"> <span>P</span>
      <span>U</span>
      <span>Z</span>
      <span>Z</span>
      <span>L</span>
      <span>E</span>
      <span>S</span>
      </A>
    </div>

    <div class="container">
      <h1>Please Login</h1>
      <form action="" method="post" >
        <div class="form-control">
          <input type="text" name="email" required>
          <!--label>Email</!--label-->
           <label>
            <span style="transition-delay: 0ms">E</span>
              <span style="transition-delay: 50ms">m</span>
              <span style="transition-delay: 100ms">a</span>
              <span style="transition-delay: 150ms">i</span>
              <span style="transition-delay: 200ms">l</span>
        </label> 
        </div>

        <div class="form-control">
          <input type="password" name="pass" required>
          <label>Password</label>
        </div>

        <button type="submit" name="login" value="Sign IN" id="login" href="puzzles.php" class="btn btn-grad">Log In</button>

        <p class="text">Don't have an account? <a href="register.php" target="blank">Register</a> </p>
        <p class="text-center"> <a href="#">Forgot Password?</a> </p>
      </form>
    </div>

    </div>
    
    <script src="./login/script.js"></script>
  </body>
</html>
