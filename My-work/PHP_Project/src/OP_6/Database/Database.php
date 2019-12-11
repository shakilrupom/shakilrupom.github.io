<?php
/**
 * Created by PhpStorm.
 * User: Cappuccino
 * Date: 7/7/2017
 * Time: 9:20 AM
 */

namespace App\Database;

use PDO,PDOException;

class Database
{

public $DBH;

    public function __construct()
    {
        if(!isset($_SESSION)) session_start();

        try {
            $this->DBH = new PDO('mysql:host=localhost;dbname=travel_information_bd', "root", "");

        } catch (PDOException $error) {
            print "Error!: " . $error->getMessage() . "<br/>";
            die();
        }
    }

}
