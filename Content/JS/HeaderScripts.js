var Menuisdeployed = false;
var LoginMenuIDeployed = false;
var UserDropIsDeployed = false;
var SignUpMenuIDeployed = false;
function MenuDeploy () {
    const Boton = document.getElementById("Header-Item-Left-Container-Dropbutton")
    const Desplegable = document.getElementById("Header-Item-Left-Container-Dropbutton-Content")  
    if (Menuisdeployed == false){
        Boton.style.backgroundColor="#7f2906";
        Desplegable.classList.add("deployed")
        Menuisdeployed = true;
    } else if (Menuisdeployed == true){
        Boton.style.backgroundColor="transparent";
        Desplegable.classList.remove("deployed")
        Menuisdeployed = false;
    }
    
}
function UserMenuDeploy () {
    const Boton = document.getElementById("Header-Item-Right-Container-UserDropButton")
    const Desplegable = document.getElementById("Header-Item-Right-Container-UserDropButton-Content")
    const DesplegableLogin = document.getElementById("Header-Item-Right-Container-UserDropButton-Content-LogInMenu");
    const DesplegableSignUp = document.getElementById("Header-Item-Right-Container-UserDropButton-Content-SignUpMenu");
    if (UserDropIsDeployed == false){
        Boton.style.backgroundColor="#7f2906";
        Desplegable.classList.add("deployed");
        UserDropIsDeployed = true;
    } else if (UserDropIsDeployed == true){
        Boton.style.backgroundColor="transparent";
        Desplegable.classList.remove("deployed");
        if (DesplegableLogin != null){
            DesplegableLogin.style.display="none";
            DesplegableSignUp.style.display="none";
        } 
        LoginMenuIDeployed = false;
        UserDropIsDeployed = false;
        SignUpMenuIDeployed = false;
    }
}
function LoginDeploy(){
    const Desplegable = document.getElementById("Header-Item-Right-Container-UserDropButton-Content-LogInMenu");
    const Desplegable1 = document.getElementById("Header-Item-Right-Container-UserDropButton-Content-SignUpMenu");
    if (LoginMenuIDeployed == false) {
        Desplegable.style.display="block";
        LoginMenuIDeployed = true;
        Desplegable1.style.display="none"
        SignUpMenuIDeployed = false;
    } else if (LoginMenuIDeployed == true) {
        Desplegable.style.display="none";
        LoginMenuIDeployed = false;
    }
}
function SignUpDeploy(){
    const Desplegable = document.getElementById("Header-Item-Right-Container-UserDropButton-Content-SignUpMenu");
    const Desplegable1 = document.getElementById("Header-Item-Right-Container-UserDropButton-Content-LogInMenu");
    if (SignUpMenuIDeployed == false) {
        Desplegable.style.display="block";
        SignUpMenuIDeployed = true;
        Desplegable1.style.display="none";
        LoginMenuIDeployed = false;
    } else if (SignUpMenuIDeployed == true) {
        Desplegable.style.display="none";
        SignUpMenuIDeployed = false;
    }
}