$(document).ready(function(){  
 
  // Handle form submit and validation
  $( "#register_form" ).submit(function(event) {    
	var error_message = '';
	if(!$("#val1").val()) {
		error_message+="<font color='#990000'>- The Email Address  field is required</font>";
	}
	if(!$("#val2").val()) {
		error_message+="<br><font color='#990000'>- The Password  field is required</font>";
	}

  if(!$("#val3").val()) {
    error_message+="<br><font color='#990000'>- The Firstname  field is required</font>";
  }
  if(!$("#val4").val()) {
    error_message+="<br><font color='#990000'>- The Last Name field is required</font>";
  }

	if(!$("#val5").val()) {
		error_message+="<br><font color='#990000'>- The Mobile Number field is required atleast 11 digit</font>";
	}

	// Display error if any else submit form
	if(error_message) {
		$('.alert-warning').removeClass('hide').html(error_message);
		return false;
	} else {
		return true;	
	}    
  });  
});