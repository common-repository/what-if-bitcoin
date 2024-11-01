<?php 
	function whatif_func( $atts ) {
  			$parameter = shortcode_atts( array('currency' => ''), $atts );
    		$whatif_currency = $parameter['currency'];
            
    		if(empty($parameter)) {
        		$whatif_currency = "USD";
    		}
    		
    		$form = whatif_form();
    		$form_result = whatif_result();
    		return $form.$form_result;
		}
?>