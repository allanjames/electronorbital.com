
<?php
$data = file_get_contents('dictionary.json');
$list = json_decode($data);
//var_dump($list);
if(isset($_POST['flag']))
	{
	$flag = $_POST['flag'];
	$flag = trim($flag);
	$flag = stripslashes($flag);
	for ($i = 0; $i < count($list->words); $i++){
		if($list->words[$i]->english == $flag)
			{	
				echo "<table><tr><th>Chinese </th><th>Japanese</th><th>Korean</th></tr><tr><td>";
				echo  $list->words[$i]->chinese; 
				echo "</td><td>";
				echo  $list->words[$i]->japanese;
				echo "</td><td>";
				echo  $list->words[$i]->korean;
				echo "</td></tr></table>";
			}
	
		}
	}
?>

