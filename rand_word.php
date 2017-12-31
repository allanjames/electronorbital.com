<!DOCTYPE html>
<html>
<?php 

$page_title = 'Electron Orbital | Random Words';
$title = 'Comparison of North East Asian Languages - Random';
$description = 'Random word generated and presented in multilingual format.';
include("header.php");
include "classes/page.php";
$page = new SitePage();
$page->page_title = 'Electron Orbital | Random Words';
$page->title = 'Comparison of North East Asian Languages - Random';
$page->description = 'Random word generated and presented in multilingual format.';
$page->id = 4;
show_header($page);
load_scripts($page->id);
end_header();
?>

<?php
$num = mt_rand(1,33);
$data = file_get_contents('dictionary.json');
$list = json_decode($data);
echo count($list->words);
echo " entries in dictionary";
?>
<div id="content">
	<h2> <?php echo $list->words[$num]->english; ?></h2>
	<table><tr><th>Chinese </th><th>Japanese</th><th>Korean</th></tr>
		<tr>
			<td>
				<?php echo  $list->words[$num]->chinese; ?>
			</td>
			<td>
				<?php echo  $list->words[$num]->japanese; ?>
			</td>
			<td>
				<?php echo  $list->words[$num]->korean; ?>
			</td>
		</tr>
	</table>

	<button id="something" onclick = "location.reload()">Refresh Page</button>
</div>
<?php
include_once('footer.php');

?>