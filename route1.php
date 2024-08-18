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
    <h1><a href="https://www.google.com/maps/dir/Erode,+Tamil+Nadu/Tiruppur,+Tamil+Nadu/@11.2270624,77.3651964,11z/am=t/data=!4m14!4m13!1m5!1m1!1s0x3ba96f46762f4671:0xd97da6e3d9c7f75e!2m2!1d77.7171642!2d11.3410364!1m5!1m1!1s0x3ba907b0424d75b9:0x4750551698a91687!2m2!1d77.3410656!2d11.1085242!3e0?entry=ttu">My Google Map:s LINK</a></h1>
    <div id="map" style="height: 500px; width: 100%;"></div>
    <p>
    Here are the bus routes from Erode to  Tiruppur:

    <hr>
Bus Route: 736 G

Departure from  Erode to  Tiruppur:
Departure Time: 7:43 AM
Arrival Time: 9:13 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 736 G

Departure from  Erode to Tiruppur:
Departure Time: 16:10 PM
Arrival Time: 17:40 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 746 G

Departure from Erode to Tiruppur:
Departure Time: 22:15 PM
Arrival Time: 23:45 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 A

Departure from Erode to Tiruppur:
Departure Time: 10:20 AM
Arrival Time: 11:50 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 A

Departure from Erode to Tiruppur:
Departure Time: 18:10 PM
Arrival Time: 19:40 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 B

Departure from  Erode to  Tiruppur:
Departure Time: 9:05 AM
Arrival Time: 10:45 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 B

Departure from  Erode to  Tiruppur:
Departure Time: 17:32 PM
Arrival Time: 19:17 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 C

Departure from Erode to Tiruppur:
Departure Time: 13:27 PM
Arrival Time: 14:57 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 C

Departure from Erode to Tiruppur:
Departure Time: 16:50 PM
Arrival Time: 18:20 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 D

Departure from Erode to Tiruppur:
Departure Time: 11:35 AM
Arrival Time: 13:05 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 747 D

Departure from  Erode to  Tiruppur:
Departure Time: 19:44 PM
Arrival Time: 21:15 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5402

Departure from Erode to Tiruppur:
Departure Time: 6:23 AM
Arrival Time: 7:53 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5402

Departure from Erode to Tiruppur:
Departure Time: 17:20 PM
Arrival Time: 18:50 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5420

Departure from  Erode to  Tiruppur:
Departure Time: 6:55 AM
Arrival Time: 8:25 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5420

Departure from Erode to Tiruppur:
Departure Time: 11:00 AM
Arrival Time: 12:30 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5420

Departure from Erode to Tiruppur:
Departure Time: 15:00 PM
Arrival Time: 16:35 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5420

Departure from  Erode to  Tiruppur:
Departure Time: 19:15 PM
Arrival Time: 20:45 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5420

Departure from Erode to Tiruppur:
Departure Time: 22:55 PM
Arrival Time: 0:45 AM (next day)
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5512

Departure from  Erode to  Tiruppur:
Departure Time: 0:30 AM
Arrival Time: 2:00 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5512

Departure from Erode to Tiruppur:
Departure Time: 8:16 AM
Arrival Time: 9:46 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5512

Departure from Erode to Tiruppur:
Departure Time: 12:08 PM
Arrival Time: 13:38 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5512

Departure from  Erode to  Tiruppur:
Departure Time: 15:53 PM
Arrival Time: 17:23 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5512

Departure from Erode to Tiruppur:
Departure Time: 20:02 PM
Arrival Time: 21:32 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5514

Departure from  Erode to  Tiruppur:
Departure Time: 8:05 AM
Arrival Time: 9:35 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5514

Departure from Erode to Tiruppur:
Departure Time: 11:58 AM
Arrival Time: 13:28 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5514

Departure from Erode to Tiruppur:
Departure Time: 15:49 PM
Arrival Time: 17:19 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Here are the bus routes from Erode to  Tiruppur (Old-Bustand):
<hr>
Bus Route: 5511

Departure from  Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 7:01 PM
Arrival Time: 8:31 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5513

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 5:12 AM
Arrival Time: 7:03 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5513

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 9:31 AM
Arrival Time: 11:01 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5513

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 1:35 PM
Arrival Time: 3:05 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5513

Departure from  Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 5:12 PM
Arrival Time: 6:42 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5513

Departure from  Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 8:55 PM
Arrival Time: 10:25 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5515

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 5:50 AM
Arrival Time: 7:20 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5515

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 9:35 AM
Arrival Time: 11:05 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5515

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 1:46 PM
Arrival Time: 3:16 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5515

Departure from  Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 5:29 PM
Arrival Time: 6:59 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5515

Departure from  Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 9:30 PM
Arrival Time: 11:00 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5516

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 6:12 AM
Arrival Time: 7:42 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5516

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 9:45 AM
Arrival Time: 11:15 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5516

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 1:52 PM
Arrival Time: 3:22 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5516

Departure from  Erode to Tiruppur OBS (Old Bus Stand):

Departure Time: 5:47 PM
Arrival Time: 7:17 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5516

Departure from  Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 9:40 PM
Arrival Time: 11:10 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5517

Departure from Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 3:10 AM
Arrival Time: 4:40 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5517

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 7:29 AM
Arrival Time: 8:59 AM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5517

Departure from  Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 11:03 AM
Arrival Time: 12:33 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5517

Departure from Erode to Tiruppur OBS (Old Bus Stand):
Departure Time: 2:05 PM
Arrival Time: 3:35 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5517

Departure from  Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 6:56 PM
Arrival Time: 8:26 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE
<hr>
Bus Route: 5518

Departure from Erode to  Tiruppur OBS (Old Bus Stand):
Departure Time: 10:30 AM
Arrival Time: 12:00 PM
Type: Ordinary (ORD)
Operator: TNSTC-CBE

    </p>
</body>
</html>
