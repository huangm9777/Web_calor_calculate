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
#plan {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#plan td, #plan th {
  border: 1px solid #ddd;
  padding: 8px;
}

#plan tr:nth-child(even){background-color: #f2f2f2;}

#plan tr:hover {background-color: #ddd;}

#plan th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #19c1ec;
  color: white;
}
</style>
  
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
	$username = $_SESSION['username'];
	
   $sql	= "SELECT accountID FROM account WHERE username = '$username'";
	
   $r = mysqli_query( $db,$sql);
   
   $rw = mysqli_fetch_array($r);
   echo $rw['accountID'];
   $id = $rw['accountID'];
   
   $sql	= "SELECT * FROM user WHERE u_AccountID = '$id'";
   
   
   $result = mysqli_query( $db,$sql);
   
   $row = mysqli_fetch_array($result);
   
   
   
   ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container" style="margin-top: 40px; background-color:#fff; padding-left: 0px; padding-right: 0px;">
<div class="panel panel-default" style="margin-bottom: 0px; border-bottom: 0px;">	
<div class="panel-heading c-list">
                    <span class="title">My Plan</span>
                    
                </div>
				</div>
<div class="row" style="margin-left: 0px; margin-right: 0px;">

  <div class="column" style="background-color:#fff;" >
    
	
	<p>
	<?php
	echo "height = {$row['height']} <br>";
	echo "weight = {$row['weight']} <br>";
	echo "goalType = {$row['goalType']} <br>";
	
	if ($row['sex'] == 'male'){
		$cal_in= 66+6.2*$row['weight']+12.9*$row['height']-6.8*$row['age'];
		$cal_out = 66+6.2*$row['weight']+ 12.7*$row['height'] -6.76*$row['age'];
		if ($row['goalType'] == 'gain weight'){
			$cal_in = $cal_in*1.2;
			$cal_out = $cal_out*1.2;
		}else if ($row['goalType'] == 'maintain weight'){
			$cal_in = $cal_in*1.375;
			$cal_out = $cal_out*1.375;
		}else if ($row['goalType'] == 'lose weight'){
			$cal_in = $cal_in*1.75;
			$cal_out = $cal_out*1.75;
		}
		
	}else{
		$cal_in = 655+4.3*$row['weight']+4.7*$row['height']-4.7*$row['age'];
		$cal_out = 655.1+43.5*$row['weight']+ 4.7*$row['height']-4.7*$row['age'];
		if ($row['goalType'] == 'gain weight'){
			$cal_in = $cal_in*1.2;
			$cal_out = $cal_out*1.2;
		}else if ($row['goalType'] == 'maintain weight'){
			$cal_in = $cal_in*1.375;
			$cal_out = $cal_out*1.375;
		}else if ($row['goalType'] == 'lose weight'){
			$cal_in = $cal_in*1.75;
			$cal_out = $cal_out*1.75;
		}
	}
	echo "Calories need to take: $cal_in<br>
		Calories need to burn: $cal_out<br>
	";
	
	
	?>
	</p>
	<div class="text-center">
	
	</div>
  </div>
  <div class="column" style="background-color:#fff; text-align: center;">
    
	<img src="logo2.png" style="max-width:80%; padding-top: 15px;">
  </div>
</div>
<table style = "margin-bottom: 20px;" width="100%" border="1" bordercolor="#000" cellpadding="5" cellspacing="5" id="plan">
 <tr>
     <td><strong>Weight Loss Goal</strong></td>
	 <th>Sunday</th>
     <th>Monday</th>
     <th>Tuesday</th>
     <th>Wednesday</th>
     <th>Thursday</th>
     <th>Friday</th>
	 <th>Saturday</th>
 </tr>
 <tr>
	<?php
	//retrive the plans from database
	
   $sql	= "SELECT * FROM diet WHERE d_AccountID = $id";
   
   $result = mysqli_query( $db,$sql);
   
   $row = mysqli_fetch_array($result);
   $temp = $row['dailyCalories'];
			
	 ?>
     <th>Diet</th>
     <td><?php
			//echo " intake: $cal_out Claories"
			echo " intake: $temp Claories"
	 ?></td>
     <td><?php
			echo " intake: $temp Claories"
	 ?></td>
	 <td><?php
			echo " intake: $temp Claories"
	 ?></td>
	 <td><?php
			echo " intake: $temp Claories"
	 ?></td>
	 <td><?php
			echo " intake: $temp Claories"
	 ?></td>
	 <td><?php
			echo " intake: $temp Claories"
	 ?></td>
	 <td><?php
			echo " intake: $temp Claories"
	 ?></td>
 </tr>
	<tr>
	<?php
	//retrive the plans from database
	
   $sql	= "SELECT * FROM plans WHERE accountID = $id";
   
   $result = mysqli_query( $db,$sql);
   
   $row = mysqli_fetch_array($result);
   
			
	 ?>
	 
     <th>Exercise 1</th>
     <td><?php
	 echo $row['Sunday'];
	 
	 ?></td>
     <td><?php
	 echo $row['Monday'];
	 
	 ?></td>
	 <td><?php
	 echo $row['Tuesday'];
	 
	 ?></td>
     <td><?php
	 echo $row['Wednesday'];
	 
	 ?></td>
	 <td><?php
	 echo $row['Thursday'];
	 
	 ?></td>
     <td><?php
	 echo $row['Friday'];
	 
	 ?></td>
	 <td><?php
	 echo $row['Saturday'];
	 
	 ?></td>
 </tr>
 </tr>
	<tr>
     <th>Exercise 2</th>
     <td></td>
     <td>5 sets of dumbell curls x 12 reps</td>
	 <td></td>
     <td>5 sets of kettlebell swings * 10 reps</td>
	 <td></td>
     <td></td>
	 <td></td>
 </tr>
 </tr>
	<tr>
     <th>Exercise 3</th>
     <td></td>
     <td>Yoga Session 45 mins</td>
	 <td></td>
     <td></td>
	 <td></td>
     <td></td>
	 <td>Yoga Session 45 mins</td>
 </tr>
 
</table>
</div>


<div class="footer">
  <p style="
    margin-bottom: 10px;
    margin-top: 10px;
">© 2021 Group 5 AI Dieticians</p>
</div>
      


</body>
</html>
