jQuery(document).ajaxComplete(function() {
		/* Act on the event */
	if(jQuery('.file--image').length){
		var img_path = jQuery('.file--image a').attr('href');
		jQuery('#ajax-wrapper').prepend('<img src="'+img_path+'" width="100px" height="auto" >');
	} else {
		jQuery('#edit-third-party-settings-ntv-block-background-thumbnail-preview img').remove();
	}
});
if(jQuery("#bg_overlay").val()) {
	var bg_color = jQuery("#bg_overlay").val();
} else bg_color = "rgba(0, 0, 0, .6)";
jQuery("#bg_overlay").spectrum({
	showInput: true,
    color: bg_color,
  	showAlpha: true,
  	allowEmpty: true,
  	preferredFormat: "rgb",
  	move: function(c) {
        var bg_overlay = jQuery("#bg_overlay");
        bg_overlay.val(c.toRgbString());
    }
});
jQuery("#bg_overlay").show();