<?php

$server='localhost';
$username='root';
$password='';
$db='blogdb';

try{
    $conn=new PDO(
        "mysql:host=$server;dbname=$db",
        $username,
        $password
    );
    //set the error mode to exception
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "Connected Successfully";
}catch(PDOException $e){
    "Connection Failed : ". $e->getMessage();
}




?>
