<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectielijst</title>
    <script src="https://kit.fontawesome.com/7b49be9210.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reparatiescss.css">
</head>
<body>
<div class="navbar">
    <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="Over%20Ons.php"><i class="fa fa-fw fa-users"></i>Over ons</a>
    <a href="webshop.php"><i class="fa fa-fw fa-cart-shopping"></i>Webshop</a>
    <a href="zakelijk.php"><i class="fa fa-fw fa-briefcase"></i>Zakelijk</a>
    <a href="service.php"><i class="fa fa-fw fa-user"></i>Service</a>
    <a class="active" href="reparaties.php"><i class="fa fa-fw fa-laptop"></i>Reparaties</a>
    <a href="It-nieuws.php"><i class="fa fa-fw fa-newspaper"></i>It Nieuws</a>
    <a href="faq.php"><i class="fa-solid fa-question"></i>FAQ</a>
    <a href="login.php"><i class="login"></i>Login</a>
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

            <label for="appliance">Apparaat:</label>
            <select id="appliance" name="appliance" required>
                <option value="">Selecteer een apparaat</option>
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Huawei">Huawei</option>
                <option value="Acer">Vaatwasser</option>
            </select>

            <label for="device">Device:</label>
            <input type="text" id="device" name="device" required>

            <label for="issue">Probleemomschrijving:</label>
            <textarea id="issue" name="issue" rows="4" required></textarea>

            <input type="submit" value="Verzend reparatieverzoek">
        </form>
    </div>
</main>

<footer id="topfooter">
    <div id="links">
        <p>ZUIDBAAN 514, 2841MD</p>
        <p>MOORDRECHT</p>
    </div>
    <div id="midden">
        <p>asdadad</p>
        <p>asdadad</p>
        <p>asdadad</p>
    </div>
    <div id="rechts">
        <p>+316 30 985 409 (service nummer)</p>
        <p>+3118 28 202 18 <br> (KANTOOR, BEREIKBAAR VAN 09:00-18:00)</p>
    </div>
</footer>
</body>
</html>