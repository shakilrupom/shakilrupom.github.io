<?php
require_once ("../../../vendor/autoload.php");

use App\Utility\Utility;

use \App\Road\Road;

$objBookTitle= new Road();

$objBookTitle->setData($_POST);

$objBookTitle->store();


Utility::redirect("index.php");

