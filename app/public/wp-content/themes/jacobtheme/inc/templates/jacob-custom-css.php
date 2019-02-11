<h1>Jacob Custom CSS</h1>
<?php settings_errors(); ?>

<form id="save-custom-css-form" method="post" action="options.php" class="jacob-form">
	<?php settings_fields('jacob-custom-css-options'); ?>
	<?php do_settings_sections('jacob_main_css'); ?>
	<?php submit_button(); ?>	
</form>
