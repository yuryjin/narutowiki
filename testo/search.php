<?php
	require_once 'conn.php';
 
	$search = $_GET['term'];
 
	$query = $conn->query("SELECT * FROM `pages_autocomplete` WHERE `page` LIKE '%$search%' ORDER BY `page` ASC") or die(mysqli_connect_errno());
 
	$list = array();
	$rows = $query->num_rows;
 
	if($rows > 0){
		while($fetch = $query->fetch_assoc()){
			$data['value'] = $fetch['page']; 
			array_push($list, $data);
		}
	}
 
	echo json_encode($list);
?>