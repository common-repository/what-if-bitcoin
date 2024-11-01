<?php 

	function whatif_form() {

    $style='';
    $whatif_currency = get_option('whatif_currency',true);
    $text='$';
    if($whatif_currency=="GBP") {
        $text='£';
    }
    if($whatif_currency=="EUR") {
        $text='€';
    }       
    /*  Dynamic Style Settings */
  $dynamic_style = '';
    $whatif_bg_color = get_option('whatif_bg_color',true);
    if($whatif_bg_color=="1") { }else { $dynamic_style.='.whatif_form {background-color:'.$whatif_bg_color.' !important; } '; } 
    $whatif_text_color = get_option('whatif_text_color',true);
    if($whatif_text_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_row,.whatif_form .whatif_form_row_btn a,.whatif_form .whatif_form_row_btn .made_love,.whatif_form_result .result_text, .fa{color:'.$whatif_text_color.' !important; } '; }
    $whatif_input_bg_color = get_option('whatif_input_bg_color',true);
    if($whatif_input_bg_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_row input,.whatif_form .whatif_form_row select {background-color:'.$whatif_input_bg_color.' !important; } '; } 
    $whatif_input_text_color = get_option('whatif_input_text_color',true);
    if($whatif_input_text_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_row input,.whatif_form .whatif_form_row select {color:'.$whatif_input_text_color.' !important; } '; }    
    $whatif_input_border_color = get_option('whatif_input_border_color',true);
    if($whatif_input_border_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_row input,.whatif_form .whatif_form_row select {border:1px solid '.$whatif_input_border_color.' !important; } '; }     
    $whatif_button_bg_color = get_option('whatif_button_bg_color',true);
    if($whatif_button_bg_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_row_btn .btn--form {background-color:'.$whatif_button_bg_color.' !important; } '; }       
    $whatif_button_text_color = get_option('whatif_button_text_color',true);
    if($whatif_button_text_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_row_btn .btn--form {color:'.$whatif_button_text_color.' !important; } '; }
    $whatif_input_border_radius = get_option('whatif_input_border_radius',true);
    if($whatif_input_border_radius=="1") { }else { $dynamic_style.='.whatif_form .btn--form,.whatif_form input,.whatif_form select {border-radius:'.$whatif_input_border_radius.'px !important; -webkit-border-radius: '.$whatif_input_border_radius.'px !important; -moz-border-radius: '.$whatif_input_border_radius.'px !important; } '; }   
    $whatif_border_radius = get_option('whatif_border_radius',true);
    if($whatif_border_radius=="1") { }else { $dynamic_style.='.whatif_form ,.whatif_form .whatif_form_result .result_text {border-radius:'.$whatif_border_radius.'px !important; -webkit-border-radius: '.$whatif_border_radius.'px !important; -moz-border-radius: '.$whatif_border_radius.'px !important;} '; }   
    $whatif_result_border_color = get_option('whatif_result_border_color',true);
    if($whatif_result_border_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_result .result_text {border-color:'.$whatif_result_border_color.'!important; } '; }   
  $whatif_result_text_color = get_option('whatif_result_text_color',true);
  if($whatif_result_text_color=="1") { }else { $dynamic_style.='.whatif_form .whatif_form_result .result_text .whatif_form_result_text{color:'.$whatif_result_text_color.' !important; } '; }       
    $whatif_made_love = get_option('whatif_made_love',true);                
    $made_love = '';
    if($whatif_made_love=="Yes") {
        $made_love='<small class="made_love">API using from <a href="https://www.coindesk.com/api" target="_blank">Coindesk</a></small>';
    }else {
        
    }
  $whatif_tech = get_option('whatif_tech',true);        
  $tech_disp = '';
  if($whatif_tech=="Yes") {
    $tech_disp='<small class="tech_disp"><a href="https://techuptodate.com.au/" target="_blank">Powered by TechUptodate</a></small>';
  }else {
    //$tech_disp='<small class="tech_disp" style="display:none;"><a href="https://techuptodate.com.au/" target="_blank">Powered by TechUptodate</a></small>';
  }
  wp_enqueue_style('custom-style', plugin_dir_url(dirname( __FILE__ ) ).'assets/css/custom_style.css' );        
  wp_add_inline_style( 'custom-style', $dynamic_style );
    $month = '<select class="form-control" name="whatif_month" id="whatif_month">
              <option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option><option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option><option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
              </select>';
    $day = '<select class="form-control" name="whatif_day" id="whatif_day">
            <option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
            </select>';
    $year = '<select class="form-control" name="whatif_year" id="whatif_year">';
    for($i=2011;$i<=date("Y");$i++) {
        $year.='<option value="'.$i.'">'.$i.'</option>';
    }
    $year.='</select>
        <input type="hidden" value="'.$text.'" id="whatif_currency_text" name="whatif_currency_text" />
        <input type="hidden" value="'.$whatif_currency.'" id="whatif_currency" name="whatif_currency" />';
    $curreny_select = '<select name="currency_select" id="currency_select" class="form-control">
                        <option value="USD">USD</option><option value="GBP">GBP</option>
                        <option value="EUR">EUR</option>
                     </select>';
    $form = '<div class="whatif_form">
              <div class="whatif_form_row">If invested '.$curreny_select.'  
                <input autofocus="" class="form-control" maxlength="8" name="whatif_amount" id="whatif_amount" placeholder="" tabindex="1" type="text" /> 
              </div>
              <div class="whatif_form_row">in <i class="fa fa-btc"></i><b>Bitcoin</b> on</div>
              <div class="whatif_form_row"> '.$month.$day.$year.'</div>
              <div class="whatif_form_row_btn"><a class="btn--form" href="javascript:fetch_result()">Submit</a><br/>'.$made_love.'
              </div>
              <div class="whatif_form_row_text">'.$tech_disp.'</div>';
    return $form;
}


?>