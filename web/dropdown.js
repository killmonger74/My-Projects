$(document).ready(function(){
    let d=$(".grapes");
    console.log(d);
    d.on("mouseover  click",function(e){
      d.css("color","red");
        $((((this).children)[1]).parentElement).css({"background-color":"transparent","color":"#fff"});
    $(((this).children)[1]).fadeIn("fast").css({"background":"transparent"});

        });
        
        d.on("mouseleave touch",function(e){
            
        $((((this).children)[1]).parentElement).css({"background":"transparent","color":"#111"});
    $(((this).children)[1]).fadeOut("fast");

        })
});