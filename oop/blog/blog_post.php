<?php
	include 'font_header.php';
	if(isset($_GET['id'])){
		$post_id = $_GET['id'];
		$posts = $obj->get_single_post($post_id);
		if($posts->num_rows>0){
			while($post = $posts->fetch_object()){
				$title = $post->post_title;
				$thumbnail = $post->post_thumbnail;
				$author_name = $post->user_name;
				$author_photo = $post->user_photo;
				$author_about = $post->user_about;
				$body = $post->post_body;
				$category = $post->cat_name;
				$time = $post->post_created_at;
			}
		}
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}else{
		header('location:index.php');
	}
	
	// $posts = $obj->get_all_post();
?>	

	<!-- BANNER -->
	<div class="blog_banner">
		
	</div>
	<!-- BANNER -->

	<!-- BODY -->
	<div class="blog_post_sec_all">
		<div class="container">
			<div class="row">
				<div class="cl-12 col-md-12 col-lg-9">
					<div class="blog_post_left">
						<div class="blog_post_sec">
							<div class="blog_post_top">
								<ul class="blog_post_top_ul">
									<li>
										<a href="blog.html"><?php echo $category;
										?></a>
									</li>
									<li><?php echo date('M-d-Y h:i A',strtotime($time)); ?></li>
								</ul>
							</div>
							<div class="blog_post">
								<h1 class="blog_post_h1"><?php echo $title; ?>a</h1>
								<div class="post_author_sec">
									<div class="post_author_left">
										<div class="post_author_img">
										<?php 
											if(!empty($author_photo)){
												?>
													<img src="<?php echo 'admin/uploads/'.$author_photo; ?>" alt="image">
												<?php

											}else{
												?>
												<img src="img/man1.jpg" alt="image">
												<?php
											}
										
											?>
										</div>
										<div class="post_author_info">
										<a href="contact_me.html"><h4 class="post_author_title"><?php echo $author_name; ?></h4></a>
											<?php
												if(!empty($author_about)){
													?>
														<p><?php echo $author_about;?></p>
													<?php
												}else{
													?>
														<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quo officiis impedit itaque ea omnis ducimus rem nam sequi architecto,</p>
													<?php
												}
											?>
										</div>
									</div>
									<!-- <div class="post_author_r8">
										<i class="fas fa-share-alt"></i>
									</div> -->
								</div>
								<div>
								<img class="img-fluid" src="<?php echo 'admin/uploads/post/'.$thumbnail; ?>" alt="image">
								</div>
								<div>
									<?php echo $body; ?>
								</div>
								<div class="riview_post">
									<ul class="riview_post_ul">
										<li><i class="far fa-thumbs-up"></i>122 Like</li>
										<li><i class="far fa-comments"></i>10 Comment</li>
										<li><i class="far fa-share-square"></i>4 Share</li>
									</ul>
								</div>	
							</div>	
						</div>
						<!-- <div class="post_que">
							
						</div> -->
						<div class="post_dtls_cmnt_sec ">
							<h2 class="post_dtls_title2 pad_b20">Comments</h2>
							<!-- comment -->

							<div class="fb-comments" data-href="http://localhost/doelit/oop/blog/blog_post.php?id=<?php echo $_GET['id']; ?>" data-width="" data-numposts="5"></div>

						
						</div>

						
						<!--WRITE COMMENT BOX -->
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-3">
					<div class="blog_post_r8">
							<h4 class="trnd_artcl_h4">TRENDING ARTICLES</h4>
						<div class="blog_post_r8_all">
							<!-- iteam -->
							<div class="blog_post_r8_item">
								<div class="blog_post_item_lft">
									<img src="img/man3.jpg" alt="image">
								</div>
								<div class="blog_post_item_r8">
									<a href="">
										<h4 class="blog_post_item_r8_h4">
											The Upwork 100: 3 Things You May Have Missed
										</h4>
									</a>
									<a href=""><p class="author_name2">-Amy Sept</p></a>
								</div>
							</div>
							<!-- iteam -->

								<!-- iteam -->
							<div class="blog_post_r8_item">
								<div class="blog_post_item_lft">
									<img src="img/man2.jpg" alt="image">
								</div>
								<div class="blog_post_item_r8">
									<a href="">
										<h4 class="blog_post_item_r8_h4">
											The Upwork 100: 3 Things You May Have Missed
										</h4>
									</a>
									<a href=""><p class="author_name2">-Amy Sept</p></a>
								</div>
							</div>
							<!-- iteam -->

								<!-- iteam -->
							<div class="blog_post_r8_item">
								<div class="blog_post_item_lft">
									<img src="img/man3.jpg" alt="image">
								</div>
								<div class="blog_post_item_r8">
									<a href="">
										<h4 class="blog_post_item_r8_h4">
											The Upwork 100: 3 Things You May Have Missed
										</h4>
									</a>
									<a href=""><p class="author_name2">-Amy Sept</p></a>
								</div>
							</div>
							<!-- iteam -->

								<!-- iteam -->
							<div class="blog_post_r8_item">
								<div class="blog_post_item_lft">
									<img src="img/man4.jpg" alt="image">
								</div>
								<div class="blog_post_item_r8">
									<a href="">
										<h4 class="blog_post_item_r8_h4">
											The Upwork 100: 3 Things You May Have Missed
										</h4>
									</a>
									<a href=""><p class="author_name2">-Amy Sept</p></a>
								</div>
							</div>
							<!-- iteam -->

								<!-- iteam -->
							<div class="blog_post_r8_item">
								<div class="blog_post_item_lft">
									<img src="img/man3.jpg" alt="image">
								</div>
								<div class="blog_post_item_r8">
									<a href="">
										<h4 class="blog_post_item_r8_h4">
											The Upwork 100: 3 Things You May Have Missed
										</h4>
									</a>
									<a href=""><p class="author_name2">-Amy Sept</p></a>
								</div>
							</div>
							<!-- iteam -->

								<!-- iteam -->
							<div class="blog_post_r8_item">
								<div class="blog_post_item_lft">
									<img src="img/man4.jpg" alt="image">
								</div>
								<div class="blog_post_item_r8">
									<a href="">
										<h4 class="blog_post_item_r8_h4">
											The Upwork 100: 3 Things You May Have Missed
										</h4>
									</a>
									<a href=""><p class="author_name2">-Amy Sept</p></a>
								</div>
							</div>
							<!-- iteam -->
						</div>
						<div class="course_price mar_t60">
							<div class="course_price_top">
								<p>Share this post</p>
							</div>
							<div class="course_price_main" style="padding: 30px 0px 30px 17px">
								<ul class="share_social_ul dis_flx">
									<li>
										<a class="fb" href="https://www.facebook.com/sharer.php?u=<?php echo $actual_link;?>" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="google" href="https://plus.google.com/share?url=<?php echo $actual_link;?>
">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
									<li>
										<a class="instgrm" href="" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li>
										<a class="twtr" href="https://twitter.com/share?url=<?php echo $actual_link; ?>&text=<?php echo $title; ?>" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="skpye" href="" target="_blank">
											<i class="fab fa-skype"></i>
										</a>
									</li>
									<li>
										<a class="utube" href="" target="_blank">
											<i class="fab fa-youtube"></i>
										</a>
									</li>
							<!-- 		<li>
										<a class="lnkdn" href="">
											<i class="fab fa-linkedin-in"></i>
										</a>
									</li>
									<li>
										<a class="pinstr" href="">
											<i class="fab fa-pinterest"></i>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
						<div class="post_tags">
							<h3 class="post_tags_h3">Popular Tags</h3>
							<ul class="post_tags_ul">
								<li>
									<a href="">Design</a>
								</li>
								<li>
									<a href="">UI/UX</a>
								</li>
								<li>
									<a href="">Database</a>
								</li>
								<li>
									<a href="">PHP</a>
								</li>
								<li>
									<a href="">Lareval</a>
								</li>
								<li>
									<a href="">UI/UX</a>
								</li>
								<li>
									<a href="">Design</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BODY -->

<?php
	include 'font_footer.php';
?>
