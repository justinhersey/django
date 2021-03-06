<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"><link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
    <!--<script>document.cookie='resolution='+480+'; path=/';</script>-->
</head>
<body>
	<?php include("includes/nav.php"); ?>
	<div class="project-description-panel">
		<h1>Airstream</h1>
		<p>This is a description about the project with Airstream and the new Basecamp partnership with Nissan.</p>
		<p><strong>Project:</strong> Basecamp Brochure<br />
		<strong>Role:</strong> Designer</p>
		<a class="button" href="">Get in touch</a>
		<div class="down-arrow"></div>
	</div>
	
	<section class="project airstream">
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/airstream1.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/airstream2.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/airstream3.jpg" alt="Airstream" />
	</section>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			//nav();
			resizeCover('.project-description-panel');
			// Listen for orientation changes
			window.addEventListener("orientationchange", function() {
				resizeCover('.project-description-panel');
			}, false);
			$('.project-description-panel').find('.down-arrow').on('click', function() {
				$('html, body').animate({
    				scrollTop: $('.project-description-panel').next().offset().top
				}, 1000);
			});
			$( "#nav-toggle" ).on( "click", function() {
				//$( this ).toggleClass( "active" );
				$('.nav-list').toggleClass('active');
			});
		});
	</script>
</body>
</html>