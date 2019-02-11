<h1>Jacob Sidebar Options</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="jacob-form">
	<?php settings_fields('jacob-contact-options'); ?>
	<?php do_settings_sections('jacob_main_theme_contact'); ?>
	<?php submit_button(); ?>	
</form>
