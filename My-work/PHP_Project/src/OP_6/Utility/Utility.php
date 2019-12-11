<?php
/**
 * Created by PhpStorm.
 * User: Cappuccino
 * Date: 7/7/2017
 * Time: 9:27 AM
 */

namespace App\Utility;


class Utility
{








    public static function d($data){

        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
    public static function dd($data){

        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }
    public static function redirect($data){

        header('Location:'.$data);
    }

}
