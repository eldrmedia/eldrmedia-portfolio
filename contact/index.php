<?php include("../includes_eldrmedia/_eldrmedia_config.php");?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../includes_eldrmedia/head-tag-contents.php");?>
	
</head>

	<?php include("../includes_eldrmedia/body-top-contents.php");?>
	
	<?php include("../includes_eldrmedia/header-dark-bg.php");?>	

	<?php include("../includes_eldrmedia/navigation.php");?>
	
		<!-- Google Map
		============================================= -->
<!-- 		<section id="google-map" class="gmap slider-parallax d-none d-sm-block"></section> -->

<!-- 		<div class="section dark m-0 py-3"></div> -->

		<section id="content">

			<div class="content-wrap">
				
				<div class="container mt-4">

					<h1 class="display-3 t100">Let's Connect</h1>
					
					<p>I'm open to new and exciting freelance opportunities. 
	
					<div class="contact-widget" data-alert-type="inline">
	
						<div class="contact-form-result"></div>
	
						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="../includes_eldrmedia/contact-sendemail.php" method="post">
	
							<div class="form-process"></div>
	
							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>
	
							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>
	
							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>
	
							<div class="clear"></div>
	
							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>
	
							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>
	
							<div class="col_full">
								<button class="button  nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>
	
						</form>
					</div>
					
				</div>

			</div>
			
			<section id="section-contact" class="py-5 bgcolor">
				
				<div class="container clearfix">
					
					<div class="row align-items-center">
						
						<div class="col-12">
							
							<h6 class="ls2 uppercase m-0">Make It Official</h6>
	
							<div class="font-primary">
	
								<a href="https://www.instagram.com/eldrmedia/" target="_blank" class="mr-2 dark">Instagram</a>
								<a href="https://www.behance.net/eldrmedia" target="_blank" class="mr-2 dark">Behance</a>
								<a href="https://www.linkedin.com/in/williamelder/" target="_blank" class="dark">LinkedIn</a>	
	
							</div>
							
						</div>
						
					</div>

				</div>
				
			</section>			

		</section>
	
	
	<?php include("../includes_eldrmedia/footer.php");?>		

	<?php include("../includes_eldrmedia/footer-contents.php");?>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGpk1Vb7lCkX4h5fRrMkP42pRiq_1WoEw" type="text/javascript"></script>
	
	<script src="/resources/js/jquery.gmap.js"></script>

	<script>

		$('#google-map').gMap({
		    latitude: 36.1667,
		    longitude: -115.159814,	
			maptype: 'ROADMAP',
			zoom: 11,
			doubleclickzoom: false,
			controls: {
				panControl: false,
				zoomControl: false,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

	</script>
	
	
	<?php include("../includes_eldrmedia/body-bottom-contents.php");?>
	