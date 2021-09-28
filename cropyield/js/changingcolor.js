$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
          $("#header").css("background" , "crimson");
        }
  
        else{
            $("#header").css("background" , "transparent");  	
        }
        
        
    })
  })

