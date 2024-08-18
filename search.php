<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Container */
.container {
    width: 80%;
    margin: 0 auto;
}

/* Header Styles */
header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

header .logo {
    display: flex;
    align-items: center;
}

header .logo img {
    height: 40px;
    margin-right: 10px;
}

header .logo a {
    color: #fff;
    text-decoration: none;
    font-size: 24px;
}

header nav ul {
    list-style: none;
    padding: 0;
}

header nav ul li {
    display: inline;
    margin-left: 20px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

/* Main Content Styles */
main {
    padding: 20px 0;
}

main h1 {
    font-size: 36px;
}

main p {
    font-size: 18px;
    color: #555;
}

main .btn {
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    background-color: #007BFF;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

main .btn:hover {
    background-color: #0056b3;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}

        table {
          font-family: "Times new roman";
          border-collapse: collapse;
          width: 70%;
          padding: 20px;
            text-align: center;
        margin: 0 auto;
        }
        
        td {
          border:2px solid rgb(0, 0, 0);
          text-align: left;
          padding: 25px;
        }
        th{
          padding:25px;
          border:2px solid rgb(0, 0, 0);
        }
        
        tr:nth-child(even) {
          background-color: #ffffff;
        }
        tr:nth-child(odd){
          background-color: burlywood;
        }
        th{
          color: white;
          background-color: grey;
        }
        </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="buslogo.jpeg" alt="Bus Timings Checker Logo">
                <a href="index.php">Bus Timings Checker</a>
            </div>
            <nav>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="#">More</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <h2>Search Results</h2>

        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'schedules');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve search parameters
        $from = $_POST['from'];
        $to = $_POST['to'];

        // Query to search schedules
        $sql = "SELECT * FROM busschedules WHERE source='$from' AND destination='$to'";
        $result = $conn->query($sql);

        // Check if results found
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>From&ensp;</th>
                        <th>To&ensp;&ensp;</th>
                        <th>Source Time&ensp;</th>
                        <th>Destination Time&ensp;</th>
                    </tr>";
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["source"]."</td>
                        <td>".$row["destination"]."</td>
                        <td>".$row["source_time"]."</td>
                        <td>".$row["destination_time"]."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No results found";
        }

        

// Retrieve search parameters if they are set
$from = isset($_POST['from']) ? $_POST['from'] : "";
$to = isset($_POST['to']) ? $_POST['to'] : "";

        $conn->close();
        ?>
        
    </main>
    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Bus Timings Checker. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
