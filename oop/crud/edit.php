<?php
session_start();
include "Flash_data.php";
include 'main.php';
$obj = new Main();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data  = $obj->get_data($id);

    if($data->num_rows>0){
        while($row = $data->fetch_object()){
            $id = $row->id;
            $photo = $row->photo;
            $name = $row->name;
            $email = $row->email;
            $phone = $row->phone;
            $district = $row->district;
            $gender = $row->gender;
            $hobby = explode(',',$row->hobby);
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
    <title>Home page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- tostr css and js -->
    <link rel="stylesheet" href="css/toastr.css">
    <script src="js/jquery.js"></script>
    <script src="js/toastr.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">simple crud <a class="btn btn-primary btn-sm" href="show.php">Show</a></h2>
                <?php
                    if(isset($_SESSION['msg']['error'])){
                        ?>
                            <script type="text/javascript">
                                toastr.error("<?php echo Flass_data::show_error();?>");
                            </script>
                        <?php 
                    }
                ?>
                <!-- tostr message -->
                <?php
                    if(isset($_SESSION['msg']['success'])){
                        ?>
                            <script type="text/javascript">
                                toastr.success("<?php echo Flass_data::show_error();?>");
                            </script>
                        <?php 
                    }
                ?>
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="name">Enter Name</label>
                            <input type="text" name="name" value="<?php echo $name ?>" id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col">
                            <label for="email">Enter Email</label>
                            <input type="email" id="email" value="<?php echo $email?>" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="phone">Enter phone</label>
                            <input type="number" name="phone" value="<?php echo $phone?>" id="phone" class="form-control" placeholder="Enter phone Number">
                        </div>
                        <div class="col">
                            <label for="district">Select District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="" selected>Select One</option>

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
                            <div class="">
                                <label for="img" class="mt-2">Upload Photo</label>

                                <input type="file" id="img" class="file-control" name="file">

                                <input type="hidden" id="img" value="<?php echo $photo; ?>" class="file-control" name="oldfile">

                                <img class="img-thumbnail mt-3" width="130px" height="130px" src="<?php echo 'uploads/'.$photo; ?>" alt="">
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
    <!-- script here -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>               
</body>
</html>