<!DOCTYPE html>
<html>

<?php
$page_title = 'Electron Orbital | Some of our data';
$title = 'Excerpt from the database';
$description = 'Just a sample from our very finite multilingual database.';
include_once("../header.php"); 
include "../classes/page.php";

$page = new SitePage();
$page->page_title = 'Electron Orbital | Some of our data';
$page->title = 'Excerpt from the database';
$page->description = 'Just a sample from our very finite multilingual database.';
$page->id = 6;
show_header($page);
load_scripts($page->id);
end_header();

$data = file_get_contents('dictionary2.json');
$list = json_decode($data,true);
?>
<div id="content" style="margin-top: 0">
	<pre>
		<?php
		$count = sizeof($list['words']);
		echo $count;
		echo "<meta charset=\"utf-8\">";
		for($i=0;$i<($count/8);$i++) {
			echo "<h3>";
			print_r($list['words'][$i]);
			echo "</h3>";
		}

		?>
	</pre>
</div>
<?php
include_once('../footer.php');
?>