<?php 
	function whatif_settings() {
		  /* Fetch all settings */
		  $whatif_currency = get_option('whatif_currency',true);
		  if($whatif_currency=="1") { $whatif_currency=""; }
		  $whatif_text_color = get_option('whatif_text_color',true);
		  if($whatif_text_color=="1") { $whatif_text_color=""; }
		  $whatif_input_text_color = get_option('whatif_input_text_color',true);
		  if($whatif_input_text_color=="1") { $whatif_input_text_color=""; }
		  $whatif_input_border_color = get_option('whatif_input_border_color',true);
		  if($whatif_input_border_color=="1") { $whatif_input_border_color=""; }
		  $whatif_button_bg_color = get_option('whatif_button_bg_color',true);
		  if($whatif_button_bg_color=="1") { $whatif_button_bg_color=""; }
		  $whatif_button_text_color = get_option('whatif_button_text_color',true);
		  if($whatif_button_text_color=="1") { $whatif_button_text_color=""; }
		  $whatif_input_bg_color = get_option('whatif_input_bg_color',true);
		  if($whatif_input_bg_color=="1") { $whatif_input_bg_color=""; }
		  $whatif_bg_color = get_option('whatif_bg_color',true);
		  if($whatif_bg_color=="1") { $whatif_bg_color=""; }
		  $whatif_made_love = get_option('whatif_made_love',true);
		  if($whatif_made_love=="1") { $whatif_made_love=""; }
		  $whatif_border_radius = get_option('whatif_border_radius',true);
		  if($whatif_border_radius=="1") { $whatif_border_radius=""; }
		  $whatif_input_border_radius = get_option('whatif_input_border_radius',true);
		  if($whatif_input_border_radius=="1") { $whatif_input_border_radius=""; }
		  $whatif_result_border_color = get_option('whatif_result_border_color',true);
		  if($whatif_result_border_color=="1") { $whatif_result_border_color=""; }
		  $whatif_result_text_color = get_option('whatif_result_text_color',true);
		  if($whatif_result_text_color=="1") { $whatif_result_text_color=""; }
		  $whatif_tech = get_option('whatif_tech',true);
		  if($whatif_tech=="1") { $whatif_tech=""; }

		  wp_enqueue_style('settings', plugin_dir_url( dirname( __FILE__ ) ) ."assets/css/settings_css.css" ); 
		  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); 
		  wp_enqueue_script( 'jQuery' );
		  wp_enqueue_style( 'wp-color-picker' );
		  wp_enqueue_script( 'my-script-handle',plugin_dir_url(dirname( __FILE__ ) ).'assets/js/custom.js', array( 'wp-color-picker' ), false, true );
		  wp_enqueue_script( 'main-settings', plugin_dir_url( dirname( __FILE__ ) ) ."assets/js/settings.js" );
		  $settings=" var whatif_bg_color='".$whatif_bg_color."';
		              var whatif_text_color='".$whatif_text_color."'; 
		              var whatif_input_text_color='".$whatif_input_text_color."'; 
		              var whatif_input_bg_color='".$whatif_input_bg_color."';
		              var whatif_input_border_color='".$whatif_input_border_color."';
		              var whatif_button_bg_color='".$whatif_button_bg_color."';
		              var whatif_button_text_color='".$whatif_button_text_color."';
		              var whatif_result_border_color='".$whatif_result_border_color."';
		              var whatif_result_text_color='".$whatif_result_text_color."';
		              var adminajax_url='".admin_url( 'admin-ajax.php' )."';
		            ";
		  wp_add_inline_script( 'main-settings', $settings );
		  wp_enqueue_script( 'fetch-result',plugin_dir_url( dirname( __FILE__ ) ) . "assets/js/fetch-result.js" );
		  wp_enqueue_script( 'preview', plugin_dir_url( dirname( __FILE__ ) ) . "assets/js/preview.js" );

		//Load Admin Settings */
		 include plugin_dir_path( dirname( __FILE__ ) ) ."templates/settings.php";	
	}
?>