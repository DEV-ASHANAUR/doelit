<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'doel';

    $con = new mysqli($host,$user,$pass,$db);

    if($con->connect_error){
        die('Connection error'.$con->connect_error);
    }

?>