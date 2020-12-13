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

    const sensorInfo = '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Sensor Info</h1>' +
    '<div id="bodyContent">' +
    "<p>Location: University of Houston</p>" +
    "<p>AQI values: (will update when I can read from database)</p>" +
    "<p>Status: (description of health concern according to AQI values)</p>" +
    "</div>" +
    "</div>";

    const infowindow = new google.maps.InfoWindow({
      content: sensorInfo,
    });

    marker.addListener("click", () => {
      infowindow.open(map, marker);
    });
  }
