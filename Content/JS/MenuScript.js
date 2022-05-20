function ScrollUp() {
  window.scrollTo({top: 0 , behavior: "smooth"})
}

function ScrollToDyC() {
  const ScrollElement = document.getElementById("Menu-Drinks-Coffee");
  window.scrollTo({ top: ScrollElement.offsetTop - 150, behavior: "smooth" });
}
function ScrollToPastries() {
  const ScrollElement = document.getElementById("Menu-Pastries");
  window.scrollTo({ top: ScrollElement.offsetTop - 150, behavior: "smooth" });
}
function ScrollToSnacks() {
  const ScrollElement = document.getElementById("Menu-Snacks");
  window.scrollTo({ top: ScrollElement.offsetTop - 150, behavior: "smooth" });
}

window.onscroll = function () {
  scrollFunction();
};
function scrollFunction() {
  var mysearchbox = document.getElementById("Content-Menu-Searchbar");
  var mybutton = document.getElementById("Content-Menu-SlideUp");
  if (
    document.body.scrollTop > 400 ||
    document.documentElement.scrollTop > 400
  ) {
    mybutton.style.display = "block";
  } else if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    mysearchbox.style.position = "fixed";
    mysearchbox.style.top = "8rem";
  } else {
    mybutton.style.display = "none";
    mysearchbox.style.position = "relative";
    mysearchbox.style.top = "2rem";
  }
}
