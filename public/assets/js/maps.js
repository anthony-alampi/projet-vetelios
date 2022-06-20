var map = L.map("map").setView([46.785, 4.9], 17);
var marker = L.marker([46.785, 4.9]).addTo(map);
marker
    .bindPopup(
        "<b>Clinique Vétélios</b><br>Zac du champ chassy, Rdpt des Jardiniers, 71380 Châtenoy-en-Bresse."
    )
    .openPopup();

L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYW50aG9ueWZyb250YmFja2RldiIsImEiOiJjbDNkM2ExbHgwMXBmM2RxbGt2emlnMjBoIn0.GPPVI637YecPPUzHkc_X5w",
    {
        attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 12,
        id: "mapbox/streets-v9",
        tileSize: 512,
        zoomOffset: -1,
        accessToken:
            "pk.eyJ1IjoiYW50aG9ueWZyb250YmFja2RldiIsImEiOiJjbDJvazlxZWwxODBuM2Nua215ZTZ4dTZvIn0.xLYsHImIe1zTD4VYHh22Ew",
    }
).addTo(map);
