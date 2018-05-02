<?php include "includes/_apageHead.php" ?>
<?php include "includes/_apageNav.php" ?>


<?php include 'php/_admin/_ContactList.php';?>

<h1>Admin Home</h1>

<div class="col-4">

<p>

Welcome Admin!</br> </br>

Listed here is all received esquires that need responded to.</br></br> 

Not what you are looking for? Use the nav bar to maneuver to the area you are looking for. 


</P>
</div>


<div class="col-5">
<h1>Current Enquiries</h1>
  
  <?php
	
	foreach ($results as $row) {
		echo "<br />";
		echo $row['First'] . " " . $row['Last'] . "<br />";
		echo $row['Email'] . "<br />";
		echo $row['Message'] . "<br />";
		echo '<input type="button" class="button" name="Delete" value="Delete" id="' . $row['id'] . '" />';
		echo "<hr />";
	}


  ?>
  
  
  
  
  
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/_admin/_Index.js"></script>

<?php include "includes/_apageFooter.php" ?>