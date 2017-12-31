<?php

$db = new mysqli("localhost", "electut8", "Alfie20!4","electut8_tracker");
if($db->connect_errno) {
	printf("Connect failed: %s\n", $db->connect_error);
    exit();
} else {
		print ("Connected successfully to Database");
	}



?>