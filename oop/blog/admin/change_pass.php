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
                    <li class="breadcrumb-item active">Dashboard / Edit Profile</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <div class="mt-2">
                            <i class="fas fa-table me-1"></i>
                            Edit Profile
                        </div>
                        <div>
                            <a href="edit_profile.php" class="btn btn-primary"><i class="fas fa-edit me-1"></i> Edit Profile</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- tostr message -->
                        <?php
                            if(isset($_SESSION['msg']['error'])){
                                ?>
                                    <script type="text/javascript">
                                        toastr.error("<?php echo Flass_data::show_error();?>");
                                    </script>
                                <?php 
                            }
                        ?>
                        
                        <?php
                            if(isset($_SESSION['msg']['success'])){
                                ?>
                                    <script type="text/javascript">
                                        toastr.success("<?php echo Flass_data::show_error();?>");
                                    </script>
                                <?php 
                            }
                        ?>
                        <form action="update_pass.php" method="POST" id="change_pass">
                            <div class="row">
                                <div class="col-md-8 m-auto">
                                    <label for="cur_password">Current Password</label>
                                    <input type="password" required class="form-control mb-2 mt-1" name="cur_pass">

                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control mb-2 mt-1" name="new_pass" id="new_password"
                                    required
                                    data-parsley-minlength="6"
                                    data-parsley-trigger="keyup"
                                    >

                                    <label for="con_password">Confirm Password</label>
                                    <input type="password" class="form-control mb-4 mt-1" data-parsley-minlength="6"
                                    data-parsley-equalto="#new_password"
                                    required placeholder="Confirm password" data-parsley-trigger="keyup">

                                    <input type="submit" class="btn btn-success d-block w-100" name="submit" value="Update" >
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
        
