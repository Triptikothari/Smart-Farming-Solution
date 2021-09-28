$(document).ready(function(){
    $("#register").click(function(){
        var password = $("#password").val()
        var confirm_pass = $("#confirm_password").val()
         
        if(password != confirm_pass)
        {
            alert("error password is not matching");
        }
        else
        {
           alert ("you can continue password match");
        }
        
    })
  })
