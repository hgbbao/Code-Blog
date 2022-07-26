<?php
$title = $title ? $title : "Trang chủ";  ///(DK) ? true : false
?>



 <!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?=$title?></title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="../../../assets/image/x-icon" href="../../../assets/images/favicon.png">

	<!-- STYLES -->
	<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../../assets/css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../../assets/css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../../assets/css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../../assets/css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-personal">
        <div class="container-xl header-top">
			<div class="row align-items-center">

				<div class="col-4 d-none d-md-block d-lg-block">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 text-center">
				<!-- site logo -->
					<a class="navbar-brand" href="personal.html"><img src="../../../assets/images/other/avatar-lg.png" alt="logo" /></a>
					<a href="personal.html" class="d-block text-logo">Katen<span class="dot">.</span></a>
					<span class="slogan d-block">Professional Writer & Personal Blogger</span>
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12">
					<!-- header buttons -->
					<div class="header-buttons float-md-end mt-4 mt-md-0">
						<button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button ms-2 float-end float-md-none">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>

			</div>
        </div>

		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				
				<div class="collapse navbar-collapse justify-content-center centered-nav">
					<!-- menus -->
					<ul class="navbar-nav">
						<li class="nav-item dropdown active">
							<a class="nav-link" href="/">Home</a>
							<!-- <ul class="dropdown-menu">
								<li><a class="dropdown-item" href="index.html">Magazine</a></li>
								<li><a class="dropdown-item" href="personal.html">Personal</a></li>
								<li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
								<li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
								<li><a class="dropdown-item" href="classic.html">Classic</a></li>
							</ul> -->
						</li>
						<li class="nav-item">
							<a class="nav-link" href="category.html">Lifestyle</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="category.html">Inspiration</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#">Pages</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="category.html">Category</a></li>
								<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
								<li><a class="dropdown-item" href="blog-single-alt.html">Blog Single Alt</a></li>
								<li><a class="dropdown-item" href="about.html">About</a></li>
								<li><a class="dropdown-item" href="contact.html">Contact</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#">Account</a>
							<ul class="dropdown-menu">
								<?php
								if($user){ // đã đăng nhập thì chuyển hướng
									echo '
									<li><a class="dropdown-item" href="#">'.$user.'</a></li>
									<li><a class="dropdown-item" href="register">Register</a></li>
									<li><a class="dropdown-item" href="logout">Logout</a></li>
									';
								}else{
									echo '
									<li><a class="dropdown-item" href="login">Login</a></li>
									<li><a class="dropdown-item" href="register">Register</a></li>
									';
								}
								?>																
							</ul>
						</li>
					</ul>
				</div>

			</div>
		</nav>
	</header>

<!-- JAVA SCRIPTS -->


