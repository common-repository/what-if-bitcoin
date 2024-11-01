<?php

	add_action('admin_menu', 'whatif_menu');
	
	function whatif_menu() {
		add_menu_page('What If Bitcoin?', 'What If Bitcoin?', 'manage_options', 'whatif_main', 'whatif_settings',plugin_dir_url( dirname( __FILE__ ) ).'assets/images/lcp-menu-icon.png');
	}