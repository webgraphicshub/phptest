<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<p>SEND E-MAIL</p>
		<form action="contactform.php" class="contact-form" method="post" >
			<input type="text" name="name" placeholder="Full Name">
			<input type="text" name="mail" placeholder="Your e-mail">
			<input type="text" name="subject" placeholder="subject">
			<textarea name="message" placeholder="Message"></textarea>
			<button type="submit" name="submit">SEND MAIL</button>
		</form>
	</div>
	

	
</body>
</html>