window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    const Text = document.getElementById("Content-BusinessValues-Container");
  if ((document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) && window.innerWidth>600) {
    Text.style.opacity="100%";
    Text.style.marginTop="4rem"
  } else if (window.innerWidth>600){
    Text.style.opacity="0%";
    Text.style.marginTop="8rem"
  }
}