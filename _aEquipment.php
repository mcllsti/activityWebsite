<?php include "includes/_apageHead.php" ?>
<?php include "includes/_apageNav.php" ?>



<?php include 'php/_admin/_EquipmentListed.php';?>

<div class="col-2">

<h1>Info</h1>

<p>

Use this page to manage courses currently running at the center</br></br>

You can add a course by entering a name, description or cost in pounds then creating it. You can also delete a current
Course by clicking the delete button below it in the list of current courses.</br></br>


</p>

</div>


<div class="col-4">
 
 <h1>Add a piece of Equipment for hire</h1>

<section class="container">
  	<br>
	<br>
	<br>
<form action="php/_admin/_EquipmentCreate.php" method="post" name="myForm" id="myForm">
    <label for="name" class="textLabel">Enter the equipment</label>
    <input type="text" name="name" id="name" />
	<br>	
	<br>
	<br>
	<br>
	<label for="cost" class="textLabel">Enter the cost of the equipment:</label>
    <input type="text" name="cost" id="cost" />
	<br>	
	<br>
	<br>
	<br>
<input type="submit" name="smt" value="Create" id="smt" />
  </form>
  <div id="error"></div>
</section>
  
  
</div>

<div class="col-3">
<h1>Current Hireable Equipment</h1>
  <?php
  if($results == null)
{	
	echo "<br />";
	echo "<h3>There are currently no equipment to hire </h3>";
}
else{

		foreach ($results as $row) {
		echo "<b>" . $row['Name'] . " - " . "£" . $row['cost'] ."</br>" ;
		echo '<input type="button" class="button" name="Delete" value="Delete" id="' . $row['id'] . '" />';
		echo "</br></br></br>";
	}
	
}
  ?>


</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/_admin/_Equipment.js"></script>

<?php include "includes/_apageFooter.php" ?>