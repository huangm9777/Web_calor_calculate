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
  ul {
    list-style-type: none;
}
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


<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Friend</h4>
        </div>
        <div class="modal-body">
         <form>
      

      
	  <div class="form-outline mb-4">
        <input type="text" id="loginName" class="form-control" />
        <label class="form-label" for="loginName">Username</label>
      </div>
      

      <!-- 2 column grid layout -->
      
        

        
     

      <!-- Submit button -->
      <div style="text-align: center; max-width: 50%;">
      <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec;">Add</button>
	</div>
      
    </form>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>



<!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Message</h4>
        </div>
        <div class="modal-body">
         <form>
      

      
	  <div class="form-outline mb-4">
        
		 <input type="text" id="loginName" class="form-control" />
        <label class="form-label" for="loginName">Message</label>
      </div>
      

      <!-- 2 column grid layout -->
      
        

        
     

      <!-- Submit button -->
      <div style="text-align: center; max-width: 50%;">
      <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec;">Send</button>
	</div>
      
    </form>
        </div>
        
      </div>
	  </div>
	  </div>

<div class="container" style="margin-top: 40px;>
<div class="row">
        <div class="col-xs-12 col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Friends</span>
                    <ul class="pull-right c-controls">
                        <li><a href="##" data-toggle="modal" data-target="#myModal" data-placement="top" title="Add Contact" style="color: #19c1ec;" ><i class="glyphicon glyphicon-plus"></i></a></li>
                        </ul>
                </div>
                
                <div class="row" style="display: none;">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
                
                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3" style="text-align: center;">
                            <img src="erik.png" alt="Erik Evers" class="img-responsive img-circle" />
							<span class="name">Erik Evers</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            
                            <button type="submit" data-toggle="modal" data-target="#myModal2" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec">Message</button>
							<button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec">Block</button>

                        </div>
                        <div class="clearfix"></div>
                    </li>
					<li class="list-group-item">
                        <div class="col-xs-12 col-sm-3" style="text-align: center;">
                            <img src="hannah.png" alt="Erik Evers" class="img-responsive img-circle" />
							<span class="name">Hannah Smith</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            
                            <button type="submit" data-toggle="modal" data-target="#myModal2" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec">Message</button>
							<button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec">Block</button>

                        </div>
                        <div class="clearfix"></div>
                    </li>
					<li class="list-group-item">
                        <div class="col-xs-12 col-sm-3" style="text-align: center;">
                            <img src="drew.png" alt="Erik Evers" class="img-responsive img-circle" />
							<span class="name">Drew Shin</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            
                            <button type="submit" data-toggle="modal" data-target="#myModal2" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec">Message</button>
							<button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #19c1ec">Block</button>

                        </div>
                        <div class="clearfix"></div>
                    </li>
                    
                </ul>
            </div>
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
