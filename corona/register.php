<?php 

include 'header.php';


// initializing variables
$username = "";
$email    = "";
$errors = array(); 


// REGISTER USER
if (isset($_REQUEST['email'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_REQUEST['name']);
  $email = mysqli_real_escape_string($db, $_REQUEST['email']);
  $password_1 = mysqli_real_escape_string($db, $_REQUEST['psw']);
  $password_2 = mysqli_real_escape_string($db, $_REQUEST['psw-repeat']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE userEmail='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
 
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (userName, userEmailId, userPassword) 
  			  VALUES('$username', '$email', '$password')";
			    	mysqli_query($db, $query);

  	$_SESSION['login_user'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
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
    <h1>Register</h1>
	  
	  <form action="" method="POST">
  <div class="container">
    <p>Please fill in this form to create an account.</p>
	<label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>


    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="article.php">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#" onclick="document.getElementById('id01').style.display='block'">Sign in</a>.</p>
  </div>
</form>



</section>


<?php 
	include 'footer.php';

?>