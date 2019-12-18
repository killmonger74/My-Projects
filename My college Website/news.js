/*$.ajax({
    url: "hello.txt",
    method:"GET",
    dataType: "text",
    success: function (response) {
        console.log(response);
        
    },
    error:function(xhr){
        console.log("happens");
    }
});*/



$(function(){var dd;
  $.getJSON("sending.json",gotdata);
function gotdata (data, textStatus, jqXHR) {
    dd=data;
   help(dd);
      } 
      function help(){
          let s=$(".response a");
        $(s).each(element => {
       s[element].innerHTML=dd[element].a;
            
        }); 
    }
      
     
})
