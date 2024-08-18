<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
        form {
            height: 700px;
            width: 400px;
        }
    </style>
</head>
<body>
    <img class="mb-4" src="tnstc.png" alt="" width="132" height="102">
    <form method="POST">
        <h3>Sign Up Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username" id="username" required>

        <label for="email">Email:</label>
        <input type="email" id="inputEmail" class="form-control mb-2" name="email" placeholder="Email address" required autofocus>

        <label for="phone">Phone</label>
        <input type="tel" placeholder="Phone" name="phone" id="phone" required>

        <label for="password">Password:</label>
        <input type="password" id="inputPassword" class="form-control mb-2" name="password" placeholder="Password" required>

        <div class="helo">
            <p>Already have an account?</p><a href="LOGIN.php" style="text-decoration: none;">Login</a>
        </div>

        <button type="submit">Sign Up</button>
    </form>

    <?php 
    $registered = 0;
    $userExists = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'dblinking.php';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        // Check if the user already exists
        $sql = "SELECT * FROM awardss WHERE username = '$username'";
        $result = mysqli_query($check, $sql);
        $num = mysqli_num_rows($result);
        
        if ($num > 0) {
            $userExists = 1;
            echo '<center><p style="color: #cc2900;background-color:#ff704d">User already exists. Please choose a different username.</p></center>';
        } else {
            // Insert new user into the database
            $sql = "INSERT INTO awardss (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')";
            $result = mysqli_query($check, $sql);
            if ($result) {
                echo '<center><p style="color: green;background-color: #99ff99">Successfully Created</p></center>';
                $registered = 1;
            } else {
                die(mysqli_error($check));
            }
        }
    }
    ?>
</body>
</html>