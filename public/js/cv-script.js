$(function(){
   var tempts = 20;
   var pub = document.getElementById('pub');
   var compteur = setInterval(function(){
       tempts--;

       if (tempts == 15) {
       	pub.src = '../images/kerge.jpg';
       }
       if (tempts == 10) {
       	pub.src = '../images/sam.jpg';
       }
       if (tempts == 5) {
       	pub.src = '../images/chap.jpg';
       	tempts = 20;
       }
   },1000);
});