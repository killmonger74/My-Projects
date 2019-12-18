let b=document.querySelector("#hide4");
let c=document.querySelector("#hide5");
b.addEventListener("click",darling);
c.addEventListener("click",darling);
let d=document.querySelector("#button");
d.addEventListener("click",sunn1);
let b1=document.querySelector("#hide2");
let c1=document.querySelector("#hide3");
b1.addEventListener("click",myname);
c1.addEventListener("click",myname);
document.querySelector("#forget").addEventListener("click",create);
document.querySelector("#button1").addEventListener("click",sunn);

document.querySelector("#hide1").addEventListener("click",my);
document.querySelector("#hide").addEventListener("click",my);
document.querySelector("#button7").addEventListener("click",create1);


function sunn(){
         

    var x=document.getElementById("kuldeep");
    var y=document.getElementById("lol");
    var reg=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/

    let f=y.value;
    let t=x.value;
            if(f!=""&&t!=""){
               if(f.match(reg)){

   }


    else{
       
        alert("Please fill Valid Email");
        document.getElementById("lol").focus;
    } }

   
}
function sunn1(){
    var a=document.getElementById("lol1");
    var p=document.getElementById('kuldeep1');
    var q=document.getElementById('rana');
    var reg=/^[^ ]+@[^ ]{2,}\.[a-z]{2,3}$/

    if(p.value===q.value){


     if((lol1.value.match(reg)))
     {continue;  
     }
     else
    {  alert("please enter valid email");  }
     
    }
    else{
        alert("password are not samme");
    }

    
}
function  my(){
    var x=document.getElementById('kuldeep');
    var y=document.getElementById('hide1');
    var z=document.getElementById('hide');
    if(x.type==="password"){
        x.type="text";
        y.style.display= "none";
        z.style.display="block";


    }
   else{
        x.type="password";
        y.style.display="block";
        z.style.display="none";
        

    }
}
function  darling(){
    var x=document.getElementById('rana');
    var y=document.getElementById('hide5');
    var z=document.getElementById('hide4');
    if(x.type==="password"){
        x.type="text";
        y.style.display= "none";
        z.style.display="block";


    }
   else{
        x.type="password";
        y.style.display="block";
        z.style.display="none";
        

    }
}
function  myname(){
    var x=document.getElementById('kuldeep1');
    var y=document.getElementById('hide3');
    var z=document.getElementById('hide2');
    if(x.type==="password"){
        x.type="text";
        y.style.display= "none";
        z.style.display="block";


    }
   else{
        x.type="password";
        y.style.display="block";
        z.style.display="none";
        

    }
}

var front=document.getElementById("front");
var back=document.getElementById("back");
function create()  {
    front.style.display="none";
    back.style.display="block";
}
function create1()  {
    back.style.display="none";
    front.style.display="block";
}

