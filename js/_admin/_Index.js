$(document).ready(function(){

 // Delete 
 $('.button').click(function(){
	 
	 
$.ajax({

type: "POST",

url: "php/_admin/_EnquireDelete.php",

data: {first: this.id },
 success:function(data) {
      location.reload();
    }

});


 });

 
 
 
 
});




