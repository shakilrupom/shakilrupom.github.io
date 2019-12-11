<?php
require_once ("../../../vendor/autoload.php");
$obj = new \App\Road\Road();
use App\Utility\Utility;

$obj->setData($_GET);

$obj->delete();
$path = $_SERVER['HTTP_REFERER'];
Utility::redirect($path);