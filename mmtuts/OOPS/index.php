<?php 
	include 'includes/newclass.inc.php'

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>OOPS Programming</title>
 </head>
 <body>
 	<?php 
 		$object = New NewClass;
 		$object2 = New NewClass;

 		echo $object->getProperty().'<br>';
 		$object->setNewProperty('This is the New Data');
 		echo $object->getProperty().'<hr>';

 		echo $object2->getProperty().'<br>';
 		$object2->setNewProperty('This is the New Data2');
 		echo $object2->getProperty().'<hr>';
 	 ?>
 </body>
 </html> 