<?php
session_start();


error_reporting(0);

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$mobile=$_POST['mobile'];



// connection to mysql database
$con=mysqli_connect("localhost","root","") or die("could't connect the database");



//database creation
$c="create database puzzels";
$res=mysqli_query($con,$c);


 
// how to select database 
$res=mysqli_select_db($con,"puzzels");




//creation table
$c="create table register(id int NOT NULL auto_increment primary key,name varchar(30) NOT NULL,email varchar(20) NOT NULL,pass varchar(20) NOT NULL,cpass varchar(20) NOT NULL,mobile bigint)";

$res=mysqli_query($con,$c);



//Insertion
if(isset($_POST["signup"]))
{
  if(empty($name)||empty($email)||empty($pass)||empty($cpass)||empty($mobile))
  {
      echo "<script>alert('Any Feild must not be empty');</script>";
  }
  else {
 $ins="insert into register (name,email,pass,cpass,mobile) values('$name','$email','$pass','$cpass','$mobile')";
 $res = mysqli_query($con,$ins);
 echo "<script>alert('Account Created Please Login...');</script>";
  }   
}   
   
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzels</title>
    <link rel="stylesheet" href="./login/style.css" />
    
</head>
<body>
    
 <div class="container-fluid" style="margin:40%">
    <div class="row">
    <a href="index.php"> <button type="submit" class="btn btn-danger btn-lg float-right"  >Sign In</button></a>
      <div class="col">
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
            <div class="row">
              <div class="col">
                 <h1>Sign Up</h1>

                <form action="" method="post" >
                    <div class="form-control">
                         <input type="text" name="name" id="name" required>
                         <label>Name</label>
                    </div>
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
                    <div class="form-control">
                         <input type="password" name="cpass" required>
                         <label>Confirm Password</label>
                    </div>
                    <div class="form-control">
                         <input type="number" name="mobile" required>
                         <label>Mobile number</label>
                    </div>


                    <!-----bUttoon--->
                    <button type="submit" value="Sign Up" name="signup" id="signup" class="btn">Sign Up</button>
                    <p class="text-center">Read <a href="#">Terms & Conditions</a> </p>
     
                </form>
              </div>
            </div>
         </div>
       </div>
     </div>
   </div> 
   



       
       <script src="./login/script.js"></script>
    
</body>
</html>