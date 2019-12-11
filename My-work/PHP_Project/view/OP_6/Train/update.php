<?php

require_once ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Message\Message;



$obj  =  new \App\Road\Road();


$obj->setData($_POST);

$obj->update();


Utility::redirect("index.php");


?>