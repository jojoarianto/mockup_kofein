<div class="container">
	<div class="alert alert-<?php echo $type; ?> fade in">
		<?php if (isset($dismiss) && $dismiss!=false): ?>
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php endif ?>
		<strong><?php echo $title; ?></strong> 
		<hr style="margin-top: 0;">
		<?php echo $message; ?>
	</div>
</div>