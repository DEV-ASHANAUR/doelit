<?php
    include 'admin/main.php';
    $obj = new Main();

?>

<!DOCTYPE HTML>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog</title>
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<!-- BOOTSTRAP GRID CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<!-- COMMON CSS -->
		<link rel="stylesheet" href="assets/css/common.css" />
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/main.css" />	
		  <!-- RESPONSIVE CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css" />	
		<style>
			a.active {
				border: 1px solid #8e8e8e;
				color: #fff;
				padding: 5px 10px;
				font-size: 14px;
				/* transition: 0.5s ease all; */
				background:#204ecf;
			}
		</style>
	</head>

	<body>
		<!-- HEADER -->
		<div style="position: relative;">
			<div class="header">
				<div class="menu_all" id="myHeader">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-4 col-md-4 col-lg-4">
								<div class="logo">
									<a href="home.html">
										<div class="logo_img">
											<img src="img/logo.png" alt="image">
										</div>
									</a>
								</div>
							</div>
							<div class="col-8 col-md-8 col-lg-8">
								<div class="menu_right d-flex">
									<div class="menu_right_list">
										<ul class="menu_right_ul d-flex">
											<li class="dis_fx_cntr">
												<a href="index.php">HOME</a>
											</li>
											<li>
												<a href="gallery.html">gallery</a>
											</li>
											<li>
												<a href="about_us.html">about</a>
											</li>
											
											<li>
												<a href="contact.html">CONTACT</a>
											</li>
											<li>
												<a href="admin/index.php" target="_blank">Admin</a>
											</li>
										</ul>
									</div>
									<div class="menu_srch d-flex">
										<i class="fas fa-search search_btn"></i>
										<!-- SEARCH INPUT -->
										<div class="header_serch dis_none">
											<div class="header_serch_input">
												<input type="" name="" placeholder="Search">
											</div>
											<div class="header_serch_i">
												<i class="fas fa-search"></i>
											</div>
										</div>
										<!-- SEARCH INPUT -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADER -->