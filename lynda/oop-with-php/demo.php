<?php 
	require 'class.Address.inc.php';
	echo '<h2>Intantiating Address</h2>';
	$address = new Address;

	echo '<h2>Empty Address</h2>';
	echo '<tt><pre>' . var_export($address, TRUE). '</pre><tt>';
 ?>