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