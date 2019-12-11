<?php

require_once("../../../vendor/autoload.php");
if(!isset($_SESSION)) session_start();

use App\Message\Message;

$msg = Message::message();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Road service</title>
    <link href="../../../resource/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../../../resource/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/jquery-ui.css">
    <script src="../../../resource/bootstrap/js/jquery.js"></script>
    <script src="../../../resource/bootstrap/js/jquery-ui.js"></script>


    <style type="text/css">
        body{
            background-image:url(image/08.jpg);
            background-color: white;
            background-size: cover;
            color: white;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;

        }

        .from-class{
            margin-top: 20px;
        }


        h1{
            text-align: center;
        }
        .btn{
            width: 100%;
            color: #0f192a;
            font-weight: bold;
            font-size: 20px;

        }

    </style>

</head>
<body>

<div class="col-md-8 col-md-offset-2 from-class">
    <form action="store.php"  method="post" style="border:2px solid white;padding:30px;border-radius:20px;box-shadow: 4px 4px 5px 0px #2a2a2a;" >

        <div class="panel panel-default form-horizontal" >
            <div class="panel-heading"><h3>Make your Reservation:</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-9 form-horizontal" >
                        <div class="form-group">
                            <label for="inputName" class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-4 control-label" >Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Enter your email " name="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputTelephone" class="col-sm-4 control-label" >Telephone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Enter your phone number " name="telephone" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputMember" class="col-sm-4 control-label" >Number of members</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Enter number of members " name="member" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputFrom" class="col-sm-4 control-label" >From</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Enter From where you want to go " name="fromWhere" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputTo" class="col-sm-4 control-label" >To</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Enter where you want to go" name="toWhere" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputDate" class="col-sm-4 control-label" >Date</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Enter the Date" name="date" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-6 col-md-offset-3 col-xs-offset-8">
                        <!--		<input type="submit" name="submit" value="Apply" /> -->
                        <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-send"></span>&nbsp; Send</button>
                    </div>
                </div>

            </div>
        </div>



    </form>
</div>

<script src="../../../resource/bootstrap/js/jquery.js"></script>

<script>


    jQuery(

        function($) {
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
        }
    )
</script>

</body>
</html>


