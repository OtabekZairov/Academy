var mymap = L.map('mapid').setView([38.56229, 68.8094], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Shohrukh Sultanov &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoic2hvaHJ1a2giLCJhIjoiY2s2bjh3ajhnMHNlOTNubGk0aDNvOTRtaSJ9.a55e4G9CKB8XwTCitkBT3g'
}).addTo(mymap);

var marker = L.marker([38.56229, 68.8094]).addTo(mymap);
marker.bindPopup("<b>Бизнес Центр 'Созидание'</b>").openPopup();
// Вывод пользовательских маркеров

var storedPoints = localStorage.getItem("storedPoints");
var mySet = new Set(JSON.parse(storedPoints));

mySet.forEach(function (key, value, Set){
 	L.marker(key).addTo(mymap);
});
// Конец




var popup = L.popup();
// var mySet = new Set();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Вы клинкнули на точку с координатами " + e.latlng.toString())
        .openOn(mymap);
    var usermarker = L.marker(e.latlng).addTo(mymap);
    mySet.add(e.latlng);
	var storable = JSON.stringify(Array.from(mySet.values()));
	localStorage.setItem("storedPoints", storable);
}
mymap.on('click', onMapClick);