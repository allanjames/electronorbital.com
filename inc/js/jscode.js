$(document).ready(function(){

		
				

		$('#title').mousedown(function(){
			
			$(this).css("background-color","orange");
		});
		$("#title").blur(function(){
			$(this).css("background-color","none");
			});
		$("#title").mouseleave(function(){
			$(this).css("background-color","none");
			});
                /*$("nav a").mouseover(function(){
			$(this).css("background-color","orange");
			});
                $("nav a").mouseleave(function(){
			$(this).css("background-color","#DEDEDE");
			});
                $("nav a").click(function(){
			$(this).css("background-color","red");
			});*/
		$('#something').click(function() {
    			location.reload();
			});
		$("#button").click(function(){

			document.getElementById("hint").innerHTML="<h3>Enter english word to perform search.</h3>";
		});
		$("input").keydown(function(event){ 
			if(event.which == 8){
				document.getElementById("hint").innerHTML="<h3>Enter english word to perform search.</h3>";	
			}
			
		});

		
		$("input").keyup(function(){
  			$("input").css("background-color","yellow");
			$.getJSON("dictionary.json", function(data)
			{
				
				$.each(data.words, function(key, element){
					//alert(element.english);
					char = document.getElementById("flag").value;
					sample=element.english;
					abb = sample.substring(1,0);
					if(abb == char)
						{
							document.getElementById("hint").innerHTML+= sample + "<br>";
								
						}
					
				});
					
			});

			
		}); 
		

		

});
