document.getElementById("zawartosc").innerHTML = "<img class=' rounded shadow bg-dark p-2 mb-3 img-fluid max-width: 100%;'id='slider-image' height='auto'/><div id='slider-counter' style='text-align:center; font-size:30px;'></div>";
var obrazy = [
     "obrazy/pierwsze.jpg",
     "obrazy/drugie.jpg",
     "obrazy/trzecie.jpg",
];
var licznik=0;
var intervalSlider;
var aktualizujSlider = function(){
   if(licznik == obrazy.length) licznik = 0;
   document.getElementById("slider-image").src = obrazy[licznik];

var postep = "";
for(var i=0; i<obrazy.length;i++){
   if(i == licznik) postep +="X";
   else postep += "-";
}
document.getElementById("slider-counter").innerHTML = postep;
licznik++;
}

document.getElementById("slider-image").onclick=function(){
   if(intervalSlider){
       clearInterval(intervalSlider);
       document.getElementById("slider-counter").innerHTML+=" (PAUZA)";
       intervalSlider = null;
   }else{
       aktualizujSlider();
       intervalSlider=setInterval(aktualizujSlider, 2000);
   }
}

document.getElementById("slider-image").onclick();
