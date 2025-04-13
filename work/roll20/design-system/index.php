<?php include("../../../includes_eldrmedia/_eldrmedia_config.php");?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../../../includes_eldrmedia/head-tag-contents.php");?>

	<meta name="robots" content="noindex">
	<meta name="robots" content="noimageindex">

	<meta property="og:title" content="Roll20.net Design System" />
	<meta property="og:image" content="http://www.eldrmedia.com/resources/images/projects/roll20/design-system/preview.jpg" />

</head>

	<?php include("../../../includes_eldrmedia/body-top-contents.php");?>

	<?php include("../../../includes_eldrmedia/header-no-gradient-light.php");?>

	<?php include("../../../includes_eldrmedia/navigation.php");?>



		<style>
		#hero .hero-content {
			z-index: 10;
		}
		.hero-hexagon {
			position: absolute;
			top: 0;
			right: 0;
		}

		.hexagon-solid {
			z-index: 1;
		}

		.hexagon-outline {
			z-index: 2;
		}		

		.hexagon-solid__wrapper {
			margin-top: -30%;
			margin-right: -10%;
			width: 75%;
		}

		.hexagon-outline__wrapper {
			margin-top: -13%;
			margin-right: 20%;
			width: 60%;
		}

		@media only screen and (max-width: 1199px) {
			.hexagon-outline__wrapper {
				margin-top: -15%;
			width: 100%;
			}
		}

		@media only screen and (max-width: 991px) {
			.hexagon-outline__wrapper {
			margin-right: 21%;
			margin-top: -7%;
			width: 70%;
			}
			.hexagon-solid__wrapper {
			width: 90%;
			}
		}
		@media only screen and (max-width: 767px) {
			.hexagon-outline__wrapper {
			margin-right: 22%;
			margin-top: 25%;
			width: 80%;
			}

			.hexagon-solid__wrapper {
			margin-top: -2%;
			margin-right: -15%;
			width: 100%;
			}
		}
		@media only screen and (max-width: 576px) {
			.hexagon-outline__wrapper {
			margin-top: 22%;
			margin-right: 36%;
			width: 100%;
			}

			.hexagon-solid__wrapper {
			margin-top: -2%;
			margin-right: 4%;
			width: 85%;
			}
		}
		</style>				

		<section id="hero" class="hero ">		

			<div class="d-flex align-items-start align-items-md-center">
				
				<div class="hero__content d-flex w-100">

					<div class="container clearfix position-relative">

						<div class="hero-hexagon hexagon-outline d-flex justify-content-end">
							<div class="hexagon-outline__wrapper">
								<picture>
									<!--[if IE 9]><video style="display: none;"><![endif]-->
									<source srcset="/resources/images/projects/roll20/design-system/hero-hex-outline-2x.png" media="(min-width: 1199px)">
									<source srcset="/resources/images/projects/roll20/design-system/hero-hex-outline.png" media="(min-width: 991px)">
									<source srcset="/resources/images/projects/roll20/design-system/hero-hex-outline.png" media="(max-width: 767px)">
									<!--[if IE 9]></video><![endif]-->
									<img srcset="/resources/images/projects/roll20/design-system/hero-hex-outline.png" class="animated fadeIn" data-parallax='{"x": -30, "smoothness": 20}'>
								</picture>
							</div>
						</div>				

						<div class="hero-hexagon hexagon-solid d-flex justify-content-end">
							<div class="hexagon-solid__wrapper">
								<picture>
									<!--[if IE 9]><video style="display: none;"><![endif]-->
									<source srcset="/resources/images/projects/roll20/design-system/hero-hex-solid-2x.png" media="(min-width: 1199px)">
									<source srcset="/resources/images/projects/roll20/design-system/hero-hex-solid.png" media="(min-width: 991px)">
									<source srcset="/resources/images/projects/roll20/design-system/hero-hex-solid.png" media="(max-width: 767px)">
									<!--[if IE 9]></video><![endif]-->
									<img srcset="/resources/images/projects/roll20/design-system/hero-hex-solid.png" class="animated fadeIn" data-parallax='{"x": 50, "smoothness": 20}'>
								</picture>
							</div>
						</div>					

						<div class="row align-items-center py-sm-5 py-md-7 py-lg-6 hero-content position-relative">

							<div class="col-md-5 col-lg-4 col-xl-5 order-0 order-md-1">

								<div class="py-5 py-md-0 text-center text-md-left">
									
									<h1 class="h6 m-0 hero-client">Roll20<sup>&reg;</sup></h2>
									<h2 class="display-4 title font-primary hero-title mb-1 mb-sm-2">Design System</h2>
									<h3 class="h6 hero-skills">UI/UX  |  Branding</h3>
									
								</div>

							</div>
							
							<div class="col-12 col-md-7 col-lg-8 col-xl-7 order-1 order-md-0">

								<div class="hero__content-element">

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="/resources/images/projects/roll20/design-system/hero-browser-2x.png" media="(min-width: 1399px)">
										<source srcset="/resources/images/projects/roll20/design-system/hero-browser.png" media="(min-width: 991px)">
										<source srcset="/resources/images/projects/roll20/design-system/hero-browser.png" media="(max-width: 767px)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="/resources/images/projects/roll20/design-system/hero-browser.png" class="animated fadeIn" >
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

			<section id="section-project-details" class="section nobg m-0">
		
				<div class="project-details__content">
					
					<div class="container">
						
						<div class="row m-0">
												
							<div class="col-sm-12 col-md-3 text-center text-md-left">
								
								<h3>Details</h3>
								
							</div>

							<div class="col-12 col-sm-8 col-md-5 text-center text-sm-left">
								
								<h5 class="ls2 uppercase">Role</h5>
								<p>UI/UX Design, Front-End Development and Project Management</p>
								
							</div>
							
							<div class="col-6 col-sm-2 text-center text-sm-left">
								
								<h5 class="ls2 uppercase">Type</h5>
								<p>Design System</p>
								
							</div>
							
							<div class="col-6 col-sm-2 text-center text-sm-left">
								
								<h5 class="ls2 uppercase">Year</h5>
								<p>2020</p>
								
							</div>															
						
						</div>
						
					</div>

				</div>
				
			</section>		

			<section id="section-understand" class="py-5">				
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 offset-0 offset-lg-2">				
							<div class="content__title text-center mb-5">
								<span class="h6 ls3 t600 uppercase brand-secondary">1. Understand</span><br />								
								<h3 class="display-4 t100-desktop">Why it is needed</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card border-0 text-center mb-5 mb-lg-0">
								<div class="hex-icon mb-4">
									<img src="/resources/images/projects/roll20/design-system/hexegon-icon-marketplace.png" width="80" height="90" />
								</div>
								<h5 class="mb-2">Accelerate time to market</h5>
								<p class="small">Design systems enable teams to tap into the library of reusable assets, shortening the time they would otherwise spend rebuilding the same assets. </p>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card border-0 text-center mb-5 mb-lg-0">
								<div class="hex-icon mb-4">
									<img src="/resources/images/projects/roll20/design-system/hexegon-icon-consistency.png" width="80" height="90" />
								</div>
								<h5 class="mb-2">Achieve UX consistency</h5>
								<p class="small">Standardized components and ui patterns assist in creating a more unified look across products and platforms.</p>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card border-0 text-center mb-5 mb-lg-0">
								<div class="hex-icon mb-4">
									<img src="/resources/images/projects/roll20/design-system/hexegon-icon-collaboraation.png" width="80" height="90" />
								</div>
								<h5 class="mb-2">Improve team collaboration</h5>
								<p class="small">A shared design language allows product teams to learn and grow together which greatly improves productivity and collaboration.</p>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card border-0 text-center">
								<div class="hex-icon mb-4">
									<img src="/resources/images/projects/roll20/design-system/hexegon-icon-cost.png" width="80" height="90" />
								</div>
								<h5 class="mb-2">Reduce cost</h5>
								<p class="small">Reusing existing components across projects is a proven way to save designers’ time and consequently money.</p>
							</div>
						</div>																		
					</div>
				</div>
			</section>

			<section id="section-research" class="py-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-md-6 order-0 order-md-1">
							<span class="h6 ls3 t600 uppercase brand-secondary">2. Research</span><br />
							<h3 class="display-4 t100-desktop">Visual audit</h3>
							<p>The first step I took in building a design system is to do a visual audit of Roll20’s current design, this included the front end Web App (website) and the Virtual Table Top. While taking inventory of the css Roll20 was using and the visual qualities of the elements, I was able to gauge how much of an undertaking this process might be.</p>
						</div>
						<div class="col-12 col-md-6 order-1 order-md-0">
							<img src="/resources/images/projects/roll20/design-system/research-visual-audit.png" class="img-fluid" />
						</div>
					</div>
				</div>
			</section>

			<section id="section-sketch" class="py-5">
				<div class="container">
				<div class="row align-items-center">
						<div class="col-12 col-md-6">
							<span class="h6 ls3 t600 uppercase brand-secondary">3. Sketch</span><br />
							<h3 class="display-4 t100-desktop">Visual design language</h3>
							<p>The visual design language is the core of a design system. It’s made up of the discernible components that we used to construct our digital product. The Roll20 visual design language is made up of six main categories, where we went to great depths in understanding the role each of these design elements plays in every component on the screen.</p>
						</div>
						<div class="col-12 col-md-6">
							<img src="/resources/images/projects/roll20/design-system/sketch-visual-design.png" class="img-fluid" />
						</div>
					</div>
				</div>
			</section>						

			<section id="section-sketch-details" class="py-5">
				<div class="container">
					<div class="sketch-details__wrapper rounded gray-200 p-4 p-md-5 p-lg-6">
						<div class="row m-0 align-items-center sketch-details__item pb-6">
							<div class="col-12 col-md-6 col-lg-4 text-center pb-5 pb-md-0">
								<img src="/resources/images/projects/roll20/design-system/sketch-colors.png" />
							</div>
							<div class="col-12 col-md-6 col-lg-8">
								<h4 class="h1">Color</h4>															
								<p>Common colors in the Roll20 Design System include primary and secondary colors that represent its brand. A wide range of tints—a color mixed with white—and shades—a color mixed with black—to offer up light and dark background options.</p>
							</div>							
						</div>
						<div class="row m-0 align-items-center sketch-details__item pb-6">
							<div class="col-12 col-md-6 col-lg-4 text-center pb-5 pb-md-0">
								<img src="/resources/images/projects/roll20/design-system/sketch-typography.png" />
							</div>
							<div class="col-12 col-md-6 col-lg-8">
								<h4 class="h1">Typography</h4>															
								<p>The Roll20 Design System includes 2 fonts: Nunito font for both headings and body copy, and Chalet Comprime Hong Kong Sixty for secondary headings or lead text. It is key to keep it simple to avoid overloading and confusing the user. It’s not only a best practice of typographic design, and it also prevents performance issues caused by excessive use of web fonts.</p>
							</div>							
						</div>
						<div class="row m-0 align-items-center sketch-details__item pb-6">
							<div class="col-12 col-md-6 col-lg-4 text-center pb-5 pb-md-0">
								<img src="/resources/images/projects/roll20/design-system/sketch-grid.png" />
							</div>
							<div class="col-12 col-md-6 col-lg-8">
								<h4 class="h1">Grid</h4>															
								<p>Consistent use of a grid system provides the foundation for harmoniously and consistently positioning elements onscreen. Designing to the grid helps create an experience that facilitates understanding and brings order to the page.</p>
							</div>							
						</div>
						<div class="row m-0 align-items-center sketch-details__item pb-6">
							<div class="col-12 col-md-6 col-lg-4 text-center pb-5 pb-md-0">
								<img src="/resources/images/projects/roll20/design-system/sketch-spacing.png" />
							</div>
							<div class="col-12 col-md-6 col-lg-8">
								<h4 class="h1">Spacing</h4>															
								<p>Every part of a UI should be intentional including the empty space between elements. The amount of space between items creates relationships and hierarchy. The Roll20 Design System takes a lot of the guesswork out of spacing to help designers and developers deliver clear, functional layouts.</p>
							</div>							
						</div>
						<div class="row m-0 align-items-center sketch-details__item pb-5">
							<div class="col-12 col-md-6 col-lg-4 text-center pb-5 pb-md-0">
								<img src="/resources/images/projects/roll20/design-system/sketch-imagery.png" />
							</div>
							<div class="col-12 col-md-6 col-lg-8">
								<h4 class="h1">Imagery</h4>															
								<p>The key to success with imagery in a visual design language is having a plan and sticking to it. Set guidelines for illustrations and icons, and use the best image format for the situation.</p>
							</div>							
						</div>
						<div class="row m-0 align-items-center sketch-details__item">
							<div class="col-12 col-md-6 col-lg-4 text-center pb-5 pb-md-0">
								<img src="/resources/images/projects/roll20/design-system/sketch-motion.png" />
							</div>
							<div class="col-12 col-md-6 col-lg-8">
								<h4 class="h1">Motion</h4>															
								<p>The Roll20 Design System observes different types of moments in users’ experience and offers two styles of motion—productive motion, and expressive motion. Reserve expressive motion for occasional, important moments, to better capture the user’s attention and offer a rhythmic break to the productive experience. Productive motion creates a sense of efficiency and responsiveness, while remain subtle and out of the way. Productive motion is appropriate for moments when the user needs to focus on completing tasks.</p>
							</div>							
						</div>
					</div>
				</div>
			</section>

			<section id="section-design" class="py-5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-lg-6 col-xl-5 mx-auto text-center">
							<span class="h6 ls3 t600 uppercase brand-secondary">4. Design</span><br />
							<h3 class="display-4 t100-desktop">Creating the UI Library</h3>
							<p>Unlike the visual audit we’ve already conducted (which looked at the visual qualities of Roll20 design elements), this step in the process looks at the actual components of the Roll20 UI. We collected all of the parts and pieces of the UI currently in production. That meant every button, form, modal, and image.</p>
						</div>
						<div class="col-12 text-center mt-4">
							<img src="/resources/images/projects/roll20/design-system/design-ui-library-devices.png" class="img-fluid" />
						</div>
					</div>
				</div>
			</section>

			<section id="section-design-platform" class="py-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-6">
							<span class="h6 ls3 t600 uppercase brand-secondary">4. Design</span><br />
							<h4 class="h1">Choosing a Platform</h4>													
							<p>After much thought and research I settled on pitching the idea of using <a href="https://gohugo.io/" target="_blank" class="brand-secondary">Hugo</a> as the generator for the documentation site. The primary reason is that the build process is extremely fast. While this can be insignificant for smaller sites, many documentation sites can grow very large and unwieldy, making the build process a bottleneck in updating and deploying the site.</p>
							<p>The secondary reason is that Hugo does not come pre-configured for running a blog—a format that’s unsuitable for most documentation sites. This makes it easier to set up Hugo for whatever site structure we need for our documentation site without needing to restructure the default setup.</p>	
						</div>
						<div class="col-12 col-md-6 col-lg-5 offset-lg-1">
							<img src="/resources/images/projects/roll20/design-system/hugo-logo-wide.svg" class="img-fluid" />
						</div>
					</div>
				</div>
			</section>

			<section id="section-design-documentation" class="py-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7 mx-auto text-center">
							<span class="h6 ls3 t600 uppercase brand-secondary">4. Design</span><br />
							<h4 class="h1">Documentation</h4>															
							<p>This is where rubber meets the road. Documentation and standards are what separate a pattern library from a true design system. This includes defining usage and showcasing examples such as a components default appearance, size, color, disabled status and accesibility tips.</p>		
						</div>
						<div class="row align-items-center">
							<div class="col-12 col-xl-4">
								<nav class="nav nav-pills justify-content-between flex-nowrap flex-xl-column">
									<a class="nav-link flex-fill active px-2 px-xl-0" id="content-tab" data-toggle="tab" href="#content-panel" role="tab" aria-controls="content" aria-selected="true">
										<div class="card mb-4">
											<div class="card-body px-0 px-lg-3">
												<h5 class="nav-link-title text-center text-lg-left">Content</h5>
												<p class="small m-0 nav-link-description d-lg-block d-none">Content guidance covers our voice and tone, and the mechanics of Roll20 grammar and style.</p>
											</div>
										</div>
									</a>
									<a class="nav-link flex-fill px-2 px-xl-0" id="foundation-tab" data-toggle="tab" href="#foundation-panel" role="tab" aria-controls="foundation" aria-selected="false">
										<div class="card mb-4">
											<div class="card-body px-0 px-lg-3">
												<h5 class="nav-link-title text-center text-lg-left">Foundation</h5>
												<p class="small m-0 nav-link-description d-lg-block d-none">Foundations are the visual elements needed to create engaging layouts and end-to-end user experiences.</p>
											</div>
										</div>
									</a>
									<a class="nav-link flex-fill px-2 px-xl-0" id="components-tab" data-toggle="tab" href="#components-panel" role="tab" aria-controls="components" aria-selected="false">
										<div class="card">
											<div class="card-body px-0 px-lg-3">
												<h5 class="nav-link-title text-center text-lg-left">Components</h5>
												<p class="small m-0 nav-link-description d-lg-block d-none">A standalone UI element designed to be reusable across many projects. </p>
											</div>
										</div>
									</a>
								</nav>
							</div>
							<div class="col-12 col-xl-7 offset-xl-1">
								<div class="tab-content" id="documentation-content">
									<div class="tab-pane fade show active" id="content-panel" role="tabpanel" aria-labelledby="content-tab">
										<p class="text-center d-lg-none d-block mt-3">Content guidance covers our voice and tone, and the mechanics of Roll20 grammar and style.</p>
										<img src="/resources/images/projects/roll20/design-system/documentation-content-2x.png" class="img-fluid" />
									</div>
									<div class="tab-pane fade" id="foundation-panel" role="tabpanel" aria-labelledby="foundation-tab">
										<p class="text-center d-lg-none d-block mt-3">Foundations are the visual elements needed to create engaging layouts and end-to-end user experiences.</p>
										<img src="/resources/images/projects/roll20/design-system/documentation-foundation-2x.png" class="img-fluid" />
									</div>
									<div class="tab-pane fade" id="components-panel" role="tabpanel" aria-labelledby="components-tab">
										<p class="text-center d-lg-none d-block mt-3">A standalone UI element designed to be reusable across many projects.</p>
										<img src="/resources/images/projects/roll20/design-system/documentation-componet-2x.png" class="img-fluid" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="section-Implementation" class="py-5 bg-light">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7 mx-auto text-center">
							<span class="h6 ls3 t600 uppercase brand-secondary">5. Implementation</span><br />
							<h3 class="display-4 t100-desktop">Let's make it happen</h3>
							<p>During my time at Roll20, we have redesigned pages that are key to the user signup flow. Below are some Before/After examples.</p>
						</div>
					</div>
					<div class="row py-5 align-items-center">
 						<div class="col-12 col-lg-5 text-center text-lg-left">
							<span class="h6 ls3 t600 uppercase brand-secondary">5. Implementation</span><br />
							<h4 class="h1">Home Page Redesign</h4>															
						</div>
						<div class="col-12 col-lg-7">
							<div class="owl-carousel image-carousel carousel-widget" data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="1" data-items-xl="1">
								<div class="oc-item">
									<img src="/resources/images/projects/roll20/design-system/implimentation-homepage-1.png" class="img-fluid" />
								</div>							
								<div class="oc-item">
									<img src="/resources/images/projects/roll20/design-system/implimentation-homepage-2.png" class="img-fluid" />
								</div>							
								<div class="oc-item">
									<img src="/resources/images/projects/roll20/design-system/implimentation-homepage-3.png" class="img-fluid" />
								</div>							

							</div>
						</div>
					</div>
				</div>
			</section>

			
			<section id="section-final-thoughts" class="bg-dark dark py-6">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-12 col-md-6 mx-auto">
							
							<h3 class="display-4 t100-desktop text-center">My final thoughts...</h3>
							<p>Design systems come with a distinct set of challenges. Getting buy-in and the right governance process in place to support the project takes a lot of effort. They are also very time and resource intensive, which added to my already heavy workload.</p>
							<p>This project brought so many benefits to the organization, from aligning teams, to reducing duplication of effort and menial tasks, to improving accessibility and consistency of brand and experience across products. In the end, we are solving problems and helping people across Roll20 to work faster.
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
									<a href="/work/foundation/" class="text-white">
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

	<?php include("../../../includes_eldrmedia/footer.php");?>

	<?php include("../../../includes_eldrmedia/footer-contents.php");?>

	<script src="/resources/js/project-roll20-design-system.js"></script>

<!-- <script>
$(function(){
	$('.lazy').lazy();
});
</script> -->


	<?php include("../../../includes_eldrmedia/body-bottom-contents.php");?>
