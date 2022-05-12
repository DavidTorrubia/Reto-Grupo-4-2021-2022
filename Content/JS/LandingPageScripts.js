var currentCarrouselPosition = 2;
function CarrouselMovement(direction){
    const Carrousel1 = document.getElementById("Content-Carrousel-Container-Item-1")
    const Carrousel2 = document.getElementById("Content-Carrousel-Container-Item-2")
    const Carrousel3 = document.getElementById("Content-Carrousel-Container-Item-3")
    if (currentCarrouselPosition == 2){
        if (direction == 1){
            Carrousel1.style.left="0%"
            Carrousel2.style.left="90%"
            Carrousel3.style.left="180%"
            currentCarrouselPosition= 1;
        } else if (direction == 0){
            Carrousel1.style.left="-180%"
            Carrousel2.style.left="-90%"
            Carrousel3.style.left="0%"
            currentCarrouselPosition= 3;
        }
    } else if (currentCarrouselPosition == 1){

    }
}