<!DOCTYPE html>
<html>

<?php 

$page_title = 'Electron Orbital | Name Reversal Tool';
$title = 'Name Reversal Tool';
$description = 'Reverse your name!';
include("header.php");
include "classes/page.php";
$page = new SitePage();
$page->page_title = 'Electron Orbital | Name Reversal Tool';
$page->title = 'Name Reversal Tool';
$page->description = 'Reverse your name!';
$page->id = 5;
show_header($page);
load_scripts($page->id);
end_header();
?>
<div id="content">
	<form id="list" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h1>Name Reversal Tool</h1>
	<h3>First Name</h3>
	<input type="text" name="given" autofocus>
	<h3>Surname</h3>
	<input type="text" name="surname" autofocus>
	<button type="submit" id="button" style="display: block" autofocus>Reverse Text</button>
	</form>
</div>
<div id="string-frame">
	<?php

	$newstr="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['given'])&& isset($_POST['surname']))
		{
			
			$given = $_POST['given'];
			$surname = $_POST['surname'];
			$given = stripslashes($given);
			$surname = stripslashes($surname);
			$newgiven = reverse_string($given);
			$newsurname = reverse_string($surname);
			echo '<br><h5>' . $newgiven . '</h5>';
			echo '<pre><h5>' . $newsurname . '</h5>';
			
		}
	}
	function reverse_string($str){
				$strlng = strlen($str);
				for($i=1;$i<$strlng+1;$i++){
					$newstr = $newstr . substr($str,$strlng-$i,1);
					}
				return $newstr;
			}

	?>
</div>
<?php
include_once('footer.php');

?>