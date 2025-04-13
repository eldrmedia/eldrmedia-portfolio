<?php  if (count($errors) > 0) : ?>
	<div class="alert alert-danger" role="alert">
		<?php foreach ($errors as $error) : ?>
			<p class="m-0 small"><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
