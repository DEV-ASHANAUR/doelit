<?php
    echo $page = 'post';
    echo $sub_page = 'add_post';
    include 'header.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/Post/Create</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <div class="mt-2">
                            <i class="fas fa-plus me-1"></i>
                            Create Post
                        </div>
                        <div>
                            <a href="view_post.php" class="btn btn-primary"><i class="fas fa-eye me-1"></i>View</a>
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
                        <form action="create_category.php" method="POST" id="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-10 m-auto">
                                    <label for="title">Post Title </label>
                                    <input type="text" required class="form-control mb-2 mt-1" name="title" placeholder="Enter Title">

                                    <label for="cat_name">Catagory name</label>
                                    <select class="form-control mt-1" name="catagory_id" id="" required>
                                        <option value="">Select Category</option>
                                        <option value=""></option>
                                    </select>

                                    <label for="cat_name" class="mt-2">Enter Tag</label>
                                    <input type="text" name="tag" class="form-control mt-1" placeholder="Enter Tag">

                                    <div class="form-row mt-3"> 
                                        <div class="form-group col-md-12">
                                            <label for="description" class=" mb-1">Description</label>
                                            <textarea class="form-control" name="description" placeholder="Enter Some Description" id="description"></textarea>
                                        </div>
                                    </div>

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
        
