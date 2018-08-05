<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input Hashing</title>
</head>
<body>
	<?php 

		// echo "test123";
		// echo "<br>";
		// echo password_hash("test123", PASSWORD_DEFAULT);

	$input = "test123";
	$hashedPwdInDatabase = password_hash("test123", PASSWORD_DEFAULT);

	echo password_verify($input, $hashedPwdInDatabase);
	 ?>
	
</body>
</html>