<?php
echo "hello";
echo get_magic_quotes_gpc();
if(isset($_POST["artist"])) {
$db = new mysqli("localhost", "electut8", "Alfie20!4","electut8_vinyl");
if($db->connect_errno) {
		printf("Connect failed: %s\n", $db->connect_error);
    	exit();
	} else {
		print ("Connected successfully to Database");
	}
$name = $_POST["artist"];
$title = $_POST["album"];
$year = $_POST["year"];
$condition = $_POST["condition"];
$insertion = "INSERT INTO  Collection ('Name','Title','Year','Condition') VALUES ('$name','$title',$year,'$condition')";
if($db->query($insertion){
	echo "<br>"."Record inserted into database.";
	} else {
	echo "<br>"."Failed to insert record."."<p>";
		}
}
?>
<html>
<title>Database Test</title>
<head>
	<style>
	.add input {
			display: block;
		}

	</style>
</head>
<body>
<h2>
Add entry to collection:</h2>
<form action = "" method="post" class="add">
Artist
<input type="text" name="artist"></input>
Album
<input type="text" name="album"></input>
Year
<input type="text" name="year"></input>
Condition
<input type="text" name="condition"></input>
<input type="submit" value="Add">
</form>
</body>
</html>