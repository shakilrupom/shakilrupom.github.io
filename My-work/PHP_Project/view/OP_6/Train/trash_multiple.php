<?php
require_once ("../../../vendor/autoload.php");
use App\Utility\Utility;



$obj = new \App\Road\Road();

$IDs = $_POST['selectedIDs'];

foreach($IDs as $id) {
    $_GET['id'] = $id;
    $obj->setData($_GET);
    $obj->trash();
}


Utility::redirect("trashed.php")
?>

