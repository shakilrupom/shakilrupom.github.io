<?php
require_once ("../../../vendor/autoload.php");
use App\Utility\Utility;
$obj = new \App\Road\Road();
$obj->setData($_GET);
$obj->trash();
Utility::redirect("trashed.php");

