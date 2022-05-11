var Menuisdeployed = false;
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
var UserDropIsDeployed = false;
function UserMenuDeploy () {
    const Boton = document.getElementById("Header-Item-Right-Container-UserDropButton")
    const Desplegable = document.getElementById("Header-Item-Right-Container-UserDropButton-Content")
    if (UserDropIsDeployed == false){
        Boton.style.backgroundColor="#7f2906";
        Desplegable.classList.add("deployed");
        UserDropIsDeployed = true;
    } else if (UserDropIsDeployed == true){
        Boton.style.backgroundColor="transparent";
        Desplegable.classList.remove("deployed");
        UserDropIsDeployed = false;
    }
}