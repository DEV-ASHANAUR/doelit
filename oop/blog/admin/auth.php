<?php
    include 'main.php';
    include 'Flash_data.php';
    session_start();
    $obj = new Main();

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $status_check = $obj->checkEmail($email);

        if($status_check->num_rows > 0){
            while($row = $status_check->fetch_object()){
               $id = $row->user_id;
               $name = $row->user_name;
               $db_pass = $row->user_password;
            }
            if($password === $db_pass){
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                header('location:index.php');
            }else{
                Flass_data::error("Invalid Email or Password!");
                header('location:login.php');
            }

        }else{
            Flass_data::error("Invalid Email or Password!");
            header('location:login.php');
        }

        // $status = $obj->reg($name,$email,$password);

        // if($status == true){
        //     Flass_data::success("Account Created Success! Please Login!");
        //     header('location:login.php');
        // }else{
        //     Flass_data::error("Dublicate Email Not Allow!");
        //     header('location:register.php');
        // }
    }else{
        header('location:register.php');
    }




?>