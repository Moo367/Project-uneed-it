<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectielijst</title>
    <link rel="Stylesheet" href="stylesheeter.css">
    </head>
    <body>
    <div class="navbar">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="index.php"><i class="fa fa-fw fa-users"></i>Over ons</a>
    <a href="#"><i class="fa fa-fw fa-cart-shopping"></i>Webshop</a>
    <a href="#"><i class="fa fa-fw fa-briefcase"></i>Zakelijk</a>
    <a href="#"><i class="fa fa-fw fa-user"></i>Service</a>
    <a href="#"><i class="fa fa-fw fa-laptop"></i>Reparaties</a>
    <a href="It-nieuws.php"><i class="fa fa-fw fa-newspaper"></i>It Nieuws</a>
    <img id="logonav" src="uneed%20it%20logo.png"/>

</div>

<main>
    <img id="foto1" src="uneedit02.jpg" alt="Image 1">
    <div class="container1">
        <h2>Reparatieverzoek Formulier</h2>
        <form action="/submit_repair_request" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mailadres:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Telefoonnummer:</label>
            <input type="tel" id="phone" name="phone" required>
              
              <label for="Device">Device</label>
              <input type="text" id="Device" name="Device" required>
            
              <label for="issue">Probleemomschrijving:</label>
              <textarea id="issue" name="issue" rows="4" required></textarea>
            
              <input type="submit" value="Verzend reparatieverzoek">
            </form>
        </div>
        <div class="lorem2">
          <H2>Lorem ipsum</H2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sunt id quis facere assumenda! Aspernatur, commodi accusantium blanditiis possimus nobis suscipit maxime, tempora nemo beatae obcaecati rerum cupiditate ut inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquam quis quae eligendi, est recusandae praesentium officiis repudiandae quam veritatis consequuntur animi enim obcaecati perspiciatis ratione, quia quidem optio rerum?</p>
        </div>
        
        <div class="footer1">
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