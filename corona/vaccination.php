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
  <a href="#" class="active"><h2>Availability of vaccinations cities</h2></a>
  <a href="https://www.who.int/news-room/q-a-detail/vaccines-and-immunization-what-is-vaccination?adgroupsurvey={adgroupsurvey}&gclid=Cj0KCQjwyZmEBhCpARIsALIzmnKTXhxtg4nrhIID8hpzdCcZv0xqVw7xgTVwusk6cHqPqVRtrt6M8osaAibTEALw_wcB"><h2>WHO vaccinations</h2></a>
  <a href="https://www.pmc.gov.in/en/covid-vaccination-center-list"><h2>Pune </h2></a>
  <a href="https://mumbaimirror.indiatimes.com/coronavirus/news/list-of-covid-19-vaccination-centres-in-thane/articleshow/81286360.cms"><h2>Thane</h2></a>
  <a href="https://www.justdial.com/Nashik/Hospital-Beds-On-Hire/nct-10253223"><h2>Nashik </h2></a>
  <a href="https://www.medifee.com/hospitals-in-solapur"><h2>Solapur </h2></a>
  <a href="https://www.medifee.com/hospitals-in-aurangabad"><h2>Aurangabad   </h2></a>
  <a href="https://ahmednagar.nic.in/public-utility-category/hospitals/page/3/"><h2>Ahmednagar </h2></a>

</div>









</style>
<section id="services" class="clear">
<h1 style="font-size:25px;">LIST OF VACCINATION CENTRES IN MAHARASHTRA:<br><br></h1>
<?php
 while ($row = mysqli_fetch_array($dbc))
    {
        // Assign each array element to a variable
?>
      <!-- article 1 -->
      <article class="one_third">																																																																																																																																																		
        <h2 style="font-size:15px;"><b><?php echo $row['hospitalName'];?></b></h2>
		
		<p>Vaccination :<?php  if($row['vaccination'] == 1){ echo 'Yes';} else {echo 'No';}?></p>
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