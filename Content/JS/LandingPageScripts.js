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

/**Script google maps from: https://developers.google.com/maps/documentation/javascript/adding-a-google-map#maps_add_map-html 
*¡NO SE UTILIZA, HAY QUE PAGAR!
function initMap() {
    // The location of Ecoffe (Centro San Valero)
    const ecoffe = { lat: 41.66981, lng: -0.87883 };
    // The map, centered at Ecoffe
    const map = new google.maps.Map(document.getElementById("Map"), {
      zoom: 4,
      center: ecoffe,
    });
    // The marker, positioned at Ecoffe
    const marker = new google.maps.Marker({
      position: ecoffe,
      Map: map,
    });
  }
  window.initMap = initMap;
  */