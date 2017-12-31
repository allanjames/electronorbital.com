<?php

/* Site Footer */


?>
<?php if($page->id==1) : ?>
    <a href="" id="view">Visitor logs</a>
    <div id="logs">
    </div>
</div>
    <script>
    $(document).ready(function(){
        $('#view').click(function(e){
            e.preventDefault();
            console.log('clicked, ok.');
            $.ajax({
                type: "GET",
                url: "/second/report.php",
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
<?php endif; ?>
</div> <!-- end content -->
</body>
</html>

