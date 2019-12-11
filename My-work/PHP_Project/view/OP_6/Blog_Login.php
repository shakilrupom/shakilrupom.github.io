<?php
 error_reporting(E_ALL & E_NOTICE);

 session_start();

 if(isset($_POST['submit']))
 {
     $dbUserName = "admin";
     $dbPassword = "password";

     $username = strip_tags($_POST['username']);
     $username = strtolower($username);
     $password = strip_tags($_POST['password']);

     if($username == $dbUserName && $password == $dbPassword)
     {
         $_SESSION['username'] = $username;
         header('Location:Blog_Admin.php');
     }
     else{
         echo "Wrong Username & Password";
     }


 }
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Write Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .form-class{
            margin-top: 10px;
        }

    </style>
</head>
<body>
<div class="" style="color : red;"><h2>User Authentication</h2></div>
<div class="" style="color : blue">
<form action="Blog_Login.php" method="post">

   <div class="col-md-6 col-md-offset-3 form-class">
       Username : <input type="text" name="username">
   </div>
    <div class="col-md-6 col-md-offset-3 form-class">
        Password : <input type="password" name="password">
    </div>
    <div class="col-md-6 col-md-offset-3 form-class">
         <input type="submit" name="submit">
    </div>
</form>
</div>
</body>
</html>
