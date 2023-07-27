
<?php
   session_start();
   ?>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
  html {
    height: 100%;
}
.navbar {
  background-color: transparent;
  border-color: transparent;
}

.navbar-default .navbar-nav>li>a {
    color: #fff;
}

body {
  background: #000 url("beach.jpeg") no-repeat center center;
  background-size: cover;
  height: calc(100vh);
}



.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #1e1e1e;
  color: #fff;
  text-align: center;
}

.row:after {
  content: "";
  display: table;
  clear: both;
  margin-right: 0px;
    margin-left: 0px;
}

.row {
   display: table;
  width: 100%;
}
.column {
  display: table-cell;
  padding: 16px;
  width: 50%;
  vertical-align: top;
}
  </style>
</head>
<body>
<nav class="navbar navbar-default banner" style="margin-bottom: 0">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
	 <a href="index.php"> <img class="navbar-brand" src="logo3.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-left navbar-nav-primary">
        <li class=""><a href="plan.php"><span class="glyphicon glyphicon-cutlery"></span> Plan</a></li>
      <li class=""><a href="body.php"><span class="glyphicon glyphicon-tasks"></span> My Body</a></li>
      <li class=""><a href="friends.php"><span class="glyphicon glyphicon-user"></span> Friends</a></li>
      <li class=""><a href="messages.php"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container" style="margin-top: 80px; width: 30%; background-color:#fff; padding-top: 20px; text-align:center">


  <div class="column" >
    <img src="logo2.png" style="max-width:80%; padding-top: 15px; padding-bottom: 15px;">
	
	<?php
   require_once("config.php");
   $error="";
   if(isset($_POST['submit'])) {
      // username, email, and password sent from form 
      
	  $myusername = $_POST['username'];
      $myemail = $_POST['email'];
      $mypassword = $_POST['pass1'];
	  $mypasswordconfirm = $_POST['pass2'];
	  
	  $sql = "SELECT accountID FROM account WHERE username = '$myusername'";
	  $result = mysqli_query($db, $sql);
      
      $count = mysqli_num_rows($result);
		if($count > 0){
			$error = "Username is taken.";
		} else if($mypassword != $mypasswordconfirm){
			$error = "Passwords do not match, try again.";
		} else {
			$sql = "INSERT INTO account (email, pass, username) VALUES ('$myemail', '$mypassword', '$myusername')";
			if(mysqli_query($db, $sql)){
				//echo "New record has been added successfully";
				header("Location: http://localhost/login.php");
				exit();
			} else {
				//echo "Error: " . $sql . ":-" . mysqli_error($db);
				$error = "Database error, unable to create account.";
			}
		}
		mysqli_close($db);
   }
?>
	
	<h2>Sign Up Today!</h2>
	<!-- <form style="color:#000;"> -->
   <form form action = "" method = "post" autocomplete="on">
      

      <!-- Email input -->
	  <div class="form-outline mb-4">
        <input type="text" id="loginUser" class="form-control" name="username"/>
        <label class="form-label" for="loginUser">Username</label>
      </div>
      <div class="form-outline mb-4">
        <input type="email" id="loginEmail" class="form-control" name="email"/>
        <label class="form-label" for="loginEmail">Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword1" class="form-control" name="pass1"/>
        <label class="form-label" for="loginPassword1">Password</label>
      </div>
	  <div class="form-outline mb-4">
        <input type="password" id="loginPassword2" class="form-control" name="pass2"/>
        <label class="form-label" for="loginPassword2">Confirm Password</label>
      </div>

      <!-- 2 column grid layout -->
      
        

        
     

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec" name="submit" value="Submit">Confirm</button>

      
    </form>
	
	<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	
  </div>
  
  
 

</div>
<div class="footer">
  <p style="
    margin-bottom: 10px;
    margin-top: 10px;
">© 2021 Group 5 AI Dieticians</p>
</div>
      


</body>
</html>
