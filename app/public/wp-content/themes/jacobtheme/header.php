<?php 
/*
	This is the template for the header

*/
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('deescription'); ?>">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<?php if(is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<nav class="navbar">
			<input type="checkbox" id="nav" class="hidden">
			<label for="nav" class="nav-btn">
				<i></i>
				<i></i>
				<i></i>
			</label>
			<div class="logo">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/main-logo.png" class="main-logo"></a>
			</div>
			<div class="nav-wrapper">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Admission</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Senior High School.</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
		</nav>




		<div class="bg-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/pcs-bg.png')?>)">
			<div class="bg-center">
				<h1 class="bg-h1">Pasig Community School Foundation, Inc.</h1>
				<h2 class="bg-h2">EDUCATING STUDENTS FOR <br>BETTER OPPORTUNITIES.</h2>
				<button class="bg-btn">Learn More</button>
			</div>
		</div>

		<section class="first-section" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/bg.png')?>)">
				<div class="first-col">
					<h2 class="welcome-h2">Welcome to PCSFI</h2>
					<p class="first-p">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br>
					<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					</p>
					<button class="first-btn">Read More</button>
				</div>
		</section>

		<section class="second-section">
			<h2 class="second-h2">Senior High School</h2>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shs.png" class="shs-img">
			<p class="second-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<button class="second-btn">Read More</button>
		</section>
