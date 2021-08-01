<?php
    // echo $page = 'category';
    // echo $sub_page = 'view_category';
    include 'header.php';
    $id = $_SESSION['id'];
    $profile_data = $obj->profile_retrive($id);
    if($profile_data->num_rows>0){
        while($row = $profile_data->fetch_object()){
            $name = $row->user_name;
            $photo = $row->user_photo;
            $email = $row->user_email;
            $about = $row->user_about;
        }
    }
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard / Edit Profile / Change Password</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <div class="mt-2">
                            <i class="fas fa-table me-1"></i>
                            Change Password
                        </div>
                        <div>
                            <a href="change_pass.php" class="btn btn-primary"><i class="fas fa-key me-1"></i> Change Password</a>
                        </div>
                    </div>
                    <div class="card-body">
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
                        <form action="update_profile.php" method="POST" id="profile" enctype="multipart/form-data">
                        <div class="row">
                            <div id="test-img" class="col-md-4 text-center">
                                <?php
                                if(!empty($photo)){
                                    ?>
                                        <img class="img-fluid img-thumbnail" src="<?php echo 'uploads/'.$photo; ?>" alt="">
                                    <?php
                                }else{
                                    ?>
                                    <img class="img-fluid img-thumbnail" src="img/profile.jpg" alt="">
                                    <?php
                                } ?>
                            </div>
                            <div class="col-md-8">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control mb-3 mt-1" name="name" value="<?php echo $name;?>" placeholder="Enter Name" required data-parsley-error-message="Enter Your Valid Name" required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup">

                                <label for="name">Change Photo</label>
                                <input type="file" id="file-img" class="file-control form-control mb-3 mt-1" name="file" placeholder="Enter Name">

                                <input type="hidden" value="<?php echo $photo;?>" name="oldfile" placeholder="Enter Name">

                                <label for="email">Your Email</label>
                                <input type="email" class="form-control mb-3 mt-1" name="email" value="<?php echo $email;?>" placeholder="Enter Name" data-parsley-error-message="Enter Valid Email" required data-parsley-type="email" data-parsley-trigger="keyup" >

                                <label for="name">Your About</label>
                                <textarea  name="about" class="form-control mb-3 mt-1" id="" cols="10" rows="5"><?php if(!empty($about)){echo $about;} ?></textarea>

                                <input type="submit" name="submit" class="btn btn-success d-block w-100">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
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

<?php
    include 'footer.php';
?>
        
