
<?php 

include 'header.php';


?>
<p> <font color=blue	
    <!-- Slider -->
    <section id="slider">
	<iframe width="1000" height="560" src="https://www.youtube.com/embed/677pSwGauqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<!--<a href="#"><img src="images/demo/960x360.gif" alt=""></a>-->
	</section>
    <!-- main content -->
    <div id="homepage">
	 <section id="shout">
      <h1>Pune:</h1>
      <p style="font-size:20px;"> 7
	  
	  
  
50 more beds for Covid patients in city hospitals in 3-4 days, says civic admin</p>
    </section>
      <section id="intro" class="last clear">
        <article>
          <figure>
		  <iframe width="1000" height="450" src="https://www.youtube.com/embed/uL40Yw266jg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		  <!--<img src="images/demo/450x250.gif" width="450" height="250" alt="">-->
            <figcaption>
              <h2>Available Hospitals</h2>
			  <?php
			  if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] != ''){
				if(! $conn ) {
					die('Could not connect: ' . mysqli_error());
				 }
				 //echo 'Connected successfully<br>';
				 
		 
	
		 
				$dbc = mysqli_query($db,"SELECT *
                                 FROM `hospital_details`
                                 WHERE `status`=1 AND `featured`=1 limit 0,3") or die( mysqli_error($db));

?><?php
$i=0;
 while ($row = mysqli_fetch_array($dbc))
    {
		$i++;
        // Assign each array element to a variable
?>
      <!-- article 1 -->
      <p>																																																																													
        <h2 style="font-size:15px;"><b><?php echo $i.'. '.$row['hospitalName'];?></b></h2>
		Vaccination :<?php  if($row['vaccination'] == 1){ echo 'Yes';} else {echo 'No';}?></p>
		<br>
	<?php
	}
			  }
			  else{
	?>
              <p>You can see the details after login !</p>
			  <?php
			  }
			  ?>
              <!--<footer class="more"><a href="#">Read More &raquo;</a></footer>-->
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Introduction -->
    </div>
    <!-- / content body -->
      </P>  
<?php 

include 'footer.php';

?>