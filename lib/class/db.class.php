<?php

class db {
    public static function makeconnnection(){
    $servername = "localhost";
    $usernames = "root";
    $passwords = "agri";
    $dbname = "agricreation_login";
    $con = new mysqli($servername, $usernames, $passwords, $dbname);
    // $status = "status";
    // if($status){
    //     echo "Connected";
    // }
    }



    // public static function makeconn(){
    // $servername = "localhost";
    // $usernames = "root";
    // $passwords = "agri";
    // $dbname = "agricreation_login";
    // $con = mysqli_connect($servername, $usernames, $passwords, $dbname);
    // }
}

db::makeconnnection();