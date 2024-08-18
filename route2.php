<!DOCTYPE html>
<html>
<head>
    <title>Google Maps API with PHP</title>
    <script src="https://www.google.com/maps/dir/Erode,+Tamil+Nadu/Tiruppur,+Tamil+Nadu/@11.2270624,77.3651964,11z/am=t/data=!4m14!4m13!1m5!1m1!1s0x3ba96f46762f4671:0xd97da6e3d9c7f75e!2m2!1d77.7171642!2d11.3410364!1m5!1m1!1s0x3ba907b0424d75b9:0x4750551698a91687!2m2!1d77.3410656!2d11.1085242!3e0?entry=ttu"></script>
    <script>
        function initMap() {
            // Specify the location
            var location = { lat: -34.397, lng: 150.644 };

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 8
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: location,
                title: 'Hello World!'
            });
        }
    </script>
</head>
<body onload="initMap()">
    <h1><a href="https://www.google.com/maps/dir/Tiruppur,+Tamil+Nadu/Erode,+Tamil+Nadu/@11.2262197,77.3642735,11z/am=t/data=!4m14!4m13!1m5!1m1!1s0x3ba907b0424d75b9:0x4750551698a91687!2m2!1d77.3410656!2d11.1085242!1m5!1m1!1s0x3ba96f46762f4671:0xd97da6e3d9c7f75e!2m2!1d77.7171642!2d11.3410364!3e0?entry=ttu">My Google Map: LINK</a></h1>  
    <div id="map" style="height: 500px; width: 100%;"></div>
    <div>
        <p>
        Here’s the information for the TNSTC-CBE bus services between Tiruppur and Erode

        <hr>
Bus Service 05402:

Departure from Tiruppur: 04:00 AM
Arrival in Erode: 05:30 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 05519:

Departure from Tiruppur: 05:10 AM
Arrival in Erode: 06:40 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 05420:

Departure from Tiruppur: 05:15 AM
Arrival in Erode: 06:45 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 736 G:

Departure from Tiruppur: 05:35 AM
Arrival in Erode: 07:05 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 05514:

Departure from Tiruppur: 06:24 AM
Arrival in Erode: 07:54 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 05512:

Departure from Tiruppur: 06:30 AM
Arrival in Erode: 08:00 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 747 B:

Departure from Tiruppur: 07:25 AM
Arrival in Erode: 08:55 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 747 A:

Departure from Tiruppur: 08:35 AM
Arrival in Erode: 10:05 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 05519 (Second Run):

Departure from Tiruppur: 08:45 AM
Arrival in Erode: 10:15 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 05420 (Second Run):

Departure from Tiruppur: 08:50 AM
Arrival in Erode: 10:20 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
<hr>
Bus Service 747 D:

Departure from Tiruppur: 09:27 AM
Arrival in Erode: 11:00 AM
Bus Type: ORD (Ordinary)
Bus Operator: TNSTC-CBE
        </p>
    </div>
</body>
</html>
