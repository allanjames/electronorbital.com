<?php


function getUserIP() {
    include "commence.php";
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
        echo '<br>'.$ip.'<br>';
    }
    $date = date('y-m-d');
    $host = gethostbyaddr($ip);
    echo 'HOST:'.$host;
    if($host != "XXXXXXXXXXXXXXXXXXXXXXXXXX") :
        if($db->query($insertion)){
            echo "<br>"."Record inserted into database.";
            } else {
                die ('insertion failed');
            }
    endif;
}

?>