<?php

error_reporting(E_ALL & E_NOTICE);
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
    <h1 style="text-align: center;">Latest Blog</h1>

    <?php

        include_once ("Blog_Connect.php");
        $sql = "SELECT * FROM blog ORDER BY id DESC";

        $result = mysqli_query($dbCon , $sql);

        while($row = mysqli_fetch_array($result))
        {
            $title = $row['title'];
            $subtitle = $row['subtitle'];
            $content = $row['content'];
            ?>
    <h2><?php echo $title; ?>&nbsp;<small><?php echo $subtitle; ?></small></h2>
    <p><?php echo $content ; ?></p>
    <hr/>

    <?php
        }
    ?>
<br/>
<a href="Blog_Admin.php" class="btn btn-primary">Write Blog</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="btn btn-success">Back To Website</a>
</body>
</html>
