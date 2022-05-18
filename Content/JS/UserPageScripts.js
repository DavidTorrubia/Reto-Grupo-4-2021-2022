var CreateAddresDeployed = false;
var RemoveAddresDeployed = false;

function DeployCreateAddres() {
    const Deployable1 = document.getElementById("Content-UserConfig-Item-Directions-Content-Create");
    const Deployable2 = document.getElementById("Content-UserConfig-Item-Directions-Content-Remove");
    if (CreateAddresDeployed == false) {
        Deployable1.style.display = "flex";
        CreateAddresDeployed = true;
        Deployable2.style.display = "none";
        RemoveAddresDeployed = false;
    } else if (CreateAddresDeployed == true) {
        Deployable1.style.display = "none";
        CreateAddresDeployed = false;
    }
}

function DeployRemoveAddres() {
    const Deployable1 = document.getElementById("Content-UserConfig-Item-Directions-Content-Create");
    const Deployable2 = document.getElementById("Content-UserConfig-Item-Directions-Content-Remove");
    if (RemoveAddresDeployed == false) {
        Deployable2.style.display = "flex";
        RemoveAddresDeployed = true;
        Deployable1.style.display = "none";
        CreateAddresDeployed = false;
    } else if (RemoveAddresDeployed == true) {
        Deployable2.style.display = "none";
        RemoveAddresDeployed = false;
    }
}
