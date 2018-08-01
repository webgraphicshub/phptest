<?php 
	include_once('includes/database.php');
	$class_val = 0;
	if (isset($_POST['first']) && isset($_POST['last']) && isset($_POST['mail'])&& isset($_POST['id'])&& isset($_POST['password'])&& isset($_POST['submit'])){
		$first_name = mysqli_real_escape_string($conn, $_POST['first']);
		$last_name = mysqli_real_escape_string($conn, $_POST['last']);
		$mail = mysqli_real_escape_string($conn, $_POST['mail']);
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		if (!empty($first_name) && !empty($last_name) && !empty($mail) && !empty($id) && !empty($password)){
			
			$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES('$first_name', '$last_name', '$mail', '$id', '$password');";
			mysqli_query($conn, $sql);
			$result = 'Success.';
			$class_val = 1;
		} else {
			$result = 'One or more fields are empty.';
			$class_val = 2;
		}
	}  else {
		$result = 'Error.';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert data No SQL Injection</title>
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    

</head>
<body>
	<div class="container">
		<form action="insert-data.php" method="POST">
			First Name: <input type="text" name="first"><br><br>
			Last Name: <input type="text" name="last"><br><br>
			Email: <input type="email" name="mail"><br><br>
			User ID: <input type="text" name="id"><br><br>
			Password: <input type="password" name="password"><br><br><br>
			<input type="submit" name="submit">
		</form>
		<?php 
			if ($class_val == 1) {
				$class = 'card-panel #388e3c green darken-2';
			} elseif ($class_val == 2) {
				$class = 'card-panel #f57f17 yellow darken-4';
			} else {
				$class = 'card-panel #c62828 red darken-3';
			}
		?>
		<div class="<?php echo $class; ?>">
		    <span class="#ffffff white"><h5><?php echo $result; ?></h5></span>
		  </div>
	</div>


		<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	</div>
</body>
</html>