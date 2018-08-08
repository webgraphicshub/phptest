<?php 
	session_start();
	include_once 'dbh.php';

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login System with image</title>
 </head>
 <body>

 	<?php 

 		$sql = "SELECT * FROM user";
 		$result = mysqli_query($conn, $sql);
 		if (mysqli_num_rows($result > 0)) {
 			while ($row = mysqli_fetch ){
 				$id = $row['id'];
 				$sqlimg = "SELECT * FROM profileimg WHERE userid='$id'";
 				$resultimg = mysqli_query($conn, $sqlimg);
 				while ($rowimg = mysqli_fetch_assoc($resultimg)){
 					echo "<div>";
 						if ($rowimg['status'] == 0) {
 								echo "<img src='uploads/profile".$id.".png'>";
 						} else {
 							echo "<img src='uploads/profiledefault.png'>";
 						}
 						echo $row['username'];
 					echo "</div>";
 				}
 			}
 			} else {
 				echo "There are no users";
 		}

 		if (isset($_SESSION['id'])){
 			if ($_SESSION['id'] == 1) {
 				echo "You are loged in as user #1";
 			};

 			echo '<form action="upload.php" method="POST" enctype="multipart/form-data">
			 		<input type="file" name="file">
			 		<button type="submit" name="submit">UPLOAD</button>
			 	</form>';
 		} else {
 			echo "You are not logged in";
 			echo '<form action="login.php" method="POST">
				<input type="text" name="first" placeholder="First Name">
				<input type="text" name="last" placeholder="Last Name">
				<input type="text" name="uid" placeholder="User Name">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submitsignup">Signup</button>
				</form>';
 		}

 	 ?>

 	

	<p>Login as User</p>
 	<form action="login.php" method="POST">
 		<button type="submit" name="submitlogin">Login</button>
 	</form>

 	<p>Logout as User</p>
 	<form action="logout.php" method="POST">
 		<button type="submit" name="submitlogout">Logout</button>
 	</form>
 </body>
 </html>