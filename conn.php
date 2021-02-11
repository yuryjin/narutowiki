<?php
	$conn = new mysqli('localhost', 'root', '', 'db_text');
 
	if(!$conn){
		die("Error: Can't connect to database");
	}
?>