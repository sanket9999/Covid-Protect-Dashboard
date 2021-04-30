<?php 
	include 'connection.php';
	include 'header.php';

if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] != ''){
if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully<br>';
         
		 
	
		 
	$dbc = mysqli_query($db,"SELECT *
                                 FROM `hospital_details`
                                 WHERE `status`=1") or die( mysqli_error($db));


?>
<style>
.one_third {
    width: 30%;
	height:100px;
	border:1px solid gray;
	margin:10px;
	padding:5px;
  border-radius: 10px;
}



<style>
  /*css reset*/
    body{
        margin: 0px;
        padding: 0px;
        background: url(img/23.jpg);
        height: 1000px;
    }
.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: rgb(61, 63, 70);
  margin: 10px;
  color: black;
  display: block;
  padding: 25px;
  width: 900px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #141414;
}

.vertical-menu a.active {
  background-color: #141414;
  color: white;
}
.rightnav{
    width: 20%;
    height: 10%;
    text-align: right;
}
</style>
</head>
<body>



<div class="vertical-menu">
  <a href="#" class="active"><h2>Availability of MEDICAL STORE cities</h2></a>
  <a href="https://www.netmeds.com/"><h2>Online Medical</h2></a>
  <a href="https://www.justdial.com/Pune/Chemists/nct-10096237"><h2>Pune </h2></a>
  <a href="https://www.justdial.com/Mumbai/Chemists-in-Thane-West/nct-10096237"><h2>Thane</h2></a>
  <a href="https://www.justdial.com/Nashik/Chemists/nct-10096237"><h2>Nashik </h2></a>
  <a href="https://www.justdial.com/Solapur/Chemists/nct-10096237"><h2>Solapur </h2></a>
  <a href="https://www.justdial.com/Aurangabad-Maharashtra/Chemists/nct-10096237"><h2>Aurangabad   </h2></a>
  <a href="https://www.justdial.com/Ahmednagar/Chemists/nct-10096237"><h2>Ahmednagar </h2></a>

</div>









</style>
<section id="services" class="clear">
<h1 style="font-size:25px;">LIST OF MEDICAL STORE CENTRES IN MAHARASHTRA:<br><br></h1>
<?php
 while ($row = mysqli_fetch_array($dbc))
    {
        // Assign each array element to a variable
?>
      <!-- article 1 -->
      <article class="one_third">																																																																																																																																																		
        <h2 style="font-size:15px;"><b><?php echo $row['hospitalName'];?></b></h2>
		
		<p>MEDICAL STORE :<?php  if($row['vaccination'] == 1){ echo 'Yes';} else {echo 'No';}?></p>
		<br></article>
	<?php
	}
	?>
</section>

<?php 
}

else{
?>	
	<section id="services" class="clear">
	<h1 style="font-size:25px;">Please login first, You can see the details after login !<br><br></h1>
	</section>
<?php
}
	include 'footer.php';

?>