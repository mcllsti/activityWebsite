var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function getDay(day) {
				switch(day) {
				case 0:
				day = "Sunday";
				break;
				case 1:
				day = "Monday";
				break;
				case 2:
				day = "Tuesday";
				break;
				case 3:
				day = "Wednesday";
				break;
				case 4:
				day = "Thursday";
				break;
				case 5:
				day = "Friday";
				break;
				default:
				day = "Saturday";
}
return day;
}

 $(function(){
	 
	 
        $.getJSON("http://api.openweathermap.org/data/2.5/forecast?lat=56.14&lon=-4.63&appid=65b043c47cd8c989e65f34f25ec2c3ac&units=metric",function(response){

            var weatherdata = response;
            var weatherfiveday = weatherdata.list;


            $(weatherfiveday).each(function(key,hourly){

                var datetime = hourly.dt_txt;
                var temperature = (Math.round(hourly.main.temp)) + "℃";
                var description = hourly.weather[0].description;
				var clouds = hourly.clouds.all + "%";
				var wind = Math.round(hourly.wind.speed * 3600 / 1610.3*1000)/1000;
				var winddirection = Math.round(hourly.wind.deg) + "°";
				

				
				var sec = hourly.dt;
				var date = new Date(sec * 1000);
				var day = date.getDay();
				day = getDay(day);
				
				
				
				var timestr = date.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});;
				var iconstring = 'http://openweathermap.org/img/w/' + hourly.weather[0].icon +'.png';
				
				if(timestr == "12:00 PM")
				{

										
				
                $("<h2 class='center'>").text(day).appendTo('#box');
				$('<img class = "imgCentered"/>').attr('src', iconstring).appendTo($('#box')); 
                $("<p>").text('Temputures of '+temperature+" with weather as "+description + " at "  + timestr ).appendTo('#box');
				$("<p>").text('Cloudiness: ' + clouds).appendTo('#box');
				$("<p>").text('Windspeed: ' + wind + 'mph').appendTo('#box');
				$("<p>").text('wind direction: ' + winddirection).appendTo('#box');
				$('<hr>').appendTo($('#box')); 
				}

				
				



            })

        });

    })