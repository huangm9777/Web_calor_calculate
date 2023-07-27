<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.navbar {
  background-color: transparent;
  border-color: transparent;
}

.navbar-default .navbar-nav>li>a {
    color: #fff;
}

body {
  background: #000 url("https://images.pexels.com/photos/2803160/pexels-photo-2803160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260") no-repeat center center;
  background-size: cover;
  color: #fff;
  height: calc(100vh);
}

.jumbotron {
	background-color: transparent;
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
  </style>
</head>
<body>
<nav class="navbar navbar-default banner" style="margin-bottom: 0, position: relative">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
	 <a href="index.php"> <img class="navbar-brand" src="logo2.png"></a>
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
	   
    echo '<li><a href="register.html" id="signup"><span ></span>Hi, ' . $_SESSION['username'] . '</a></li><li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li></ul>';
   } else {
      echo '<li><a href="register.php" id="signup"><span ></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>';
   };
   ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <div class="container" style="font-size: 20px;">
    <h1>Ready to take control of your health?</h1>
    <p>Achieve your goals with a personalized diet strategy. This tool will run your fitness habbits, body dimensions, and goals through our powerful AI dietician that will deliver 
		weekly diet plans just for you.</p>
	<a href="body.php">
		<button type="button" class="btn btn-primary btn-lg" style="background-color: #19c1ec">Start now!</button>
	</a>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    

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
