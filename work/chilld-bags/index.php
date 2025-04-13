<?php include("../../includes_eldrmedia/_eldrmedia_config.php");?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../../includes_eldrmedia/head-tag-contents.php");?>
	
	<link rel="stylesheet" href="/resources/css/swiper.css">
	
	<meta name="robots" content="noindex">
	<meta name="robots" content="noimageindex">
	
	<meta property="og:title" content="Chill'd Bags E-Commerce Website & Mobile App" />
	<meta property="og:image" content="http://www.eldrmedia.com/resources/images/projects/chilld-bags/preview.jpg" />
	
<style type="text/css">
#page-menu {
	height: 0;
	overflow: hidden;
	-webkit-backface-visibility: hidden;
}

#page-menu #page-menu-wrap {
	opacity: 0;
	pointer-events: none;
	-webkit-transition: all .4s ease;
	-o-transition: all .4s ease;
	transition: all .4s ease;
	-webkit-transform: translate3d(0,-44px,0);
	-o-transform: translate3d(0,-44px,0);
	transform: translate3d(0,-44px,0);
	transform-style: preserve-3d;
	-webkit-backface-visibility: hidden;
}

#page-menu.sticky-page-menu { overflow: visible; }

#page-menu.sticky-page-menu #page-menu-wrap {
	opacity: 1;
	pointer-events: auto;
	-webkit-transform: translate3d(0,0,0);
	-o-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

</style>
</head>

	<?php include("../../includes_eldrmedia/body-top-contents.php");?>
	
	<?php include("../../includes_eldrmedia/header-no-gradient-dark.php");?>	

	<?php include("../../includes_eldrmedia/navigation.php");?>
	
		<section id="hero" class="hero position-relative">

			<div class="hero__background d-flex align-items-start align-items-md-center">
				
				<div id="particles-js" class="background-element">

<!--
					<div class="background-element-wrapper">

						<svg width="1348" height="641" viewBox="0 0 1348 641" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg">
							<path d="M38.32-17.57C19.34 42.89 77.4 62.2 138.28 77c13.2 3.21 47.65-24.46 37.82-15.1-17.14 16.33-41.03 23.72-60.7 36.9-56.94 38.13-74.22 57.18-113.04 126.8-3.99 7.16 16.8 30.22 18.75 32.35 25.73 27.91 31.6 31.85 68.2 52.89 94.36 54.24 199.36 92.5 304.38 120.13 8.1 2.13 72.44 23.03 103.62 17.13 1.23-.24-2.41-1.03-3.67-.92a173.1 173.1 0 0 0-21.52 3.07c-2.54.54-4.85 1.9-7.17 3.07-9.14 4.61-18.44 8.96-27.18 14.27C417.33 480 398 494.2 377.46 506.44c-12.77 7.6-25.77 15-39.52 20.61-12.36 5.04-25.27 9.02-38.44 11.2-12.65 2.12-25.61 1.48-38.44 1.61-6.27.06-12.98 1.32-18.8-1.03-1.92-.77.43-4.16 1.23-6.05 25.64-60.12 50.44-120.62 78.03-179.86 9.15-19.63 64.71-89.32 66.91-91.83 10.33-11.73 24.14-20.01 34.64-31.59 3.13-3.45-12.4-25-16.87-29.17-9.93-9.28-20.03-18.42-30.65-26.9-12.3-9.81-25.92-17.9-38.05-27.91a43.71 43.71 0 0 1-9.47-11.3c-.9-1.51-.8-3.54-.46-5.28.16-.85 1.03-1.5 1.83-1.84 29.73-12.51 82.28-26.13 103.24-33.05 36.06-11.9 71.9-24.42 107.55-37.46 6.84-2.5 17.16-15.89 19.83-9.12 3.59 9.05-9.4 17.1-13.11 26.09-2.97 7.2-4.86 14.8-6.87 22.33-12.32 45.96-50.7 163.52-40.15 221.4 18.96 103.94 27.16 109.86 116.3 175.65a115.88 115.88 0 0 0 35.04 17.52c24.65 7.45 88.7 37.39 129.84 24.2 1.17-.38 2.28-1.77 2.17-3-.67-7.22-62.88-1.82-73.24 1.02-6.79 1.87-16.2 15.95-18.9 9.44l-7.44.45c-3.13-7.56-1.19-16.35-2.51-24.43-1.24-7.54-3-15-5.16-22.34-8.71-29.5-19.99-58.28-27.47-88.13-2.38-9.5-2.88-19.55-1.95-29.3 7.54-79.64 21.35-140.6 82.3-196.77a49.36 49.36 0 0 1 12.33-8.21c43.5-20.57 88.18-38.65 131.44-59.75a283.33 283.33 0 0 0 39.87-23.82c5.88-4.19 11-9.56 15.26-15.4 1.08-1.47.92-3.9 0-5.47-2.7-4.61-15.05-15.2-19.5-17.33-179.56-85.95-163.43-41.2 212.87-43.16a138.1 138.1 0 0 0 22.33-1.71 157.5 157.5 0 0 0 23.5-6.05c2.23-.75 3.63-4.13 5.95-3.8 8.42 1.24 15.76 6.84 24.16 8.2 18.08 2.96 36.48 3.49 54.76 4.7 5.43.35 10.9.34 16.33 0 8.35-.54 16.83-.67 24.97-2.63 9.84-2.37 18.82-7.55 28.57-10.26 9.81-2.74 19.88-7.53 29.96-6.06 6.74.99 10.39 8.85 15.96 12.76 10.05 7.06 20.25 13.94 30.86 20.11 9.33 5.43 19.44 9.42 28.9 14.62 4.37 2.41 9.27 4.41 12.52 8.2 10.5 12.2 8.28 27.68 2.37 41.95-22.96 55.45-57.83 109.97-107.66 145.22-13.63 9.65-63 37.86-85.97 29.64-112.36-40.23-23.04-18.17-101.84-44.52-8.02-2.68-17.17-5.25-25.63-2.74-1.96.58-3.98 1.34-5.47 2.73-10.53 9.82-21.56 19.32-30.37 30.7-7.63 9.85-13.27 21.17-18.53 32.46-14.87 31.93-31.04 63.52-41.8 97.06-13.8 43.07-6.98 63.76 16.08 101.42 24.44 39.92 43.13 59.97 80.52 84.47 24.09 15.78 47.9 12.85 64.22-10.92 2.63-3.84 2.32-9.06 2.74-13.7 1.07-11.97 2.48-24.03 1.71-36.03-.96-15.11-3.94-30.05-6.88-44.9-5.51-27.85-11.93-55.52-18.48-83.14-16.6-70.08-36.33-132.48-90.67-183.8-22.31-21.08-66.67-32.88-96.58-23.13-9.95 3.24-18.67 9.64-27.07 15.87-34.1 25.27-64.49 55.65-100.27 78.49-4.06 2.59-8.33-5.2-13.04-6.18-12.07-2.5-25.17.12-36.73-4.13-2.77-1.02 1.53-6.41 4.1-7.87 15.06-8.55 30.67-16.74 47.36-21.36 38.7-10.7 78.29-18.26 117.98-24.4 54.47-8.4 109.18-16.37 164.22-19.19 50.54-2.58 101.33-1 151.77 3.03 36.22 2.9 72.96 6.62 107.56 17.73 21.4 6.88 40.45 20.61 57.49 35.3 5.08 4.37 4.7 12.63 5.8 19.24 2.17 12.85 1.82 26.05 4 38.9 2.35 13.85 4.84 27.83 9.57 41.07 4.18 11.68 10.85 22.33 16.96 33.13 1.88 3.32 4.95 5.85 6.94 9.1 2.17 3.54 4.43 7.16 5.47 11.18 1.13 4.34 1.57 8.99.91 13.43-1.76 11.74-24.12 17.54-31.01 18.44-30.8 4-130.17 8.78-167.44 16.56-41.27 8.62-53.89 21.6-87.58 47.62-4.06 3.13-15.66 11.78-17.67 19.36-28.28 106.63 66.85-205.61-12.32 52.4-.16.52-7.93 25.26-12.89 28.02-4.29 2.4-9.69 2.03-14.6 1.94-58.07-1.02-202.86-24.02-216.88-26.06a4427.34 4427.34 0 0 1-133.89-21.52c-12.55-2.22-25.26-4.38-37.23-8.76-36.37-13.3-72.08-28.41-107.45-44.16-23.38-10.4-40.84-32.65-61.77-40.1a8.47 8.47 0 0 0-5.47 0c-41.1 14.27-29.74 17.56-74.11 58.36-28.4 26.1-47.96 37.75-71.55 67.62-19.06 24.13-7.93 23.75-15.63 55.57-1 4.13-6.14 19.33-14.36 20.94-23.27 4.56-68.98-6.12-81.4-9.22C236.57 614.54 185.5 598.4 96.4 564.73a1107 1107 0 0 1-49.69-20.3c-3.74-1.63-9.8-1.96-10.71-5.93-1.4-6.03 4.4-11.69 5.23-17.82 2.8-20.34-3.35-19.21 2.28-38.62 8.42-29.02 26.3-41.65 57.15-47.2 32.04-5.74 64.66-7.84 97.14-10.07 16.45-1.13 33 .63 49.47 0 5.57-.21 15.1 2.86 16.53-2.53 1.53-5.77-8-8.89-12.43-12.89a184.34 184.34 0 0 0-16.02-12.81c-35.18-25.3-70-51.13-106.14-75.02-57.54-38.02-117-73.05-174.8-110.66a28.82 28.82 0 0 1-8.79-8.77c-2.92-4.72-1.14-19.72-.46-22.56 7.27-30.1 15.13-60.06 24.03-89.7 6-19.97 24.57-43.26 33.35-59C8.22 20.67 7.9 9.7 18.24 2.25c34-24.44 90.55-30.67 129.09-35.09 106.14-12.18 212.38-23.69 318.84-32.63 57.73-4.85 115.7-6.37 173.6-8.75 2.75-.11 10.03-.78 8.18 1.27-2.23 2.47-10.16 2.45-12.12-1.39-8.45-16.47-14.7-31.65-31.59-41.6-11.96-7.03-23.49-15.34-36.64-19.8-17.72-6-36.43-8.87-55-11.24-16.05-2.05-32.52-4.45-48.51-1.96-31.52 4.9-56.8 69.15-64.06 85.71-11.56 26.31-23.99 52.72-30.03 80.82-17.44 81.2 10.68 151.72 57.06 217 30.08 42.32 61.2 77.53 112.58 94.92 147.02 49.77 359.23 12.7 415.95-153.57 17.26-50.62 5.78-174.4-66.7-182.7-12.8-1.48-26.45-4.37-38.67-.24-70.95 23.94-98.1 85.11-127.83 147.7-6.24 13.13-18.86 70.79-43.93 60.25-38.83-16.32-76.1-36.34-115.39-51.52-49.65-19.2-99.92-37.1-151.17-51.49-48.64-13.65-98.8-21.18-148.04-32.52-3.5-.8-7.06-1.89-10.04-3.88-.65-.44.47-1.66 1.14-2.07 2.97-1.8 6.07-3.56 9.45-4.33 9-2.06 18.18-3.4 27.38-4.11 14.54-1.12 29.14-1.34 43.72-1.37 46.18-.1 78.12 69.71 90 105.21 5.6 16.72 3.08 44.64-11.38 56.48-18.7 15.3-23.8-.3 2.39 18.67a65.15 65.15 0 0 1 11.27 10.24c4.93 5.76 10.26 11.5 13.31 18.44 5.4 12.32 8.53 25.55 11.73 38.61 1.9 7.76 2.35 15.8 3.52 23.7" stroke="#3724FF" stroke-width="4" fill="none" fill-rule="evenodd" stroke-dasharray="0,198" stroke-linecap="round" class="path" data-parallax='{"y": -50, "smoothness": 20}'/>
						</svg>
											
					</div>
-->
					
				</div>

				<div class="hero__content d-flex w-100">

					<div class="container clearfix dark">

						<div class="row align-items-center">

							<div class="col-md-6 col-lg-4 col-xl-5">

								<div class="py-5 py-md-0 text-center text-md-left">
									
									<h1 class="display-4 title font-primary mb-1 mb-sm-2">Chill'd Bags</h1>
									<h2 class="h6">WEBSITE | MOBILE APP | BRANDING | UI/UX</h2>
									<p class="lead">E-Commerce website redesign with mobile app.</p>
									
								</div>

							</div>
							
							<div class="col-10 col-sm-8 col-md-6 col-lg-8 col-xl-7 offset-1 offset-sm-2 offset-md-0">

								<div class="hero__content-element">

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="/resources/images/projects/chilld-bags/hero/devices@2x.png" media="(min-width: 1399px)">
										<source srcset="/resources/images/projects/chilld-bags/hero/devices.png" media="(min-width: 991px)">
										<source srcset="/resources/images/projects/chilld-bags/hero/devices@0.5x.png" media="(max-width: 767px)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="/resources/images/projects/chilld-bags/hero/devices.png" class="animated fadeIn" data-parallax='{"y": 50, "smoothness": 20}'>
									</picture>
									
								</div>

							</div>							

						</div>

					</div>

				</div>

			</div>
			
			<div class="wave-container">
				<svg class="wave-item item-1 flip-vertically" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-1" d=""/></svg>
				<svg class="wave-item item-2 flip-vertically" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-2" d=""/></svg>
				<svg class="wave-item item-3 flip-vertically" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-3" d=""/></svg>						
			</div>

		</section>
		
		<!-- Content
		============================================= -->
		<section id="content">		
		
			<section id="section-introduction" class="introduction section nobottommargin nobg">
	
				<div class="introduction-client">
				
					<div class="container">
						
						<div class="col-md-8 offset-md-2">
							
							<h5 class="ls2 uppercase">CLIENT</h5>
							<p>Wanting a fresh redesign of their website, company branding, and a new mobile app. Main goal: intrigue younger consumers to experience their product line of adventure totes, packs and more.</p>
							<small class="text-muted">Due to an NDA, the client's logo, product images and product content have been substituted.</small>
						</div>
						
					</div>
					
				</div>
	
				<div class="introduction-design">
					
					<div class="container">
				
						<div class="row">
								
							<div class="col col-md-9 offset-md-1">
		
								<img src="/resources/images/projects/chilld-bags/introduction/project-devices.png" class="img-fluid" />								
							
							</div>					
								
						</div>
					
					</div>
					
				</div>
				
				<div class="introduction-me">
				
					<div class="container">
						
						<div class="col-md-8 offset-md-2">
							
							<h5 class="ls2 uppercase">Me</h5>
							<p>Propose a refined, minimalistic interface in order to reach the widest audience, without forgetting the brand’s identity.</p>
							
						</div>
						
					</div>
					
				</div>						
				
			</section>
			
			<section id="section-project-details" class="project-details section nobg m-0 border-top">
	
				<div class="project-details__content">
					
					<div class="container">
						
						<div class="row m-0">
												
							<div class="col-sm-12 col-md-3 text-center text-md-left">
								
								<h3>Details</h3>
								
							</div>
		
							<div class="col-12 col-sm-8 col-md-5 text-center text-sm-left">
								
								<h5 class="ls2 uppercase">Role</h5>
								<p>Project Manager, UI/UX Designer, & Branding Development</p>
								
							</div>
							
							<div class="col-6 col-sm-2 text-center text-sm-left">
								
								<h5 class=f"ls2 uppercase">Type</h5>
								<p>Website & Mobile App</p>
								
							</div>
							
							<div class="col-6 col-sm-2 text-center text-sm-left">
								
								<h5 class="ls2 uppercase">Year</h5>
								<p>2018</p>
								
							</div>															
						
						</div>
						
					</div>
	
				</div>
				
			</section>
			
			<section id="section-project-devices" class="mt-5">
				
				<div class="project-devices--navigation">
					<div class="container transition-03">
						<div class="navigation-wrapper py-3 px-2 px-md-3 px-lg-6 px-xl-7">
							<ul class="nav nav-pills nav-justified font-primary" id="project-devices--tabs" role="tablist">
								<li class="nav-item text-center text-sm-left d-flex justify-content-center">
									<a class="nav-link active" id="project-desktop-tab" data-toggle="tab" href="#project-desktop" role="tab" aria-controls="project-desktop-tab" aria-selected="true">
										<div class="d-flex flex-column flex-md-row align-items-center">
											<div class="nav-link--svg mb-2 mb-md-0 mr-0 mr-md-4">
												<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center">
													<svg width="24" height="17" xmlns="http://www.w3.org/2000/svg">
														<path d="M21.69 17H1.5a1.5 1.5 0 0 1-1.2-2.4l2-2.67a1 1 0 0 0 .2-.6V3a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3h-10a1 1 0 0 1 0-2h10a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-12a1 1 0 0 0-1 1v8.33a3 3 0 0 1-.6 1.8L2.5 15h18.38l-.28-.55a1 1 0 0 1 1.79-.89l.64 1.28a1.5 1.5 0 0 1-1.34 2.17V17z" fill="#FFF" fill-rule="evenodd"/>
													</svg>
												</div>
											</div>
											<div class="nav-link--title">
												<span class="t300 small m-0 d-block">Responsive</span><span class="t600">Website</span>
											</div>
										</div>
									</a>
								</li>
								<li class="nav-item text-center text-sm-left d-flex justify-content-center">
									<a class="nav-link" id="project-mobile-tab" data-toggle="tab" href="#project-mobile" role="tab" aria-controls="project-mobile-tab" aria-selected="false">
										<div class="d-flex flex-column flex-md-row align-items-center">
											<div class="nav-link--svg mb-2 mb-md-0 mr-0 mr-md-4">
												<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center">
													<svg width="14" height="24" xmlns="http://www.w3.org/2000/svg">
													  <path d="M11 24h-1a1 1 0 0 1 0-2h1a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h1a1 1 0 0 1 0 2H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v18a3 3 0 0 1-3 3zm-4-4a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" fill="#FFF" fill-rule="evenodd"/>
													</svg>
												</div>
											</div>
											<div class="nav-link--title">
												<span class="t300 small m-0 d-block">Mobile</span><span class="t600">App</span>
											</div>
										</div>			
									</a>
								</li>
								<li class="nav-item text-center text-sm-left d-flex justify-content-center">
									<a class="nav-link" id="project-watch-tab" data-toggle="tab" href="#project-watch" role="tab" aria-controls="project-watch-tab" aria-selected="false">
										<div class="d-flex flex-column flex-md-row align-items-center">
											<div class="nav-link--svg mb-2 mb-md-0 mr-0 mr-md-4">
												<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center">
													<svg width="14" height="24" xmlns="http://www.w3.org/2000/svg">
													  <path d="M11 20H5a1 1 0 0 1 0-2h6a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v12a1 1 0 0 1-2 0V7a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3zm0 3a1 1 0 0 0-1-1H4a1 1 0 0 0 0 2h6a1 1 0 0 0 1-1zm0-22a1 1 0 0 0-1-1H4a1 1 0 0 0 0 2h6a1 1 0 0 0 1-1zM9.55 15.83a1 1 0 0 0 .28-1.39L8 11.7V9a1 1 0 0 0-2 0v2.7c0 .4.12.78.34 1.11l1.83 2.75a1 1 0 0 0 1.39.28l-.01-.01z" fill="#FFF" fill-rule="evenodd"/>
													</svg>
												</div>
											</div>
											<div class="nav-link--title">
												<span class="t300 small m-0 d-block">Watch</span><span class="t600">App</span>
											</div>
										</div>										
									</a>
								</li>
							</ul>													
						</div>
					</div>
					<div class="navigation-design-elements transition-03">
						<div class="design-element svg-1">
							<svg width="1184" height="150" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg">
							  <path d="M1179.67 140.39c15.76-14.89-32.45-19.64-83.01-23.29-10.95-.79-39.57 6.02-31.41 3.72 14.24-4.02 34.08-5.84 50.41-9.09 47.28-9.39 61.63-14.08 93.87-31.22 3.32-1.76-13.94-7.44-15.57-7.97-21.37-6.87-26.24-7.84-56.63-13.02-78.36-13.36-165.56-22.78-252.77-29.58-6.73-.53-60.16-5.67-86.05-4.22-1.03.06 2 .25 3.04.23 6-.16 12-.39 17.88-.76 2.1-.13 4.03-.47 5.95-.76 7.59-1.13 15.31-2.2 22.57-3.51 16.98-3.06 33.03-6.56 50.09-9.57 10.6-1.87 21.4-3.7 32.82-5.07a452.09 452.09 0 0 1 31.92-2.76c10.5-.52 21.27-.37 31.92-.4 5.21-.01 10.78-.32 15.62.25 1.59.2-.36 1.03-1.03 1.5-21.29 14.8-41.89 29.7-64.8 44.29-7.6 4.83-53.74 22-55.57 22.6-8.57 2.9-20.04 4.94-28.76 7.79-2.6.85 10.3 6.15 14 7.18a685.31 685.31 0 0 0 25.47 6.63c10.2 2.41 21.52 4.4 31.6 6.87 3.14.77 5.76 1.74 7.86 2.78.75.37.66.87.38 1.3-.14.2-.86.37-1.53.45-24.68 3.09-68.32 6.44-85.73 8.14-29.94 2.93-59.7 6.02-89.31 9.23-5.68.61-14.25 3.9-16.47 2.24-2.98-2.23 7.8-4.2 10.89-6.42 2.47-1.77 4.03-3.65 5.7-5.5 10.23-11.32 42.1-40.27 33.34-54.52-15.74-25.6-22.55-27.05-96.57-43.25a238.09 238.09 0 0 0-29.1-4.32c-20.47-1.83-73.67-9.2-107.83-5.96-.97.1-1.9.44-1.8.74.56 1.78 52.21.45 60.82-.25 5.64-.46 13.46-3.93 15.7-2.33l6.17-.1c2.6 1.86.99 4.02 2.1 6.01a25.37 25.37 0 0 0 4.27 5.5c7.24 7.27 16.6 14.35 22.81 21.7 1.98 2.34 2.4 4.82 1.63 7.22-6.27 19.61-17.73 34.62-68.35 48.45-3.02.83-6.53 1.5-10.24 2.03-36.13 5.06-73.23 9.51-109.15 14.7a524.74 524.74 0 0 0-33.11 5.87 75.17 75.17 0 0 0-12.67 3.8c-.9.36-.77.96 0 1.34 2.24 1.14 12.49 3.75 16.19 4.27 149.11 21.17 135.72 10.15-176.77 10.63-6.2 0-12.44.11-18.55.42-6.63.33-13.15.86-19.52 1.5-1.85.17-3.01 1-4.94.92-6.99-.3-13.09-1.68-20.06-2.02-15.01-.72-30.3-.85-45.47-1.15-4.51-.09-9.05-.08-13.57 0-6.93.13-13.98.17-20.74.65-8.17.58-15.63 1.86-23.72 2.52-8.15.68-16.5 1.86-24.88 1.5-5.6-.25-8.63-2.18-13.26-3.15a749.07 749.07 0 0 0-25.62-4.95c-7.75-1.34-16.15-2.32-24-3.6-3.63-.6-7.7-1.09-10.4-2.02-8.71-3-6.87-6.81-1.97-10.33 19.07-13.65 48.03-27.08 89.4-35.76 11.33-2.37 52.33-9.32 71.4-7.3 93.31 9.9 19.14 4.48 84.57 10.97 6.66.66 14.26 1.29 21.3.67 1.61-.14 3.3-.33 4.53-.67 8.74-2.42 17.9-4.76 25.23-7.56a81.87 81.87 0 0 0 15.38-8c12.35-7.86 25.78-15.64 34.7-23.9 11.47-10.6 5.8-15.7-13.34-24.97-20.3-9.83-35.82-14.77-66.87-20.8-20-3.89-39.78-3.16-53.33 2.69-2.19.94-1.93 2.23-2.27 3.37-.9 2.95-2.06 5.92-1.42 8.87.8 3.72 3.26 7.4 5.7 11.06 4.59 6.86 9.92 13.67 15.35 20.47 13.79 17.26 30.17 32.63 75.3 45.27 18.53 5.18 55.37 8.09 80.2 5.69 8.27-.8 15.5-2.37 22.48-3.9 28.33-6.23 53.56-13.71 83.27-19.34 3.37-.63 6.92 1.29 10.84 1.53 10.01.61 20.9-.03 30.5 1.01 2.3.25-1.27 1.58-3.4 1.94-12.51 2.1-25.48 4.12-39.34 5.26-32.14 2.64-65.01 4.5-97.97 6-45.24 2.08-90.67 4.04-136.38 4.73-41.97.64-84.15.25-126.04-.74-30.08-.72-60.59-1.63-89.32-4.37-17.78-1.7-33.6-5.07-47.74-8.69-4.22-1.08-3.9-3.11-4.82-4.74-1.8-3.16-1.5-6.41-3.32-9.58-1.95-3.4-4.02-6.85-7.95-10.11-3.47-2.88-9-5.5-14.08-8.16-1.56-.82-4.11-1.44-5.77-2.24-1.8-.87-3.67-1.76-4.54-2.75-.93-1.07-1.3-2.22-.75-3.3 1.46-2.9 20.02-4.33 25.75-4.55 25.58-.99 108.1-2.16 139.05-4.08 34.27-2.12 44.75-5.32 72.73-11.72 3.37-.78 13-2.9 14.67-4.77 23.5-26.26-55.51 50.63 10.23-12.9.13-.14 6.6-6.23 10.7-6.9 3.57-.6 8.06-.5 12.13-.48 48.23.25 168.46 5.91 180.1 6.41 37.15 1.6 74.23 3.36 111.2 5.3 10.42.55 20.97 1.08 30.92 2.16 30.2 3.28 59.85 7 89.23 10.87 19.41 2.57 33.91 8.04 51.3 9.88 1.42.15 3.1.14 4.54 0 34.12-3.52 24.7-4.33 61.54-14.37 23.58-6.43 39.83-9.3 59.42-16.65 15.83-5.95 6.58-5.85 12.98-13.69.83-1.02 5.1-4.76 11.92-5.16 19.33-1.12 57.29 1.51 67.6 2.28 83.77 6.18 126.18 10.16 200.17 18.45 13.9 1.55 27.63 3.24 41.26 5 3.11.4 8.14.48 8.9 1.46 1.16 1.48-3.65 2.87-4.35 4.38-2.31 5.01 2.79 4.74-1.89 9.52-6.99 7.14-21.84 10.25-47.46 11.62-26.6 1.41-53.7 1.93-80.67 2.48-13.66.28-27.4-.16-41.08 0-4.62.05-12.54-.7-13.72.62-1.28 1.42 6.64 2.19 10.32 3.18a266.6 266.6 0 0 0 13.3 3.15c29.21 6.23 58.13 12.6 88.15 18.47 47.77 9.37 97.16 18 145.16 27.25 2.88.56 5.48 1.3 7.3 2.16 2.42 1.17.94 4.86.37 5.56a271.62 271.62 0 0 1-19.95 22.09c-4.98 4.91-20.4 10.65-27.7 14.53-4.72 2.5-4.44 5.2-13.04 7.04-28.22 6.02-75.2 7.55-107.2 8.64-88.14 3-176.36 5.83-264.77 8.03-47.95 1.2-96.09 1.57-144.17 2.16-2.28.03-8.33.2-6.79-.31 1.85-.61 8.43-.6 10.07.34 7.01 4.05 12.2 7.8 26.23 10.24 9.93 1.73 19.5 3.78 30.42 4.88 14.72 1.48 30.26 2.18 45.67 2.77 13.34.5 27.02 1.1 40.3.48 26.17-1.2 47.16-17.03 53.2-21.1 9.6-6.49 19.92-12.99 24.93-19.9 14.48-20-8.87-37.37-47.38-53.44-24.98-10.43-50.83-19.1-93.5-23.38-122.08-12.26-298.31-3.12-345.41 37.82-14.34 12.46-4.8 42.94 55.38 44.99 10.63.36 21.97 1.07 32.11.06 58.93-5.9 81.47-20.96 106.16-36.38 5.18-3.23 15.66-17.43 36.48-14.83 32.25 4.02 63.2 8.95 95.82 12.69 41.24 4.72 82.98 9.13 125.55 12.67 40.4 3.37 82.05 5.22 122.94 8.01 2.9.2 5.86.47 8.33.96.55.1-.39.4-.95.5-2.46.45-5.04.88-7.84 1.07-7.47.51-15.1.84-22.74 1.02-12.07.27-24.2.33-36.3.33-38.36.03-64.88-17.16-74.75-25.9-4.65-4.12-2.55-11 9.46-13.91 15.52-3.77 19.75.07-2-4.6a81.78 81.78 0 0 1-9.35-2.52c-4.1-1.42-8.52-2.83-11.05-4.54-4.5-3.04-7.09-6.3-9.74-9.51-1.58-1.91-1.95-3.89-2.93-5.83" stroke="#FF3789" stroke-width="6" fill="none" fill-rule="evenodd" stroke-dasharray="0,700" stroke-linecap="round"/>
							</svg>							
						</div>
						<div class="design-element svg-2">
							<svg width="987" height="155" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg">
							  <path d="M2.33 11.61C-13.43 26.5 34.78 31.25 85.34 34.9c10.95.79 39.57-6.02 31.41-3.72-14.24 4.02-34.08 5.84-50.41 9.09C19.06 49.66 4.7 54.35-27.53 71.49c-3.32 1.76 13.94 7.44 15.57 7.97C9.4 86.33 14.28 87.3 44.67 92.48c78.36 13.36 165.56 22.78 252.77 29.58 6.73.53 60.16 5.67 86.05 4.22 1.03-.06-2-.25-3.04-.23-6 .16-12 .39-17.88.76-2.1.13-4.03.47-5.95.76-7.59 1.13-15.31 2.2-22.57 3.51-16.98 3.06-33.03 6.56-50.09 9.57-10.6 1.87-21.4 3.7-32.82 5.07a452.09 452.09 0 0 1-31.92 2.76c-10.5.52-21.27.37-31.92.4-5.21.01-10.78.32-15.62-.25-1.59-.2.36-1.03 1.03-1.5 21.29-14.8 41.89-29.7 64.8-44.29 7.6-4.83 53.74-22 55.57-22.6 8.57-2.9 20.04-4.94 28.76-7.79 2.6-.85-10.3-6.15-14-7.18a685.31 685.31 0 0 0-25.47-6.63c-10.2-2.41-21.52-4.4-31.6-6.87a38.32 38.32 0 0 1-7.86-2.78c-.75-.37-.66-.87-.38-1.3.14-.2.86-.37 1.53-.45 24.68-3.09 68.32-6.44 85.73-8.14 29.94-2.93 59.7-6.02 89.31-9.23 5.68-.61 14.25-3.9 16.47-2.24 2.98 2.23-7.8 4.2-10.89 6.42-2.47 1.77-4.03 3.65-5.7 5.5-10.23 11.32-42.1 40.27-33.34 54.52 15.74 25.6 22.55 27.05 96.57 43.25a238.09 238.09 0 0 0 29.1 4.32c20.47 1.83 73.67 9.2 107.83 5.96.97-.1 1.9-.44 1.8-.74-.56-1.78-52.21-.45-60.82.25-5.64.46-13.46 3.93-15.7 2.33l-6.17.1c-2.6-1.86-.99-4.02-2.1-6.01a25.37 25.37 0 0 0-4.27-5.5c-7.24-7.27-16.6-14.35-22.81-21.7-1.98-2.34-2.4-4.82-1.63-7.22 6.27-19.61 17.73-34.62 68.35-48.45 3.02-.83 6.53-1.5 10.24-2.03 36.13-5.06 73.23-9.51 109.15-14.7a524.74 524.74 0 0 0 33.11-5.87 75.17 75.17 0 0 0 12.67-3.8c.9-.36.77-.96 0-1.34-2.24-1.14-12.49-3.75-16.19-4.27C575.66 7.48 589.05 18.5 901.54 18.02c6.2 0 12.44-.11 18.55-.42 6.63-.33 13.15-.86 19.52-1.5 1.85-.17 3.01-1 4.94-.92 6.99.3 13.09 1.68 20.06 2.02 15.01.72 30.3.85 45.47 1.15 4.51.09 9.05.08 13.57 0 6.93-.13 13.98-.17 20.74-.65 8.17-.58 15.63-1.86 23.72-2.52 8.15-.68 16.5-1.86 24.88-1.5 5.6.25 8.63 2.18 13.26 3.15a749.07 749.07 0 0 0 25.62 4.95c7.75 1.34 16.15 2.32 24 3.6 3.63.6 7.7 1.09 10.4 2.02 8.71 3 6.87 6.81 1.97 10.33-19.07 13.65-48.03 27.08-89.4 35.76-11.33 2.37-52.33 9.32-71.4 7.3-93.31-9.9-19.14-4.48-84.57-10.97-6.66-.66-14.26-1.29-21.3-.67-1.61.14-3.3.33-4.53.67-8.74 2.42-17.9 4.76-25.23 7.56a81.87 81.87 0 0 0-15.38 8c-12.35 7.86-25.78 15.64-34.7 23.9-11.47 10.6-5.8 15.7 13.34 24.97 20.3 9.83 35.82 14.77 66.87 20.8 20 3.89 39.78 3.16 53.33-2.69 2.19-.94 1.93-2.23 2.27-3.37.9-2.95 2.06-5.92 1.42-8.87-.8-3.72-3.26-7.4-5.7-11.06-4.59-6.86-9.92-13.67-15.35-20.47-13.79-17.26-30.17-32.63-75.3-45.27-18.53-5.18-55.37-8.09-80.2-5.69-8.27.8-15.5 2.37-22.48 3.9-28.33 6.23-53.56 13.71-83.27 19.34-3.37.63-6.92-1.29-10.84-1.53-10.01-.61-20.9.03-30.5-1.01-2.3-.25 1.27-1.58 3.4-1.94 12.51-2.1 25.48-4.12 39.34-5.26a2732.1 2732.1 0 0 1 97.97-6c45.24-2.08 90.67-4.04 136.38-4.73 41.97-.64 84.15-.25 126.04.74 30.08.72 60.59 1.63 89.32 4.37 17.78 1.7 33.6 5.07 47.74 8.69 4.22 1.08 3.9 3.11 4.82 4.74 1.8 3.16 1.5 6.41 3.32 9.58 1.95 3.4 4.02 6.85 7.95 10.11 3.47 2.88 9 5.5 14.08 8.16 1.56.82 4.11 1.44 5.77 2.24 1.8.87 3.67 1.76 4.54 2.75.93 1.07 1.3 2.22.75 3.3-1.46 2.9-20.02 4.33-25.75 4.55-25.58.99-108.1 2.16-139.05 4.08-34.27 2.12-44.75 5.32-72.73 11.72-3.37.78-13 2.9-14.67 4.77-23.5 26.26 55.51-50.63-10.23 12.9-.13.14-6.6 6.23-10.7 6.9-3.57.6-8.06.5-12.13.48-48.23-.25-168.46-5.91-180.1-6.41-37.15-1.6-74.23-3.36-111.2-5.3-10.42-.55-20.97-1.08-30.92-2.16-30.2-3.28-59.85-7-89.23-10.87-19.41-2.57-33.91-8.04-51.3-9.88a23.14 23.14 0 0 0-4.54 0c-34.12 3.52-24.7 4.33-61.54 14.37-23.58 6.43-39.83 9.3-59.42 16.65-15.83 5.95-6.58 5.85-12.98 13.69-.83 1.02-5.1 4.76-11.92 5.16-19.33 1.12-57.29-1.51-67.6-2.28-83.77-6.18-126.18-10.16-200.17-18.45-13.9-1.55-27.63-3.24-41.26-5-3.11-.4-8.14-.48-8.9-1.46-1.16-1.48 3.65-2.87 4.35-4.38 2.31-5.01-2.79-4.74 1.89-9.52 6.99-7.14 21.84-10.25 47.46-11.62 26.6-1.41 53.7-1.93 80.67-2.48 13.66-.28 27.4.16 41.08 0 4.62-.05 12.54.7 13.72-.62 1.28-1.42-6.64-2.19-10.32-3.18a266.6 266.6 0 0 0-13.3-3.15c-29.21-6.23-58.13-12.6-88.15-18.47-47.77-9.37-97.16-18-145.16-27.25a31.85 31.85 0 0 1-7.3-2.16c-2.42-1.17-.94-4.86-.37-5.56a271.62 271.62 0 0 1 19.95-22.09c4.98-4.91 20.4-10.65 27.7-14.53 4.72-2.5 4.44-5.2 13.04-7.04 28.22-6.02 75.2-7.55 107.2-8.64 88.14-3 176.36-5.83 264.77-8.03 47.95-1.2 96.09-1.57 144.17-2.16 2.28-.03 8.33-.2 6.79.31-1.85.61-8.43.6-10.07-.34-7.01-4.05-12.2-7.8-26.23-10.24-9.93-1.73-19.5-3.78-30.42-4.88-14.72-1.48-30.26-2.18-45.67-2.77-13.34-.5-27.02-1.1-40.3-.48-26.17 1.2-47.16 17.03-53.2 21.1-9.6 6.49-19.92 12.99-24.93 19.9-14.48 20 8.87 37.37 47.38 53.44 24.98 10.43 50.83 19.1 93.5 23.38 122.08 12.26 298.31 3.12 345.41-37.82 14.34-12.46 4.8-42.94-55.38-44.99-10.63-.36-21.97-1.07-32.11-.06-58.93 5.9-81.47 20.96-106.16 36.38-5.18 3.23-15.66 17.43-36.48 14.83-32.25-4.02-63.2-8.95-95.82-12.69a4055.04 4055.04 0 0 0-125.55-12.67c-40.4-3.37-82.05-5.22-122.94-8.01-2.9-.2-5.86-.47-8.33-.96-.55-.1.39-.4.95-.5 2.46-.45 5.04-.88 7.84-1.07 7.47-.51 15.1-.84 22.74-1.02 12.07-.27 24.2-.33 36.3-.33 38.36-.03 64.88 17.16 74.75 25.9 4.65 4.12 2.55 11-9.46 13.91-15.52 3.77-19.75-.07 2 4.6 3.4.73 6.6 1.57 9.35 2.52 4.1 1.42 8.52 2.83 11.05 4.54 4.5 3.04 7.09 6.3 9.74 9.51 1.58 1.91 1.95 3.89 2.93 5.83" stroke="#1F08FE" stroke-width="3" fill="none" fill-rule="evenodd" stroke-dasharray="1,800" stroke-linecap="round"/>
							</svg>						
						</div>
					</div>
				</div>

				<div class="tab-content" id="project-content">
					
					<!-- Desktop Layout - Start
					================================= -->
					<div class="tab-pane show active" id="project-desktop" role="tabpanel" aria-labelledby="project-desktop-tab">
						
						<section id="project-desktop-gallery" class="pt-6 pb-4">
							
							<div class="container">
							
								<div class="desktop-gallery--wrapper text-center">

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="/resources/images/projects/chilld-bags/website/gallery/macbook-pro.png" media="(min-width: 991px)">
										<source srcset="/resources/images/projects/chilld-bags/website/gallery/macbook-pro@0.5x.png" media="(max-width: 767px)">
										<!--[if IE 9]></video><![endif]-->
										<img data-srcset="/resources/images/projects/chilld-bags/website/gallery/macbook-pro.png" class="lazy-element">
									</picture>									
									
								</div>
							
							</div>
							
						</section>
						
						<section id="project-desktop-userflows" class="dark py-4">
							
							<div class="wave-container">
								<svg class="wave-item item-1 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-4" d=""/></svg>
								<svg class="wave-item item-2 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-5" d=""/></svg>
								<svg class="wave-item item-3 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-6" d=""/></svg>						
							</div>
							
							<div class="content-inner py-5">
								
								<div class="container">
									
									<div class="row align-items-center">
																			
										<div class="col-md-6">				
	
											<div class="content__title mb-5">
											
												<h3 class="display-4 t100-desktop">User Flows</h3>
												<p>Since this is an e-commerce website, I wanted to streamline the conversion funnel. This user flow chart was used to figure out what the necessary steps are, and to combine steps where possible.</p>
												<a href="/resources/documents/chilld-bags/chilld-bags-sitemap.pdf" class="button button-circle button-primary mx-0" target="_blank">View User Flows</a>
												
											</div>
									
										</div>
										
										<div class="col-md-6 col-xl-5 offset-0 offset-xl-1">
											
											<img data-src="/resources/images/projects/chilld-bags/website/userflows/userflow-example.png" class="img-fluid lazy-element" />
											
										</div>

									</div>
																		
								</div>
								
							</div>
							
							<div class="wave-container">
								<svg class="wave-item item-1 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-7" class="wave-path-1" d=""/></svg>
								<svg class="wave-item item-2 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-8" class="wave-path-2" d=""/></svg>
								<svg class="wave-item item-3 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-hero-9" class="wave-path-3" d=""/></svg>						
							</div>										
							
						</section>
						
						<section id="project-desktop-wireframes" class="py-4">
							
							<div class="container">
								
								<div class="row">
									
									<div class="col-12">

										<div class="content__title text-center">
											<span class="h6 ls3 t200-desktop uppercase">Low-Fidelity</span><br />
											<h3 class="display-4 t100-desktop">Wireframes</h3>
<!-- 											<p>Below shows the iterations within the wireframe phase.</p> -->
										</div>									

										<ul class="portfolio-filter style-1 d-flex flex-nowrap justify-content-center float-none text-center col-12 col-lg-7 col-xl-6 p-0 mx-auto font-primary t600 uppercase clearfix" data-container="#portfolio">
										
											<li class="activeFilter flex-fill float-none"><a href="#" class="d-flex justify-content-center flex-column flex-md-row transition-03 px-0" data-filter="*"><i class="icon-star h3 mb-1 mb-md-0 mr-0 mr-md-3"></i>All</a></li>
											<li class="flex-fill float-none"><a href="#" class="d-flex justify-content-center flex-column flex-md-row transition-03 px-0" data-filter=".pf-desktop"><i class="icon-laptop h3 mb-1 mb-md-0 mr-0 mr-md-3"></i>Desktop</a></li>
											<li class="flex-fill float-none"><a href="#" class="d-flex justify-content-center flex-column flex-md-row transition-03 px-0" data-filter=".pf-mobile"><i class="icon-smartphone h3 mb-1 mb-md-0 mr-0 mr-md-3"></i>Mobile</a></li>
										
										</ul>
										
									</div>

									<div class="col-12">

										<div id="portfolio" class="portfolio grid-container portfolio-1 portfolio-masonry clearfix">

												<article class="wireframe-item pf-desktop py-5">
													<div class="row align-items-center">
														<div class="col-lg-7">
															<div class="wireframe-image">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/home-desktop-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 offset-0 offset-lg-1">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-2 dark">Desktop</span>																
																<h3>Home Page</h3>
																<p>Attempting to make the company feel more personable and have quick access to products. We added a hash tag powered social media section. While keeping in line with the initial requirement, home page imagery shows products being used outdoors.</p>
<!-- 																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a> -->
															</div>
														</div>
													</div>
												</article>

												<article class="wireframe-item pf-mobile py-5">
													<div class="row align-items-center">
														<div class="col-lg-7 order-0 order-lg-1 offset-0 offset-lg-1">
															<div class="wireframe-image text-center">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/home-mobile-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 order-1 order-lg-0">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-1 dark">Mobile</span>
																<h3>Home Page</h3>
																<p>The mobile home page layout goal did not change, in that we wanted users on the product landing pages quickly. That in mind, I made the hero section 100% of the vertical height. The CTA in the most natural position for a user's thumb.</p>
<!-- 																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a> -->
															</div>
														</div>
													</div>
												</article>

<!--
												<article class="wireframe-item pf-desktop py-5">
													<div class="row align-items-center">
														<div class="col-lg-7">
															<div class="wireframe-image">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/product-landing-desktop-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 offset-0 offset-lg-1">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-2 dark">Desktop</span>																																
																<h3>Product Landing Page Layout</h3>
																<p>Understanding the target audience and what speaks to them. Large images, video, features, and specs can be a lot to display. To break all this up I wanted to take a different approach and go section by section with massive imagery/typography, thinking visually to increase conversions.</p>
																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a>
															</div>
														</div>
													</div>
												</article>
-->
												
<!--
												<article class="wireframe-item pf-mobile py-5">
													<div class="row align-items-center">
														<div class="col-lg-7 order-0 order-lg-1 offset-0 offset-lg-1">
															<div class="wireframe-image text-center">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/product-landing-mobile-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 order-1 order-lg-0">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-1 dark">Mobile</span>																																																
																<h3>Product Landing Page</h3>																
																<p>Utilizing the same mobile home page design pattern.</p>
																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a>
															</div>
														</div>
													</div>
												</article>	
-->											

												<article class="wireframe-item pf-desktop py-5">
													<div class="row align-items-center">
														<div class="col-lg-7">
															<div class="wireframe-image">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/shop-desktop-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 offset-0 offset-lg-1">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-2 dark">Desktop</span>
																<h3>E-Commerce Products</h3>
																<p>The client only has 1 product type with multiple accessories so I felt that this page shouldn't include sort or filter capabilities. Keeping things super simple. </p>
<!-- 																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a> -->
															</div>
														</div>
													</div>
												</article>
												
												<article class="wireframe-item pf-mobile py-5">
													<div class="row align-items-center">
														<div class="col-lg-7 order-0 order-lg-1 offset-0 offset-lg-1">
															<div class="wireframe-image text-center">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/shop-mobile-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 order-1 order-lg-0">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-1 dark">Mobile</span>
																<h3>E-Commerce Products</h3>
																<p>This attractive looking product grid collapses nicely. Where the main product is up top with its title, price and cta easily seen. The secondary products, collapse into a simple carousel with dots and visualization that there is more to be seen.</p>
<!-- 																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a> -->
															</div>
														</div>
													</div>
												</article>												

												<article class="wireframe-item pf-desktop py-5">
													<div class="row align-items-center">
														<div class="col-lg-7">
															<div class="wireframe-image">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/shop-product-landing-desktop-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 offset-0 offset-lg-1">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-2 dark">Desktop</span>
																<h3>Product Details</h3>
																<p>Many e-commerce product pages are the same. You know, they include feature images, descriptions, price, CTA, and much more. One thing that I have found that many sites don't do is install trust. But how do we do this? I suggested showing reviews, shipping and return policies.</p>
<!-- 																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a> -->
															</div>
														</div>
													</div>
												</article>

												<article class="wireframe-item pf-mobile py-5">
													<div class="row align-items-center">
														<div class="col-lg-7 order-0 order-lg-1 offset-0 offset-lg-1">
															<div class="wireframe-image text-center">
																<img src="/resources/images/projects/chilld-bags/website/wireframes/shop-product-landing-mobile-presentation.jpg" />
															</div>
														</div>
														<div class="col-lg-4 order-1 order-lg-0">
															<div class="wireframe-desc mt-4 mt-lg-0">
																<span class="badge bg-emphasis-1 dark">Mobile</span>
																<h3>Product Details</h3>
																<p>The mobile layout encompasses everything from the desktop while prioritizing items like the cta, price, details, font sizing and optimized images for mobile devices. Giving a mobile user fast page load speeds.</p>
<!-- 																<a href="#" class="button button-small button-border button-circle button-color-emphasis-1 mx-0" target="_blank">Details</a> -->
															</div>
														</div>
													</div>
												</article>
																																		
																		
<!--
												<article class="portfolio-item pf-desktop p-3">
													<div class="portfolio-image animatedScrollTopBottom border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 100%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/home-desktop.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/desktop/home.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">Home Page</a></h3>
													</div>
												</article>
												
												<article class="portfolio-item pf-desktop p-3">
													<div class="portfolio-image border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 70%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/shop-desktop.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/desktop/shop.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">E-Commerce Product Browse</a></h3>
													</div>
												</article>
												
												<article class="portfolio-item pf-desktop p-3">
													<div class="portfolio-image border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 100%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/shop-product-desktop.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/desktop/shop-product-landing.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">E-Commerce Product Landing</a></h3>
													</div>
												</article>
												
												<article class="portfolio-item pf-desktop p-3">
													<div class="portfolio-image border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 70%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/product-landing-desktop.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/desktop/product-landing.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">General Product Landing</a></h3>
													</div>
												</article>
												
												<article class="portfolio-item pf-mobile p-3">
													<div class="portfolio-image border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 70%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/home-mobile.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/mobile/product-landing.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">General Product Landing</a></h3>
													</div>
												</article>	
												
												<article class="portfolio-item pf-mobile p-3">
													<div class="portfolio-image border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 70%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/shop-mobile.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/mobile/shop.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">E-Commerce Product Browse</a></h3>
													</div>
												</article>
												
												<article class="portfolio-item pf-mobile p-3">
													<div class="portfolio-image border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 100%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/shop-product-mobile.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/mobile/shop-product-landing.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">E-Commerce Product Landing</a></h3>
													</div>
												</article>
												
												<article class="portfolio-item pf-mobile p-3">
													<div class="portfolio-image border shadow rounded">
														<a href="#">
															<div class="image-bg" style="padding-top: 70%; background-image: url('/resources/images/projects/chilld-bags/website/wireframes/product-landing-mobile.jpg');"></div>
														</a>
														<div class="portfolio-overlay">
															<a href="ajax/website/mobile/product-landing.html" data-lightbox="ajax" class="center-icon color-emphasis-1"><i class="icon-stretch"></i></a>
														</div>
													</div>
													<div class="portfolio-desc">
														<h3><a href="portfolio-single.html">General Product Landing</a></h3>
													</div>
												</article>													
-->																																					
											
											</div>

												<!--
												<div class="row">
												
													<div class="col-12 col-lg-3">
												
														<div class="nav nav-pills tab__mod2 flex-row flex-lg-column justify-content-between h-100 uppercase font-primary mb-4 mb-md-0" id="desktop-v-pills-tab" role="tablist" aria-orientation="vertical">
												
															<a class="nav-link active d-flex align-items-center flex-grow-1 justify-content-center justify-content-md-start transition-03 px-1 px-sm-2 px-md-4" id="desktop-v-pills-home-tab" data-toggle="pill" href="#desktop-v-pills-home" role="tab" aria-controls="desktop-v-pills-home" aria-selected="true">
																<div class="d-flex flex-column flex-md-row align-items-center">
																	<div class="nav-link--svg mb-2 mb-md-0 mr-0 mr-md-4">
																		<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center">
																			<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
																				<path d="M21 18H5a1 1 0 1 1 0-2h16a1 1 0 0 0 1-1V5.82l-4.25 2.69a2 2 0 0 1-3.27-.75L12 2.38 9.49 7.82A1.94 1.94 0 0 1 8 9a2 2 0 0 1-1.76-.53L2 5.82V17a1 1 0 1 1-2 0V5.82a2 2 0 0 1 3.07-1.69l4.35 2.76a1 1 0 0 1 .22.19l2.55-5.52a2 2 0 0 1 3.63 0L16.33 7c.06-.07.17-.06.25-.11l4.35-2.75A2 2 0 0 1 24 5.83V15a3 3 0 0 1-3 3z" fill-rule="evenodd"/>
																			</svg>
																		</div>
																	</div>
																	<div class="nav-link--title">
																		<span class="t600 d-block">Home</span><span class="t300 small d-none d-md-block">General</span>
																	</div>
																</div>
															</a>
															<a class="nav-link d-flex align-items-center flex-grow-1 justify-content-center justify-content-md-start transition-03 px-1 px-sm-2 px-md-4" id="desktop-v-pills-shop-tab" data-toggle="pill" href="#desktop-v-pills-shop" role="tab" aria-controls="desktop-v-pills-shop" aria-selected="false">
																<div class="d-flex flex-column flex-md-row align-items-center">
																	<div class="nav-link--svg mb-2 mb-md-0 mr-0 mr-md-4">
																		<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center">
																			<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
																			  <path d="M19.34 12.8H8.66a3 3 0 0 1-2.95-2.45L4.32 2.82a1 1 0 0 0-1-.82H1a1 1 0 1 1 0-2h2.34a3 3 0 0 1 2.95 2.45l1.39 7.53a1 1 0 0 0 1 .82h10.67a1 1 0 0 0 1-.82l1.26-6.8a1 1 0 0 0-1-1.18H9a1 1 0 1 1 0-2h11.6a3 3 0 0 1 2.95 3.55l-1.26 6.8a3 3 0 0 1-2.95 2.45zm-6.34 4a3 3 0 0 0-3-3 1 1 0 1 0 0 2 1 1 0 1 1-1 1 1 1 0 1 0-2 0 3 3 0 0 0 6 0zm6 2a1 1 0 0 0-1-1 1 1 0 1 1 1-1 1 1 0 1 0 2 0 3 3 0 1 0-3 3 1 1 0 0 0 1-1z" fill-rule="evenodd"/>
																			</svg>
																		</div>
																	</div>
																	<div class="nav-link--title">
																		<span class="t600 d-block">Shop</span><span class="t300 small d-none d-md-block">E-Commerce</span>
																	</div>
																</div>				
															</a>
															<a class="nav-link d-flex align-items-center flex-grow-1 justify-content-center justify-content-md-start transition-03 px-1 px-sm-2 px-md-4" id="desktop-v-pills-product-tab" data-toggle="pill" href="#desktop-v-pills-product" role="tab" aria-controls="desktop-v-pills-product" aria-selected="false">
																<div class="d-flex flex-column flex-md-row align-items-center">
																	<div class="nav-link--svg mb-2 mb-md-0 mr-0 mr-md-4">
																		<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center">
																			<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
																				<path d="M1 24.8H.87A1 1 0 0 1 0 23.68L1.78 9.43a3 3 0 0 1 3-2.63h8.47a3 3 0 0 1 3 2.63l1.52 12a3 3 0 0 1-3 3.36H5a1 1 0 1 1 0-2h9.75a1 1 0 0 0 1-1.12l-1.52-12a1 1 0 0 0-1-.87H4.76a1 1 0 0 0-1 .88L2 23.92a1 1 0 0 1-1 .88zm12-20a4 4 0 1 0-8 0 1 1 0 1 0 2 0 2 2 0 0 1 4 0 1 1 0 1 0 2 0z" fill-rule="evenodd"/>
																			</svg>
																		</div>
																	</div>
																	<div class="nav-link--title">
																		<span class="t600 d-block">Product</span><span class="t300 small d-none d-md-block">E-Commerce</span>
																	</div>
																</div>				
															</a>				
															</a>
															<a class="nav-link d-flex align-items-center flex-grow-1 justify-content-center justify-content-md-start transition-03 px-1 px-sm-2 px-md-4" id="desktop-v-pills-blog-tab" data-toggle="pill" href="#desktop-v-pills-blog" role="tab" aria-controls="desktop-v-pills-blog" aria-selected="false">
																<div class="d-flex flex-column flex-md-row align-items-center">
																	<div class="nav-link--svg mb-2 mb-md-0 mr-0 mr-md-4">
																		<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center">
																			<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 19.88c-.36-.01-.7-.12-1-.32a9.22 9.22 0 0 0-6.92-1.37 1 1 0 0 1-1.21-1V1.68a1 1 0 0 1 1-1h2.82c.85 0 1.7.1 2.52.3a1 1 0 1 1-.54 1.93 8.77 8.77 0 0 0-2.23-.23H2.87v13.36c2.52-.23 5.05.4 7.17 1.8a11.18 11.18 0 0 1 7.17-1.8V2.74a9.2 9.2 0 0 0-6.12 1.49v9.7a1 1 0 0 1-2 0V3.75a1 1 0 0 1 .39-.8 11.23 11.23 0 0 1 9-2c.47.1.8.52.78 1v15.31a1 1 0 0 1-1.21 1 9.22 9.22 0 0 0-6.92 1.37c-.34.2-.74.29-1.13.25z" fill-rule="evenodd"/>
																			</svg>
																		</div>
																	</div>
																	<div class="nav-link--title">
																		<span class="t600 d-block">Articles</span><span class="t300 small d-none d-md-block">Blog</span>
																	</div>
																</div>				
															</a>				
															</a>
												
														</div>
												
													</div>
												
													<div class="col-12 col-lg-9">
												
														<div class="tab-content" id="v-pills-tabContent">
												
															<div class="tab-pane fade show active" id="desktop-v-pills-home" role="tabpanel" aria-labelledby="desktop-v-pills-home-tab">
											
																<div class="browser-item">
																														
																	<div class="browser-item__image-wrapper shadow-lg">
																		
																		<div class="browser-item__image-toolbar py-1 px-2">
																			<span class="circle-1"></span>
																			<span class="circle-2"></span>
																			<span class="circle-3"></span>																		
																		</div>
																		<div class="browser-item__image">
																										
																			<div class="browser-item__image-content">
										
																				<div class="browser-background"></div>
																				
																			</div>
																			
																		</div>
																		
																	</div>		
																	
																</div>																
																		
																								
																	<div class="owl-carousel image-carousel carousel-widget" data-center="true" data-nav="false" data-pagi="true" data-items="1">
																		<div class="oc-item">
																			<div class="browser-wrapper border rounded pt-4 px-1">
																				<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/home-sm.png" alt="Image 1"></a>
																			</div>
																		</div>
																		
																		<div class="oc-item">
																			<div class="browser-wrapper border rounded pt-4 px-1">
																				<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/home-sm.png" alt="Image 1"></a>
																			</div>
																		</div>						
																</div>
												
															</div>
															<div class="tab-pane fade" id="desktop-v-pills-shop" role="tabpanel" aria-labelledby="desktop-v-pills-profile-tab">

																<div class="owl-carousel image-carousel carousel-widget" data-center="true" data-nav="false" data-pagi="true" data-items="1">
											
																	<div class="oc-item">
																		<div class="browser-wrapper border rounded pt-4 px-1">
																			<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/shop-sm.png" alt="Image 1"></a>
																		</div>
																	</div>
																	
																	<div class="oc-item">
																		<div class="browser-wrapper border rounded pt-4 px-1">
																			<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/shop-sm.png" alt="Image 1"></a>
																		</div>
																	</div>						
																	
																</div>
																
															</div>
															<div class="tab-pane fade" id="desktop-v-pills-product" role="tabpanel" aria-labelledby="desktop-v-pills-messages-tab">
																
																	<div class="owl-carousel image-carousel carousel-widget" data-center="true" data-nav="false" data-pagi="true" data-items="1">
												
																		<div class="oc-item">
																			<div class="browser-wrapper border rounded pt-4 px-1">
																				<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/ecomm-product-landing.png" alt="Image 1"></a>
																			</div>
																		</div>
																		
																		<div class="oc-item">
																			<div class="browser-wrapper border rounded pt-4 px-1">
																				<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/ecomm-product-landing.png" alt="Image 1"></a>
																			</div>
																		</div>						
																		
																	</div>
																
															</div>
															<div class="tab-pane fade" id="desktop-v-pills-blog" role="tabpanel" aria-labelledby="desktop-v-pills-settings-tab">
																
																<div class="owl-carousel image-carousel carousel-widget" data-center="true" data-nav="false" data-pagi="true" data-items="1">
											
																	<div class="oc-item">
																		<div class="browser-wrapper border rounded pt-4 px-1">
																			<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/blog-sm.png" alt="Image 1"></a>
																		</div>
																	</div>
																	
																	<div class="oc-item">
																		<div class="browser-wrapper border rounded pt-4 px-1">
																			<a href="#"><img src="/resources/images/projects/chilld-bags/website/wireframes/blog-sm.png" alt="Image 1"></a>
																		</div>
																	</div>						
																	
																</div>
																
															</div>
												
														</div>
												
													</div>
												
												</div>										
												-->

										<!-- Desktop Layout - End
										================================= -->											
										
									</div>
									
								</div>
								
							</div>
							
						</section>

						<section id="project-desktop-colors" class="">
														
							<div class="container">								

								<div class="row align-items-center py-6">																		

									<div class="col-md-6">				

										<div class="content__title mb-5">
											<span class="h6 ls3 t200-desktop uppercase">Style of</span><br />										
											<h3 class="display-4 t100-desktop">Typography</h3>												
<!-- 												<a href="/resources/documents/chilld-bags/chilld-bags-sitemap.pdf" class="button button-circle button-primary mx-0" target="_blank">View User Flows</a> -->
											
										</div>
										
										<h4>Poppins. Domine.</h4>
								
									</div>
									
									<div class="col-md-6">

										<img data-src="/resources/images/projects/chilld-bags/website/branding/typography.jpg" class="img-fluid lazy" />
										
									</div>

								</div>
																	
								<div class="row align-items-center py-6">
																		
									<div class="col-md-5 order-1 order-md-0">
										
										<img data-src="/resources/images/projects/chilld-bags/website/branding/color-palette.jpg" class="img-fluid lazy" />
										
									</div>

									<div class="col-md-6 offset-md-1 order-0 order-md-0">				

										<div class="content__title mb-5">
											<span class="h6 ls3 t200-desktop uppercase">Style of</span><br />										
											<h3 class="display-4 t100-desktop">Colors</h3>												
<!-- 												<a href="/resources/documents/chilld-bags/chilld-bags-sitemap.pdf" class="button button-circle button-primary mx-0" target="_blank">View User Flows</a> -->
											
										</div>
										
										<h4>Clear. Vibrant. Appealing.</h4>												
								
									</div>

								</div>
																	
							</div>
													
						</section>
						
						<section id="project-desktop-mockups" class="pt-4">
							
							<div class="content-inner">
							
								<div class="container">
								
									<div class="row">
										
										<div class="col">
	
											<div class="content__title text-center">
												<span class="h6 ls3 t200-desktop uppercase">High-Fidelity</span><br />
												<h3 class="display-4 t100-desktop">Mockups</h3>
											</div>											
											
										</div>
										
									</div>
									
								</div>
								
									
								<div class="gallery">

									<div class="item item-home mb-6 position-relative">
										
										<div class="bg position-absolute">
											<div class="bg-inner"></div>
										</div>
										
										<div class="container">
											
											<div class="row">
																							
												<div class="col-12 col-md-10 mx-auto">													
		
													<div class="device-desktop">
						
														<img data-src="/resources/images/projects/chilld-bags/website/mockups/macbook-pro.png" class="img-fluid lazy" />
														
														<div class="device-image">
		
															<picture>
																<!--[if IE 9]><video style="display: none;"><![endif]-->
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/desktop/home@1x.jpg" media="(min-width: 768px)">
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/desktop/home@0.5x.jpg" media="(max-width: 767px)">
																<!--[if IE 9]></video><![endif]-->
																<img data-srcset="/resources/images/projects/chilld-bags/website/mockups/desktop/home@1x.jpg" class="img-fluid lazy shadow-lg">
															</picture>
		
														</div>
														
													</div>											
													
												</div>
												
											</div>											
											
										</div>
									
									</div>
									
									<div class="item item-product position-relative bg-dark-2 dark">
										
										<div class="container">
											
											<div class="row py-5">
												
												<div class="col-12 col-md-6 mx-auto">
													
													<p class="lead">
														Before deciding on this minimalist design, we went through several very
														creative pop phases. One of my first approaches was to offer a design that
														adventure/camping equipment and saturated colors in order to stand out from
														the competition.											
													</p>
													
												</div>
											
											</div>
											
											<div class="row py-6">
																							
												<div class="col-12 col-md-10 p-0 mx-auto position-relative">										
		
													<div class="device-tablet">
						
														<img data-src="/resources/images/svg/ipad.svg" class="img-fluid lazy" />
														
														<div class="device-image">

    		
															<picture>
																<!--[if IE 9]><video style="display: none;"><![endif]-->
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/desktop/product@1x.jpg" media="(min-width: 768px)">
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/desktop/product@0.5x.jpg" media="(max-width: 767px)">
																<!--[if IE 9]></video><![endif]-->
																<img data-srcset="/resources/images/projects/chilld-bags/website/mockups/desktop/product@1x.jpg" class="img-fluid shadow-lg lazy">
															</picture>
															
<!--
															<div class="device-image__element position-absolute">
																
																<img src="/resources/images/projects/chilld-bags/website/mockups/bag-1.png" class="img-fluid" />
																
															</div>								
-->
		
														</div>
														
													</div>											
													
												</div>
												
											</div>											
											
										</div>
									
									</div>									

									<div class="item item-product position-relative">
										
										<div class="container">
											
											<div class="row py-6">
																							
												<div class="col-6 col-lg-4 offset-lg-1 gallery-item__2">
													
													<div class="device-mobile">
						
														<img src="/resources/images/svg/iphone.svg" class="img-fluid" />
														
														<div class="device-image">
															
															<picture>
																<!--[if IE 9]><video style="display: none;"><![endif]-->
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/clipped@2x.jpg" media="(min-width: 1300px)">
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/clipped@1x.jpg" media="(max-width: 768px)">
																<!--[if IE 9]></video><![endif]-->
																<img data-srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/clipped@1x.jpg" class="img-fluid shadow-lg lazy">
															</picture>
																														
														</div>
														
													</div>
													
													<div class="device-mobile mt-8">
						
														<img src="/resources/images/svg/iphone.svg" class="img-fluid" />
														
														<div class="device-image">
															
															<picture>
																<!--[if IE 9]><video style="display: none;"><![endif]-->
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/shop@2x.jpg" media="(min-width: 1300px)">
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/shop@1x.jpg" media="(max-width: 768px)">
																<!--[if IE 9]></video><![endif]-->
																<img data-srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/shop@1x.jpg" class="img-fluid shadow-lg lazy">
															</picture>
																														
														</div>
														
													</div>													
													
												</div>
												
												<div class="col-6 col-lg-4 offset-lg-2 gallery-item__3">
													
													<div class="device-mobile">
						
														<img src="/resources/images/svg/iphone.svg" class="img-fluid" />
														
														<div class="device-image">
															
															<picture>
																<!--[if IE 9]><video style="display: none;"><![endif]-->
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/product@2x.jpg" media="(min-width: 1300px)">
																<src srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/product@1x.jpg" media="(max-width: 768px)">
																<!--[if IE 9]></video><![endif]-->
																<img data-srcset="/resources/images/projects/chilld-bags/website/mockups/mobile/product@1x.jpg" class="img-fluid shadow-lg lazy">
															</picture>
																														
														</div>
														
													</div>
													
												</div>			
												
											</div>											
											
										</div>
									
									</div>									
																																							
								</div>																			
																																	
							</div>
							
						</section>					
					
					</div>
					<!-- Desktop Layout - End
					================================= -->
					
					<!-- Mobile Layout - Start
					================================= -->					
					<div class="tab-pane" id="project-mobile" role="tabpanel" aria-labelledby="project-mobile-tab">
						
						<section id="project-mobile-gallery" class="py-6">
							
							<div class="container">
							
								<div class="mobile-gallery--wrapper text-center">

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="/resources/images/projects/chilld-bags/mobile/gallery/mobile-app.png" media="(min-width: 991px)">
										<source srcset="/resources/images/projects/chilld-bags/mobile/gallery/mobile-app@0.5x.png" media="(max-width: 767px)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="/resources/images/projects/chilld-bags/mobile/gallery/mobile-app.png">
									</picture>									
									
								</div>							
							
							</div>
							
						</section>	

						<section id="project-mobile-idea" class="py-4">
								
							<div class="container">
							
								<div class="content__title text-center">
									<span class="h6 ls3 t200-desktop uppercase">Benefits</span><br />
									<h3 class="display-4 t100-desktop">Mobile App</h3>
								</div>

								<p>Originally, this client did not have a mobile app. I made the argument that if their goal was to boost sales and reach more people, then a mobile app is needed. Mobile apps are becoming the main outlets for online retail. See below for stats I used to make my argument.</p>
								
								<div class="row pt-4">
									
									<div class="col-12">
										<h4>Shoppers prefer apps to mobile browsers</h4>
										<p>There’s no doubt in the superiority of apps over browsers: <span class="strong t600">78% of users</span> surveyed claimed they would rather use a mobile app than access a store via a mobile browser.</p>
										<p>E-commerce applications are much more convenient to use while shopping, especially if you’re not making a one-off visit to an online store. For starters, there’s no need to remember a URL and login to access the shop. Plus, applications provide better security and speed compared to a mobile browser. Statistics provided by Statista.com</p>
									</div>
									
									<div class="col-12">
										<h4>Reduced response time</h4>
										<p>A major concern for any internet user is how fast a website or an app performs. The time required for a mobile app to complete an action is significantly lower than for a website because applications store their data partially on a mobile device. Although apps connect to servers just like websites do, there’s ten times less data transmitted between a server and a mobile application than between a server and a browser. Consequently, apps retrieve data much faster.</p>
									</div>
									
									<div class="col-12">
										<h4>Enhanced UX</h4>
										<p>The way your store is presented to your customers can make or break your sales. When accessing a site, users expect easy navigation so they can find what they’re looking for. Mobile apps are relatively restricting in terms of layout, which can play into your hand.</p>
									</div>																		
																																					
								</div>
								
																	
							</div>
						
						</section>
												
						<section id="project-mobile-userflows" class="dark py-4">
							
							<div class="wave-container">
								<svg class="wave-item item-1 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-mobile-userflows-1" d=""/></svg>
								<svg class="wave-item item-2 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-mobile-userflows-2" d=""/></svg>
								<svg class="wave-item item-3 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-mobile-userflows-3" d=""/></svg>						
							</div>
							
							<div class="content-inner bg-emphasis-2 py-5">
								
								<div class="container">
									
									<div class="row align-items-center">
																			
										<div class="col-12 col-lg-6">				
	
											<div class="content__title mb-5">
											
												<h3 class="display-4 t100-desktop">User Flows</h3>
												<p>Even a simple e-commerce mobile app as this one, benefited from careful planning of the user flow. We’re pulling content together and making the building process more intelligible from the start.</p>
												<a href="/resources/documents/chilld-bags/chilld-bags-mobile-userflow.pdf" class="button button-circle button-primary mx-0" target="_blank">View User Flows</a>
												
											</div>
									
										</div>
										
										<div class="col-12 col-lg-5 offset-0 offset-lg-1">

											<div class="mobile-userflows-iso col-6 col-sm-4 col-md-6 col-lg-12 col-xl-9 offset-1 offset-lg-0 d-none d-md-block position-relative mt-4">
												<img data-src="/resources/images/projects/chilld-bags/mobile/userflows/userflow-iso-1.png" class="img-fluid position-absolute lazy" data-parallax='{"x": 40, "smoothness": 50}'/>
												<img data-src="/resources/images/projects/chilld-bags/mobile/userflows/userflow-iso-2.png" class="img-fluid position-absolute lazy" data-parallax='{"x": 170, "smoothness": 100}' />												
											</div>
											
											<div class="mobile-userflows-iso__mobile d-block d-md-none">
												<img data-src="/resources/images/projects/chilld-bags/mobile/userflows/userflow-iso-mobile.png" class="img-fluid lazy" data-parallax='{"y": 50, "smoothness": 100}' />
											</div>										
											
										</div>

									</div>
																		
								</div>
								
							</div>
							
							<div class="wave-container">
								<svg class="wave-item item-1 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-mobile-userflows-4" d=""/></svg>
								<svg class="wave-item item-2 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-mobile-userflows-5" d=""/></svg>
								<svg class="wave-item item-3 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-mobile-userflows-6" d=""/></svg>						
							</div>										
							
						</section>	
						
						<section id="project-mobile-wireframes" class="py-4">
								
							<div class="container">							

								<div class="row">
									
									<div class="col">
	
										<div class="content__title text-center">
											<span class="h6 ls3 t200-desktop uppercase">Low-Fidelity</span><br />
											<h3 class="display-4 t100-desktop">Wireframes</h3>
<!-- 											<p>Below shows the iterations within the wireframe phase.</p> -->
										</div>									
	
									</div>
									
								</div>								
	
								<div id="wireframe-carousel" class="row no-gutters mt-5">
	
									<div class="swiper-container wireframe-title font-primary t600 uppercase h6 ">
										<div class="swiper-wrapper">
											<div class="titles__slide swiper-slide"><i class="icon-entrance d-block h3 mb-1"></i>Login</div>
											<div class="titles__slide swiper-slide"><i class="icon-group d-block h3 mb-1"></i>Walkthrough</div>
											<div class="titles__slide swiper-slide"><i class="icon-shop_basket d-block h3 mb-1"></i>Shopping</div>
											<div class="titles__slide swiper-slide"><i class="icon-card d-block h3 mb-1"></i>Checkout</div>
											<div class="titles__slide swiper-slide"><i class="icon-infographic1 d-block h3 mb-1"></i>Dashboard</div>
											<div class="titles__slide swiper-slide"><i class="icon-settings d-block h3 mb-1"></i>Account</div>
										</div>
									</div>
									
									<div class="swiper-container wireframe-content">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="row align-items-center py-5">
													<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 offset-3 offset-sm-4 offset-md-1 offset-lg-2">
														<img data-src="/resources/images/projects/chilld-bags/mobile/wireframes/wireframe-1-login.jpg" class="rounded shadow-lg swiper-lazy" />
													</div>
													<div class="col-md-6 col-lg-5 offset-md-1">
														<div class="py-5 py-md-0">
															<h3>Login</h3>
															<p>Log in screens should be minimalistic and clear so that users could easily access the application. There are usually two fields where users can enter their name and password along with the confirmation button. For people using the app for the first time, there always must be the sign-up option.</p>
														</div>
													</div>												
												</div>
											</div>
											<div class="swiper-slide">
												<div class="row align-items-center py-5">
													<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 offset-3 offset-sm-4 offset-md-1 offset-lg-2">
														<img data-src="/resources/images/projects/chilld-bags/mobile/wireframes/wireframe-1-walkthrough.jpg" class="rounded shadow-lg swiper-lazy" />
													</div>
													<div class="col-md-6 col-lg-5 offset-md-1">
														<div class="py-5 py-md-0">
															<h3>Walkthrough</h3>
															<p>Helping the user get started is to first introduce them to the app itself, its purpose, and then show them only the most basic features that the app offers. Since this was more of simple e-commerce app, the walkthrough confirms signup and reminds the user to register their bag lock.</p>
														</div>
													</div>												
												</div>
											</div>
											<div class="swiper-slide">
												<div class="row align-items-center py-5">
													<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 offset-3 offset-sm-4 offset-md-1 offset-lg-2">
														<img data-src="/resources/images/projects/chilld-bags/mobile/wireframes/wireframe-2-shopping.jpg" class="rounded shadow-lg swiper-lazy" />
													</div>
													<div class="col-md-6 col-lg-5 offset-md-1">
														<div class="py-5 py-md-0">
															<h3>Shopping</h3>
															<p>The “Single Item” layout. This is the screen that users see whenever they interact with the individual products. However, figuring out what to include was only half the challenge. Though the placement and the emphasis of CTA’s, I wanted to make it incredibly simple to add the product to the cart after you scroll down the screen.</p>
														</div>
													</div>												
												</div>
											</div>
											<div class="swiper-slide">
												<div class="row align-items-center py-5">
													<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 offset-3 offset-sm-4 offset-md-1 offset-lg-2">
														<img data-src="/resources/images/projects/chilld-bags/mobile/wireframes/wireframe-3-checkout.jpg" class="rounded shadow-lg swiper-lazy" />
													</div>
													<div class="col-md-6 col-lg-5 offset-md-1">
														<div class="py-5 py-md-0">
															<h3>Checkout</h3>
															<p>We know the process of checking out. It can be incredibly daunting. On mobile, I did not want to create too much complexity for the user at one time. I wanted to divide  the process into a number of small bit-sized chunks, each requiring user action.</p>
														</div>
													</div>												
												</div>
											</div>
											<div class="swiper-slide">
												<div class="row align-items-center py-5">
													<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 offset-3 offset-sm-4 offset-md-1 offset-lg-2">
														<img data-src="/resources/images/projects/chilld-bags/mobile/wireframes/wireframe-4-dashboard.jpg" class="rounded shadow-lg swiper-lazy" />
													</div>
													<div class="col-md-6 col-lg-5 offset-md-1">
														<div class="py-5 py-md-0">
															<h3>Dashboard</h3>
															<p>The dashboard provides all the necessary info to understand the earnings, sales and analytics no matter what the platform (app or web). Graph curves, scales and original icons make the stats screen look smooth and clean.. Moreover, stats screens require distinct typography so that users could easily read the data.</p>
														</div>
													</div>												
												</div>
											</div>
											<div class="swiper-slide">
												<div class="row align-items-center py-5">
													<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 offset-3 offset-sm-4 offset-md-1 offset-lg-2">
														<img data-src="/resources/images/projects/chilld-bags/mobile/wireframes/wireframe-5-account.jpg" class="rounded shadow-lg swiper-lazy" />
													</div>
													<div class="col-md-6 col-lg-5 offset-md-1">
														<div class="py-5 py-md-0">
															<h3>Account</h3>
															<p>The account screen make interaction within the mobile application more personalized and allow operating with the data effectively. Giving the user ability to adjust their address, billing info, notification and email settings.</p>
														</div>
													</div>												
												</div>
											</div>																								
										</div>
										<!-- Add Arrows -->
								<!--
										<div class="swiper-button-next swiper-button-white"></div>
										<div class="swiper-button-prev swiper-button-white"></div>
								-->
									</div>
	
									</div>

							</div>								
						
						</section>																
						
						<section id="project-mobile-featured" class="featured py-5">													
									
							<div id="featured-element__shop" class="row featured-element featured-element__shop pt-6 pb-6 m-0 mt-md-6">
						
								<div class="col-md-5 offset-md-7 featured__background-image responsive-bg lazy" data-src="/resources/images/projects/chilld-bags/mobile/mockups/featured-bg-1.jpg"></div>
																	
								<div class="container">

									<div class="row align-items-center m-0">
										
										<div class="col-12 col-sm-10 col-md-6 col-lg-5 offset-sm-1 offset-md-0 offset-lg-0 order-0 order-sm-1">
											
											<div class="featured__device iphonex mb-6 mb-md-0">							
											
												<div class="row">
												
													<div class="col" data-parallax='{"y": 50, "smoothness": 20}' data-animate="fadeIn" data-delay="300">
												
														<div class="featured__device-content float-none shadow-xl">
														
															<img data-src="<?php print $RESOURCES_URL;?>images/svg/iphonex2.svg" class="large lazy" />
															
															<div class="featured__device-image-1"></div>
				
														</div>
			
													</div>
												
												</div>
											
											</div>
											
										</div>
										
										<div class="col-md-5 col-lg-4 offset-md-0 offset-lg-1 order-2 order-md-0">
			
											<div class="text-center">
												<div class="featured-icon mb-2">
													<i class="icon-cart1 color-emphasis-2 icon-2x"></i>
												</div>
												<h4>Shop</h4>
												<p>Discover products.</p>
											</div>
			
										</div>
										
									</div>
								
								</div>
								
							</div>
							
							<div id="featured-element__product" class="row featured-element featured-element__product pt-6 pb-6 m-0 mt-md-7">
								
								<div class="col-md-5 featured__background-image responsive-bg lazy" data-src="/resources/images/projects/chilld-bags/mobile/mockups/featured-bg-2.jpg"></div>
		
								<div class="container">
									
									<div class="row align-items-center m-0">
										
										<div class="col-12 col-sm-10 col-md-6 col-lg-5 offset-sm-1 offset-md-1 offset-lg-2">
											
											<div class="featured__device iphonex mb-6 mb-md-0">							
											
												<div class="row">
												
													<div class="col" data-parallax='{"y": -50, "smoothness": 20}' data-animate="fadeIn" data-delay="300">
												
														<div class="featured__device-content float-none shadow-xl">
														
															<img src="<?php print $RESOURCES_URL;?>images/svg/iphonex2.svg" class="large" />
															
															<div class="featured__device-image-1"></div>
				
														</div>
			
													</div>
												
												</div>
											
											</div>
											
										</div>
										
										<div class="col-md-5 col-lg-3 offset-md-0 offset-lg-1 offset-xl-0">
					
											<div class="text-center">
												<div class="featured-icon mb-2">
													<i class="icon-shop_basket color-emphasis-2 icon-2x"></i>
												</div>
												<h4>Product Details</h4>
												<p>Everything you need to know.</p>
											</div>
			
										</div>
										
									</div>
		
								</div>
		
							</div>
									
							<div id="featured-element__checkout" class="row featured-element featured-element__checkout pt-6 pb-0 pb-md-6 mt-0 mt-md-7 mb-0 mb-md-5">
						
								<div class="col-md-5 offset-md-7 featured__background-image responsive-bg lazy" data-src="/resources/images/projects/chilld-bags/mobile/mockups/featured-bg-3.jpg"></div>
								
								<div class="container">
									
									<div class="row align-items-center m-0">
										
										<div class="col-12 col-sm-10 col-md-6 col-lg-5 offset-sm-1 offset-md-0 offset-lg-0 order-0 order-sm-1 ">
											
											<div class="featured__device iphonex mb-6 mb-md-0">							
											
												<div class="row">
												
													<div class="col" data-parallax='{"y": 50, "smoothness": 20}' data-animate="fadeIn" data-delay="300">
												
														<div class="featured__device-content float-none shadow-xl">
														
															<img src="<?php print $RESOURCES_URL;?>images/svg/iphonex2.svg" class="large" />
															
															<div class="featured__device-image-1"></div>
				
														</div>
			
													</div>
												
												</div>
											
											</div>
											
										</div>
										
										<div class="col-md-5 col-lg-4 offset-md-0 offset-lg-1 order-2 order-md-0">
			
											<div class="text-center">
												<div class="featured-icon mb-2">
													<i class="icon-card color-emphasis-2 icon-2x"></i>
												</div>
												<h4>Checkout</h4>
												<p>Fast. Easy. Intuitive.</p>
											</div>
			
										</div>
										
									</div>
								
								</div>
								
							</div>												

						</section>
						
						<section id="project-mobile-mockups" class="featured bg-emphasis-1 dark py-6">

							<div class="container">
							
								<div class="row">
									
									<div class="col">

										<div class="content__title text-center">
											<span class="h6 ls3 t200-desktop uppercase">High-Fidelity</span><br />
											<h3 class="display-4 t100-desktop">Mockups</h3>
										</div>											
										
									</div>
									
								</div>
								
							</div>	

							<div class="row no-gutters mt-5">
		
								<div class="col">

									<div class="mobile-device-carousel-wrap">
																			
										<div class="device"> 
											<img src="<?php print $RESOURCES_URL;?>images/svg/iphonex2.svg" />										
										</div>
	
										<div class="owl-carousel mobile-device-carousel default image-carousel carousel-widget customjs">
										
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/01-login.png" class="img-fluid owl-lazy" />
											</div>
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/05-ecommerce-home.png" class="img-fluid owl-lazy" />
											</div>
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/06-ecommerce-bags.png" class="img-fluid owl-lazy" />
											</div>
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/07-ecommerce-product.png" class="img-fluid owl-lazy" />
											</div>			
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/08-ecommerce-product-2.png" class="img-fluid owl-lazy" />
											</div>
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/09-dashboard-earnings.png" class="img-fluid owl-lazy" />
											</div>
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/10-dashboard-orders.png" class="img-fluid owl-lazy" />
											</div>
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/11-dashboard-product-status.png" class="img-fluid owl-lazy" />
											</div>
											
											<div class="oc-item" style="width: 200px;">
												<img data-src="/resources/images/projects/chilld-bags/mobile/mockups/12-dashboard-customers.png" class="img-fluid owl-lazy" />
											</div>																																																										
										
										</div>
	
									</div>								
								
								</div>
																																						
							</div>
				
						</section>	
						
					</div>
					<!-- Mobile Layout - End
					================================= -->

					<!-- Watch Layout - Start
					================================= -->										
					<div class="tab-pane " id="project-watch" role="tabpanel" aria-labelledby="project-watch-tab">
						
						<section id="project-watch-gallery" class="py-6">
							
							<div class="container">
							
								<div class="watch-gallery--wrapper text-center">

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="/resources/images/projects/chilld-bags/watch/gallery/watch.png" media="(min-width: 991px)">
										<source srcset="/resources/images/projects/chilld-bags/watch/gallery/watch@0.5x.png" media="(max-width: 767px)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="/resources/images/projects/chilld-bags/watch/gallery/watch.png">
									</picture>									
									
								</div>							
							
							</div>
							
						</section>

						<section id="project-watch-idea" class="py-4">
								
							<div class="container">
							
								<div class="content__title text-center">
									<span class="h6 ls3 t200-desktop uppercase">Functionality</span><br />
									<h3 class="display-4 t100-desktop">Watch App</h3>
								</div>

								<p>The initial project scope did not include a watch application. However, I felt it was necessary to include a companion application to the client's e-commerce mobile app. But if the benefits of a mobile app are to provide relevant information, discounts, offers, and be a marketing channel, what should a companion app do?</p>
								
								<p>The answer? Greater focus on what the consumer needs while on the go. Previous analytics data from the current website, user views were especially high on order history, order status and shipment tracking pages. Why stop there when we can add notifications on discounts, offers and for admins - low inventory alerts.</p>
								
								<div class="row pt-4 pt-md-5">
									
									<div class="col-md-6 col-lg-4 order-0 order-lg-0">
										
										<div class="row">
											
											<div class="col-12 mb-4 mb-md-5">
												
												<div class="feature-box fbox-plain fbox-light">
													<div class="fbox-icon">
														<i class="icon-cart1 color-emphasis-2"></i>
													</div>
													<h4 class="m-0">Order History</h4>
													<p class="h5 font-body t400">Allows the buyer to get up-to-date information on each order placed online, including shipping updates, delivery, and payment details.</p>
												</div>										
												
											</div>
											
											<div class="col-12 mb-4 mb-md-5">
												
												<div class="feature-box fbox-plain fbox-light">
													<div class="fbox-icon">
														<i class="icon-tag color-emphasis-2"></i>
													</div>
													<h4 class="m-0">Order Status</h4>
													<p class="h5 font-body t400">A live update that provides timely information on what stage of the order process the product is at.</p>
												</div>										
												
											</div>
											
											
										</div>
										
									</div>
									
									<div class="col-12 col-sm-9 col-lg-4 order-3 order-lg-2 d-flex align-items-center mx-auto">
										
										<div class="custom-responsive-video-wrapper">
										

											<video autoplay muted loop width="320" height="240" poster="/resources/video/chilld-bags/watch-app/poster.jpg">
											   <source src="/resources/video/chilld-bags/watch-app/final-cropped_1.ogv" type="video/ogv">
											   <source src="/resources/video/chilld-bags/watch-app/final-cropped_1.webm" type='video/webm;codecs="vp8, vorbis"'>
											   <source src="/resources/video/chilld-bags/watch-app/final-cropped_1.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>
											</video>											

										</div>
										
									</div>
																		
									<div class="col-md-6 col-lg-4 order-1 order-lg-3">
										
										<div class="row">
											
											<div class="col-12 mb-4 mb-md-5">
												
												<div class="feature-box fbox-plain fbox-light">
													<div class="fbox-icon">
														<i class="icon-delivery color-emphasis-2"></i>
													</div>
													<h4 class="m-0">Shipment Tracking</h4>
													<p class="h5 font-body t400">Showing simple delivery statuses and estimated delivery time without the buy inputing any sort of tracking number.</p>
												</div>										
												
											</div>
											
											<div class="col-12 mb-4 mb-md-5">
												
												<div class="feature-box fbox-plain fbox-light">
													<div class="fbox-icon">
														<i class="icon-infographic1 color-emphasis-2"></i>
													</div>
													<h4 class="m-0">Admin Dashboard</h4>
													<p class="h5 font-body t400">Admin users logged into the mobile app, will have access to the dashboard. This allows for quick lookup of inventory and orders.</p>
												</div>										
												
											</div>	
											
										</div>
										
									</div>									
									
								</div>
																	
							</div>
						
						</section>
						
						<section id="project-watch-userflows" class="dark py-4">
							
							<div class="wave-container">
								<svg class="wave-item item-1 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-watch-userflows-1" d=""/></svg>
								<svg class="wave-item item-2 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-watch-userflows-2" d=""/></svg>
								<svg class="wave-item item-3 position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-watch-userflows-3" d=""/></svg>						
							</div>
							
							<div class="content-inner bg-dark py-5">
								
								<div class="container">
									
									<div class="row align-items-center">
																			
										<div class="col-12 col-lg-6">				
	
											<div class="content__title mb-5">
											
												<h3 class="display-4 t100-desktop">User Flows</h3>
												<p>The benchmark for interaction with a smartwatch is 2 seconds. Remember, just a few taps should do it. So, I needed to be direct and focused for the type of engagement.</p>
												<a href="/resources/documents/chilld-bags/chilld-bags-watch-userflow.pdf" class="button button-circle button-primary mx-0" target="_blank">View User Flows</a>
												
											</div>
									
										</div>
										
										<div class="col-12 col-sm-10 col-lg-5 offset-0 offset-sm-1 offset-md-0 offset-lg-1">

											<div class="watch-userflows-iso col d-none d-md-block position-relative mt-4">
												<img data-src="/resources/images/projects/chilld-bags/watch/userflows/userflow-iso-1.png" class="img-fluid position-absolute lazy" data-parallax='{"x": 30, "smoothness": 40}'/>
												<img data-src="/resources/images/projects/chilld-bags/watch/userflows/userflow-iso-2.png" class="img-fluid position-absolute lazy" data-parallax='{"x": -60, "smoothness": 40}' />												
												<img data-src="/resources/images/projects/chilld-bags/watch/userflows/userflow-iso-3.png" class="img-fluid position-absolute lazy" data-parallax='{"x": -170, "smoothness": 40}' />												
											</div>
											
											<div class="mobile-userflows-iso__mobile d-block d-md-none">
												<img data-src="/resources/images/projects/chilld-bags/watch/userflows/userflow-iso-mobile.png" class="img-fluid lazy" data-parallax='{"y": 50, "smoothness": 100}' />
											</div>										
											
										</div>

									</div>
																		
								</div>
								
							</div>
							
							<div class="wave-container">
								<svg class="wave-item item-1 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-watch-userflows-4" d=""/></svg>
								<svg class="wave-item item-2 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-watch-userflows-5" d=""/></svg>
								<svg class="wave-item item-3 flip-vertically position-absolute" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="wave-watch-userflows-6" d=""/></svg>						
							</div>										
							
						</section>	
						
						<section id="project-watch-mockups" class="py-4">
							
							<div class="container">
								
								<div class="row">
									
									<div class="col">

										<div class="content__title text-center">
											<span class="h6 ls3 t200-desktop uppercase">High-Fidelity</span><br />
											<h3 class="display-4 t100-desktop">Mockups</h3>
<!-- 											<p>Below shows the iterations within the wireframe phase.</p> -->
										</div>									

									</div>
									
								</div>
								
								<div class="row align-items-center mt-6">								
									
									<div class="col-12 col-lg-3">
										
										<h4 class="mb-1">Notifications</h4>
										<p>Stay up to date on your order status.</p>									
										
									</div>								
									
									<div class="col-12 col-lg-9">
										
										<div class="row">										
											
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/notifications-2.jpg" class="img-fluid lazy" />
											</div>
											
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/notifications-3.jpg" class="img-fluid lazy" />
											</div>
																						
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/notifications-4.jpg" class="img-fluid lazy" />
											</div>																																	

											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/notifications-5.jpg" class="img-fluid lazy" />
											</div>																																	
											
										</div>
										
									</div>										
									
								</div>
								
								<div class="row align-items-center mt-6">								
									
									<div class="col-12 col-lg-9 order-2 order-lg-0">
										
										<div class="row">
											
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/order-1.jpg" class="img-fluid lazy" />
											</div>
											
											
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/order-2.jpg" class="img-fluid lazy" />
											</div>
										
											
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/order-3.jpg" class="img-fluid lazy" />
											</div>

											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/order-4.jpg" class="img-fluid lazy" />
											</div>
																																	
										</div>
										
									</div>																			
									
									<div class="col-12 col-lg-3 order-1 order-lg-0">
										
										<h4 class="mb-1">Order Status</h4>
										<p>Get details on all current and previous orders. Track your order's whereabouts with up to the minute delivery tracking.</p>									
										
									</div>																																			
									
								</div>	
								
								<div class="row align-items-center mt-6">								
									
									<div class="col-12 col-lg-3">
										
										<h4 class="mb-1">Admin Dashboard Access</h4>										
										<p>Admin account holders get generalize information on orders, products status with advanced filter capabilities.</p>
										
									</div>								
									
									<div class="col-12 col-lg-9">
										
										<div class="row">										
											
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/dashboard-1.jpg" class="img-fluid lazy" />
											</div>										
											
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/dashboard-2.jpg" class="img-fluid lazy" />
											</div>
																						
											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/dashboard-3.jpg" class="img-fluid lazy" />
											</div>																																	

											<div class="col-6 col-sm">
												<img data-src="/resources/images/projects/chilld-bags/watch/mockups/dashboard-4.jpg" class="img-fluid lazy" />
											</div>																																	
											
										</div>
										
									</div>										
									
								</div>																							
							
							</div>								
							
						</section>												
						
					</div>
					<!-- Watch Layout - End
					================================= -->
										
				</div>					
				
			</section>	
			
			<section id="section-final-thoughts" class="bg-dark dark py-6">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-12 col-md-6 mx-auto">
							
							<h3 class="display-4 t100-desktop text-center">My final thoughts...</h3>
							<p class="lead">Surprisingly enough, none of the assets above were approved to take live.</p> 							
							<p>That's right, this client chose not to proceed after I presented all of my work. Nonetheless, the project has helped me hone in on my user experience and visual design skills.</p>
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
			
	<?php include("../../includes_eldrmedia/footer.php");?>		

	<?php include("../../includes_eldrmedia/footer-contents.php");?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="/resources/js/wavify/wavify.js"></script>
<script src="/resources/js/wavify/jquery.wavify.js"></script>
<!--
<script src="/resources/js/lazy/jquery.lazy.av.min.js"></script>
<script src="/resources/js/lazy/jquery.lazy.picture.min.js"></script>
-->
<script src="/resources/js/project-chilld-bags.js"></script>

<script>
$(function(){	
	$('.lazy').lazy();
});
</script>
		
	
	<?php include("../../includes_eldrmedia/body-bottom-contents.php");?>
	