<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'quiz_builder';
$db_user = 'root';
$db_pass = '121212aa';

//Create MySQLi object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Error Handler
if($mysqli->connect_error){
	printf("Connection failed: %s\n", $mysqli->connect_error);
	exit();
}