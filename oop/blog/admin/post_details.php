<?php
    $page = 'post';
    // $sub_page = 'view_post';
    include 'header.php';
    if(isset($_GET['id'])){
        $post_id = $_GET['id'];
        $posts = $obj->get_single_post($post_id);
        if($posts->num_rows>0){
            while($post = $posts->fetch_object()){
                $title = $post->post_title;
                $image = $post->post_thumbnail;
                $body = $post->post_body;
                $category = $post->cat_name;
                $author = $post->user_name;
            }
        }
    }
    
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard/post/details</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <div class="mt-2">
                            <i class="fas fa-table me-1"></i>
                            View post
                        </div>
                        <div>
                            <a href="view_post.php" class="btn btn-primary"><i class="fas fa-eye me-1"></i>View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                            <h2 class="text-captalize mb-3">post thumbnail</h2>
                            <img class="img-fluid" src="<?php echo 'uploads/post/'.$image; ?>" width="400" alt="">
                            <h2 class="text-captalize mb-3 mt-3">post body</h2>
                            <div>
                                <?php echo $body; ?>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <h2>Post Title</h2>
                                <p><?php echo $title; ?></p>
                                <h2>Post Category</h2>
                                <p><?php echo $category; ?></p>
                                <h2>Author</h2>
                                <p><?php echo $author; ?></p>
                            </div>
                        </div>
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
        
