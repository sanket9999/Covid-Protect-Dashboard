<?php 

include 'connection.php';
@session_start();

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['uemail']);
      $mypassword = MD5(mysqli_real_escape_string($db,$_POST['psw'])); 
      
      $sql = "SELECT * FROM user WHERE userEmailId = '$myemail' and userPassword = '$mypassword'";
      $result = mysqli_query($db,$sql);
     @ $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['userStatus'];
      
      @$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  $_SESSION["login_user"] = $row['userName'];
		  $_SESSION["uId"] = $row['id'];
          header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 header("location: index.php");
      }
   }
?>