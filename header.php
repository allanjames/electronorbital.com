<?php

/*SiteHeader File */


function show_header($page) {

?>
<head>
<meta charset="utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="/inc/img/favicon-96x96.png">
<link rel="stylesheet" type="text/css" href="inc/css/style.css">
<title><?php echo $page->page_title; ?></title>
<meta property="og:title" content="<?php echo $page->title; ?>" />
<meta property="og:type" content="text" />
<meta property="og:url" content="http://electronorbital.com/" />
<meta property="og:image" content="http://electronorbital.com/map1.GIF" />
<meta property="og:description" content="<?php echo $page->description; ?>" />
<meta name="description" content="<?php echo $page->description; ?>" />

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script async type="text/javascript" src="/inc/js/jscode.js"></script>
<?php }

function load_scripts($id) { 

    if($id == 3) {
    ?>
    
        <script src="/inc/js/getXMLHttpRequestObject.js" type="text/javascript"></script>
        <script>

        function queryDb() {
            var inputStr = encodeURIComponent(document.getElementById("flag").value);
            console.log(document.getElementById("flag").value);
            var encodedStr = "flag=" + inputStr;
            var xmlhttp=getXMLHttpRequestObject();      //set up variable to hold XMLHttpRequest Object
            xmlhttp.onreadystatechange = function() {       
                    showChars(xmlhttp);
            }
            xmlhttp.open("POST","jsondecode.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send(encodedStr);
        }

        function showChars(xmlhttp) {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("span1").innerHTML=xmlhttp.responseText;
                }
        }

        function whichButton(event) {
            console.log(event);
            /*if(event.keyCode==8){    
                document.getElementById("hint").innerHTML = '';
            }*/
            if(event.keyCode==13){
                console.log('enter');
                queryDb();
            }
        }   

        </script>
        
    <?php } 

    if($id == 1) {

    ?>

        <script>
            $(document).ready(function(){
                
                $('.view-more').click(function(){
                    var lim = $('.library').attr('data-limit');
                    $('#loader').toggle();
                    //$(".library").before('<div id="loader"><img src = "/loading.gif" /></div>');
                    console.log(lim);
                    $.ajax({
                        url: "process.php",
                        data: { dt: lim },
                        type: "POST",
                        success: function(response) {
                            console.log(response);
                            var obj = "";
                            for(var h=0; h<5; h++) {
                                obj = obj + "<div class='archive'><a href='"+response[h]['link']+"'>"+response[h]['title']+" "+response[h]['date']+"</a></div>";
                            }
                            console.log($(".library .archive:last-of-type"));
                            setTimeout(function(){
                                        $('#loader').toggle();
                                        $(".view-more").before(obj);
                                        },1500);
                        }
                    });
                    lim = parseInt(lim) + 5;
                    $('.library').attr('data-limit', +lim);
                    
                });
            });
        </script>
    <?php } ?>
<?php } ?>

<?php  function end_header() {
    //include_once("tracking.php");
?>
   </head>

    <body class= "<?php $test = substr($_SERVER['REQUEST_URI'],1); if($test=="") { echo "home";} else echo substr($_SERVER['REQUEST_URI'],1,strlen($_SERVER['REQUEST_URI'])-5); ?>" >
    <nav>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>" data-url="http://<?php echo $_SERVER['HTTP_HOST'] ?>">main</a>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/dictionary">dictionary</a>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/rand_word">static page with random selection</a>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/alterations">name reversal generator</a>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/about">about</a>
    </nav>
    <div id="inner-content">
    
<?php } ?>
