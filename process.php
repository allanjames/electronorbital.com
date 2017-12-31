<?php

include "dbconnect.php";

header("Content-Type: application/json");



if(isset($_POST['dt'])) {
    $lim = $_POST['dt'];
    get_archive($db,$lim);
} else {
    echo "Post variable is not set.";
}

function get_archive($db,$lim) {

    $caller = "SELECT * FROM `archive` ORDER BY `article_date` DESC LIMIT $lim,10";
    if(!$result = $db->query($caller)) {
        die('There was an error running the query [' . $db->error . ']');
    }
    $block = [];
    $i = 0;
    while($row = $result->fetch_assoc()) {
        
    	   $block[$i]['title'] = $row['article_title'];
           $block[$i]['link'] = $row['article_link'];
           $block[$i]['date'] = $row['article_date'];
    	   $i++;
        
    }
    header("Content-Type: application/json");
    echo json_encode($block);
    
}

?>