<?php
 /*
 Template Name: Software
 */
 ?>

<!DOCTYPE html>
<html>

<?php get_header(); ?>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/software.css">
	<title>UbiLAB - Software Labs</title>
</head>

<!------------>

<body>

<section id="title">
	<h1>UBI<span class="highlightBlue">LAB</span> Software Laboratories</h1>
</section>

<section id="labs">
	<div class="container">
		<a href="">
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/os_admin.jpg">
			</div>
			<h1>Virtual OS Admin Laboratory</h1>
		</a>
		<a href="">
			<h1>Virtual Measurements Laboratory</h1>
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/hardware.jpg">
			</div>
		</a>
		<a href="">
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/intro_to_prog.jpg">
			</div>
			<h1>Virtual Introduction to Programming Lbaoratory</h1>
		</a>
		<a href="">
			<h1>Virtual Parallel Processing Laboratory</h1>
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/parallel_processing.jpg">
			</div>
		</a>
		<a href="">
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/networking.webp">
			</div>
			<h1>Virtual Networking Laboratory</h1>
		</a>
	</div>
</section>

<?php get_footer(); ?>

</body>
</html>