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

var JobVacanciesIsDeployed = false;
function JobVacanciesDeploy(){
  const Deployable = document.getElementById("Content-WorkWithUs-JobVacancies");
  if (JobVacanciesIsDeployed == false) { 
    Deployable.style.display="flex"; 
    JobVacanciesIsDeployed = true;
  } else if(JobVacanciesIsDeployed == true){ 
    Deployable.style.display="none";
    JobVacanciesIsDeployed = false; 
  }
}

var ORPIsDeployed = false;
function OccupationalRiskPreventionDeploy(){
  const Deployable = document.getElementById("Content-WorkWithUs-OccupationalRiskPrevention");
  if (ORPIsDeployed == false) { 
    Deployable.style.display="flex"; 
    ORPIsDeployed = true;
  } else if(JORPIsDeployed == true){ 
    Deployable.style.display="none";
    ORPIsDeployed = false; 
  }
}