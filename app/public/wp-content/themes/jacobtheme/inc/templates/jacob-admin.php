<h1>Jacob Sidebar Options</h1>
<?php settings_errors(); ?>
<?php 

	$picture = esc_attr(get_option('profile_picture'));
	$firstName = esc_attr(get_option('first_name'));
	$lastName = esc_attr(get_option('last_name'));
	$fullName = $firstName . ' ' . $lastName;
	$description = esc_attr(get_option('user_description'));

?>
<div class="jacob-sidebar-preview">
	<div class="jacob-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
		</div>
		<h1 class="jacob-username"><?php print $fullName; ?></h1>
		<h2 class="jacob-description"><?php print $description ?></h2>
		<div class="icon-wrapper">
			
		</div>
	</div>
</div>
<form method="post" action="options.php" class="jacob-form">
	<?php settings_fields('jacob-setting-group'); ?>
	<?php do_settings_sections('jacob_theme'); ?>
	<?php submit_button(); ?>
</form>
