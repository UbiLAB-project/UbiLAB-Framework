<?php
 /*
 Template Name: Hardware
 */
 ?>

<!DOCTYPE html>
<html>

<?php get_header(); ?>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/hardware.css">
	<title>UbiLAB - Hardware Labs</title>
</head>

<!------------>

<body>

<section id="title">
	<h1>UBI<span class="highlightBlue">LAB</span> Hardware Laboratories</h1>
</section>

<section id="labs">
	<div class="container">
		<a href="">
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/scada.webp">
			</div>
			<h1>SCADA PLC Laboratory</h1>
		</a>
		<a href="">
			<h1>Electronics Arduino Laboratory</h1>
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/arduino.jpg">
			</div>
		</a>
		<a href="">
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/dsp.webp">
			</div>
			<h1>Electronics DSP Laboratory</h1>
		</a>
		<a href="">
			<h1>Automation Pressure Control Laboratory</h1>
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/hardware.jpg">
			</div>
		</a>
		<a href="">
			<div class="img-wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/hardware.jpg">
			</div>
			<h1>Automation Temperature Control Laboratory</h1>
		</a>
	</div>
</section>

<?php get_footer(); ?>

</body>
</html>