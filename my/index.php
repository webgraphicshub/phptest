<?php 
	$servername = 'localhost';
	$username = 'rahul';
	$password = 'password';

	// Create Connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check Connection
	if (!$conn) {
		die("Connection Failed: " . mysqli_connect_error());
	} else {
		echo ("Connection successful");
	}
	echo ("<br>"); 

	// Create Database
	if (mysqli_query($conn, "CREATE DATABASE mydb")){
		echo ("Database created Successfully");
	} else {
		echo ("Error in creating database: " . mysqli_error($conn));
	};

	mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My PHP Test</title>
</head>
<body>
	
</body>
</html>

