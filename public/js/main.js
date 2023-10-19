window.onscroll = function() {myFunction()};
var nav = document.getElementById("nav");
var nav1 = document.getElementById("nav1");
var nav2 = document.getElementById("nav2");

function myFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    nav.style.display = "none";
    nav1.style.display = "none";
    nav2.style.display = "flex";
  } else {
    nav.style.display = "flex";
    nav1.style.display = "flex";
    nav2.style.display = "none";
  }
}

// var up = document.getElementById("up");
// window.onscroll = function() {myFunction1()};

// function myFunction1() {
//   if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
//     up.style.display = "flex";
//   } else {
//     up.style.display = "none";
//   }
// }