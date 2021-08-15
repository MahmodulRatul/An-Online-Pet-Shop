<?php
    require_once 'controllers/searchController.php';
	$key=$_GET["key"];
	$users=searchUser($key);
	foreach($users as $user){
		echo $user["fname"]."<br>";
		

	}
	

?>    