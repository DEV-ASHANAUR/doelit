<?php
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
                $hobby = explode(',',$row->hobby);
                // print_r($hobby);
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
    <title>Edit page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">simple crud <a class="btn btn-primary btn-sm" href="show.php">Show</a></h2>
                <?php
                    if(isset($_GET['valid']) && $_GET['valid'] == 'error'){
                        ?>
                            <div class="alert alert-danger" role="alert">
                                All Field Are Required!
                            </div>
                        <?php
                    }
                
                ?>

                <?php
                    if(isset($_GET['update']) && $_GET['update'] == 'success'){
                        ?>
                            <div class="alert alert-success" role="alert">
                                SuccessFully Data Updated!
                            </div>
                        <?php
                    }
                
                ?>
                <form action="update.php" method="POST">
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="name">Enter Name</label>
                            <input type="text" value="<?php echo $name?>" name="name" id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col">
                            <label for="email">Enter Email</label>
                            <input type="email" value="<?php echo $email?>" id="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="phone">Enter phone</label>
                            <input type="number" value="<?php echo $phone?>" name="phone" id="phone" class="form-control" placeholder="Enter phone Number">
                        </div>
                        <div class="col">
                            <label for="district">Select District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="">Select One</option>
                                <option value="dhaka" <?php 
                                if($district == "dhaka"){echo 'selected';}
                                ?>>Dhaka</option>
                                <option value="faridpur" <?php 
                                if($district == "faridpur"){echo 'selected';}
                                ?>>Faridpur</option>
                                <option value="rajbari" <?php 
                                if($district == "rajbari"){echo 'selected';}
                                ?> >Rajbari</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="">
                                <label for="" class="mt-2">Gender</label><br>

                                <input type="radio" value="male" <?php if($gender == 'male'){echo 'checked';} ?>  id="male" name="gender">
                                <label for="male">Male</label>

                                <input type="radio" <?php if($gender == 'female'){echo 'checked';} ?>  value="female" id="female" name="gender">
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="" class="mt-2">Hobby</label><br>

                            <input type="checkbox" <?php if(in_array('cricket',$hobby)){echo 'checked';} ?> value="cricket" id="cricket" name="hobby[]">
                            <label for="cricket">Cricket</label>

                            <input type="checkbox" <?php if(in_array('football',$hobby)){echo 'checked';} ?> value="football" id="football" name="hobby[]">
                            <label for="football">Football</label>

                            <input type="checkbox" <?php if(in_array('badminton',$hobby)){echo 'checked';} ?> value="badminton" id="badminton" name="hobby[]">
                            <label for="badminton">Badminton</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="10" rows="5" placeholder="Enter Message"><?php echo $message;?></textarea>
                    </div>
                    <div class="form-row my-3 ">
                        <input type="submit" class="btn btn-primary" name="submit" value="submit" >

                        <input type="hidden" name="id" value="<?php echo $id;?>">

                        <input type="reset" class="btn btn-danger ml-2"value="Reset" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>