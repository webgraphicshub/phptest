<?php 
	include_once('includes/database.php');
	if (isset($_POST['first']) && isset($_POST['last']) && isset($_POST['mail'])&& isset($_POST['id'])&& isset($_POST['password'])&& isset($_POST['submit'])){
		$first_name = $_POST['first'];
		$last_name = $_POST['last'];
		$mail = $_POST['mail'];
		$id = $_POST['id'];
		$password = $_POST['password'];

		if (!empty($first_name) && !empty($last_name) && !empty($mail) && !empty($id) && !empty($password)){
			
			$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES('$first_name', '$last_name', '$mail', '$id', '$password');";
			mysqli_query($conn, $sql);
			echo ('Success'); 
		} else {
			echo ('One or more fields are empty');
		}
	}  else {
		echo ('Error');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert data</title>
</head>
<body>
	<form action="insert-data.php" method="POST">
		First Name: <input type="text" name="first"><br><br>
		Last Name: <input type="text" name="last"><br><br>
		Email: <input type="email" name="mail"><br><br>
		User ID: <input type="text" name="id"><br><br>
		Password: <input type="password" name="password"><br><br><br>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>