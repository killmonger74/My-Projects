
    let d=   document.querySelector(".carousel-slide");
    const carouselImages=document.querySelectorAll(".carousel-slide img");
    const prev=document.querySelector("#prev");
    const next=document.querySelector("#next");
    let counter=1;
    const size=carouselImages[0].clientWidth;
    d.style.transform="translateX("+(-size*counter)+"px)";
    next.addEventListener("click",function(){
        if(counter>=carouselImages.length-1)return;
        d.style.transition="transform 0.4s ease-in-out";
        counter++;
    d.style.transform='translateX('+(-size*counter)+'px)';

    });
    prev.addEventListener("click",function(){
         if(counter<=0)return;
        d.style.transition="transform 0.4s ease-in-out";
        counter--;
    d.style.transform='translateX('+(-size*counter)+'px)';
    });
  d.addEventListener("transitionend",()=>{
    if(carouselImages[counter].id==='lastclone'){
        d.style.transition="none";
        counter=carouselImages.length-2;
        
    d.style.transform='translateX('+(-size*counter)+'px)';

    }
    if(carouselImages[counter].id==='firstclone'){
        d.style.transition="none";
        counter=carouselImages.length-counter;
        
    d.style.transform='translateX('+(-size*counter)+'px)';

    }
  });
  function animate(){
    if(counter>=carouselImages.length-1)return;
    d.style.transition="transform 0.4s ease-in-out";
    counter++;
   d.style.transform='translateX('+(-size*counter)+'px)';
  }
  setInterval(animate,"10000");