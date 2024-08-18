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
    <h1><a href="https://www.google.com/maps/dir/Erode,+Tamil+Nadu/Salem,+Tamil+Nadu/@11.5042852,77.773251,11z/am=t/data=!4m14!4m13!1m5!1m1!1s0x3ba96f46762f4671:0xd97da6e3d9c7f75e!2m2!1d77.7171642!2d11.3410364!1m5!1m1!1s0x3babf1ccf52cba0b:0xee9989007068ca47!2m2!1d78.1460142!2d11.664325!3e0?entry=ttu">My Google Map: LINK</a></h1>  
    <div id="map" style="height: 500px; width: 100%;"></div>
    <div>
        <p>
        Bus: 410E
Departure: SALEM 9:10:00
Arrival: ERODE 10:55:00
Type: DLX
Operator: TNSTC-SLM
<hr>
Bus: 467B
Departure: SALEM 13:14:00
Arrival: ERODE 14:50:00
Type: DLX
Operator: TNSTC-SLM
<hr>
Bus: 10013
Departure: SALEM 8:25:00
Arrival: ERODE 10:05:00
Type: EXP
Operator: TNSTC-CBE
<hr>
Bus: 10035
Departure: SALEM 11:58:00
Arrival: ERODE 13:38:00
Type: EXP
Operator: TNSTC-CBE
<hr>
Bus: 155A
Departure: SALEM 1:10:00
Arrival: ERODE 2:50:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 155B
Departure: SALEM 21:51:00
Arrival: ERODE 23:15:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 155C
Departure: SALEM 0:00:00
Arrival: ERODE 1:30:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 158A
Departure: SALEM 11:43:00
Arrival: ERODE 13:25:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 250B
Departure: SALEM 1:30:00
Arrival: ERODE 3:10:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 250B
Departure: SALEM 6:51:00
Arrival: ERODE 8:31:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 250B
Departure: SALEM 10:57:00
Arrival: ERODE 12:37:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 250B
Departure: SALEM 15:20:00
Arrival: ERODE 16:00:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 344A
Departure: SALEM 18:42:00
Arrival: ERODE 23:05:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 458A
Departure: SALEM 18:15:00
Arrival: ERODE 20:00:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 472A
Departure: SALEM 1:50:00
Arrival: ERODE 3:00:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 476A
Departure: SALEM 10:00:00
Arrival: ERODE 11:37:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 558A
Departure: SALEM 7:23:00
Arrival: ERODE 10:00:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 976A
Departure: SALEM 9:00:00
Arrival: ERODE 10:40:00
Type: EXP
Operator: TNSTC-SLM
<hr>
Bus: 10030
Departure: SALEM 20:03:00
Arrival: ERODE 21:43:00
Type: ORD
Operator: TNSTC-CBE
<hr>
Bus: 10101
Departure: SALEM 10:50:00
Arrival: ERODE 12:25:00
Type: ORD
Operator: TNSTC-CBE
<hr>
Bus: 10101
Departure: SALEM 18:59:00
Arrival: ERODE 20:39:00
Type: ORD
Operator: TNSTC-CBE
<hr>
Bus: 11901
Departure: SALEM 19:44:00
Arrival: ERODE 21:24:00
Type: ORD
Operator: TNSTC-CBE
<hr>
Bus: 12104
Departure: SALEM 19:09:00
Arrival: ERODE 21:27:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 12114
Departure: SALEM 21:36:00
Arrival: ERODE 23:16:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 12302
Departure: SALEM 2:12:00
Arrival: ERODE 3:52:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 15014
Departure: SALEM 21:20:00
Arrival: ERODE 23:00:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 15202
Departure: SALEM 20:58:00
Arrival: ERODE 22:38:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 15710
Departure: SALEM 3:20:00
Arrival: ERODE 5:00:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 15718
Departure: SALEM 7:05:00
Arrival: ERODE 8:45:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 16504
Departure: SALEM 21:30:00
Arrival: ERODE 23:10:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 16520
Departure: SALEM 16:43:00
Arrival: ERODE 18:23:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 16521
Departure: SALEM 23:00:00
Arrival: ERODE 0:40:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 24601
Departure: SALEM 1:35:00
Arrival: ERODE 3:15:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 5502
Departure: SALEM 0:43:00
Arrival: ERODE 2:23:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 5511
Departure: SALEM 2:08:00
Arrival: ERODE 3:48:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6601
Departure: SALEM 8:52:00
Arrival: ERODE 10:32:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6601
Departure: SALEM 13:26:00
Arrival: ERODE 15:06:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6601
Departure: SALEM 17:35:00
Arrival: ERODE 19:15:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6601
Departure: SALEM 21:55:00
Arrival: ERODE 23:35:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6602
Departure: SALEM 7:18:00
Arrival: ERODE 8:58:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6602
Departure: SALEM 11:05:00
Arrival: ERODE 12:45:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6602
Departure: SALEM 15:05:00
Arrival: ERODE 16:45:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6602
Departure: SALEM 19:22:00
Arrival: ERODE 21:02:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6603
Departure: SALEM 7:26:00
Arrival: ERODE 9:06:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6603
Departure: SALEM 11:29:00
Arrival: ERODE 13:10:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6603
Departure: SALEM 16:30:00
Arrival: ERODE 18:10:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6603
Departure: SALEM 21:30:00
Arrival: ERODE 23:10:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6604
Departure: SALEM 7:45:00
Arrival: ERODE 9:25:00
Type: ORD
Operator: TNSTC-CBE
<hr>

Bus: 6604
Departure: SALEM 11:51:00
Arrival: ERODE 13:31:00
Type: ORD
Operator: TNSTC-CBE
        </p>
    </div>
</body>
</html>
