<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Schedule Checker</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .bus{
            width: 70%;
            margin: 0 auto;
            background-color: #80DED00;
            color:#80DED00;
            padding: 20px;
            text-align: center;
        }
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
   
    <main><div class="bus">
        <h2>Check Bus Schedules</h2>
        <form action="search.php" method="post">
            <label for="from">From:</label>
            <input type="text" id="from" name="from" required><br><br>
            <label for="to">To:</label>
            <input type="text" id="to" name="to" required><br><br>
            <input type="submit" value="Search">
        </form></div>
    </main>
    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Bus Timings Checker. All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>
