function fetch_result() { 
	if(jQuery("#whatif_amount").val()=="") { 
		alert("Please enter amount"); 
		return false;
	}
	jQuery(".whatif_form_result .result_text").html("<center><b>Processing...</b></center>");
	jQuery(".whatif_form_result").fadeIn("slow"); 
	jQuery.ajax({
		url: adminajax_url,
		type: "POST",
		data: {  
				whatif_currency: jQuery("#whatif_currency").val(), 
				whatif_currency_text: jQuery("#whatif_currency_text").val(),
				whatif_month:jQuery("#whatif_month").val(),
				whatif_day:jQuery("#whatif_day").val(),
				whatif_year:jQuery("#whatif_year").val(),
				whatif_amount:jQuery("#whatif_amount").val(),
				currency_select:jQuery("#currency_select").val(),
				action:"fetch_whatif_result" 
			},
			success: function( data ) {
				data = data.slice(0, -1); 
				jQuery(".whatif_form_result .result_text").html(data);
			}
		});
}