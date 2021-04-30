<?php 

include 'header.php';

//print_r($_REQUEST);
if($_REQUEST){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "emailaddress@here.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "<p>Thank You for contacting with us will get back to you shortly!</p><br><br>";
}
?>
<style>
input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
<section id="shout">
<h1>Contact Us:</h1>
	  
	  <form action="" method="POST">
			<p>Name</p> <input type="text" name="name" required>
			<p>Email</p> <input type="email" name="email" required>
			<p>Phone</p> <input type="text" name="phone">

			<!--<p>Request Phone Call:</p>
			Yes:<input type="checkbox" value="Yes" name="call"><br />
			No:<input type="checkbox" value="No" name="call"><br />

			<p>Website</p> <input type="text" name="website">

			<p>Priority</p>
			<select name="priority" size="1">
			<option value="Low">Low</option>
			<option value="Normal">Normal</option>
			<option value="High">High</option>
			<option value="Emergency">Emergency</option>
			</select>
			<br />

			<p>Type</p>
			<select name="type" size="1">
			<option value="update">Website Update</option>
			<option value="change">Information Change</option>
			<option value="addition">Information Addition</option>
			<option value="new">New Products</option>
			</select>-->
			<br />

			<p>Message</p><textarea style="    width: 955px;
    height: 155px;" name="message" rows="6" cols="25" required></textarea><br />
			<button class="cancelbtn">Submit</button>
		</form>



</section>


<?php 
	include 'footer.php';

?>