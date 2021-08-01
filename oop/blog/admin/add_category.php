<?php
    echo $page = 'category';
    echo $sub_page = 'add_category';
    include 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/Category/Create</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <div class="mt-2">
                            <i class="fas fa-table me-1"></i>
                            Create Category
                        </div>
                        <div>
                            <a href="view_category.php" class="btn btn-primary"><i class="fas fa-eye me-1"></i>View</a>
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
                        <form action="create_category.php" method="POST" id="change_pass">
                            <div class="row">
                                <div class="col-md-8 m-auto">
                                    <label for="icon">Catagory Icon <small><a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2&v=5.8.0" target="_blank">Visit Site</a></small></label>
                                    <input type="text" required class="form-control mb-2 mt-1" name="cat_icon" placeholder="Ex : fa fa-user">

                                    <label for="cat_name">Catagory name</label>
                                    <input type="text" class="form-control mb-2 mt-1" name="cat_name" id="cat_name"
                                    required
                                    data-parsley-minlength="3"
                                    data-parsley-trigger="keyup"
                                    placeholder="Category Name"
                                    >

                                    <input type="submit" class="btn btn-success d-block w-100 mt-3" name="submit" value="Submit" >
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
        
