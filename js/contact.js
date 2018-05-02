

$('#myForm').submit(function(event){
  event.preventDefault();
  
}).validate({
 rules: {
      first: {
        required: true
      },
      last: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
	  message: {required: true}
    },
    messages: {
      first: "Please enter your first name",
      last: "Please enter your last name",
      email: "Please enter a valid email address",
	  message: "Please enter a valid message"
    },
    submitHandler: function(form) {
		
		$.ajax({
        type:"POST",
        url:$('#myForm').attr("action"),
        data:$('#myForm').serialize(),
        success: function(e){
            	$( ".container" ).empty();	
				$( ".container" ).append( "<h3>Your Enquiry has been submitted</h3>" ); 
        },
		error: function(e) { 
             	$( ".container" ).empty();	
				$( ".container" ).append( "<h3>Error: " . $e );
        } 
    });
    }
});


