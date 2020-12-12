// Initialize and add the map
function initMap() {
    // The location of University of Houston
    const UH = { lat: 29.71999, lng: -95.34233 };
    // The map, centered at University of Houston
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 17,
      center: UH,
    });
    // The marker, positioned at University of Houston
    const marker = new google.maps.Marker({
      position: UH,
      map: map,
    });
  }
