jQuery(document).ready(function() {
	
	if (jQuery('.remove-row-class').length) {
		jQuery('.remove-row-class').each(function(){
			//jQuery(this).children(".container").removeClass("container");
			jQuery(this).children(".container").children(".row").removeClass("row");
		});
		
		
	}
	
	if (jQuery('.remove-container-class').length) {
		jQuery('.remove-container-class').each(function(){
			jQuery(this).children(".rm-container-class").removeClass("container");
		});
		
	}
	if (jQuery('.path-contact').length) {
		jQuery('.path-contact').addClass("dark");
		
	}
	if (jQuery('.menu-dark').length) {
		jQuery('#navi').addClass("dark");
		
	}
	
	if (jQuery('.bg-section-bf').length) {
		jQuery('.bg-section-bf').each(function(){
			var bg = jQuery(this).attr('data-bg');
			jQuery(this).css('background-image', 'url("' + bg + '")');
			
		});
		
		
		
	}
	
	
	//update button next and prev article
	if (jQuery('#block-nextpreviouslink').length) {
		var next_get = '#';
		var prev_get = '#';
		
		if (jQuery('.next-link').length) {
			var next_get = jQuery(".next-link").attr('href');
			jQuery(".old-np-link .next").attr('href', next_get);
		}else{
			jQuery(".old-np-link .next").hide();
		}
		if (jQuery('.prev-link').length) {
			var prev_get = jQuery(".prev-link").attr('href');
			jQuery(".old-np-link .prev").attr('href', prev_get);
		}else{
			jQuery(".old-np-link .prev").hide();
		}
		
		
		
		
	}
	
	
	//Set subtitle
	if (jQuery('.section').length) {
		jQuery('.section').each(function(){
			
			if(jQuery(this).attr("data-sub-title")){
				var subtitle = jQuery(this).attr("data-sub-title");
			
				if (subtitle !== ''){
					jQuery(this).find(".subtitle-section").html(subtitle);
				}
			}else{
				jQuery(this).find(".subtitle-section").hide();
			}
			
			if(jQuery(this).attr("data-title")){
				var dttitle = jQuery(this).attr("data-title");
			
				if (dttitle !== ''){
					jQuery(this).find(".title-section").html(dttitle);
				}
			}
			
			//desction section 
			if(jQuery(this).attr("data-block-desc")){
				var desc_section = jQuery(this).attr("data-block-desc");
			
				if (desc_section !== ''){
					jQuery(this).find(".desc-section").html(desc_section).show();
					
				}
			}
			
			
		});
		
	}
	if (jQuery('.homepage.path-taxonomy').length) {
		jQuery(".homepage.path-taxonomy").find(".views-row").addClass("col-sm-6 col-lg-6");
	}
	if (jQuery('#simplenews-subscriptions-block-37022d21-7639-41a3-8267-e14cc45c34e4').length) {
		jQuery("#simplenews-subscriptions-block-37022d21-7639-41a3-8267-e14cc45c34e4").addClass("form-box form-ajax form-inline align-center");
	}
	
	
	if (jQuery('.section').length) {
		jQuery('.section').each(function(){
			
			if(jQuery(this).attr("data-sub-title")){
				var subtitle = jQuery(this).attr("data-sub-title");
			
				if (subtitle !== ''){
					jQuery(this).find(".subtitle-section").html(subtitle);
				}
			}else{
				jQuery(this).find(".subtitle-section").hide();
			}
			
			if(jQuery(this).attr("data-title")){
				var dttitle = jQuery(this).attr("data-title");
			
				if (dttitle !== ''){
					jQuery(this).find(".title-section").html(dttitle);
				}
			}
			
			//desction section 
			if(jQuery(this).attr("data-block-desc")){
				var desc_section = jQuery(this).attr("data-block-desc");
			
				if (desc_section !== ''){
					jQuery(this).find(".desc-section").html(desc_section).show();
					
				}
			}
			
			
		});
		
	}
	
});
