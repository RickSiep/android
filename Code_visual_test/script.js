
 window.onscroll = function() {stickyBar()};

 var navbar = document.getElementById("nav");
 var sticky = navbar.offsetTop;

 function stickyBar() {
   if (window.pageYOffset >= sticky) {
     navbar.classList.add("sticky")
   } else {
     navbar.classList.remove("sticky");
   }
 }
 AOS.init({
   duration: 1200,
 });
