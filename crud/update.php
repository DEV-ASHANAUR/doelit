<?php
    require 'connection.php';
    
    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $id = $_POST['id'];
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $district = $_POST['district'];
        $gender = $_POST['gender'];
        $hobby = ($_POST['hobby'])?implode(',',$_POST['hobby']):'';
        $message = test_input($_POST['message']);

        if($name != '' && $email != '' && $phone != '' && $district != '' && $gender != '' && $hobby != '' && $message != ''){
           
            $sql = "UPDATE `simple` SET `name`='$name',`email`='$email',`phone`='$phone',`district`='$district',`gender`='$gender',`hobby`='$hobby',`message`='$message' WHERE id = '$id'";

            if($con->query($sql) == true){
                header('location:edit.php?id='.$id.'&update=success');
            }else{
                echo 'something went worng';
            }



        }else{
            header('location:edit.php?id='.$id.'&valid=error');
        }

    }else{
        header('location:edit.php');
    }





?>