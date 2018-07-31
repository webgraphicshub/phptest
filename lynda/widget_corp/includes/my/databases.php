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

	if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
	} else {
	echo "Connected successfully <br>";	
	}

 ?>

 <?php 
 	 // 2. Perform database query 

 		$query = "SELECT * ";
 		$query .= "FROM subjects";
 		// $query .= "WHERE visible =1";
 		// $query .= "ORDER BY position ASC";
 		$result =  mysqli_query($connection, $query);
 		// Test if there was a query error
 		if (!$result){
 			die("Database Query Failed");
 		}



  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database</title>
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
	
	<?php 
		// 3. Use Return Data (if any)
	while($subject = mysqli_fetch_row($result)){
		// Outout data from each row
		
		echo $subject["id"] . "<br>";
		echo $subject["menu_name"] . "<br>";
		echo $subject["position"] . "<br>";
		echo $subject["visible"] . "<br>";
		echo "<hr />";
	}
	 ?>
	
	 <?php 
		// Assoc 3. Use Return Data (if any)
	while($row2 = mysqli_fetch_assoc($result)){
		// Outout data from each row
		var_dump($row2);
		echo "<hr />";
	}
	 ?>
	 <?php 
		// Array 3. Use Return Data (if any)
	while($row3 = mysqli_fetch_array($result, MYSQL_ASSOC)){
		// Outout data from each row
		var_dump($row3);
		echo "<hr />";
	}
	 ?>

	 <?php 
	 	// 4. Release Returned Data
	 	mysqli_free_result($result);
	  ?>



	
</body>
</html>

<?php 
	// 5. Close Database Connection

	mysqli_close($connection);

 ?>