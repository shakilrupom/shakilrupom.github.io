<?php


session_start();
session_destroy();

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

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->

</head>
<body>
<div class="page-header">
<!-- site preloader start -->
<h3>You are Logged out</h3>
</div>

<a href="Blog_index.php" class="btn btn-primary">View Blog</a>
<a href="Blog_Login.php" class="btn btn-denger">Login</a>
</body>
</html>
