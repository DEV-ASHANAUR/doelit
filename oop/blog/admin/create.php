<?php
    include 'main.php';
    include 'Flash_data.php';
    session_start();
    $obj = new Main();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $status = $obj->reg($name,$email,$password);

        if($status == true){
            Flass_data::success("Account Created Success! Please Login!");
            header('location:login.php');
        }else{
            Flass_data::error("Dublicate Email Not Allow!");
            header('location:register.php');
        }
    }else{
        header('location:register.php');
    }




?>