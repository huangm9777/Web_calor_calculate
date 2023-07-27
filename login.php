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
	<?php
   include("config.php");

   
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	   
    echo '<li><a href="register.html" id="signup"><span ></span>Hi, ' . $_SESSION['username'] . '</a></li><li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li></ul>';
   } else {
      echo '<li><a href="register.php" id="signup"><span ></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>';
   };
   ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container" style="margin-top: 80px; width: 30%; background-color:#fff; padding-top: 20px; text-align:center">


  <div class="column" >
    <img src="logo2.png" style="max-width:80%; padding-top: 15px; padding-bottom: 15px;">
	
	
	<?php
   require_once("config.php");
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT accountID FROM account WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  $value = mysqli_fetch_object($result);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $myusername;
		$_SESSION['myid'] = $value->accountID;
		header("Location: http://localhost/index.php");
		exit();
         
         
      }else {
         $error = "Your Username or Password is invalid";
      }
   }
?>
	
   <form form action = "" method = "post" autocomplete="on">
      

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="loginName" class="form-control" name = "username" />
        <label class="form-label" for="loginName" >Username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" name = "pass"/>
        <label class="form-label" for="loginPassword">Password</label>
      </div>

      <!-- 2 column grid layout -->
      
        

        <div class="text-center">
          <!-- Simple link -->
          <a href="forgot.html">Forgot password?</a>
        </div>
     

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec" value="Submit">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="register.php">Register</a></p>
      </div>
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
