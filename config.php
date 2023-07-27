<?php
   define('DB_SERVER', 'alfred.cs.uwec.edu:3306');
   define('DB_USERNAME', 'CS485G2');
   define('DB_PASSWORD', '9CHMI2EG');
   define('DB_DATABASE', 'cs485_group2');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if(!$db){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>


