<?php include("../../includes_eldrmedia/_eldrmedia_config.php");?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../../includes_eldrmedia/head-tag-contents.php");?>

	<meta name="robots" content="noindex">
	<meta name="robots" content="noimageindex">

	<meta property="og:title" content="Roll20.net Design System, Website and Mobile App" />
	<meta property="og:image" content="http://www.eldrmedia.com/resources/images/projects/roll20/main/preview.jpg" />

</head>

	<?php include("../../includes_eldrmedia/body-top-contents.php");?>

	<?php include("../../includes_eldrmedia/header-no-gradient-light.php");?>

	<?php include("../../includes_eldrmedia/navigation.php");?>

		<section id="hero" class="hero position-relative">

			<div class="hero__background">

				<div class="hero__background-element"></div>

				<div class="hero__background-divider align--left align--bottom position-absolute">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 184" preserveAspectRatio="xMidYMid">
						<path fill="#FFF" d="M1400 0v184H0z" fill-rule="evenodd"/>
					</svg>
				</div>

				<ul class="list-unstyled dice_animation d-none d-md-block">
	                <li><img src="/resources/images/projects/roll20/main/dice-1.svg" alt=""></li>
					<li><img src="/resources/images/projects/roll20/main/dice-2.svg" alt=""></li>
					<li><img src="/resources/images/projects/roll20/main/dice-3.svg" alt=""></li>
					<li><img src="/resources/images/projects/roll20/main/dice-4.svg" alt=""></li>
					<li><img src="/resources/images/projects/roll20/main/dice-5.svg" alt=""></li>
					<li><img src="/resources/images/projects/roll20/main/dice-6.svg" alt=""></li>
	            </ul>

				<div class="hero__content pt-md-6 pt-lg-7">

					<div class="container clearfix">

						<div class="row align-items-center">

							<div class="col-12">

								<div class="py-5 py-md-0 text-center">

									<h1 class="display-4 title font-primary mb-1 mb-sm-2">Roll20<sup>&reg;</sup></h1>
									<h2 class="h6">WEB APP | DESIGN SYSTEM</h2>
									<p class="lead">Play games anywhere.<br/>With Roll20<sup>&reg;</sup> as your virtual tabletop, your adventures are limitless.</p>

								</div>

							</div>

							<div class="col-12 col-lg-8 offset-lg-2">

								<div class="hero__content-element">

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="/resources/images/projects/roll20/main/hero-desktop.png" media="(min-width: 1399px)">
										<source srcset="/resources/images/projects/roll20/main/hero-desktop.png" media="(min-width: 991px)">
										<source srcset="/resources/images/projects/roll20/main/hero-desktop.png" media="(max-width: 767px)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="/resources/images/projects/roll20/main/hero-desktop.png" class="animated fadeIn" data-parallax='{"y": -50, "smoothness": 20}'>
									</picture>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>


		<!-- Content
		============================================= -->
		<section id="content">

			<section id="section-about" class="py-5">

				<div class="container">

					<div class="row">

						<div class="col-12">

							<div class="row">

								<div class="col-12 col-md-4">
									
									<h2>About Roll20<sup>&reg;</sup></h2>
								
								</div>

								<div class="col-12 col-md-8">
	
									<p>Roll20<sup>&reg;</sup> is a suite of easy-to-use digital tools that expand pen-and-paper gameplay. Whether you play online via our virtual tabletop or in person utilizing our character sheet and dice rolling application, Roll20 will save you time and help you focus on enhancing your favorite parts of tabletop gaming.</p>
	
								</div>

							</div>

						</div>

					</div>

					<div class="row mt-6">

						<div class="col-lg-12">

							<div class="row">

								<div class="col-12">
								
									<div class="content__title text-center">
										<h3 class="display-4 t100-desktop">Projects</h3>
									</div>																			
								
								</div>

								<div class="col-12 col-lg-4">

									<div class="card-wrap shadow rounded mt-4 mt-lg-5">
										<div class="card card__featured-project">
											<div class="card-body">
												<div class="icon-wrap mb-3">
													<i class="icon-award icon-3x"></i>
												</div>
												<h3 class="">Design System</h3>
												<!-- <span class="badge badge-pill badge-secondary">Coming Soon</span> -->
												<a href="/work/roll20/design-system/" class="brand-secondary">View Project <i class="icon-arrow1-right icon-1x"></i></a>
											</div>
										</div>
									</div>

								</div>

								<div class="col-12 col-lg-4">

									<div class="card-wrap shadow rounded  mt-5">
										<div class="card card__featured-project">
											<div class="card-body">
												<div class="icon-wrap mb-3">
													<i class="icon-laptop icon-3x"></i>
												</div>
												<h3 class="">Website</h3>
												<span class="badge badge-pill badge-secondary">Coming Soon</span>
												<!-- <a href="#" class="brand-tertiary">View Project <i class="icon-arrow1-right icon-1x"></i></a> -->
											</div>
										</div>
									</div>

									<div class="card-wrap shadow rounded mt-4 mt-lg-0 d-none">
										<div class="card card__featured-project primary">
											<div class="card-body">
												<div class="icon-wrap mb-3">
													<i class="icon-smartphone icon-3x"></i>
												</div>
												<h3 class="m-0">Mobile App</h3>
												<p class="m-0">This app immediately provides users with mobile character sheets, 3d dice roller and handouts.</p>
												<span class="badge badge-pill badge-secondary">Coming Soon</span>
												<!-- <a href="#" class="brand-primary">View Project <i class="icon-arrow1-right icon-1x"></i></a> -->
											</div>
										</div>
									</div>

									<div class="card-wrap shadow rounded mt-4 mt-lg-5 d-none">
										<div class="card card__featured-project success">
											<div class="card-body">
												<div class="icon-wrap mb-3">
													<i class="icon-code icon-3x brand-success"></i>
												</div>
												<h3 class="m-0">Hacktoberfest 2019</h3>
												<p>One week of pair programming and accelerated Lean UX - this project is a redesigned dashboard for account management.</p>
												<span class="badge badge-pill badge-secondary">Coming Soon</span>
												<!-- <a href="/work/roll20/hacktoberfest-2019/" class="brand-success">View Project <i class="icon-arrow1-right icon-1x"></i></a> -->
											</div>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

			<section id="section-projects" class="section dark m-0 py-5">

				<div class="container">

					<div class="row text-center">

						<div class="col-md-8 mx-auto">

							<div class="row">

								<div class="col-4 col-sm-3">
									<a href="/work/foundation/" class="text-white">
										<i class="icon-arrow1-left icon-1x d-block mb-3"></i>
										<h5 class="h5 m-0 text-white m-0">Previous</h5>
									</a>
								</div>

								<div class="col-4 col-sm-6">
									<a href="/work/" class="text-white">
										<i class="icon-star icon-1x d-block mb-3"></i>
										<h5 class="h5 text-white m-0">View All</h5>
									</a>
								</div>

								<div class="col-4 col-sm-3">
									<a href="/work/chilld-bags/" class="text-white">
										<i class="icon-arrow1-right icon-1x d-block mb-3"></i>
										<h5 class="h5 m-0 text-white m-0">Next</h5>
									</a>
								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

		</section>

	<?php include("../../includes_eldrmedia/footer.php");?>

	<?php include("../../includes_eldrmedia/footer-contents.php");?>

<!-- <script src="/resources/js/project-chilld-bags.js"></script> -->

<!-- <script>
$(function(){
	$('.lazy').lazy();
});
</script> -->


	<?php include("../../includes_eldrmedia/body-bottom-contents.php");?>
