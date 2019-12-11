<?php

    error_reporting(E_ALL & E_NOTICE);
    session_start();

    if(isset($_SESSION['username']))
    {
        $username = ucfirst($_SESSION['username']);

        if(isset($_POST['submit']))
        {
            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $content = $_POST['content'];


            include_once ("Blog_Connect.php");
            $sql = "INSERT INTO blog (title,subtitle,content) VALUE ('$title','$subtitle','$content')";

            mysqli_query($dbCon,$sql);

            echo "Blog Posted";

        }




    }
    else{
        headed('Location:Blog_Login.php');
        die();
    }



?>
<!DOCTYPE html>
<html>
<head>

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    </head>
<body>
<div class="page-header">
    <h1>Welcome &nbsp;<?php echo $username?>!</h1>
</div>
<form action="Blog_Admin.php" method="post">

    <div class="col-md-6 col-md-offset-3 form-class">
        Title :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="title">
    </div>

    <div class="col-md-6 col-md-offset-3 form-class">
        Subtitle : <input type="text" name="subtitle">
    </div>

    <div class="col-md-6 col-md-offset-3 form-class">
        Content : <textarea name="content"></textarea>
    </div>
    <div class="col-md-6 col-md-offset-3 form-class">
        <input type="submit" name="submit" value="submti">
    </div>

</form>
<a href="index.php" class="btn btn-primary">Back to Website</a>

<br>

<a href="Blog_index.php">View Blog</a> | <a href="Blog_Logout.php">Logout</a>
</body>
</html>

