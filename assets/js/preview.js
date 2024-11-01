/* Live Rreview settings */
jQuery("#whatif_bg_color").wpColorPicker({
  change: function (event, ui) {
  	 setTimeout(function(){
        var hex = event.target.value;
  	    jQuery('#whatif_bg_color').val(hex);
	 	var whatif_border_radius_fetch = jQuery('#whatif_border_radius').val();
	 	jQuery(".whatif_admin_row_last .whatif_form").attr('style','background-color:'+hex+' !important; border-radius:'+whatif_border_radius_fetch+'px !important');
        },1);
      },
  });
jQuery("#whatif_border_radius").change(function() {
	var val = jQuery(this).val();
	var whatif_bg_color_fetch = jQuery('#whatif_bg_color').val();	
	jQuery(".whatif_admin_row_last .whatif_form").attr('style','border-radius:'+val+'px !important; background-color:'+whatif_bg_color_fetch+' !important;');
	jQuery(".whatif_admin_row_last .whatif_form_result .result_text").attr('style','border-radius:'+val+'px !important; background-color:'+whatif_bg_color_fetch+' !important;');
});
jQuery('#whatif_text_color').wpColorPicker({
	 	change: function (event, ui) {
  	 	setTimeout(function(){
  	 	var hex = event.target.value;
		jQuery('#whatif_text_color').val(hex);
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row").attr('style','color:'+hex+' !important');
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row .fa").attr('style','color:'+hex+' !important');
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_btn .made_love").attr('style','color:'+hex+' !important');				
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_btn .made_love a").attr('style','color:'+hex+' !important');				
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_result .result_text").attr('style','color:'+hex+' !important');	
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_result .result_text .fa").attr('style','color:'+hex+' !important');				
	
        },1);
    },
  });
jQuery('#whatif_input_text_color').wpColorPicker({
		change: function (event, ui) {
		setTimeout(function() {
		var hex = event.target.value;
		jQuery('#whatif_input_text_color').val(hex);
		var whatif_input_border_color_fetch = jQuery('#whatif_input_border_color').val();
		var whatif_input_bg_color_fetch = jQuery('#whatif_input_bg_color').val();
		var whatif_input_border_radius_fetch = jQuery('#whatif_input_border_radius').val();
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row input").attr('style','color:'+hex+' !important; border-color:'+whatif_input_border_color_fetch+' !important; background-color:'+whatif_input_bg_color_fetch+' !important; border-radius:'+whatif_input_border_radius_fetch+'px !important;');
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row select").attr('style','color:'+hex+' !important; border-color:'+whatif_input_border_color_fetch+' !important; background-color:'+whatif_input_bg_color_fetch+' !important; border-radius:'+whatif_input_border_radius_fetch+'px !important;');		
		},1);
	},
});
jQuery('#whatif_input_bg_color').wpColorPicker({
	 change: function (event, ui) {
  	 setTimeout(function(){
        var hex = event.target.value;
		jQuery('#whatif_input_bg_color').val(hex);
		var whatif_input_text_color_fetch = jQuery('#whatif_input_text_color').val();
		var whatif_input_border_color_fetch = jQuery('#whatif_input_border_color').val();
		var whatif_input_border_radius_fetch = jQuery('#whatif_input_border_radius').val();
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row input").attr('style','background-color:'+hex+' !important; color:'+whatif_input_text_color_fetch+' !important; border-color:'+whatif_input_border_color_fetch+' !important; border-radius:'+whatif_input_border_radius_fetch+'px !important;');
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row select").attr('style','background-color:'+hex+' !important; color:'+whatif_input_text_color_fetch+' !important; border-color:'+whatif_input_border_color_fetch+' !important; border-radius:'+whatif_input_border_radius_fetch+'px !important;');		
		},1);
	},
});
jQuery('#whatif_input_border_color').wpColorPicker({
		change: function (event, ui) {
  	 	setTimeout(function(){
        var hex = event.target.value;
		jQuery('#whatif_input_border_color').val(hex);
		var whatif_input_text_color_fetch = jQuery('#whatif_input_text_color').val();
		var whatif_input_bg_color_fetch = jQuery('#whatif_input_bg_color').val();
		var whatif_input_border_radius_fetch = jQuery('#whatif_input_border_radius').val();
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row input").attr('style','border-color:'+hex+' !important; color:'+whatif_input_text_color_fetch+' !important; background-color:'+whatif_input_bg_color_fetch+' !important; border-radius:'+whatif_input_border_radius_fetch+'px !important;');
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row select").attr('style','border-color:'+hex+' !important; color:'+whatif_input_text_color_fetch+' !important; background-color:'+whatif_input_bg_color_fetch+' !important; border-radius:'+whatif_input_border_radius_fetch+'px !important;');		
		},1);
	},
});
jQuery("#whatif_input_border_radius").change(function() {
	var val = jQuery(this).val();	
	var whatif_input_text_color_fetch = jQuery('#whatif_input_text_color').val();
	var whatif_input_border_color_fetch = jQuery('#whatif_input_border_color').val();
	var whatif_input_bg_color_fetch = jQuery('#whatif_input_bg_color').val();
	jQuery(".whatif_admin_row_last .whatif_form input").attr('style','border-radius:'+val+'px !important; color:'+whatif_input_text_color_fetch+' !important; border-color:'+whatif_input_border_color_fetch+' !important; background-color:'+whatif_input_bg_color_fetch+' !important;');
	jQuery(".whatif_admin_row_last .whatif_form select").attr('style','border-radius:'+val+'px !important; color:'+whatif_input_text_color_fetch+' !important; border-color:'+whatif_input_border_color_fetch+' !important; background-color:'+whatif_input_bg_color_fetch+' !important;');	
	jQuery(".whatif_admin_row_last .whatif_form .btn--form").attr('style','border-radius:'+val+'px !important; color:'+whatif_input_text_color_fetch+' !important; border-color:'+whatif_input_border_color_fetch+' !important; background-color:'+whatif_input_bg_color_fetch+' !important;');		
});
jQuery('#whatif_button_bg_color').wpColorPicker({
		change: function (event, ui) {
  	 	setTimeout(function(){
        var hex = event.target.value;
		jQuery('#whatif_button_bg_color').val(hex);
		var whatif_button_text_color_fetch = jQuery('#whatif_button_text_color').val();
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_btn .btn--form").attr('style','background-color:'+hex+' !important; color:'+whatif_button_text_color_fetch+' !important;');
		},1);
	},
});
jQuery('#whatif_button_text_color').wpColorPicker({
		change: function (event, ui) {
  	 	setTimeout(function(){
        var hex = event.target.value;
		jQuery('#whatif_button_text_color').val(hex);
		var whatif_button_bg_color_fetch = jQuery('#whatif_button_bg_color').val();
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_btn .btn--form").attr('style','color:'+hex+' !important; background-color:'+whatif_button_bg_color_fetch+' !important;');

		},1);
	},
});
jQuery('#whatif_result_border_color').wpColorPicker({
	change: function (event, ui) {
  	 	setTimeout(function(){
        var hex = event.target.value;
		jQuery('#whatif_result_border_color').val(hex);
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_result .result_text").attr('style','border-color:'+hex+' !important');
		},1);
	},
});
jQuery('#whatif_result_text_color').wpColorPicker({
	change: function (event, ui) {
  	 setTimeout(function(){
        var hex = event.target.value;
		jQuery('#whatif_result_text_color').val(hex);
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_result .result_text .whatif_form_result_text").attr('style','color:'+hex+' !important');
		},1);
	},
});
jQuery("#whatif_made_love").change(function() {
	var val = jQuery(this).val();	
	if(val=="Yes") {
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_btn .made_love").css('display','block');
	}else {
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_btn .made_love").css('display','none');		
	}
});
jQuery("#whatif_tech").change(function() {
	var val = jQuery(this).val();	
	if(val=="Yes") {
		jQuery("<div class='tech_disp1' style='position: absolute;right: 0;bottom: 0;background-color: #000;padding: 5px;'></div>").appendTo(".whatif_form:last"); //appendTo: Append at whtaif_form last
		jQuery('.tech_disp1').html('<a style="color: #f1f1f1;text-decoration: none;" href="https://techuptodate.com.au/" target="_blank">Powered by TechUptodate</a>');
	}else {
		jQuery(".tech_disp1").remove();
		jQuery(".tech_disp").remove();
	}
});
/*jQuery("#whatif_tech").change(function() {
	var val = jQuery(this).val();	
	if(val=="Yes") {
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_text .tech_disp").css('display','block');
		//jQuery(".whatif_admin_row.whatif_admin_row_last .whatif_form .whatif_form_row_text .tech_disp").css('display','block');
		
	}else {
		jQuery(".whatif_admin_row_last .whatif_form .whatif_form_row_text .tech_disp").css('display','none');
		//jQuery(".whatif_admin_row.whatif_admin_row_last .whatif_form .whatif_form_row_text .tech_disp").css('display','none');		
	}
});*/
jQuery("#whatif_amount").val(5);
fetch_result();