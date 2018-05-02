$(document).ready(function(){

 // Delete 
 $('.button').click(function(){
	 
	 
$.ajax({

type: "POST",

url: "php/_admin/_CoursesDelete.php",

data: {first: this.id },
 success:function(data) {
      location.reload();
    }

});


 });


$('#myForm').submit(function(event){
  event.preventDefault();
  
}).validate({
 rules: {
      name: {
        required: true
      },
      description: {
        required: true
      },
      cost: {
        required: true,
		number: true
      }
    },
    messages: {
      name: "Please enter the name of the course",
      description: "Please enter a description",
      cost: "Please enter a valid cost"
    },
    submitHandler: function(form) {
		
		$.ajax({
        type:"POST",
        url:$('#myForm').attr("action"),
        data:$('#myForm').serialize(),
        success: function(e){
            	$( ".container" ).empty();	
				$( ".container" ).append( "Your course has been added" ); 
        },
		error: function(e) { 
             	$( ".container" ).empty();	
				$( ".container" ).append( "Error: " . $e );
        } 
    });
    }
});



 
 
 
 
 
});




