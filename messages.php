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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
  
 <style>
.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%;
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 450px; overflow-y: scroll;}

.active_chat, .chat_list:hover{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 0px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #19c1ec none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #19c1ec none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 0px 0;}
.msg_history {
  height: 400px;
  overflow-y: auto;
}

.nonactive{
	display:none;
}
</style> 
<style>


  
 ul {
    list-style-type: none;
}
.text-white-50 { color: rgba(255, 255, 255, .5); }
.bg-blue { background-color:#00b5ec; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }
.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

a.fill-div {
    display: block;
    height: 100%;
    width: 100%;
    text-decoration: none;
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

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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
        <label class="form-label" for="loginName">Username</label>
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
	  
	  <script>

</script>

<div class="container" style="margin-top: 40px; margin-bottom: 40px; background-color: #fff; padding-left: 0px; padding-right: 0px;">
<div class="panel panel-default" style="margin-bottom: 0px; border-bottom: 0px;">
<div class="panel-heading c-list">
                    <span class="title">Messages</span>
                    <ul class="pull-right c-controls">
                        <li><a href="##" data-toggle="modal" data-target="#myModal" data-placement="top" title="Add Contact" style="color: #19c1ec;" ><i class="glyphicon glyphicon-plus"></i></a></li>
                        </ul>
                </div>
				</div>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
		
          <div id="myDIV" class="inbox_chat">
            <div id="econvo" class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="erik.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Erik Evers <span class="chat_date">Oct 12</span></h5>
                  <p>How are you liking the AI Dietician?</p>
                </div>
              </div>
            </div>
            
            <div  id="hconvo" class="chat_list" >
              <div class="chat_people">
                <div class="chat_img"> <img src="hannah.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Hannah Smith <span class="chat_date">Oct 10</span></h5>
                  <p>I'm making so much progress towards my fitness goals!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mesgs">
          <div  id="elog" class="msg_history">
		  <div style="text-align:center;">
			<h3>Erik Evers<h3>
			</div>
            
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="erik.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>I have made some serious progress over the last 10 months.</p>
                  <span class="time_date"> 1:08 PM    |    Oct 12</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Wow! Thats great to hear.</p>
                <span class="time_date"> 1:11 PM    |    Oct 12</span></div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="erik.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>How are you liking the AI Dietician?</p>
                  <span class="time_date"> 1:15 PM    |    Oct 12</span></div>
              </div>
            </div>
          </div>
		  
		  <div id="hlog" class="msg_history nonactive" >
		  <div style="text-align:center;">
			<h3>Hannah Smith<h3>
			</div>
			  <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Hey whats up?</p>
                <span class="time_date"> 11:32 PM    |    Oct 10</span></div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="hannah.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>AI dietician is a great help!</p>
                  <span class="time_date"> 11:040 PM    |    Oct 10</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>I know. I couldn't live without it.</p>
                <span class="time_date"> 11:42 PM    |    Oct 10</span></div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="hannah.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>What are your favorite exercises?</p>
                  <span class="time_date"> 11:45 PM    |    Oct 10</span></div>
              </div>
            </div>
          </div>
		  
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><span class="glyphicon glyphicon-send"></span></button>
            </div>
          </div>
        </div>
      </div>
      
      
     
    </div>
    
</div>

<script>
var header = document.getElementById("myDIV");
var lists = header.getElementsByClassName("chat_list");
for (var i = 0; i < lists.length; i++) {
  lists[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active_chat");
  current[0].className = current[0].className.replace(" active_chat", "");
  this.className += " active_chat";
  var htest = document.getElementById('hconvo');
var etest = document.getElementById('econvo');

if (htest.classList.contains('active_chat')){
	var etest2 = document.getElementById('elog');
	etest2.classList.add('nonactive');
	var htest2 = document.getElementById('hlog');
	htest2.classList.remove('nonactive');
}

if (etest.classList.contains('active_chat')){
	var htest2 = document.getElementById('hlog');
	htest2.classList.add('nonactive');
	var etest2 = document.getElementById('elog');
	etest2.classList.remove('nonactive');
}});
}


</script>
<div class="footer">
  <p style="
    margin-bottom: 10px;
    margin-top: 10px;
">© 2021 Group 5 AI Dieticians</p>
</div>
      


</body>
</html>
