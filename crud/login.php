<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('location:show.php');
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
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 m-auto">
                <h2 class="text-center text-capitalize mb-3">Login Here </h2>
                <?php
                    if(isset($_GET['fond']) && $_GET['fond'] == 'error'){
                        ?>
                            <div class="alert alert-danger" role="alert">
                                Invalid Email Address!
                            </div>
                        <?php
                    }
                
                ?>

                <?php
                    if(isset($_GET['pass']) && $_GET['pass'] == 'error'){
                        ?>
                            <div class="alert alert-danger" role="alert">
                                Invalid Password!
                            </div>
                        <?php
                    }
                
                ?>

                <?php
                    if(isset($_GET['insert']) && $_GET['insert'] == 'success'){
                        ?>
                            <div class="alert alert-success" role="alert">
                                SuccessFully Data Inserted!
                            </div>
                        <?php
                    }
                
                ?>
                <form action="auth.php" method="POST">
                    <div class="form-row mb-2">
                        <div class="col-md-6 m-auto">
                            <label for="email">Enter Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-6 m-auto">
                            <label for="password">Enter password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                        </div>
                    </div>
                    
                    <div class="form-row my-3 ">
                        <div class="col-md-6 m-auto">
                            <input type="submit" class="btn btn-primary" name="submit" value="submit" >

                            <input type="reset" class="btn btn-danger ml-2"value="Reset" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>