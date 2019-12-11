<?php
require_once ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Message\Message;

$obj  =  new \App\Road\Road();

$obj->setData($_GET);

$singleData =  $obj->view();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="../../../resource/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../../../resource/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../../../resource/bootstrap/js/bootstrap.min.js"></script>


    <style>

        h1{
            text-align: center;

        }

        #message{
            background-color: #2aabd2;
            text-align: center;
        }

        h2{
            font-family:"Book Antiqua";
        }
        #lik {
            margin-left: 320px;
            margin-top: -58px;
            font-family: Bodoni MT;

        }
        #link{
            font-size: 17px;
            color: darkblue;

        }

        #link:hover{
            background-color:whitesmoke;
            font-size: 20px;
            font-family:daibannasilbook;
            color: crimson;
        }
        #likk{
            font-size:50px;
            text-align: left;
            color: orangered;
            font-family: Bodoni MT;
            font-style: oblique;
        }
        .page-header{
            margin-top:10px;
        }

    </style>


</head>
<body>

<div class="templete">


<h1> Single Information - Client </h1>

<div class="container">
    <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left">&nbsp;Back</a>
    <div class="page-header">


            <table class="table table-bordered table-striped">

                <?php

                echo "

                        <tr><td>ID:</td><td>$singleData->id</td> </tr>
                        <tr><td>Name:</td> <td>$singleData->name</td> </tr>
                        <tr><td>Email:</td> <td>$singleData->email</td> </tr>
                        <tr><td>Telephone:</td> <td>$singleData->telephone</td> </tr>
                        <tr><td>Member:</td> <td>$singleData->member</td> </tr>
                        <tr><td>From:</td> <td>$singleData->fromWhere</td> </tr>
                        <tr><td>To:</td> <td>$singleData->toWhere</td> </tr>

                     ";

                ?>


            </table>


        </div>
</div>
</div>


</body>
</html>
