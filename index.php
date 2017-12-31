<!DOCTYPE html>
<html>
<?php 
$page_title = 'Electron Orbital | Home';
$title = 'Electron Orbital Home';
$description = 'Electron news from around the web.';
include "dbconnect.php";
include "classes/page.php";
$page = new SitePage();
$page->id = 1;
$page->page_title = 'Electron Orbital | Home';
$page->title = 'Electron Orbital Home';
$page->description = 'Electron news from around the web.';
include_once("header.php");
include_once("dbcall.php");
show_header($page);
load_scripts($page->id);
end_header();
?>

    <h1>Electron News</h1>

    <div id="headline">

      <?php
      
      $hour = date('G');
      if($hour > 5 && $hour <10) {
        scrapeApi($db);
      }
      $length = sizeof($feeds);
      $feed = get_news($db);
      ?>
      
      <div class="news-container" data-length="14">
      <?php $time_stamp = $feed[$i]['date']; 
            for($i=0; $i<9;$i++) { ?>
        
              <div class="article <?php echo substr($time_stamp,8,8); ?>">
                <div class="left">
                  <h4><a href="<?php echo $feed[$i]['link']; ?>"><?php echo $feed[$i]['title']; ?></a></h4>
                  <time><?php echo $feed[$i]['date']; ?></time>
                </div>
                <div class="right">
                  <?php if($feed[$i]['image']!="") : ?>
                    <img src="<?php echo $feed[$i]['image']; ?>"/>
                  <?php else: ?>
                    <img src="/inc/img/favicon-96x96.png" alt="electron"/>
                  <?php endif; ?>
                </div>
              </div>
      <?php } ?>
      </div> <!-- end news-container -->
    </div> <!-- end headlin -->

    <div class="center">
      <iframe width="480" height="270" src="http://www.ustream.tv/embed/17074538?html5ui" scrolling="no" allowfullscreen webkitallowfullscreen frameborder="0" style="border: 0 none transparent;"></iframe>
    </div>
    <div class="clear-left center library" data-limit="14" id="footer"> 
      <h2>Electron Archives</h2>
      <div id="loader"><img src = "/loading.gif" /></div>
      <?php 
              get_archives($db);
      ?>
      <h3 class="view-more">View <br> more</h3>


<?php
include_once('footer.php');

?>