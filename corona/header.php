<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>COVID Protect</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php 

include 'connection.php';

?>

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.php">COVID Protect</a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="corona_up.php">UPDATES</a></li>
        <li><a href="precaution.php">Precaution</a></li>

        <li><a href="hospital_details.php">Hospitals</a></li>
        <li><a href="vaccination.php">vaccination</a></li>
        <li><a href="medical.php">Medical</a></li>
        <li><a href="faqs.php">FAQs</a></li>
        <li><a href="privacy.php">Privacy  Policy</a></li>

        <li><a href="help.php">HELP</a></li>

        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
		<li><a href="reminder.php">Remind me</a></li>
		<?php
		if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] != ''){
		?>
		 <li class="last"><a href="logout.php">logout</a></li>

		<?php
		}
		else {
		?>
        <li class="last"><a href="#" onclick="document.getElementById('id01').style.display='block'">Login</a></li>
		<?php
		}
		?>
      </ul>
    </nav>
  </header>
</div>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">