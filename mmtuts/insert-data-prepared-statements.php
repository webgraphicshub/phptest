<?php 
	include_once('includes/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database test</title>
</head>
<body>

	<?php 
		$data = "john";

	// Created a template
		$sql = "SELECT 	* from users where user_uid = ?; ";
		
	// Create a prepared statement
		$stmt = mysqli_stmt_init($conn);

	// Prepare the prepared statement
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			echo "SQL Statement Failed";
		} else {
			// Bind parameters to the placeholder
			mysqli_stmt_bind_param($stmt, "s", $data);
			// Run parameters inside database
			mysqli_stmt_execute($stmt);
			$result  = mysqli_stmt_get_result($stmt);
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['user_uid']. "<br>"; 	}
	
	}
		
		?>	
	<!-- <?php 

		//mysqli_close($conn);
	?>
	 -->
</body>
</html>