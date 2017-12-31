<?php


function scrapeApi($db) {

  $news = simplexml_load_file('https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&csid=9a8dc30f3fd4fcb7&output=rss');

      $feeds = array();

      $i = 0;

      foreach ($news->channel->item as $item) 
      {
          preg_match('@src="([^"]+)"@', $item->description, $match);
          //$parts = explode('<font size="-1">', $item->description);

          $feeds[$i]['title'] = (string) $item->title;
          $feeds[$i]['link'] = (string) $item->link;
          $feeds[$i]['date'] = (string) $item->pubDate;
          $feeds[$i]['image'] = $match[1];
          //$feeds[$i]['site_title'] = strip_tags($parts[1]);
          //$feeds[$i]['story'] = strip_tags($parts[2]);
          $title = $feeds[$i]['title'];
          $link = $feeds[$i]['link'];
          $image = $feeds[$i]['image'];
          $date = $feeds[$i]['date'];
          $date = strtotime($feeds[$i]['date']);
          $newdate = date('Y-m-d',$date);
          $sql = "SELECT * FROM `archive` WHERE article_title LIKE '$title'";
          $result = $db->query($sql);
          if(!$result->num_rows>0) {
                $insertion = "INSERT INTO `archive` (`article_title`,`article_link`,`article_image`,`article_date`) VALUES ('$title','$link','$image','$newdate');";
                $db->query($insertion);
          }

          $i++;

      }
}

function get_news($db) {

  $articles = "SELECT * FROM `archive` ORDER BY `article_date` DESC LIMIT 9";
  if(!$result = $db->query($articles)) {
        die('There was an error running the query [' . $db->error . ']');
  }
  $current = $db->query($articles);
  $i = 0;
  $feeds = [];
  while($row = $current->fetch_assoc()) { 
    $feeds[$i]['image'] = $row['article_image'];
    $feeds[$i]['date'] = $row['article_date'];
    $feeds[$i]['title'] = $row['article_title'];
    $feeds[$i]['link'] = $row['article_link'];
    $i++;
  }
  return $feeds;
}

function get_archives ($db) {
    
    $lim = 9;
    $call = "SELECT * FROM `archive` ORDER BY `article_date` DESC LIMIT $lim,5";
    if(!$result = $db->query($call)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $archive = $db->query($call);
    /*$i=0;
    $display = '';*/
    
    while($row = $archive->fetch_assoc()) { 
      /*if($i>4){
        $display = 'no-display';
      } else $display = 'display';*/
      echo '<div class="archive '.$display.'"><a href="'.$row['article_link'].'">'.$row['article_title']."</a>"." ". $row['article_date'].'</div>';
      //$i++;
    }
}

?>