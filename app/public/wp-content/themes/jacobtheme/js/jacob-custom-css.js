jQuery(document).ready(function($) {
	var updateCSS = function() {
		$("#jacob_css").val();
	}
	$("#save-custom-css-form").submit(updateCSS);
});

var editor = ace.edit("editor");

