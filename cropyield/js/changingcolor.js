$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
          $("#header").css("background" , "transparent");
        }
  
        else{
            $("#header").css("background" , "blue");  	
        }
        
        
    })
  })