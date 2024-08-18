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
    <h1><a href="https://www.google.com/maps/dir/Salem,+Tamil+Nadu/Dindigul,+Tamil+Nadu/@11.013761,77.4160677,9z/am=t/data=!4m14!4m13!1m5!1m1!1s0x3babf1ccf52cba0b:0xee9989007068ca47!2m2!1d78.1460142!2d11.664325!1m5!1m1!1s0x3b00aa57a54881e3:0x765a14068982e6e7!2m2!1d77.9694579!2d10.3623794!3e0?entry=ttu">My Google Map: LINK</a></h1>  
    <div id="map" style="height: 500px; width: 100%;"></div>
    <div>
        <p>
        Here’s the information for the TNSTC-CBE bus services 

        <hr>
        Here are the details you provided:


Bus: 623I
Departure: SALEM 8:52:00
Arrival: DINDIGUL 13:15:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 184A
Departure: SALEM 1:45:00
Arrival: DINDIGUL 6:00:00
Type: EXP
Operator: TNSTC-SLM
<hr>

Bus: 184B
Departure: SALEM 4:00:00
Arrival: DINDIGUL 8:15:00
Type: EXP
Operator: TNSTC-SLM
<hr>

Bus: 184C
Departure: SALEM 11:06:00
Arrival: DINDIGUL 15:30:00
Type: EXP
Operator: TNSTC-SLM
<hr>

Bus: 184D
Departure: SALEM 5:35:00
Arrival: DINDIGUL 10:00:00
Type: EXP
Operator: TNSTC-SLM
<hr>

Bus: 184E
Departure: SALEM 12:53:00
Arrival: DINDIGUL 17:30:00
Type: EXP
Operator: TNSTC-SLM
<hr>

Bus: 184F
Departure: SALEM 15:46:00
Arrival: DINDIGUL 20:15:00
Type: EXP
Operator: TNSTC-SLM

    </div>
</body>
</html>