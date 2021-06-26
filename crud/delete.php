<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:login.php');
    }
    require 'connection.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `simple` WHERE id = '$id'";

        if($con->query($sql) == true){
            header('location:show.php?del=success');
        }
    }



?>