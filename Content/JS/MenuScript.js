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

function Busqueda(){
  let Barra_busqueda = document.getElementById('Content-Menu-Searchbar').value.toLowerCase()
  let Producto = document.getElementsByClassName('Content-Products-Container-Item-Header');
    
  for (i = 0; i < Producto.length; i++) { 
      if (!Producto[i].innerHTML.toLowerCase().includes(Barra_busqueda)) {
          Producto[i].parentNode.style.display="none";
      }else{
        Producto[i].parentNode.style.display="block";
      }
}
}

function ProductDetailsPage(id){
  alert('Vas a cambiar de pagina '+id);
  let element = document.getElementById("P" + id);
  element.innerHTML = "<?php $_SESSION['Menu'] = " + id + " ;echo $_SESSION['Menu']; ?>";
  //document.location.assign("ProductDetails.php");
  } 
