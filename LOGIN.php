<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
        form {
            height: 500px;
            width: 400px;
        }
    </style>
</head>
<body>
    <img class="mb-4" src="tnstc.png" alt="" width="132" height="102">
    <form method="POST">
        <h3>Login Here</h3>

        <label for="username">Username:</label>
        <input type="text" placeholder="Enter your username" name="username" id="username" required>

        <label for="password"><br>Password:</label>
        <input type="password" id="inputPassword" class="form-control mb-2" name="password" placeholder="Password" required>

        <div class="helo">
            <p>Don't have an account?</p><a href="signup.php" style="text-decoration: none;">Sign Up</a>
        </div>

        <button type="submit">Login</button>
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'dblinking.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the user exists and password is correct
        $sql = "SELECT * FROM awardss WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($check, $sql);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            echo '<center><p style="color: green;background-color: #99ff99">Login Successful</p></center>';
            // You can start a session and redirect to a different page here
             session_start();
             $_SESSION['username'] = $username;
             header("Location:../project1/index.php");
        } else {
            echo '<center><p style="color: #cc2900;background-color:#ff704d">Invalid Username or Password</p></center>';
        }
    }
    ?>
</body>
</html>