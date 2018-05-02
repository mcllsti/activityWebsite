<?php include "includes/pageHead.php" ?>
<?php include "includes/pageNav.php" ?>

<div class="col-3">
<h1>Contact the activity center</h1>
<p>
Use the form to on this page to submit a query to the activity center. </br></br>

We aim to get back to all enquirers as quickly as possible but during peak season this may take
take longer than expected. </br></br>

If you have an urgent enquiries then please contract us on:</br></br>
 <a href="tel:+441337524329">0133 752 4329</a></br> or </br>  <a href="tel:+441337524331">0133 752 4331</a>
</br>
</br>
</br>
For any mail enquiries please write to: </br> </br>
Murr Activity Center</br>
Rowardennan</br>
Dryman</br>
G63 0AR</br>


</P>


</div>

<div class="col-9">
  
<section class="container">
  <p> <b>Enter your name and contact details and we'll get in touch with you as soon as possible.</b> </p>
  	<br>
	<br>
	<br>
<form action="php/contactSubmit.php" method="post" name="myForm" id="myForm">
    <label for="first" class="textLabel">Enter your first name:</label>
    <input type="text" name="first" id="first" />
	<br>	
		<br>
	<br>
	<label for="last" class="textLabel">Enter your last name:</label>
    <input type="text" name="last" id="last" />
	<br>	
		<br>
	<br>
	<label for="email" class="textLabel">Enter your email:</label>
    <input type="text" name="email" id="email" />
	<br>	
	<br>
	<br>
	<label for="message" class="textLabel">Enter your message:</label>
    <textarea name="message" id="message">Enter your question here and we will get back to you as soon as possible </textarea>
	<br>	
	<br>
	<br>
<input type="submit" name="smt" value="Submit" id="smt" />
  </form>
  <div id="error"></div>
</section>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/contact.js"></script>



<?php include "includes/pageFooter.php" ?>