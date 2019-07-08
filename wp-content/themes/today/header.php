<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox(); 
	});
</script>
<div class="inform">
	<div class="container clearfix">
		<div id="workingHours">
			<span id="work">Понедельник - Пятница: 9:00 - 21:00. </span>
		</div>
		<div class="info-connect">
			<div class="info-email">
				<span id="email">
					<a href="mailto:todaystomat@gmail.com">todaystomat@gmail.com</a>
				</span>
			</div>
			<div class="info-tell">
				<span id="tell">
					<a href="tel:+380686018105">+38 (068) 60-18-105</a>
				</span>
			</div>
		</div>
	</div>
</div>
<header class="header">
	<div class="container">
		<nav class="navbar navbar-expand-md">
		  	<!-- <?php the_custom_logo( $blog_id ); ?> -->
			<div class="logo">
				<?php $home_url = get_home_url(); ?>
				<a href="<?php echo $home_url; ?>">
			  		<img src="/wp-content/themes/today/images/logo.png" alt="">
			  	</a>
			</div>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon">
		    		<span></span>
		    		<span></span>
		    		<span></span>
		    	</span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		    	<ul class="navbar-nav navigation">
		      		<?php wp_list_pages('title_li='); ?>
		    	</ul>
		  	</div>
			<a id="popup-on" href="#" class="popup__toggle">Запись на консультацию</a>
		</nav>
	</div>
</header>




<div class="breadcrumbs-top">
	<div class="container">
		<h1 class="title-page"><?php wp_title(); ?></h1>
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	</div>
</div>