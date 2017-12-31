<?php

include "../track-user.php";



$user_ip = getUserIP();




?>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('#view').click(function(e){
        e.preventDefault();
        console.log('clicked, ok.');
        $.ajax({
            type: "GET",
            url: "report.php",
            dataType: 'html',      
            success: function(response) {
                $('#logs').html(response);
            },
            error: function( error ) {

                console.log( error );
            }
        });
    });

});
</script>
<br>
<a href="" id="view">View logs</a>
<div id="logs">
</div>