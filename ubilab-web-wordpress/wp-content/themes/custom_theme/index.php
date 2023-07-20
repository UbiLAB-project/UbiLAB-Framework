<!DOCTYPE html>
<html>

<?php get_header(); ?>

<!------------>

<body>
	<header>
		<div class="img-wrapper">
			<img src="<?php bloginfo('template_url'); ?>/images/national_agency.jpg" class="nat_agency">
		</div>
		<a href="" class="img-wrapper">
			<img src="<?php bloginfo('template_url'); ?>/images/UbiLab_logo 2_blue.png">
		</a>
	</header>

	<section id="title">
		<h1>UBI<span class="highlightBlue">LAB</span> Virtual Laboratories</h1>
	</section>

	<section id="laboratories">
		<a href="" class="hardware">
			<div class="wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/hardware.jpg">
				<h1>Hardware Laboratories</h1>
			</div>
		</a>
		<a href="" class="software">
			<div class="wrapper">
				<img src="<?php bloginfo('template_url'); ?>/images/software.webp">
				<h1>Software Laboratories</h1>
			</div>
		</a>
	</section>

	<section id="showcase">
		<div class="img-wrapper">
			<img src="<?php bloginfo('template_url'); ?>/images/logo-feit.png">
		</div>
		<div class="img-wrapper">
			<img src="<?php bloginfo('template_url'); ?>/images/Hochschule-Anhalt-University-of-Applied-Sciences-New.png">
		</div>
		<div class="img-wrapper">
			<img src="<?php bloginfo('template_url'); ?>/images/University_of_Maribor.png">
		</div>
	</section>

	<?php get_footer(); ?>

</body>
</html>