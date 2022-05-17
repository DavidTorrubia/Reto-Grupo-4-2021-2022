var LocationMenuIsDeployed = false;
function LocationMenuDeploy(){
  const Icon = document.getElementById("Content-LocationButton-Icon");
  const Deployable = document.getElementById("Locations");
  if (LocationMenuIsDeployed == false) { 
    Deployable.style.display="flex" 
    LocationMenuIsDeployed = true;
    Icon.style.transform= "rotate(180deg)";
  } else if(LocationMenuIsDeployed == true){ 
    Deployable.style.display="none"
    LocationMenuIsDeployed = false; 
    Icon.style.transform= "rotate(0deg)";
  }
}

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    const Text = document.getElementById("Content-LandingText");
  if ((document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) && window.innerWidth>600) {
    Text.style.opacity="100%";
    Text.style.marginTop="4rem"
  } else if (window.innerWidth>600){
    Text.style.opacity="0%";
    Text.style.marginTop="8rem"
  }
}