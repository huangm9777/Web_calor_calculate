<?php
   require_once("config.php");
   $error="";
   if(isset($_POST['submit'])) {
      // username, email, and password sent from form 
      
	  $myusername = $_POST['username'];
      $myemail = $_POST['email'];
      $mypassword = $_POST['pass1'];
	  $mypasswordconfirm = $_POST['pass2'];
      
	  $sql_credcheck = "SELECT userID FROM account WHERE username='$myusername'";
      $result = mysqli_query($db,$sql_credcheck);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If fields match any entries, row count will be greater than 0, which means username has already been taken
		
      if(!$count > 0) {
		 $error = "Account with that username already exists.";
	  }
	  else if($mypassword != $mypasswordconfirm){
		 $error = "Passwords do not match. Try again.";
	  }else {
        $sql_register = "INSERT INTO account (email, pass, username) VALUES ('$myemail', '$mypassword', '$myusername')";
		mysqli_query($db, $sql_register);
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $myusername;
		header("Location: http://localhost/index.php");
		exit();
      }
   }
?>