<?php
	function front_admin_scripts() {

		wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); 
		wp_enqueue_script('jquery');
		//wp_enqueue_script( 'utils', plugin_dir_url(dirname( __FILE__ ) ). 'assets/js/utils.js' );
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'my-script-handle',plugin_dir_url(dirname( __FILE__ ) ).'assets/js/custom.js', array( 'wp-color-picker' ), false, true );
	}
?>