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

setTimeout(() => {
}, 1000);