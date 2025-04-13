<?php include("../../includes_eldrmedia/_eldrmedia_config.php");?>
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: /clients/login.php?location=' . urlencode($_SERVER['REQUEST_URI']));
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../../includes_eldrmedia/head-tag-contents.php");?>
	<meta name="robots" content="noindex">
	<meta name="robots" content="noimageindex">

</head>

	<?php include("../../includes_eldrmedia/body-top-contents.php");?>
	
	<?php include("../../includes_eldrmedia/header-no-gradient-dark.php");?>	

	<?php include("../../includes_eldrmedia/navigation.php");?>
	
		<section id="hero" class="hero position-relative">

			<div class="hero__background d-flex align-items-start align-items-md-center">
				
				<div class="background-element align--right align--top">

					<div class="background-element-wrapper">

						<svg width="1435" height="1303" viewBox="0 0 1435 1303" preserveAspectRatio="xMidYMid" xmlns="http://www.w3.org/2000/svg">
							<path d="M713.294 758.086c-32.8-38.953 3.767-123.707 81.676-189.306 77.911-65.602 167.659-87.204 200.462-48.25 32.802 38.951-3.765 123.707-81.674 189.306-77.91 65.6-167.66 87.201-200.464 48.25zm423.085-580.195c-18.128 47.586-109.983 56.776-205.163 20.52C836.033 162.16 773.57 94.196 791.7 46.607 809.827-.98 901.681-10.167 996.861 26.086c95.18 36.252 157.645 104.22 139.518 151.805zM471.743 284.293c50.867-2.468 96.103 77.993 101.041 179.719 4.94 101.727-32.29 186.19-83.159 188.657-50.866 2.473-96.104-77.99-101.04-179.715-4.942-101.726 32.29-186.19 83.158-188.66zm704.21 286.25c-45.36 23.149-119.664-31.623-165.962-122.34-46.302-90.713-47.066-183.014-1.703-206.162 45.36-23.149 119.663 31.624 165.964 122.336 46.299 90.712 47.06 183.018 1.702 206.166zm-414.43-233.08c-45.785 22.295-119.055-33.855-163.649-125.42-44.598-91.562-43.635-183.863 2.153-206.159C645.81-16.412 719.08 39.74 763.675 131.303c44.595 91.56 43.632 183.863-2.152 206.16zM5.255 1160.72c-20.928-46.423 37.377-117.986 130.234-159.838 92.855-41.856 185.092-38.15 206.02 8.277 20.929 46.422-37.38 117.984-130.233 159.844-92.854 41.844-185.094 38.14-206.02-8.283zm278.832 140.378c-49.951-9.911-74.377-98.918-54.554-198.82 19.82-99.898 76.382-172.847 126.336-162.935 49.952 9.908 74.378 98.925 54.556 198.822-19.82 99.898-76.386 172.845-126.338 162.933zm786.35-334.022c-9.184-50.086 64.579-105.583 164.761-123.953 100.183-18.374 188.84 7.335 198.03 57.424 9.185 50.087-64.581 105.583-164.762 123.956-100.18 18.37-188.84-7.341-198.03-57.427z" stroke="#FFF" fill="none" fill-rule="evenodd" data-parallax='{"rotateZ": -2, "smoothness": 40}' />
						</svg>
					
					</div>
					
				</div>

				<div class="hero__content d-flex w-100">

					<div class="container clearfix dark">

						<div class="row align-items-center">

							<div class="col-md-12 col-lg-3 col-xl-5">

								<div class="py-5 py-md-0 text-center text-lg-left">

									<h1 class="display-4 title font-primary mb-1 mb-sm-2">CarSense</h1>									
<!-- 									<img src="https://res.cloudinary.com/eldrmedia/image/upload/v1535420152/eldrmedia/work/carsense/logo.png" width="224" height="70" alt="ELDR Media - Carsense" class="mb-1 mb-sm-2" /> -->
									<h2 class="h6">WEBSITE DEVELOPMENT | BRANDING | UI/UX</h2>
									<p class="lead"></p>
									
								</div>

							</div>
							
							<div class="col-8 col-md-8 col-lg-9 col-xl-7 offset-2 offset-lg-0">

								<div class="hero__content-element">
									
									<img src="/resources/images/projects/carsense/intro-ipad_2x.png" class="animated fadeIn" data-parallax='{"y": 70, "smoothness": 20}' />

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

			<section id="section-introduction" class="introduction section nobottommargin nobg">
	
				<div class="introduction-client">
				
					<div class="container">
						
						<div class="col-md-8 offset-md-2">
							
							<h5 class="ls2 uppercase">CLIENT</h5>
							<p>Improve platform accessibility, usability and lead generation. All the while keeping the CarSense brand active and coherent. </p>
							
						</div>
						
					</div>
					
				</div>
	
				<div class="introduction-design d-none d-md-block">
					
					<div class="container">
			
						<div class="col-xl-10 offset-xl-1">			

							<div class="content__browser d-flex box-shadow-1 rounded my-6">
																				
								<div class="content__browser-image">
									
									<img src="/resources/images/projects/carsense/carsense-homepage.jpg" alt="CarSense Website Redesign" />	
									
								</div>						
							
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
								<p>Project Manager, UI/UX Design, Front-end Development & Branding</p>
								
							</div>
							
							<div class="col-6 col-sm-2 text-center text-sm-left">
								
								<h5 class="ls2 uppercase">Type</h5>
								<p>Website</p>
								
							</div>
							
							<div class="col-6 col-sm-2 text-center text-sm-left">
								
								<h5 class="ls2 uppercase">Year</h5>
								<p>2018</p>
								
							</div>															
						
						</div>
						
					</div>
	
				</div>
				
			</section>
			
			<section id="section-competitive-analysis" class="competitive-analysis section nobg pb-6">

				<div style="position: absolute; top: 0; right: 10%;">
					<svg width="742" height="692" xmlns="http://www.w3.org/2000/svg">
					  <path d="M728.53 316.38c8.292-38.063 24.261-81.912 2.342-117.847-19.853-33.193-59.921-16.758-82.594-82.22-22.674-65.463-36.05-88.919-74.963-108.608-38.914-19.69-89.132 2.675-123.016 20.47-33.884 17.794-50.901 23.738-85.11 19.42-34.209-4.317-83.106-5.304-147.475 75.876-64.368 81.18-80.798 103.88-148.98 138.92-68.18 35.04-110.122 193.908-.709 231.842 109.414 37.933 116.338 2.62 160.398 111.298s116.27 93.818 213.033 64.755c96.763-29.062 212.628-113.793 255.638-165.12 43.01-51.328 54.377-65.913 34.77-111.33-12.294-31.15-11.626-39.392-3.334-77.455z" fill="#E9C750" fill-rule="evenodd"/>
					</svg>
				</div>
				
				<div class="competitive-analysis__content">
					
					<div class="container position-relative">
						
						<div class="row">
														
							<div class="col-lg-6">			
								
								<div class="competitive-analysis__content-main text-center text-md-left">	
							
									<h2 class="display-4 t100-desktop">Competitive Analysis</h2>
									<p class="lead">Identifying competitors and evaluating their strategies to determine their strengths and weaknesses relative to those of our clients’ service. This was a critical part of not only our marketing plan but also pointing out what features were missing and what features competitors did not provide.</p>
								
								</div>
								
							</div>
							
							<div class="col-lg-6">
								
								<div class="content__browser d-flex box-shadow-1 rounded">
																					
									<div class="content__browser-image">

										<img src="/resources/images/projects/carsense/competitive-analysis-screenshot.png" alt="Competitive Analysis" />								
										
									</div>						
								
								</div>
								
							</div>		
													
						</div>
						
					</div>
										
				</div>		
				
			</section>			

			<section id="section-users-elements" class="user-elements section nobg">
				
				<div class="user-personas position-relative py-4">
					
					<div class="container">
					
						<div class="row align-items-center">
							
							<div class="col-md-6 order-0 order-md-1">
								
								<div class="content__title mb-5">
									
									<h3 class="display-4 t100-desktop">User Personas</h3>
									<p>Creating personas that are role-based, goal-directed and fictional. Figuring exactly what do people want  from a used car dealership website.</p>
			
									<a href="/resources/documents/nextgen-carsense/personas.pdf" class="button button-circle button-border mx-0" target="_blank">View Personas</a>
							
								</div>									
								
							</div>
							
							<div class="col-md-6 order-1 order-md-0">
								
								<img src="/resources/images/projects/carsense/user-persona-monica.png" />
								
							</div>
							
						</div>
					
					</div>
				
				</div>
				
				<div class="moodboard position-relative py-6">
				
					<div class="container">
						
						<div class="row align-items-center">
							
							<div class="col-md-6">
								
								<div class="content__title mb-5">
									
									<h3 class="display-4 t100-desktop">Moodboard</h3>
									<p>Defining brand elements, color scheme, design elements, typography & inspiration.</p>
			
									<a href="https://projects.invisionapp.com/boards/PU3LI487Q6R/" class="button button-circle button-black mx-0" target="_blank">View Moodboard</a>
							
								</div>									
								
							</div>
							
							<div class="col-md-6">
								
								<div class="content__browser d-flex box-shadow-1 rounded">
																					
									<div class="content__browser-image">
										
										<img src="/resources/images/projects/carsense/moodboard-screen.jpg" alt="Moodboard" />								
										
									</div>						
								
								</div>
																
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="user-flows position-relative py-4">
					
					<div class="content__flows">
	
						<div class="col text-center">
							
							<img src="/resources/images/projects/carsense/user-flow-chart.png" alt="CarSense - User Flow Chart" />
							
						</div>
						
					</div>											
					
					<div class="content__title mt-5 text-center">
						
						<div class="col-xl-10 offset-xl-1">				
						
							<h3 class="display-4 t100-desktop">User Flows</h3>
							<p>Visualizing the complete path that users follow to reach their goals on the CarSense website.</p>
	
							<a href="/resources/documents/nextgen-carsense/userflow.pdf" class="button button-circle button-border" target="_blank">Download PDF</a>
							
						</div>
				
					</div>					
					
				</div>
				
				<div class="background-element main-element">
					<svg width="2085" height="1196" xmlns="http://www.w3.org/2000/svg">
					  <path d="M1870.853 921.033c84.724-49.63 197.033-99.26 208.855-181.084 11.822-75.116-108.368-96.578-47.288-225.349 61.08-128.77 70.932-181.084 15.763-257.542-55.17-76.458-208.856-100.602-317.224-112.674-108.369-12.073-157.627-22.804-228.56-69.751-70.932-46.948-181.27-105.968-468.94-54.996-287.67 50.972-364.512 67.068-581.25 41.582C235.474 35.733-134.95 234.255 50.262 422.046s262.055 140.843 175.36 362.168c-86.695 221.325 104.428 283.028 376.334 351.438 271.907 68.41 683.707 72.433 870.89 42.923 187.181-29.51 238.41-38.9 271.906-132.795 25.614-63.044 41.377-75.116 126.102-124.747z" fill="#F1F1F2" fill-rule="evenodd"/>
					</svg>				
				</div>	
				
				<div class="background-element secondary-element">
					<svg width="1185" height="951" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd">
							<path d="M777.01 675.43l-10.16.81.81 10.16 10.16-.81-.81-10.16zM663.854 455.124l-8.833-.154.05-2.97 8.834.154.125-7.154 2.97.05-.125 7.156 7.125.124-.049 2.97-7.128-.124-.153 8.804-2.97-.05.154-8.806zM763.65 673.51l16.1-1.28 1.27 16.09-16.09 1.28-1.28-16.09zm7.81-363.37l11.26-8.15 1.75 2.41-11.26 8.15-1.75-2.41zm-353.57-97.33l.84-2.85 7.26 2.15 2.58-8.7 8.69 2.57 2.58-8.7 8.69 2.57 2.16-7.27 2.85.84-3.01 10.12-8.68-2.56-2.59 8.69-8.68-2.56-2.59 8.69-10.1-2.99zm-37.53 482.87l-8.57-1.74 2.78 8.29 5.79-6.55zM367.33 690l18.67 3.79-12.61 14.28-6.06-18.07z" fill="#98002E"/>
							<path d="M697.71 855.52l9.31-10.52 10.98 9.7-1.97 2.23-8.75-7.73-7.341 8.29-2.229-1.97zM58.92 644.8a3.185 3.185 0 0 1 .28 4.5 3.187 3.187 0 0 1-4.51.28 3.183 3.183 0 0 1-.27-4.5 3.184 3.184 0 0 1 4.5-.28zm664.56-456.64v8.74l7.57-4.37-7.57-4.37zm-2.98 13.9V183l16.5 9.53-16.5 9.53zm288.43 40.32l2.14-2.07a5.205 5.205 0 0 0 7.36.13c1-.97 1.57-2.27 1.59-3.66.04-1.4-.49-2.71-1.46-3.71l2.14-2.07c1.52 1.57 2.32 3.61 2.3 5.83a8.163 8.163 0 0 1-2.5 5.75 8.105 8.105 0 0 1-5.83 2.29 8.103 8.103 0 0 1-5.74-2.49zM.39 341.15l8.4-8.12-7.69-7.96L3.24 323 13 333.1 2.46 343.29l-2.07-2.14zM77.92 140.8a3.196 3.196 0 0 1 .28 4.51 3.183 3.183 0 0 1-4.5.27 3.184 3.184 0 0 1-.28-4.5 3.184 3.184 0 0 1 4.5-.28z" fill="#004A8D"/>
							<path d="M1147.49 825.53l4.06-9.74 8.37 3.48 3.49-8.38 8.36 3.48 3.5-8.37 9.73 4.04-1.14 2.75-6.99-2.9-3.49 8.37-8.37-3.48-3.49 8.37-8.36-3.47-2.93 7-2.74-1.15M110.829 839.97v10.2h10.191v-10.2h-10.191zM107.86 837v16.14H124V837h-16.14zm273.86-489.87l-8.48 2.12 6.07 6.29 2.41-8.41zm80.602 591.52l-.462-7.47 2.97-.18.462 7.466 7.518-.466.19 2.97-7.524.466.524 8.454-2.97.19-.524-8.46-8.406.52-.18-2.97 8.402-.52zM367.52 347.61L386 343l-5.25 18.31-13.23-13.7zM689.174.026c2.18-.17 4.29.51 5.96 1.93 3.43 2.93 3.84 8.11.91 11.54a8.055 8.055 0 0 1-5.57 2.85l-.24-2.97c1.39-.11 2.65-.75 3.55-1.81 1.87-2.18 1.6-5.48-.58-7.34a5.161 5.161 0 0 0-3.8-1.23l-.23-2.97zM640.91 649.1l13.85-1.1.24 2.97-13.86 1.1-.23-2.97zM993.92 46.796a3.196 3.196 0 0 1 .28 4.51 3.193 3.193 0 0 1-4.5.28 3.196 3.196 0 0 1-.28-4.51 3.193 3.193 0 0 1 4.5-.28zM875.17 488.65l-6.75 7.64 7.64 6.75 6.75-7.64-7.64-6.75zm-10.95 7.9l10.69-12.1 12.1 10.69-10.69 12.1-12.1-10.69z" fill="#E9C750"/>
						</g>
					</svg>				
				</div>	

			</section>
			
			<section id="section-lowfi-wireframes" class="lowfi-wireframes section nobg py-6">
				
				<div class="container position-relative">
					
					<div class="row align-items-center">
					
						<div class="col-lg-6 order-1 order-lg-0">
						
							<img src="/resources/images/projects/carsense/wireframes-low-fidelity.png" alt="lowfi-wireframes" />
							
						</div>
		
						<div class="col-lg-6 order-0 order-lg-1">
							
							<div class="content__title mb-5 mb-md-0 text-center text-lg-right">
								
								<span class="h6 ls3 t300-desktop uppercase">Low-Fi</span><br />
								<h3 class="display-4 t100-desktop">Wireframes</h3>
								<p>Quickly producing a wireframe prototype to help map out the shell of the website's interface.</p>
		
								<a href="https://invis.io/PTODCDZ267H" class="button button-circle button-dark" target="_blank">View Desktop</a>								
<!-- 								<a href="#" class="button button-circle" target="_blank" role="button">View Mobile Prototypes</a> -->
								
							</div>						
							
						</div>								
	
					</div>
						
				</div>

				<div class="background-element main-element">
					<svg width="1139" height="773" xmlns="http://www.w3.org/2000/svg">
						<path d="M140.98 243.807c8.41-4.841 18.411-6.462 21.152-6.747 15.305-1.614 28.884 4.15 46.392 9.96 35.892 11.914 62.592-9.449 90.746-31.21 99.732-76.952 200.957-148 318.908-189.53C665.134 9.752 711.293-.21 760.91.003c68.194 0 135.22 35.235 154.221 109.703 8.05 31.563 5.694 64.985 12.132 96.913 14.92 74.016 72.614 66.911 130.461 66.924 39.416 0 76.636 8.5 80.724 57.886 2.104 25.374-1.778 54.314-12.165 77.31-29.654 65.67-104.199 101.535-163.313 128.011-78.388 35.096-168.65 66.34-217.736 146.672-22.18 36.297-27.27 66.406-69.402 79.972-23.74 7.65-53.918 13.282-78.401 6.561-40.717-11.156-67.875-62.853-101.425-88.36-26.414-20.087-57.296-38.243-89.816-42.898-77.837-11.143-137.098 41.418-195.894 86.281-20.674 15.772-34.512 21.363-45.9 22.924a81.774 81.774 0 0 1-20.867-.405c-29.308-4.748-94.987-58.033-124.48-154.7-10.122-33.156-39.457-129.286 4.22-186.6 26.886-35.263 56.108-22.579 77.87-63.273 20.854-38.92 11.177-82.596 39.842-99.117z" fill="#B5D6F0" fill-rule="nonzero"/>
					</svg>			
				</div>
			
			</section>	
			
			<section id="section-lowfi-prototypes" class="lowfi-prototypes section nobg py-6">
				
				<div class="container position-relative">
					
					<div class="row align-items-center">
		
						<div class="col-lg-4">
							
							<div class="content__title mb-5 mb-md-0 text-center text-lg-left">
								
								<span class="h6 ls3 t300-desktop uppercase">Hi-Fi</span><br />
								<h3 class="display-4 t100-desktop">Mockups</h3>
								<!-- <p>Quickly producing a wireframe prototype to help map out the shell of the mobile app's interface.</p> -->
		
								<a href="https://invis.io/TZOE2ZIRANM" class="button button-circle button-border" target="_blank">View Desktop</a>	
								<a href="https://invis.io/JFOE2ZZEKBT" class="button button-circle button-dark" target="_blank">View Mobile</a>	
								
							</div>						
							
						</div>	
					
						<div class="col-lg-8">
						
							<img src="/resources/images/projects/carsense/prototype-low-fidelity.png" alt="lowfi-prototypes" />
							
						</div>													
	
					</div>
						
				</div>

				<div class="background-element secondary-element">
					<svg width="1185" height="951" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd">
							<path d="M777.01 675.43l-10.16.81.81 10.16 10.16-.81-.81-10.16zM663.854 455.124l-8.833-.154.05-2.97 8.834.154.125-7.154 2.97.05-.125 7.156 7.125.124-.049 2.97-7.128-.124-.153 8.804-2.97-.05.154-8.806zM763.65 673.51l16.1-1.28 1.27 16.09-16.09 1.28-1.28-16.09zm7.81-363.37l11.26-8.15 1.75 2.41-11.26 8.15-1.75-2.41zm-353.57-97.33l.84-2.85 7.26 2.15 2.58-8.7 8.69 2.57 2.58-8.7 8.69 2.57 2.16-7.27 2.85.84-3.01 10.12-8.68-2.56-2.59 8.69-8.68-2.56-2.59 8.69-10.1-2.99zm-37.53 482.87l-8.57-1.74 2.78 8.29 5.79-6.55zM367.33 690l18.67 3.79-12.61 14.28-6.06-18.07z" fill="#98002E"/>
							<path d="M697.71 855.52l9.31-10.52 10.98 9.7-1.97 2.23-8.75-7.73-7.341 8.29-2.229-1.97zM58.92 644.8a3.185 3.185 0 0 1 .28 4.5 3.187 3.187 0 0 1-4.51.28 3.183 3.183 0 0 1-.27-4.5 3.184 3.184 0 0 1 4.5-.28zm664.56-456.64v8.74l7.57-4.37-7.57-4.37zm-2.98 13.9V183l16.5 9.53-16.5 9.53zm288.43 40.32l2.14-2.07a5.205 5.205 0 0 0 7.36.13c1-.97 1.57-2.27 1.59-3.66.04-1.4-.49-2.71-1.46-3.71l2.14-2.07c1.52 1.57 2.32 3.61 2.3 5.83a8.163 8.163 0 0 1-2.5 5.75 8.105 8.105 0 0 1-5.83 2.29 8.103 8.103 0 0 1-5.74-2.49zM.39 341.15l8.4-8.12-7.69-7.96L3.24 323 13 333.1 2.46 343.29l-2.07-2.14zM77.92 140.8a3.196 3.196 0 0 1 .28 4.51 3.183 3.183 0 0 1-4.5.27 3.184 3.184 0 0 1-.28-4.5 3.184 3.184 0 0 1 4.5-.28z" fill="#004A8D"/>
							<path d="M1147.49 825.53l4.06-9.74 8.37 3.48 3.49-8.38 8.36 3.48 3.5-8.37 9.73 4.04-1.14 2.75-6.99-2.9-3.49 8.37-8.37-3.48-3.49 8.37-8.36-3.47-2.93 7-2.74-1.15M110.829 839.97v10.2h10.191v-10.2h-10.191zM107.86 837v16.14H124V837h-16.14zm273.86-489.87l-8.48 2.12 6.07 6.29 2.41-8.41zm80.602 591.52l-.462-7.47 2.97-.18.462 7.466 7.518-.466.19 2.97-7.524.466.524 8.454-2.97.19-.524-8.46-8.406.52-.18-2.97 8.402-.52zM367.52 347.61L386 343l-5.25 18.31-13.23-13.7zM689.174.026c2.18-.17 4.29.51 5.96 1.93 3.43 2.93 3.84 8.11.91 11.54a8.055 8.055 0 0 1-5.57 2.85l-.24-2.97c1.39-.11 2.65-.75 3.55-1.81 1.87-2.18 1.6-5.48-.58-7.34a5.161 5.161 0 0 0-3.8-1.23l-.23-2.97zM640.91 649.1l13.85-1.1.24 2.97-13.86 1.1-.23-2.97zM993.92 46.796a3.196 3.196 0 0 1 .28 4.51 3.193 3.193 0 0 1-4.5.28 3.196 3.196 0 0 1-.28-4.51 3.193 3.193 0 0 1 4.5-.28zM875.17 488.65l-6.75 7.64 7.64 6.75 6.75-7.64-7.64-6.75zm-10.95 7.9l10.69-12.1 12.1 10.69-10.69 12.1-12.1-10.69z" fill="#E9C750"/>
						</g>
					</svg>		
				</div>
			
			</section>								
			
			<section id="section-style-guide" class="style-guide section nobg py-6">
				
				<div class="container position-relative">
					
					<div class="row align-items-center">
		
						<div class="col text-center">
							
							<div class="content__title mb-5">
								
								<h3 class="display-4 t100-desktop">Style Guide</h3>
								<a href="/resources/documents/nextgen-carsense/CarSense_StyleGuide.pdf" class="button button-circle button-border" target="_blank">View Style Guide</a>	
								<!-- <p>Quickly producing a wireframe prototype to help map out the shell of the mobile app's interface.</p> -->
		
								<!-- <a href="#" class="button button-circle button-border" target="_blank">Prototype</a>								 -->
								<!--<a href="#lowfi-wireframes-collapse" class="button button-circle dark" target="_blank" data-toggle="collapse" href="#lowfi-wireframes-collapse" role="button" aria-expanded="false" aria-controls="lowfi-wireframes-collapse">Wireframes</a>-->
								
							</div>						

							<img src="/resources/images/projects/carsense/style-guide.png" alt="Style Guide" />
							
						</div>	

					</div>
						
				</div>
								
			</section>
			
			<section id="section-gallery" class="gallery py-6">
				
				<div class="container">
					
					<div class="row">
					
						<div class="col col-md-8 offset-md-2 gallery-item__1">
							
							<div class="device">

								<img src="/resources/images/svg/tablet.svg" class="img-fluid" />
								
								<div class="device-image">
									
									<img src="/resources/images/projects/carsense/gallery-tablet.jpg" alt="CarSense - Tablet" class="image img-fluid shadow-lg" />
									
								</div>
								
							</div>
							
						</div>

					</div>

					<div class="row mt-7">
					
						<div class="col-6 col-lg-4 offset-lg-1 gallery-item__2">
							
							<div class="device">

								<img src="/resources/images/svg/iphone.svg" class="img-fluid" />
								
								<div class="device-image">
									
									<img src="/resources/images/projects/carsense/gallery-mobile-1.jpg" alt="CarSense - Tablet" class="image img-fluid shadow-lg" />
									
								</div>
								
							</div>
							
						</div>
						
						<div class="col-6 col-lg-4 offset-lg-2 gallery-item__3 pt-9">
							
							<div class="device">

								<img src="/resources/images/svg/iphone.svg" class="img-fluid" />
								
								<div class="device-image">
									
									<img src="/resources/images/projects/carsense/gallery-mobile-2.jpg" alt="CarSense - Tablet" class="image img-fluid shadow-lg" />
									
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
							<p>Even though CarSense website redesign did not proceed to taking live for unforeseen reasons, a lot was learned. This was one of the first major projects where I implemented this detailed design process with the creative department. Everyone on the team enjoyed seeing how each step in the process was affected by the previous and how quickly we were able to improve the UX of the website.</p>
						</div>
																								
					</div>					
					
				</div>
				
			</section>			
			
		</section>	
			
	<?php include("../../includes_eldrmedia/footer.php");?>		

	<?php include("../../includes_eldrmedia/footer-contents.php");?>
	
	<?php include("../../includes_eldrmedia/body-bottom-contents.php");?>
	