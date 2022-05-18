var PaymentContainerIsDeployed = false;
function PaymentDeploy(){
  const Deployable = document.getElementById("Content-Payment");
  if (PaymentContainerIsDeployed == false) { 
    Deployable.style.display="flex"; 
    PaymentContainerIsDeployed = true;
  } else if(PaymentContainerIsDeployed == true){ 
    Deployable.style.display="none";
    PaymentContainerIsDeployed = false; 
  }
}