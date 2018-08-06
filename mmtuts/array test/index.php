<?php 
	include_once("includes/dbh.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array From Database</title>
</head>
<body>
	<?php 
		$sql = "SELECT * FROM data";
		$result = mysqli_query($conn, $sql);
		$datas = array();
		if (mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)) {
				$datas[] = $row;
			}
		}
		// print_r($datas);

		foreach ($datas as $data) {
			echo $data['test']."<br><hr>";
		}

	?>
	
</body>
</html>