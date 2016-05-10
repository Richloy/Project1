<?php
try {

	$host = '127.0.0.1';
	$dbname = 'test';
	$user = 'root';
	$pass = '';
	# MySQL with PDO_MYSQL
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
 

}
catch(PDOException $e) {
  }  
  
?>