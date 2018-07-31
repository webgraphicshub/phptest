<?php 
	// 1. Create a Database connection

	$dbhost = "sql204.epizy.com";
	$dbuser = "epiz_22386954";
	$dbpass = "rmE3UzPthfB2X";
	$dbname = "epiz_22386954_widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//Test if connection occured
	// if (mysqli_connect_errno()) {
	// 	die("Database Connection failed: ").
	// 		mysqli_connect_error() .
	// 		" (" . mysqli_connect_errno() . ")" );
	// }

	// if ($connection->connect_error) {
 //    die("Connection failed: " . $connection->connect_error);
	// } else {
	// echo "Connected successfully <br>";	
	// }

	// Often these are form values in $_POST
	$id = 5;
	$menu_name = "Mohan";
	$position = 126;
	$visible = 1;

	// 2 Perform Database Update Query
	$query = "UPDATE subjects SET ";
	$query .= "menu_name = '{$menu_name}', ";
	$query .= "position = {$position}, ";
	$query .= "visible = {$visible} ";
	$query .= "WHERE id = {$id}";

 ?>

 <?php 
 	 // 2. Perform database query 

 		// $query = "SELECT * ";
 		// $query .= "FROM subjects";
 		//  $query .= "WHERE visible =1";
 		// $query .= "ORDER BY position ASC";
 		$result =  mysqli_query($connection, $query);
 		// Test if there was a query error
 		if ($result && mysqli_affected_rows($connection) == 1){
 			echo "Database Updated";
 		} else {
 			die("Database Query Failed. " . mysqli_error($connection));
 		}



  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Delete</title>
	<style>
		body { font-family: sans-serif; }
		.container { display: flex; justify-content: space-between; flex-wrap: wrap; padding: 0; margin: 0; }
		a { display: inline-block; padding: 5px 15px; font-family: sans-serif; text-decoration: none; background: #2A66B1; color: #fff; border: 1px solid #2A66B1; text-transform: uppercase; margin: 5px; }
		a:hover { color: #2A66B1; background: #fff; }
		h1 { text-align: center; font-family: sans-serif; color: #2ab17a; padding: 10px 0; margin: 0 }
	</style>
</head>
<body>
	<a href="index.php">home</a><br><br>
	
	


	
</body>
</html>

<?php 
	// 5. Close Database Connection

	mysqli_close($connection);

 ?>