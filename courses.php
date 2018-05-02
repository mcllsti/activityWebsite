<?php include "includes/pageHead.php" ?>
<?php include "includes/pageNav.php" ?>



<?php include 'php/coursesList.php';?>

<div class="col-3">

<h1>Courses</h1>

<p>

At Murr Activity Center we offer a range of courses that suite individuals of all ages
and skill levels. All courses have been priced to keep them affordable so no one will
miss out on the fantastic activity's on offer.</br></br> Since out courses are constantly
changing we keep this list updated weekly and only take bookings for that week.
Each course takes place every day of that week.</br> </br> </br> </br>

All the course prices include the time spent with an instructor, as well as the
cost for the hire of the equipment for the duration of the course.

</p>

</div>

<div class="col-1">

  <hr class="verticalRule">
  
</div>

<div class="col-6">
 
  <?php
  
  if($results == null)
{	
	echo "<br />";
	echo "<h3>There are currently no courses running </h3>";
}
else{

		foreach ($results as $row) {
		echo "<br />";
		echo "<h3>" . $row['Name'] ."</h3>" ;
		echo $row['Description'] . "<br />";
		echo "£" . $row['cost'] . "<br />";
		echo "</br>";
		echo "</br>";
	}
	
}

  ?>
  
</div>

<div class="col-2">

<h2>Booking</h2>

<p>
If any of these courses interest you then do not hesitate to book. 
To book then please use our contact form on our contact page leaving 
details of:</br> </br>
Name</br>
Course you wish to book</br>
Number in party</br></br>

Alternately you can call us to book over the phone
</br>
</br>
</br>

  <img class="imgCentered" src="images/climbingVertical.jpg"/>
  
</p>

</div>

<?php include "includes/pageFooter.php" ?>