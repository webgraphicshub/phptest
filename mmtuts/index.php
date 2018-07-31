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
		$sql = "SELECT 	* from users where user_first = 'amarta'";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['user_uid']. "<br>";
			}
		} else {
			echo "0 result";
		}
	?>
	<?php 

		mysqli_close($conn);
	?>
	
</body>
</html>