<?php


$url = 'https://www.google.com/search?hl=en&gl=us&tbm=nws&authuser=0&q=gold&oq=gold&gs_l=news-cc.3..43j0l9j43i53.1972.3153.0.3577.4.3.0.1.1.0.86.244.3.3.0...0.0...1ac.1.4VMLeI4zbwQ';

$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$html = curl_exec($ch);

curl_close($ch);

$dom = new DOMDocument();

//$dump = $dom->loadHTML($html);
//var_dump($dump);

/*foreach($dom->getElementsByClassName('g _cy') as $link) {
        # Show the <a href>
        echo $link->firstChild;
        echo "<br />";
}*/

?>