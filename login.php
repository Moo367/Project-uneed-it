<?php
session_start();

// Variable to hold error message
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Assuming you have a predefined admin username and password
    $admin_username = "admin";
    $admin_password = "admin"; // Replace with actual admin password

    // Check if the entered credentials match the admin credentials
    if ($username === $admin_username && $password === $admin_password) {
        // Admin login successful
        $_SESSION["admin"] = true;
        $success_message = "Admin mode activated!";
    } else {
        // Incorrect credentials
        $error_message = "Incorrect username or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uneed-It</title>
    <script src="https://kit.fontawesome.com/7b49be9210.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginadmin.css">
</head>
<body>

<div class="navbar">
    <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="Over%20Ons.php"><i class="fa fa-fw fa-users"></i>Over ons</a>
    <a href="webshop.php"><i class="fa fa-fw fa-cart-shopping"></i>Webshop</a>
    <a href="zakelijk.php"><i class="fa fa-fw fa-briefcase"></i>Zakelijk</a>
    <a href="service.php"><i class="fa fa-fw fa-user"></i>Service</a>
    <a href="reparaties.php"><i class="fa fa-fw fa-laptop"></i>Reparaties</a>
    <a href="It-nieuws.php"><i class="fa fa-fw fa-newspaper"></i>It Nieuws</a>
    <a href="faq.php"><i class="fa-solid fa-question"></i>FAQ</a>
    <img id="logonav" src="uneed%20it%20logo.png"/>

</div>

<img id="foto1" src="index%20front.jpg">
<div class="zindex">
    <img id="logo" src="uneed%20it%20logo.png">
    <section id="sectie1">
        <h2>Lorem ipsum</h2>
        <p>✓Lorem ipsum</p>
        <p>✓Lorem ipsum</p>
        <p>✓Lorem ipsum</p>
        <p>✓Lorem ipsum</p>

    </section>
</div>
<div class="border1">
    <div id="topfooter">
        <div class="footertext1">
            <p>ZUIDBAAN 514, 2841MD</p>
            <p>MOORDRECHT</p>
        </div>
        <div class="footertext1">
            <p>asdadad</p>
            <p>asdadad</p>
            <p>asdadad</p>
        </div>
        <div class="footertext1">
            <p>+316 30 985 409 (service nummer)</p>
            <p>+3118 28 202 18 <br> (KANTOOR, BEREIKBAAR VAN 09:00-18:00)</p>
        </div>
    </div>
</div>

<div class="login-container">
    <h2>Login</h2>
    <?php
    if (isset($error_message)) {
        echo '<p class="error">' . $error_message . '</p>';
    }
    if (isset($success_message)) {
        echo '<p class="success">' . $success_message . '</p>';
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button id="button" type="submit">Login</button>
    </form>
</div>




    <div class="footer1 border2">
        <h3 class="footer-socials">Services</h3>
        <div class="services1">
            <ul>
                <a class="footer-socials ul1" href="#">Reparaties</a></li>
                <a class="footer-socials ul1" href="#">Webshop</a></li>
                <a class="footer-socials ul1" href="#">FAQ</a></li>
            </ul>
            <img class="footer-logo" src="DHL.png">
            <img class="footer-logo homerr" src="homerr.png">
            <img class="footer-logo" src="ups%20logo.png">
        </div>
    </div>
    <h3 class="socials-div">About</h3>
    <div class="socials-div">
        <a class="socials-text" href="#">Twitter</a>
        <a class="socials-text" href="#">Facebook</a>
        <a class="socials-text" href="#">Linkedin</a>
        <a class="socials-text" href="#">Instagram</a>
    </div>
</div>
</body>
</html>