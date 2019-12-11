<?php
/**
 * Created by PhpStorm.
 * User: Cappuccino
 * Date: 7/7/2017
 * Time: 9:26 AM
 */

namespace App\Message;

if(!isset($_SESSION)) session_start();
class Message
{









    public static function message($message=null)
    {
        if(is_null($message)){

            $message = self::getMessage();
            return $message;
        }
        else{
            self::setMessage($message);
        }

    }
    public static function setMessage($message){

        $_SESSION['message'] = $message;
    }
    public static function getMessage(){

        if(isset($_SESSION['message'])) $_message = $_SESSION['message'];
        else $_message='';

        $_SESSION['message'] = "";
        return $_message;
    }

}
