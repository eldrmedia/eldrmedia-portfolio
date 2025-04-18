<?php include("../../../includes_eldrmedia/_eldrmedia_config.php");?>
<?php include("../../../includes_eldrmedia/functions.php");?>
<?php $crumbs = getBreadcrumbs($BASE_URL); ?>
<?php $nav = getPrevNext($CURRENT_PAGE, $BASE_URL); ?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../../../includes_eldrmedia/head-tag-contents.php");?>
	
	<link rel="stylesheet" href="/resources/css/swiper.css">	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

	<meta name="robots" content="noindex">
	<meta name="robots" content="noimageindex">

	<meta property="og:title" content="Blackberg Group Design System" />
	<meta property="og:image" content="https://www.eldrmedia.com/resources/images/projects/blackberg-group/design-system/preview.png" />

</head>

	<?php include("../../../includes_eldrmedia/body-top-contents.php");?>

	<?php include("../../../includes_eldrmedia/header-no-gradient-dark.php");?>

	<?php include("../../../includes_eldrmedia/navigation.php");?>

		<section id="hero" class="hero position-relative ">

			<div class="hero__background">

				<div class="hero__background-divider align--left align--bottom position-absolute">
					<svg viewBox="0 0 1440 114" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
						<path d="M889.2 110.23C349.2 111.43 0 21.57 0 0v198h1440V0c0 21.93-16.32 113.83-550.8 110.23Z" fill="#fff"/>
					</svg>
				</div>

				<div class="container">
					
				</div>

				<div class="hero__content py-md-6 pt-lg-6 pb-lg-4">

					<div class="container">

						<div class="row">

							<div class="col-12">

								<div class="py-5 py-md-0 text-center">
									<h1 class="h6 m-0 text-white">Blackberg Group</h2>
									<h2 class="display-4 font-primary mb-1 mb-sm-2 text-white">Design System</h2>
									<h3 class="h6 text-white">Front-End Development | Next.js | Storybook.js</h3>
								</div>

							</div>

							<div class="col-12">

								<div class="hero__content-element-wrapper">

									<div class="hero__content-element-1">

										<picture>
											<!--[if IE 9]><video style="display: none;"><![endif]-->
											<source srcset="/resources/images/projects/quorum/design-system/hero-tablet.png" media="(min-width: 1399px)">
											<source srcset="/resources/images/projects/quorum/design-system/hero-tablet.png" media="(min-width: 991px)">
											<source srcset="/resources/images/projects/quorum/design-system/hero-tablet.png" media="(max-width: 767px)">
											<!--[if IE 9]></video><![endif]-->
											<img srcset="/resources/images/projects/quorum/design-system/hero-tablet.png" >
										</picture>

									</div>
								
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
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<?php foreach ($crumbs as $idx => $crumb): ?>
						<?php if ($idx < count($crumbs) - 1): // not last ?>
							<li class="breadcrumb-item">
							<a href="<?= htmlspecialchars($crumb['url']) ?>">
								<?= htmlspecialchars($crumb['label']) ?>
							</a>
							</li>
						<?php else: // last segment, active ?>
							<li class="breadcrumb-item active" aria-current="page">
							<?= htmlspecialchars($crumb['label']) ?>
							</li>
						<?php endif; ?>
						<?php endforeach; ?>
					</ol>
				</div>
			</nav>
			<section id="section-project-details" class="section nobg m-0">

				<div class="project-details__content">
					
					<div class="container">
						
						<div class="row m-0">
							<div class="col-sm-12 col-md-3 text-center text-md-left">
								<h3>Details</h3>
							</div>

							<div class="col-12 col-sm-6 col-md-4 text-center text-sm-left">
								<h5 class="ls2 uppercase">Roles</h5>
								<p>UI/UX Designer and Front-End Developer</p>								
							</div>
							
							<div class="col-12 col-sm-6 col-md-3 text-center text-sm-left">
								<h5 class="ls2 uppercase">Type</h5>
								<p>Design System Creation & Implementation</p>
							</div>
							
							<div class="col-12 col-md-2 text-center text-md-left">
								<h5 class="ls2 uppercase">Year</h5>
								<p>2024</p>
							</div>						
						</div>
						
					</div>

				</div>

			</section>	

			<section id="section-about" class="py-5">
				<div class="container">
					<div class="row m-0">
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-4">						
									<h2>Introduction</h2>
								</div>
								<div class="col-12 col-md-8">
                                    <strong>Project Overview</strong><br />
									<p>I led the web team at Blackberg in reinventing the business development pipeline by creating a scalable, responsive design system. My UI/UX Designer and Front-end Developer roles involved leveraging Next.js, Storybook, and Bootstrap to modernize the user experience and establish a consistent UI framework.</p>
                                    <strong>Key Objectives</strong>
                                    <ul class="pl-3">
                                        <li>Modernize the user interface for the BD pipeline.</li>
                                        <li>Increase responsiveness and intuitive navigation.</li>
                                        <li>Introduce consistent design patterns for maintainability and scalability.</li>
                                    </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="section-problem-solution" class="py-5">				
				<div class="container">
					<div class="row">
						<div class="col-12 bg-secondary mb-5 rounded">
                            <div class="p-4">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h2>Problem</h2>
                                        <strong>Existing Pipeline Issues</strong><br/>		
                                        <p>Blackberg's BD pipeline was originally coded in Power BI, limiting the flexibility needed for custom UX solutions. As a result, the interface lacked standard design patterns and failed to provide a responsive experience. Users faced clunky workflows when searching for or adding new leads.</p>
                                        <strong>Impact on Business and Team Members</strong><br />
                                        <p>These UI constraints led to slowed user adoption and widespread confusion, hampering data entry and analysis. The lack of efficiency and clarity meant missed opportunities and a delayed sales cycle, as the existing system struggled to handle new lead management seamlessly.</p>
                                    </div>
                                    <div class="col-12 col-md-5 offset-md-1">
                                        {Image Of Section}
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-12 bg-secondary-light mb-5 rounded">
                            <div class="p-4">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h2>Solution</h2>
                                        <strong>High-Level Approach</strong><br />		
                                        <p>I proposed building a completely new design system from the ground up. The plan involved adopting Bootstrap 5 for rapid, consistent front-end development, Next.js for building reusable interface components, and Storybook.js for thorough documentation and organization-wide alignment.</p>
                                        <strong>Key Deliverables</strong>
                                        <ol class="pl-3">
                                            <li><strong>Responsive Design System</strong> - A set of reusable, fully responsive UI components.</li>
                                            <li><strong>Storybook Documentation</strong> - Centralized documentation of interface elements, patterns, and best practices.</li>
                                            <li><strong>Scalable Architecture</strong> - An approach that integrates smoothly with existing data models, ensuring future enhancements are easily supported.</li>
                                        </ol>
                                    </div>
                                    <div class="col-12 col-md-5 offset-md-1">
                                        {Image Of Section}
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-12 bg-secondary-lightest rounded">
                            <div class="p-4">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h2>Result</h2>
                                        <strong>Tangible Outcomes</strong><br />		
                                        <p>By introducing a cohesive design system, lead management tasks became more streamlined, reducing the time required to add or update records. Consistent layouts also reinforced brand alignment across all screens, while a cleaner, more responsive UI increased user satisfaction.</p>
                                        <strong>Business Impact</strong>
                                        <ol class="pl-3">
                                            <li><strong>Efficiency Gains</strong> - Shortened BD cycle and improved lead conversion rates.</li>
                                            <li><strong>Lower Error Rates</strong> - Consistent forms and well-defined UX patterns minimized data-entry mistakes.</li>
                                            <li><strong>Simplified Onboarding</strong> - With documented standards in place, new team members quickly adapted to the system.</li>
                                        </ol>
                                    </div>
                                    <div class="col-12 col-md-5 offset-md-1">
                                        {Image Of Section}
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
				</div>
			</section>

			<section class="bg-primary dark py-6">				
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<span class="h6 ls3 t600 uppercase">1. Understand</span><br />								
							<h2 class="display-4 t100-desktop">Getting Everyone on the Same Page</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<p class="lead">This is where we talk with the team, find out what's holding them back, and define exactly what success should look like.</p>
							<div class="mt-3">
								<p>I conducted a series of in-depth interviews with Blackberg Group's internal teams, focusing on the individuals responsible for day-to-day business development operations. These discussions revealed recurring user frustrations around speed, consistency, and responsiveness in the existing Power BI-coded pipeline. Understanding these friction points early on shaped the project's direction, ensuring that the new design system would address core inefficiencies head-on.</p>
								<p>During these sessions, I also gathered user requirements and defined tangible success metrics—such as reducing the time required to input new leads and gauging overall user satisfaction with the updated interface. By incorporating direct feedback from the people who use the system, we could prioritize improvements that delivered the greatest impact.</p>
							</div>
						</div>
						<div class="col-12 col-lg-5 offset-lg-1">
							<h3>Project Goals & Constraints</h3>
							<div class="row">
								<div class="col-12 mb-5 mb-lg-4">
									<div class="feature-box">
										<div class="fbox-icon bg-secondary rounded-circle">
											<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center text-dark">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
												<path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z"/>
												</svg>
											</div>
										</div>
										<div class="fbox-content">
											<h3>Branding</h3>
											<p>Maintain brand guidelines and integrate with Power BI environment.</p>
										</div>
									</div>
								</div>								
								<div class="col-12">
									<div class="feature-box">
										<div class="fbox-icon bg-secondary rounded-circle">
											<div class="svg-wrapper d-flex h-100 align-items-center justify-content-center text-dark">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
												<path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707"/>
												</svg>
											</div>
										</div>
										<div class="fbox-content">
											<h3>At Scale</h3>
											<p>Establish a scalable design system architecture that can be applied to multiple internatl projects.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="py-6 bg-light">				
				<div class="container">
					<div class="row align-items-stretch">
						<div class="col-12 col-lg-8 offset-lg-2 text-center">
							<div class="content__title mb-5">
								<span class="h6 ls3 t600 uppercase brand-primary">2. Research</span><br />								
								<h2 class="display-4 t100-desktop">Digging Deeper into Tools and Workflows</h2>
							</div>
							<p>By exploring industry best practices, validating our chosen technology stack, and mapping user journeys, we uncovered key insights that shaped our approach to a streamlined, data-driven design system.</p>
						</div>
						<div class="col-12 col-md-4 d-flex">
							<div class="card shadow mb-3 mb-md-0">
								<img src="/resources/images/projects/blackberg-group/design-system/research-competitive-analysis.png" class="card-img-top" />
								<div class="card-body small">
								<h3 class="mb-0">Competitive Analysis</h3>
								I evaluated several B2B lead management tools to uncover best-in-class design practices—focusing on leading CRM solutions and their UX patterns for data entry. This exploration helped me identify common elements, such as intuitive form flows and clear data structures, that could inform the new design system.
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 d-flex">
							<div class="card shadow mb-3 mb-md-0">
								<img src="/resources/images/projects/blackberg-group/design-system/research-tech-stack.png" class="card-img-top" />
								<div class="card-body small">
									<h3 class="mb-0">Tech Stack</h3>
									<strong>Bootstrap 5</strong> provided a robust, responsive grid system and a rich library of reusable components.
									<br />
									<br />
									<strong>Next.js</strong> offered server-side rendering capabilities, ensuring faster load times and a scalable foundation for future growth.
									<br />
									<br />
									<strong>Storybook.js</strong> served as a centralized platform for developing, testing, and documenting UI components in isolation, guaranteeing consistency across the entire pipeline.<br />
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 d-flex">
							<div class="card shadow mb-3 mb-md-0">
								<img src="/resources/images/projects/blackberg-group/design-system/research-userflows.png" class="card-img-top" />
								<div class="card-body small">
									<h3 class="mb-0">User Flows</h3>
									I mapped out the entire user journey—from adding a new lead to generating insights—to identify repetitive tasks and opportunities for reusable design system components. These findings shaped the core UI structure, ensuring data entry and analysis were supported by consistent patterns, intuitive interactions, and a smooth overall experience.									
								</div>
							</div>
						</div>												
					</div>
				</div>
			</section>


			<section id="section-design" class="py-6">				
				<div class="container">
					<div class="row">
						<div class="col-12">
							<img src="/resources/images/projects/blackberg-group/design-system/design-figma-ui.png" class="shadow-lg" />
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-8 offset-lg-2 text-center">
							<div class="content__title text-center mb-5">
								<span class="h6 ls3 t600 uppercase brand-primary">3. Design</span><br />								
								<h2 class="display-4 t100-desktop">Design System Foundations</h2>
							</div>
							<p>In building a cohesive and scalable design system, I focused on establishing a centralized Figma kit, leveraging global variables for quick updates, and creating reusable components that work across multiple screen sizes and states. These elements combined to provide a consistent user experience while accelerating the design-to-development process.</p>
						</div>
					</div>
				</div>
			</section>			


			<section id="section-research-design-kit">
				<div class="container">
					<div class="row align-items-center py-4">
						<div class="col-12 col-md-12 col-lg-5">
							<h4 class="h1">Centralized Design Kit</h4>															
							<p>I began by creating a Figma “single source of truth” that housed all core UI elements, typography styles, and color palettes. This kit served as the foundation for rapid prototyping, ensuring every member of the team worked from the same, up-to-date resource.</p>
						</div>
						<div class="col-12 col-md-8 col-lg-6 offset-0 offset-md-2 offset-lg-1">
							<div class="shadow" style="margin-bottom: 30%; background: url('/resources/images/projects/quorum/design-system/figma-border.png') no-repeat top left; background-size: cover;">
								<img src="/resources/images/projects/quorum/design-system/figma-ds-buttons.png" class="box-shadow-light img-fluid" style="bottom: -15%; margin-bottom: -15%;" data-parallax='{"y": 25, "smoothness": 20}' />	
							</div>			
						</div>						
					</div>
					<div class="row align-items-center py-4">
						<div class="col-12 col-md-12 col-lg-5 offset-0 offset-md- offset-lg-1 order-0 order-lg-1">
							<h4 class="h1">Figma Variables</h4>															
							<p>To maintain consistency and simplify global updates, I incorporated Figma Variables for colors and text styles. With a single change, I could update the entire system—saving hours of manual editing and preventing discrepancies across multiple screens or components.</p>
						</div>
						<div class="col-12 col-md-8 col-lg-6  order-1 order-lg-0 offset-0 offset-md-2 offset-lg-0">
							<div class="shadow" style="margin-bottom: 30%; background: url('/resources/images/projects/quorum/design-system/figma-border.png') no-repeat top left; background-size: cover;">
								<img src="/resources/images/projects/quorum/design-system/figma-ds-buttons.png" class="box-shadow-light img-fluid" style="bottom: -15%; margin-bottom: -15%;" data-parallax='{"y": 25, "smoothness": 20}' />	
							</div>			
						</div>						
					</div>	
					<div class="row align-items-center py-4">
						<div class="col-12 col-md-12 col-lg-5">
							<h4 class="h1">Reusable Components</h4>															
							<p>Each interface element (like buttons, tables, and form fields) was constructed using Auto Layout and component variants. This allowed for quick customization—hover states, disabled views, and responsive layouts—while preserving design consistency and scalability.</p>
						</div>
						<div class="col-12 col-md-8 col-lg-6 offset-0 offset-md-2 offset-lg-1">
							<div class="shadow" style="margin-bottom: 30%; background: url('/resources/images/projects/quorum/design-system/figma-border.png') no-repeat top left; background-size: cover;">
								<img src="/resources/images/projects/quorum/design-system/figma-ds-buttons.png" class="box-shadow-light img-fluid" style="bottom: -15%; margin-bottom: -15%;" data-parallax='{"y": 25, "smoothness": 20}' />	
							</div>			
						</div>						
					</div>
				</div>		
			</section>		


			<section id="section-design" class="py-6 bg-primary dark">				
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4 text-left">
							<div class="content__title text-left mb-5">
								<span class="h6 ls3 t600 uppercase brand-primary">4. Implementation</span><br />								
								<h2 class="display-4 t100-desktop">Building It Out</h2>
							</div>
						</div>
						<div class="col-12 col-lg-8">
							<p>After finalizing the design architecture, I worked with the front-end team to stand up a Next.js codebase and build reusable components with Bootstrap 5. Each element was documented in Storybook—complete with props, usage notes, and code snippets—to give the team a single source of truth. Regular Git‑based reviews kept implementation tightly aligned with project goals.</p>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<nav class="nav nav-pills nav-pills--dark flex-column flex-sm-row justify-content-center mb-3">
								<button class="nav-link active mx-2" id="development-tab" data-toggle="tab" data-target="#development" type="button" role="tab" aria-controls="development" aria-selected="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-braces" viewBox="0 0 16 16">
  										<path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6M13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6"/>
									</svg>
									Development
								</button>
								<button class="nav-link mx-2" id="storybook-tab" data-toggle="tab" data-target="#storybook" type="button" role="tab" aria-controls="storybook" aria-selected="false">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
										<path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
									</svg>	
									Storybook
								</button>
								<button class="nav-link mx-2" id="github-tab" data-toggle="tab" data-target="#github" type="button" role="tab" aria-controls="github" aria-selected="false">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
										<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
									</svg>
									GitHub
								</button>
							</nav>							
							<div class="bg-tertiary rounded shadow-lg p-5 dark">
								<div class="tab-content" id="implementation-tabs">
									<div class="tab-pane fade show active" id="development" role="tabpanel" aria-labelledby="development-tab">
										<div class="row">
											<div class="col-12 col-md-6">
												<h3>Front-End Development</h3>
												<p>Working with our front-end developers, we set up a shared Next.js codebase and built a library of UI components using Bootstrap 5 utilities. We organized everything in a clear component hierarchy, making it easy for anyone on the team to reuse and scale pieces as new features rolled out.</p>
											</div>
											<div class="col-12 col-md-6">
												<img src="/resources/images/projects/blackberg-group/design-system/implementation-dev.png" />
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="storybook" role="tabpanel" aria-labelledby="storybook-tab">
										<div class="row">
											<div class="col-12 col-md-6">
												<h3>Storybook Integration</h3>
												<p>Together we turned Storybook into our living source of truth: every component now includes documented props, usage guidelines, and ready-to-copy code snippets. This shared hub lets designers preview states in real time and gives developers an authoritative reference for implementation details.</p>
											</div>
											<div class="col-12 col-md-6">
												<img src="/resources/images/projects/quorum/design-system/figma-ds-buttons.png" style="width: 100%; height: 400px;" />
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="github" role="tabpanel" aria-labelledby="github-tab">
										<div class="row">
											<div class="col-12 col-md-6">
												<h3>Collaboration & Version Control</h3>
												<p>We relied on Git workflows and regular design-dev reviews to keep everyone aligned. Pull requests, paired code walkthroughs, and clear commit messages ensured that design intent and technical implementation stayed perfectly in sync with evolving business goals.</p>
											</div>
											<div class="col-12 col-md-6">
												<img src="/resources/images/projects/quorum/design-system/figma-ds-buttons.png" style="width: 100%; height: 400px;" />
											</div>
										</div>
									</div>
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
							<p>The impact of the Quorum DS is felt far and wide, as it is shared across multiple teams, so efficiencies are extended between team members and products. When one team has spent time and effort to solve a design problem, then why shouldn’t another team in your company also benefit from this work?</p>
							<p>My team delivered 173 custom components, recipes, templates and variations, covering nearly 100% of the use cases within Quorum. New features were built 80% faster compared to the creation of new components from scratch, saving the company both time and money.</p>
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
									<a href="<?= htmlspecialchars($nav['prev']['url']) ?>" class="text-white">
										<i class="icon-arrow1-left icon-1x d-block mb-3"></i>
										<h5 class="h5 m-0 text-white small m-0"><?= htmlspecialchars($nav['prev']['label']) ?></h5>
									</a>
								</div>

								<div class="col-4 col-sm-6">
									<a href="/work/" class="text-white">
										<i class="icon-star icon-1x d-block mb-3"></i>
										<h5 class="h5 text-white small m-0">View All</h5>
									</a>
								</div>

								<div class="col-4 col-sm-3">
									<a href="<?= htmlspecialchars($nav['next']['url']) ?>" class="text-white">
										<i class="icon-arrow1-right icon-1x d-block mb-3"></i>
										<h5 class="h5 m-0 text-white small m-0"><?= htmlspecialchars($nav['next']['label']) ?></h5>
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


<script>
    gsap.registerPlugin(ScrollTrigger);

    // Fade in each image as the user scrolls down the page
    gsap.utils.toArray('.fade-image').forEach(function(image) {
        gsap.from(image, {
            opacity: 0,
            y: 50, // Starts from 50px below
            duration: 1,
            scrollTrigger: {
                trigger: image, // The trigger element is each image
                start: 'top 80%', // Start the animation when the image reaches 80% of the viewport height
                end: 'top 30%', // End the animation when the image reaches 30% of the viewport height
                scrub: true, // Smooth the animation with the scroll position
            }
        });
    });
</script>


	<?php include("../../../includes_eldrmedia/body-bottom-contents.php");?>
