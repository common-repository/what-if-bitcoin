<?php

function init_whatif_plug() {

	//wp_enqueue_script( 'ajaxHandle' );
	add_shortcode( 'what-if-bitcoin', 'whatif_func' );
}	

init_whatif_plug();

?>