<?php
    $page = 'post';
    $sub_page = 'view_post';
    include 'header.php';
    $author_id = $_SESSION['id'];
    $post_data = $obj->get_post($author_id);
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/post</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <div class="mt-2">
                            <i class="fas fa-table me-1"></i>
                            View post
                        </div>
                        <div>
                            <a href="add_post.php" class="btn btn-primary"><i class="fas fa-eye me-1"></i>Create New</a>
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
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Post Title</th>
                                    <th>Post Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if($post_data->num_rows > 0){
                                    $si = 1;
                                    while($post = $post_data->fetch_object()){
                                        ?>
                                        <tr>
                                            <td><?php echo  $si; ?></td>
                                            <td>
                                                <?php echo $post->post_title; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo 'uploads/post/'.$post->post_thumbnail; ?>" target="_blank">
                                                <img class="img-fluid" src="<?php echo 'uploads/post/'.$post->post_thumbnail; ?>" width="150" height="150" alt="">
                                                </a>
                                            </td>
                                            <td><?php echo date('M-d-Y h:i A',strtotime($post->post_created_at)); ?></td>
                                            <td>
                                                <a href="post_details.php?id=<?php echo $post->post_id; ?>"class="btn btn-primary"><i class="fas fa-eye"></i></a>

                                                <a href="#"class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $si++;
                                    }
                                }
                            ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Icon</th>
                                    <th>Category Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
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
        
