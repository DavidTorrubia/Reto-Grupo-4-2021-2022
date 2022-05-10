var isdeployed = false;
function MenuDeploy () {
    const Boton = document.getElementById("Header-Item-Left-Container-Dropbutton")
    const Desplegable = document.getElementById("Header-Item-Left-Container-Dropbutton-Content")  
    if (isdeployed == false){
        Boton.style.backgroundColor="#7f2906";
        Desplegable.style.display="block";
        isdeployed = true;
    } else if (isdeployed == true){
        Boton.style.backgroundColor="transparent";
        Desplegable.style.display="none";
        isdeployed = false;
    }
    
}