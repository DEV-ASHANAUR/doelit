<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:login.php');
    }
    require 'connection.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `simple` WHERE id = '$id'";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while ($row = $result->fetch_object()) {
                $id = $row->id;
                $name = $row->name;
                $email = $row->email;
                $phone = $row->phone;
                $district = $row->district;
                $gender = $row->gender;
                // $hobby = explode(',',$row->hobby);
                // print_r($hobby);
                $hobby = $row->hobby;
                $message = $row->message;
            }
        }
        
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details hello page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">Details Information <a class="btn btn-primary btn-sm" href="show.php">Show</a></h2>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td><?php echo $name;?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $email;?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?php echo $phone;?></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td><?php echo $district;?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $gender;?></td>
                    </tr>
                    <tr>
                        <td>Hobby</td>
                        <td><?php echo $hobby;?></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td><?php echo $message;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>