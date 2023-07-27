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


<div class="container" style="margin-top: 40px; background-color:#fff; padding-left: 0px; padding-right: 0px;">
<div class="panel panel-default" style="margin-bottom: 0px; border-bottom: 0px;">	
<div class="panel-heading c-list">
                    <span class="title">My Body</span>
					
                </div>
				</div>
<div class="row" style="margin-left: 0px; margin-right: 0px;">
  <div class="column" style="background-color:#fff;" >
	<p>To generate a personalized plan, fill out your information below and click submit. Your plan will be generated and will show on the plan page.
                    

<?php
   require_once("config.php");
   $error="";
   if(isset($_POST['submit'])) {
      // username, email, and password sent from form 
      
	  $myid = $_SESSION['myid'];
	  $myweight = $_POST['weight'];
      $myheight = $_POST['height'];
      $mydailyCalories = $_POST['dailyCalories'];
	  $myactiveHours = $_POST['activeHours'];
	  $myage =  $_POST['age'];
	  $mysex = $_POST['gender'];
	  $mygoalType =  $_POST['goals'];
	  $mydeficiency = $_POST['deficiency'];
	  
	  // Check if logged in user already has body data (not sure how to do this yet)
	 /*
	 UPDATE Customers
SET ContactName = 'Alfred Schmidt', City= 'rankfurt'
WHERE CustomerID = 1;
*/
		/*$sql = "INSERT INTO user (u_AccountID, sex, height, weight, age, activeHours, dailyCalories, goalType, deficiency) VALUES 
		('$myid', '$mysex', '$myheight', '$myweight', '$myage', '$myactiveHours', '$mydailyCalories', '$mygoalType', '$mydeficiency')";*/
		
		
		$sql = "UPDATE user 
		SET sex = '$mysex',  height = $myheight,  weight= $myweight,  age= $myage
		WHERE u_AccountID = $myid";
		if(mysqli_query($db, $sql)){
			$error = "Info updated successfully.";
		} else {
			$error = "Error: " . $sql . ":-" . mysqli_error($db);
		}
		mysqli_close($db);
   }
?>
  
	<form style="color:#000;" form action = "" method = "post" autocomplete="on">
   <!-- Name input -->
<div class="form-outline mb-4">
  <input type="text" id="form7Example1" class="form-control" name="weight"/>
  <label class="form-label" for="form7Example1">Body Weight (lbs)</label>
</div>

<!-- Email input -->
<div class="form-outline mb-4">
  <input type="text" id="form7Example2" class="form-control" name="height"/>
  <label class="form-label" for="form7Example2">Height (inches)</label>
</div>

<div class="form-outline mb-4">
  <input type="text" id="form7Example2" class="form-control" name="dailyCalories"/>
  <label class="form-label" for="form7Example2">Daily Average Caloric Intake</label>
</div>

<div class="form-outline mb-4">
  <input type="text" id="form7Example2" class="form-control" name="activeHours"/>
  <label class="form-label" for="form7Example2">Exercise Per Week (hours)</label>
</div>
<div class="form-outline mb-4">
  <input type="text" id="form7Example2" class="form-control" name="age"/>
  <label class="form-label" for="form7Example2">Age (years)</label>
</div>
<div class="form-outline mb-4">
  <label for="gender">Gender:</label>
  <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
</div>
<div class="form-outline mb-4">
  <label for="goals">Choose a goal:</label>
  <select id="goals" name="goals">
    <option value="lose weight">Lose Weight</option>
    <option value="gain weight">Gain Weight</option>
    <option value="gain muscle">Gain Muscle</option>
	<option value="maintain weight">Maintain Weight</option>
</div>
<div class="form-outline mb-4">
  </select>
  <label for="deficiency">Deficiency?</label>
  <select id="deficiency" name="deficiency">
    <option value="none">None</option>
    <option value="iron">Iron</option>
    <option value="vitamin d">Vitamin D</option>
	<option value="iodine">Iodine</option>
	<option value="calcium">Calcium</option>
	<option value="magnesium">Magnesium</option>
	</select>
</div>

	<!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec" name="submit" value="Submit">Submit</button>

	</form>


	<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	
  </div>
  <div class="column" style="background-color:#fff; text-align: center;">
    <img src="runner.jpeg" style="max-width: 80%">
	<img src="logo2.png" style="max-width:80%; padding-top: 15px;">
  </div>
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
