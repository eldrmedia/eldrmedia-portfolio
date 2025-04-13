<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php include("../includes_eldrmedia/_eldrmedia_config.php");?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../includes_eldrmedia/head-tag-contents.php");?>
	
</head>

<body class="stretched no-transition">
	<div id="wrapper" class="clearfix">
		<header>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark p-0">
				<div class="container d-flex justify-content-between">
					<a class="navbar-brand p-0  d-flex align-items-center" href="/">
						<img src="/resources/images/logo-dark.png" alt="<?php print $SITE_TITLE;?>" style="height: 80px;">
					</a>
					<button class="navbar-toggler justify-content-start" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Hi, <?php echo $_SESSION['username']; ?>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="index.php?logout='1'">Logout</a>
								</div>			
							</li>
						</ul>
					</div>
				</div>
			</nav>	
		</header>
	
		<div class="clear"></div>
	
		<section id="content">
	
				
				<section class="jumbotron text-center pt-4">
					<div class="container">
						<h1>Client Portal</h1>
						<p class="lead text-muted">Welcome to the ELDR MEDIA Client Portal where you have access to all of the public and private projects.</p>
					</div>
				</section>
				
				<section class="py-5 bg-light">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<a href="/work/roll20/">
										<img class="card-img-top" src="/resources/images/projects/roll20/main/preview.jpg" />
									</a>
									<div class="card-body">
										<h4 class="m-0">Roll20.net<sup>&reg;</sup></h4>
										<div class="mb-3">
											<span class="h6">UI/UX  |  BRANDING  |  ACCESSIBILITY</span>
										</div>
										<a href="/work/roll20/" class="button mx-0">View Project</a>
									</div>
								</div>
							</div>	
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<a href="/work/chilld-bags/">
										<img class="card-img-top" src="/resources/images/projects/chilld-bags/preview.jpg" />
									</a>
									<div class="card-body">
										<h4 class="m-0">Chill'd Bags</h4>
										<div class="mb-3">
											<span class="h6">WEBSITE | MOBILE APP | BRANDING | UI/UX</span>
										</div>
										<a href="/work/chilld-bags/" class="button mx-0">View Project</a>
									</div>
								</div>
							</div>	
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<a href="/work/foundation/">
										<img class="card-img-top" src="/resources/images/projects/foundation/preview.png" />
									</a>
									<div class="card-body">
										<h4 class="m-0">Foundation</h4>
										<div class="mb-3">
											<span class="h6">UI & UX | API INTEGRATION | MODULAR COMPONENTS</span>
										</div>
										<a href="/work/foundation/" class="button mx-0">View Project</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<a href="/work/project-1/">
										<img class="card-img-top" src="/resources/images/projects/project-1/preview.jpg" />
									</a>
									<div class="card-body">
										<h4 class="m-0">CarSense</h4>
										<div class="mb-3">
											<span class="h6">WEBSITE DEVELOPMENT | BRANDING | UI/UX</span>
										</div>
										<a href="/work/project-1/" class="button mx-0">View Project</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<a href="/work/project-1/">
										<img class="card-img-top" src="/resources/images/projects/project-2/preview.jpg" />
									</a>
									<div class="card-body">
										<h4 class="m-0">Capture</h4>
										<div class="mb-3">
											<span class="h6">MOBILE APP | BRANDING | UI/UX</span>
										</div>
										<a href="/work/project-2/" class="button mx-0">View Project</a>
									</div>
								</div>
							</div>						
						</div>
					</div>			
				</section>
				
		
		</section>

	<?php include("../includes_eldrmedia/footer.php");?>		

	</div>

	<?php include("../includes_eldrmedia/footer-contents-dev.php");?>
		
	<?php include("../includes_eldrmedia/body-bottom-contents.php");?>
