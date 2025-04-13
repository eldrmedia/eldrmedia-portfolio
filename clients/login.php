<?php include('server-987456.php') ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include("../includes_eldrmedia/head-tag-contents.php");?>
	
	<meta property="og:title" content="William Elder, UI/UX Designer/Developer. I conceptualize, design & code beautiful web experiences." />
	<meta property="og:image" content="http://www.eldrmedia.com/resources/images/preview.jpg" />
	

</head>
<?php include("../includes_eldrmedia/body-top-contents.php");?>
	
	<form class="m-0" method="post" action="login.php">
				<div class="card noradius noborder divcenter" style="max-width: 380px;">
					<div class="card-body">
						<div class="card-logo text-center mb-4">
							<a href="/"><img src="/resources/images/logo-light@2x.png" /></a>
						</div>
						<?php include('errors.php'); ?>
						<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
							<div class="form-group">
								<label for="loginInputUsername">Username</label>
								<input type="text" name="username" class="form-control" id="loginInputUsername" aria-describedby="username">
							</div>
							<div class="form-group">
								<label for="loginInputPassword">Password</label>
								<input type="password" name="password" class="form-control" id="loginInputPassword" aria-describedby="password">
							</div>
							<?php
								echo '<input type="hidden" name="location" value="';
								if(isset($_GET['location'])) {
								    echo htmlspecialchars($_GET['location']);
								}
								echo '" />';
							?>
							<button type="submit" class="button mx-0 mt-3" id="login-form-submit" name="login_user" value="login">Login</button>
						</form>
					</div>
				</div>	
	</form>

	<?php include("../includes_eldrmedia/footer.php");?>		

	<?php include("../includes_eldrmedia/footer-contents.php");?>

<?php include("../includes_eldrmedia/body-bottom-contents.php");?>
