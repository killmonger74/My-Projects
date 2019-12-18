$(document).ready(function(){let d=$(".response a ");
    $(".response").css({"font-size":"20px"});

    function news(){
       
    $(d).each(element=>{ 
         $(d[element]).fadeOut('slow').delay("1000").fadeIn("slow").delay("4000");})
        
}
    setInterval(news,'20000');
  });

 
    
    
