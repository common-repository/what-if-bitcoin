<?php

	function whatif_result() {

		  $result ='<div class="whatif_form_result"><div class="result_text"></div></div>';
		  wp_enqueue_script( 'main-settings', plugin_dir_url(dirname( __FILE__ ) ).'assets/js/settings.js' );
		  $settings="  var adminajax_url='".admin_url( 'admin-ajax.php' )."';";
		  wp_add_inline_script( 'main-settings', $settings );
		  wp_enqueue_script( 'fetch-result', plugin_dir_url(dirname( __FILE__ ) ).'assets/js/fetch-result.js' );
		    return $result; 
	}

	/* Ajax Calling For API */
	add_action( 'wp_ajax_fetch_whatif_result', 'fetch_whatif_result_function' );
	add_action( 'wp_ajax_nopriv_fetch_whatif_result' ,'fetch_whatif_result_function' );

function numberToCurrency($text,$number){
        $checkMinusVal = explode('-',$number)[0];
        $checkMinus = $final = '';
        $allStr = explode('.',$number);
        if($checkMinusVal == ''){
            $checkMinus = '-';
            $allStr = explode('.',explode('-',$number)[1]);
        }
        $str = $allStr[0];
        $length = strlen($str);
        $count = $first = 0;
        for($i = $length; $i >= 0; $i--){   
            if($count == 3 && $first == 0){
                $final .= $str[$i];
                if($str[$i + 1] != ''){
                    $final .= '';
                }
                $count = 0;
                $first = 1;
            }
            elseif($count == 4 && $first == 1){
                if( ($i - 1) < 0){
                    $final .= $str[$i];
                }
                else{
                    $final .= $str[$i].',';
                }
                $count = 0;
            }
            else{
                $final .= $str[$i];
            } 
            $count++;
        }
        $final = strrev($final);
        if(array_key_exists("1",$allStr)){
            $decimalVal = $allStr[1][0];
            if(!empty($allStr[1][1])){
                $decimalVal .= $allStr[1][1];
            }
            else{
                $decimalVal .= 0;
            }
            if($allStr[1][2] >= 5){
                $decimalVal++;
            }
            $final .= '.'.$decimalVal;
        }
        return $checkMinus.$text.$final;
    }

	function fetch_whatif_result_function() {
		  
		  /*vaidate whatif_amount field*/
		  $whatif_amount = intval( $_POST['whatif_amount'] );
		  if ( ! $whatif_amount ) {
		    $whatif_amount = '';
		  }
		  if ( strlen( $whatif_amount ) > 8 ) {
		    $whatif_amount = substr( $whatif_amount, 0, 8 );
		  }
		  
		  $whatif_month = sanitize_text_field( $_POST['whatif_month'] );/*sanitizing select option value*/
		  
		  $whatif_day = sanitize_text_field( $_POST['whatif_day'] );/*sanitizing select option value*/
		  
		  $whatif_year = sanitize_text_field( $_POST['whatif_year'] ); /*sanitizing select option value*/
		  $date = $whatif_year."-".$whatif_month."-".$whatif_day;
		  $whatif_currency = $_POST['whatif_currency']; 
		  if($whatif_currency=='') { $whatif_currency='USD';}
		  $current_json = file_get_contents('http://api.coindesk.com/v1/bpi/currentprice.json');
		  $current_data = json_decode($current_json, true); 
		  $current_price = '';
		  
		  $currency_select = sanitize_text_field( $_POST['currency_select'] ); /*sanitizing select option value*/
		  if($currency_select=='USD') {
		      $current_price = $current_data["bpi"]["USD"]["rate_float"];
		      $text='$';
		  }
		  if($currency_select=='GBP') {  
		      $current_price = $current_data["bpi"]["GBP"]["rate_float"];
		      $text='£';
		  }
		  if($currency_select=='EUR') {  
		      $current_price = $current_data["bpi"]["EUR"]["rate_float"];
		      $text='€';    
		  }
		  $select_date_json = file_get_contents('http://api.coindesk.com/v1/bpi/historical/close.json?currency='.$whatif_currency.'&start='.$date.'&end='.$date);
		  $select_date_data = json_decode($select_date_json, true);
		  $select_data_result = '';
		  foreach($select_date_data["bpi"] as $key=>$value) {
		      $select_data_result = $value;
		  }
		  $profit = $whatif_amount/$select_data_result*$current_price-$whatif_amount;
		  $roi = $profit/$whatif_amount*100;
		 
		  echo 'If you invested <b><span class="whatif_form_result_text">'.$text.$whatif_amount.'</span></b> in <i class="fa fa-btc"></i><b>BITCOIN</b> on <b><span class="whatif_form_result_text">'.$date.'</span></b> You would have made <b><span class="whatif_form_result_text">'.number_format(round($roi,1),2).'%</span></b> ROI, that\'s <b><span class="whatif_form_result_text">'.numberToCurrency($text,number_format(round($profit,1),2)).'</span></b> in profit.';
	}
?>