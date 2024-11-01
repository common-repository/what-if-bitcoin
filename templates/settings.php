<?php
wp_enqueue_media();
$msg ="";
	if(isset($_POST["save_whatif_setting"]) && 
		  (isset( $_POST['whatif_nonce'] ) || wp_verify_nonce( $_POST['whatif_nonce'], 'whatif_nonce_action' ) ))
	{
	/* Save All Settings */
		$whatif_currency= sanitize_text_field( $_POST['whatif_currency'] ); /*sanitizing select option value*/
		if($whatif_currency!='') {
			delete_option( 'whatif_currency' );		
			add_option( 'whatif_currency', $whatif_currency);
		}
		$whatif_text_color= sanitize_hex_color( $_POST['whatif_text_color'] ); /*sanitize color*/
		if($whatif_text_color!='') {
			delete_option( 'whatif_text_color' );		
			add_option( 'whatif_text_color', $whatif_text_color);
		}
		$whatif_input_text_color= sanitize_hex_color( $_POST['whatif_input_text_color'] ); /*sanitize color*/
		if($whatif_input_text_color!='') {
			delete_option( 'whatif_input_text_color' );		
			add_option( 'whatif_input_text_color', $whatif_input_text_color);
		}
		$whatif_input_border_color= sanitize_hex_color( $_POST['whatif_input_border_color'] ); /*sanitize color*/
		if($whatif_input_border_color!='') {
			delete_option( 'whatif_input_border_color' );		
			add_option( 'whatif_input_border_color', $whatif_input_border_color);
		}
		$whatif_button_bg_color= sanitize_hex_color( $_POST['whatif_button_bg_color'] ); /*sanitize color*/
		if($whatif_button_bg_color!='') {
			delete_option( 'whatif_button_bg_color' );		
			add_option( 'whatif_button_bg_color', $whatif_button_bg_color);
		}
		$whatif_button_text_color= sanitize_hex_color( $_POST['whatif_button_text_color'] ); /*sanitize color*/
		if($whatif_button_text_color!='') {
			delete_option( 'whatif_button_text_color' );		
			add_option( 'whatif_button_text_color', $whatif_button_text_color);
		}					
		$whatif_input_bg_color= sanitize_hex_color( $_POST['whatif_input_bg_color'] ); /*sanitize color*/
		if($whatif_input_bg_color!='') {
			delete_option( 'whatif_input_bg_color' );		
			add_option( 'whatif_input_bg_color', $whatif_input_bg_color);
		}		
		$whatif_bg_color= sanitize_hex_color( $_POST['whatif_bg_color'] ); /*sanitize color*/
		if($whatif_bg_color!='') {
			delete_option( 'whatif_bg_color' );		
			add_option( 'whatif_bg_color', $whatif_bg_color);
		}			
		$whatif_made_love= sanitize_text_field( $_POST['whatif_made_love'] ); /*sanitizing select option value*/
		if($whatif_made_love!='') {
			delete_option( 'whatif_made_love' );		
			add_option( 'whatif_made_love', $whatif_made_love);
		}									
		$whatif_border_radius= sanitize_text_field( $_POST['whatif_border_radius'] ); /*sanitizing select option value*/
		if($whatif_border_radius!='') {
			delete_option( 'whatif_border_radius' );		
			add_option( 'whatif_border_radius', $whatif_border_radius);
		}									
		$whatif_input_border_radius= sanitize_text_field( $_POST['whatif_input_border_radius'] ); /*sanitizing select option value*/
		if($whatif_input_border_radius!='') {
			delete_option( 'whatif_input_border_radius' );		
			add_option( 'whatif_input_border_radius', $whatif_input_border_radius);
		}							
		$whatif_result_border_color= sanitize_hex_color( $_POST['whatif_result_border_color']); /*sanitize color*/
		if($whatif_result_border_color!='') {
			delete_option( 'whatif_result_border_color' );		
			add_option( 'whatif_result_border_color', $whatif_result_border_color);
		}
		$whatif_result_text_color= sanitize_hex_color( $_POST['whatif_result_text_color']); /*sanitize color*/
		if($whatif_result_border_color!='') {
			delete_option( 'whatif_result_text_color' );		
			add_option( 'whatif_result_text_color', $whatif_result_text_color);
		}	
		$whatif_tech= sanitize_text_field( $_POST['whatif_tech'] ); /*sanitizing select option value*/
		if($whatif_tech!='') {
			delete_option( 'whatif_tech' );		
			add_option( 'whatif_tech', $whatif_tech);
		}												
		$msg = '<div id="message" class="updated notice is-dismissible"><p><strong>Settings saved Successfully.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
	}	
		//Fetch all settings

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

?>
<!--Setting Form Start-->
<div class="wrap">
	<h1 class="wp-heading-inline"><img src="<?php echo plugin_dir_url( dirname(__FILE__ ) ). 'assets/images/logo.png' ?> " width="50px" /> What If Bitcoin Settings</h1>
	<hr/>
	<?php echo $msg; ?>

	<div class="whatif_admin">
		<div class="whatif_admin_row">
			<form method="post" enctype="multipart/form-data">
				<?php wp_nonce_field( 'whatif_nonce_action', 'whatif_nonce' ); ?>
					<table class="form-table">
						<tbody>             
					       <!-- <tr class="form-field form-required">
					            <th scope="row"><label for="user_login">Currency <span class="description">(required)</span></label></th>
					            <td><select name="whatif_currency" id="whatif_currency">
					            		<option value="USD" <?php if($whatif_currency=="USD") { ?>  selected="selected" <?php }?>>USD</option>
					                    <option value="GBP" <?php if($whatif_currency=="GBP") { ?>  selected="selected" <?php }?>>GBP</option>
					                    <option value="EUR" <?php if($whatif_currency=="EUR") { ?>  selected="selected" <?php }?>>EUR</option>
					                </select>
					            </td>
					        </tr> -->
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_bg_color">Background color</label></th>
					            <td><input type="text" name="whatif_bg_color" id="whatif_bg_color" class="my-color-field" value="<?php echo $whatif_bg_color; ?>" />
					            </td>
					        </tr>   
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_border_radius">Border Radius</label></th>
					            <td><select name="whatif_border_radius" id="whatif_border_radius">
					            	<?php
										for($i=0;$i<=30;$i++) {
											$selected = '';
											if($i==$whatif_border_radius) {
												$selected =' selected="selected" ';	
											}
											echo '<option value="'.$i.'" '.$selected.'>'.$i.'px</option>';	
										}
									?>
					            	</select>
					            </td>
					        </tr>                 
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_text_color">Text Color</label></th>
					            <td><input type="text" name="whatif_text_color" id="whatif_text_color" class="my-color-field" value="<?php echo $whatif_text_color; ?>" />
					            </td>
					        </tr> 
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_input_text_color">Input Color</label></th>
					            <td><input type="text" name="whatif_input_text_color" id="whatif_input_text_color" class="my-color-field" value="<?php echo $whatif_input_text_color; ?>" />
					            </td>
					        </tr>   
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_input_bg_color">Input Background Color</label></th>
					            <td><input type="text" name="whatif_input_bg_color" id="whatif_input_bg_color" class="my-color-field" value="<?php echo $whatif_input_bg_color; ?>" />
					            </td>
					        </tr>            
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_input_border_color">Input Border Color</label></th>
					            <td><input type="text" name="whatif_input_border_color" id="whatif_input_border_color" class="my-color-field" value="<?php echo $whatif_input_border_color; ?>" />
					            </td>
					        </tr>       
							<tr class="form-field form-required">
					            <th scope="row"><label for="whatif_input_border_radius">Input Border Radius</label></th>
					            <td><select name="whatif_input_border_radius" id="whatif_input_border_radius">
					            	<?php
										for($i=0;$i<=30;$i++) {
											$selected = '';
											if($i==$whatif_input_border_radius) {
												$selected =' selected="selected" ';	
											}
											echo '<option value="'.$i.'" '.$selected.'>'.$i.'px</option>';	
										}
									?>
					            	</select>
					            </td>
					        </tr>                             
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_button_bg_color">Button Background Color</label></th>
					            <td><input type="text" name="whatif_button_bg_color" id="whatif_button_bg_color" class="my-color-field" value="<?php echo $whatif_button_bg_color; ?>" />
					            </td>
					        </tr>   
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_button_text_color">Button Text Color</label></th>
					            <td><input type="text" name="whatif_button_text_color" id="whatif_button_text_color" class="my-color-field" value="<?php echo $whatif_button_text_color; ?>" />
					            </td>
					        </tr>  
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_result_border_color">Result Border Color</label></th>
					            <td><input type="text" name="whatif_result_border_color" id="whatif_result_border_color" class="my-color-field" value="<?php echo $whatif_result_border_color; ?>" />
					            </td>
					        </tr> 
					        <!--result text color--> 
					        <tr class="form-field form-required">
					            <th scope="row"><label for="whatif_result_text_color">Result Text Color</label></th>
					            <td><input type="text" name="whatif_result_text_color" id="whatif_result_text_color" class="my-color-field" value="<?php echo $whatif_result_text_color; ?>" />
					            </td>
					        </tr>               
							<tr class="form-field">
					            <th scope="row"><label for="user_login">Visible API Credits?</label></th>
					            <td><select name="whatif_made_love" id="whatif_made_love">
					            		<option value="No" <?php if($whatif_made_love=="No") { ?>  selected="selected" <?php }?>>No</option>
					            		<option value="Yes" <?php if($whatif_made_love=="Yes") { ?>  selected="selected" <?php }?>>Yes</option>
					                </select>
					            </td>
					        </tr> 
					        <tr class="form-field">
					            <th scope="row"><label for="techuptodate">Powered by TechuptoDate</label></th>
					            <td><select name="whatif_tech" id="whatif_tech">
					                    <option value="No" <?php if($whatif_tech=="No") { ?>  selected="selected" <?php }?>>No,I don't want to Display</option>
					                    <option value="Yes" <?php if($whatif_tech=="Yes") { ?>  selected="selected" <?php }?>>Yes,I want to Display</option>
					                </select>
					            </td>
					        </tr> 
					                                     
					    </tbody>   
					</table>
	    		<button type="submit" class="button button-primary" name="save_whatif_setting">Save Setting</button>
			</form>
		</div>
	<div class="whatif_admin_row whatif_admin_row_last">
		<div class="whatif_how_to_use">
			<b>How to use?</b><br/>Just copy paste this shortcode <b><span class="whatif_short">[what-if-bitcoin]</span></b> to any page or in the widget.
		</div>
   		<h2>Live Preview</h2>
   		<hr/>
		<?php
			$form = whatif_form();
			$form_result = whatif_result();
			echo $form.$form_result;	
		?>
	</div>
  </div> 	
</div>