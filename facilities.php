<?php include "includes/pageHead.php" ?>
<?php include "includes/pageNav.php" ?>



<?php include 'php/equipmentList.php';?>


<div class="col-6">

<h1>Facilities</h1>

<p>

With so much to see and do at Murr Activity Center it can be hard to keep track of whats available at times. 
To help keep pace, we have listed all of our facilities here as well as details about them so that you never miss a beat
and hopefully get inspired to try something new!
  <img class="imgCentered" src="images/activityCenter.jpg"/>
</br>
</br>
<h3>Building Facilities</h3>
Inside our main building we have the usual facilities that someone would expect. We have a dedicated reception and equipment hire area
that is manned by our helpful and friend staff who are always look to answer questions!</br> We also have toilet facilities that have a changing and shower area
to ensure all guests can get clean before heading off. </br></br>

Not to mention we also have an on site cafe and tuck shop that is open all day and offers both a selection of hot and cold foods and drinks to be purchased for consumption
sitting in or take away with you on your adventures. We stock this daily with all food being freshly made on premises using fresh ingredients. 
  <img class="imgCentered" src="images/cafe.jpg"/>
</br>
</br>
<h3>Sports Facilities</h3>
What activity center would be complete without a huge range of sporting facilities that boast full sized courts and rooms.</br></br>

Currently we have a full sized football/rugby pitch, half sized basketball court as well as a large hall that can be used for badminton. These give us great joy as they are used by both visitors 
to the center as well as locals who are looking to let off some steam and get there blood pumping! We are also proud to state that our football pitch is used by the local football club as there
training ground. 
  <img class="imgCentered" src="images/football.jpg"/>
</br></br>
As well as active sports we also have facilities for sports such as Archery. We have a full sized multiple target outdoors archery range that also allows us to have numerous archery classes. 
Our archery range is approved by the Scottish Governing Body for Archery and is kept to meet there strict conditions as it hosts numerous archery competitions year round. 
</br></br>
  <img class="imgCentered" src="images/archery.jpg"/>

</p>

</div>

<div class="col-1">

  <hr class="verticalRule">
  
</div>

<div class="col-3">
 <h1>Equipment Hire</h1>
 <p>
	Equipment can be hired from Murr Activity Center for those who
	do not already have it. The equipment is priced and lent for a full
	day of length for hire. </br>
	</br>
		</br>
	A deposit of £10 must also be placed along with payment upfront and
	will be returned on safe and whole return of the lent equipment. 	</br>This
	is an unavoidable necessity to ensure that our valuable equipment is
	returned safe and sound for others to use after you.
	


</p>
 	</br>
		</br>
  <img class="imgCentered" src="images/equipment.jpg"/>
  
</div>

<div class="col-2">
</br>
</br>
</br>
</br>
<h2>Equipment Costs</h2>
<hr>
<p>
</p>


  <?php
  if($results == null)
{	
	echo "<br />";
	echo "<h3>There are currently no equipment to hire </h3>";
}
else{

		foreach ($results as $row) {
		echo "<b>" . $row['Name'] . " - " . "£" . $row['cost'] ."</b></br>" ;
	}
	
}
  ?>


</div>


<?php include "includes/pageFooter.php" ?>