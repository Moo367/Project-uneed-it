

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uneed-It</title>
    <script src="https://kit.fontawesome.com/7b49be9210.js" crossorigin="anonymous"></script>
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
    <a href="login.php"><i class="login"></i>Login</a>
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
        <button class="but1">Leer Ons kennen</button>
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
<div id="recensies">
    <div class="recencies1">
        <!-- sterren bij reviews -->

    </div>
    <div>
        <form class="form" action="submit_review.php" method="post"> <!-- Specify the PHP script to handle form submission -->
            <h2 id="h22">Recensie</h2>
            <p>Naam: <input type="text" name="name" placeholder="Write your name here.."></p>
            <p>Email: <input type="email" name="email" placeholder="Let us know how to contact you back.."></p>
            <p>Bericht: <input name="message" placeholder="What would you like to tell us.."></input></p>
            <button type="submit">Submit</button> <!-- Submit button -->
        </form>
    </div>
    <div id="recensieindex" style="display: flex; flex-wrap: wrap; justify-content: center;">
        <?php
        session_start();

        // Check if accepted reviews data is available in the session
        if (isset($_SESSION["accepted_reviews"]) &&!empty($_SESSION["accepted_reviews"])) {
            // Loop through the accepted reviews and display them
            foreach ($_SESSION["accepted_reviews"] as $review) {
                echo "<div class='review-box' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0.2); margin: 16px; width: 300px;'>";
                echo "<div style='background-color: white; color: #333; padding: 16px; text-align: left;'>";
                echo "<h4> ". $review['name']. "</h4>";
                echo "<p> ". $review['message']. "</p>";
                echo "</div>";
                echo "</div>";
            }
        }
        ?> </div>
</div>

<div id="info1">
    <img id="uneedi01" src="uneedi01.jpg">
    <p id="text1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident,
        sunt in culpa qui officia deserunt mollit anim id est laborum <br> Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident,
        sunt in culpa qui officia deserunt mollit anim id est laborum <br> Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident,
        sunt in culpa qui officia deserunt mollit anim id est laborum nnnnnnnnnnnnnnnnnnn</p>
</div>

<div id="locatie1">
    <iframe id="locatie"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2455.4692254174847!2d4.6556064761602!3d52.01654907338202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5d125952a58cd%3A0x93f677d7fe6faaae!2sUneed-IT!5e0!3m2!1snl!2snl!4v1712576693344!5m2!1snl!2snl">
    </iframe>

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

