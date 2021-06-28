<?php
    session_start();
    require 'connection.php';

    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM `login` WHERE email = '$email'";

        $result = $con->query($sql);

        if($result->num_rows > 0){
            while ($row = $result->fetch_object()) {
                $id = $row->id;
                $name = $row->name;
                $password = $row->password;
            }
            if(md5($pass) === $password){
                // $_SESSION['name'] = $name;
                $_SESSION['id'] = $id;
                header('location:show.php');
            }else{
                header('location:login.php?pass=error');
            }

        }else{
            header('location:login.php?fond=error');
        }


    }




?>