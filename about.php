<!DOCTYPE html>
<html>
<?php 
include_once("header.php");
include "classes/page.php";
$page = new SitePage();
$page->id = 11;
$page->page_title = 'Electron Orbital | About';
$page->title = 'Electron Orbital About';
$page->description = 'Where to find me.';
show_header($page); 
end_header();

?>
<h1>About</h1>
<p>Find me here..............</p>
<div class="i-frame">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1179.2120888925353!2d-71.1602373541715!3d41.47057129895844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1514687218386" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php include_once('footer.php'); ?>