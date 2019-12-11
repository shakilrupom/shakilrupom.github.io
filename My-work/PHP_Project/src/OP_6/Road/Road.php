<?php
/**
 * Created by PhpStorm.
 * User: Cappuccino
 * Date: 7/7/2017
 * Time: 5:28 PM
 */

namespace App\Road;

use App\Database\Database;
use App\Message\Message;
use App\Utility\Utility;
use PDO;
class Road extends Database
{


    public $id;
    public $name;
    public $email;
    public $telephone;
    public $member;
    public $fromWhere;
    public $toWhere;
    public $date;


    public function setData($postArray){

        if(array_key_exists("id",$postArray)){
            $this->id = $postArray['id'];
        }

        if(array_key_exists("name",$postArray)){
            $this->name = $postArray['name'];
        }

        if(array_key_exists("email",$postArray)){
            $this->email = $postArray['email'];
        }

        if(array_key_exists("telephone",$postArray)){
            $this->telephone = $postArray['telephone'];
        }

        if(array_key_exists("member",$postArray)){
            $this->member = $postArray['member'];
        }

        if(array_key_exists("fromWhere",$postArray)){
            $this->fromWhere = $postArray['fromWhere'];
        }

        if(array_key_exists("toWhere",$postArray)){
            $this->toWhere = $postArray['toWhere'];
        }
        if(array_key_exists("date",$postArray))
        {
            $this->date = $postArray['date'];
        }
    }// end of setData()



    public function store(){

        $name = $this->name;
        $email = $this->email;
        $telephone = $this->telephone;
        $member = $this->member;
        $fromWhere= $this->fromWhere;
        $toWhere= $this->toWhere;
        $date = $this->date;


        $sqlQuery = "INSERT INTO `road_service` ( `name`, `email`,telephone,member,fromWhere,toWhere,date) VALUES ( ?, ?,?,?,?,?,?);";

        $dataArray = array($name, $email,$telephone,$member,$fromWhere,$toWhere,$date );

        $STH =  $this->DBH->prepare( $sqlQuery);

        $result =  $STH->execute($dataArray);


        if($result){

            Message::message("Success! Data has been inserted successfully!");

        }
        else{

            Message::message("Failure! Data has not been inserted due to error!");

        }


    }//end of store () methode


    public function index(){


        $sqlQuery = "select * from road_service where is_trashed='No'";

        $STH = $this->DBH->query($sqlQuery);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $allData = $STH->fetchAll();

        return $allData;

    }//end of index () method


    public function view(){


        $sqlQuery = "select * from road_service where id =".$this->id;

        $STH = $this->DBH->query($sqlQuery);

        $STH-> setFetchMode(PDO::FETCH_OBJ);

        $singleData = $STH->fetch();

        return $singleData;

    }//end of view () method



    public function update(){

        $sqlQuery = "UPDATE road_service SET name = ?, email = ?,telephone=?,member=?,fromWhere=?,toWhere=?,date=? where id= $this->id;";
        $dataArray = array ($this->name, $this->email,$this->telephone,$this->member,$this->fromWhere,$this->toWhere,$this->date);
        $STH = $this->DBH->prepare($sqlQuery);
        $result = $STH->execute($dataArray);
        if($result){

            Message::message("Success! Data has been Update successfully!");

        }
        else{

            Message::message("Failure! Data has not been Update due to error!");

        }

    }// end of update () method


    public function trash(){

        $sqlQuery = "UPDATE road_service SET is_trashed =NOW() where id= $this->id;";


        $result =$this->DBH->exec($sqlQuery);
        if($result){

            Message::message("Success! Data has been Trashed successfully!");

        }
        else{

            Message::message("Failure! Data has not been Trashed due to error!");

        }
    } //End if trash () method

    public function trashed(){
        $sqlQuery = "select * from road_service where is_trashed <>'No'";

        $STH=$this->DBH->query($sqlQuery);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $allData= $STH->fetchAll();
        return $allData;


    }// End of trashed () method

    public function recover(){

        $sqlQuery = "UPDATE road_service SET is_trashed ='No' where id= $this->id;";


        $result =$this->DBH->exec($sqlQuery);
        if($result){

            Message::message("Success! Data has been Recover successfully!");

        }
        else{

            Message::message("Failure! Data has not been Recover due to error!");

        }
    } //End if recover () method

    public function delete(){
        $sqlQuery ="Delete from road_service where id=$this->id;";

        $result = $this->DBH->exec($sqlQuery);

    }//end of delete () method



    public function search($requestArray){
        $sql = "";
        if( isset($requestArray['name']) && isset($requestArray['email']) )  $sql = "SELECT * FROM `road_service` WHERE `is_trashed` ='No' AND (`name` LIKE '%".$requestArray['search']."%' OR `email` LIKE '%".$requestArray['search']."%')";
        if(isset($requestArray['name']) && !isset($requestArray['email']) ) $sql = "SELECT * FROM `road_service` WHERE `is_trashed` ='No' AND `name` LIKE '%".$requestArray['search']."%'";
        if(!isset($requestArray['name']) && isset($requestArray['email']) )  $sql = "SELECT * FROM `road_service` WHERE `is_trashed` ='No' AND `email` LIKE '%".$requestArray['search']."%'";

        $STH  = $this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $someData = $STH->fetchAll();

        return $someData;

    }// end of search()




    public function getAllKeywords()
    {
        $_allKeywords = array();
        $WordsArr = array();

        $allData = $this->index();

        foreach ($allData as $oneData) {
            $_allKeywords[] = trim($oneData->name);
        }

        $allData = $this->index();


        foreach ($allData as $oneData) {

            $eachString= strip_tags($oneData->name);
            $eachString=trim( $eachString);
            $eachString= preg_replace( "/\r|\n/", " ", $eachString);
            $eachString= str_replace("&nbsp;","",  $eachString);

            $WordsArr = explode(" ", $eachString);

            foreach ($WordsArr as $eachWord){
                $_allKeywords[] = trim($eachWord);
            }
        }
        // for each search field block end




        // for each search field block start
        $allData = $this->index();

        foreach ($allData as $oneData) {
            $_allKeywords[] = trim($oneData->email);
        }
        $allData = $this->index();

        foreach ($allData as $oneData) {

            $eachString= strip_tags($oneData->email);
            $eachString=trim( $eachString);
            $eachString= preg_replace( "/\r|\n/", " ", $eachString);
            $eachString= str_replace("&nbsp;","",  $eachString);
            $WordsArr = explode(" ", $eachString);

            foreach ($WordsArr as $eachWord){
                $_allKeywords[] = trim($eachWord);
            }
        }
        // for each search field block end


        return array_unique($_allKeywords);


    }// get all keywords


    public function indexPaginator($page=1,$itemsPerPage=3){


        $start = (($page-1) * $itemsPerPage);

        if($start<0) $start = 0;


        $sqlQuery = "SELECT * from road_service  WHERE is_trashed = 'No' LIMIT $start,$itemsPerPage";


        $STH = $this->DBH->query($sqlQuery);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        $someData  = $STH->fetchAll();

        return $someData;


    }//end indexPagination()


// end of BookTitle Class


















}