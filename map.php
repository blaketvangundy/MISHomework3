<?php
include "view-header.php";
// Connect to the database (ensure you have a valid connection to MySQL)
$mysqli = new mysqli('mis-4013-blakevangundy-db.mysql.database.azure.com', 'blakevangundy4013', 'R@chel1Bl@ke2', 'homework#3');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to get project locations
$sql = "SELECT project_id, project_name, project_location FROM project";
$result = $mysqli->query($sql);

$locations = [];
while ($row = $result->fetch_assoc()) {
    $locations[] = $row;
}
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Locations on Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* Set the size of the map */
        #map {
            height: 1000px;
            width: 100%;
        }
    </style>
</head>
<body>

<h1>Project Locations</h1>
<div id="map"></div>

<!-- Include Leaflet.js -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
// Store the locations in JavaScript (replace this with PHP data)
var locations = <?php echo json_encode($locations); ?>;

var map = L.map('map').setView([37.7749, -122.4194], 4);  // Center map on US (latitude, longitude)

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Loop through the locations and place markers
locations.forEach(function(location) {
    // You can use geocoding services like Nominatim to get coordinates for each address
    var address = location.project_location;
    
    // Use a free geocoding service (Nominatim by OpenStreetMap)
    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                // Get latitude and longitude from geocoding result
                var lat = data[0].lat;
                var lon = data[0].lon;
                
                // Add marker to the map
                L.marker([lat, lon])
                    .addTo(map)
                    .bindPopup('<b>Project ID:</b> ' + location.project_id + '<br><b>Location:</b> ' + address);
            } else {
                console.log("Address not found: " + address);
            }
        })
        .catch(error => {
            console.error('Error during geocoding:', error);
        });
});
</script>

</body>
</html>
