<?php
    session_start();
    include 'main.php';
    include 'Flash_data.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:change_pass.php');
    }else{
        $id = $_SESSION['id'];
        $cur_pass = md5($_POST['cur_pass']);
        $new_pass = md5($_POST['new_pass']); 
        
        $id = $_SESSION['id'];
        $profile_data = $obj->profile_retrive($id);
            if($profile_data->num_rows>0){
            while($row = $profile_data->fetch_object()){
                $db_pass = $row->user_password;
            }
            if($db_pass === $cur_pass){
                $status = $obj->change_pass($new_pass,$id);
                if($status == true){
                    Flass_data::success("Password Changed SuccessFully");
                    header('location:edit_profile.php');
                }else{
                    Flass_data::error("Something Went Wrong!");
                    header('location:change_pass.php');
                }
            }else{
                Flass_data::error("Your Current Password Is Wrong!");
                header('location:change_pass.php');
            }
        }
    
            
    }


?>