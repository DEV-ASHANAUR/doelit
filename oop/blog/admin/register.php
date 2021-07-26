<?php
session_start();
include "Flash_data.php";

if(isset($_SESSION['id'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <!-- some script  -->
        <link rel="stylesheet" href="css/toastr.css">
        <!-- <script src="js/jquery.js"></script> -->

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js" integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg==" crossorigin="anonymous"></script>

        <style>
            .parsley-errors-list li{
                color: red;
                display: block;
                width: 100%;
                text-align: center;
                padding-top: 10px;
            }
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                    <?php
                                        if(isset($_SESSION['msg']['error'])){
                                            ?>
                                                <script type="text/javascript">
                                                    toastr.error("<?php echo Flass_data::show_error();?>");
                                                </script>
                                            <?php 
                                            }
                                        ?>
                                        <form action="create.php" method="POST" id="reg">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="name" class="form-control" id="inputFirstName" type="text"
                                                        required data-parsley-error-message="Enter Your Valid Name" required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" placeholder="Full Name" />
                                                        <label for="inputFirstName">Full name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email"
                                                data-parsley-error-message="Enter Valid Email" required data-parsley-type="email" data-parsley-trigger="keyup" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="password" class="form-control" id="inputPassword" type="password"
                                                        data-parsley-minlength="6"
                                                        required placeholder="Create a password" data-parsley-trigger="keyup" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="con_password" class="form-control" id="inputPasswordConfirm" type="password"
                                                        data-parsley-minlength="6"
                                                        data-parsley-equalto="#inputPassword"
                                                        required placeholder="Confirm password" data-parsley-trigger="keyup" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Create Account">
                                                </div>
                                                
                                                <!-- <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
            $(function(){
                $('#reg').parsley();
            });
        </script>
    </body>
</html>
