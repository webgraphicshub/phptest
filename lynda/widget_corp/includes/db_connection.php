<?php 
	// 1 Create a database connection

	define("DB_SERVER", "localhost");
	define("DB_USER", "admin");
	define("DB_PASS", "password");
	define("DB_NAME", "widget_cms");

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);


	// Test if connection succeeded
	if ($connection->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		} 
		echo "";

?>