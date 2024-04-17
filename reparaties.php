<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectielijst</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="navbar">
    <a href="#"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="index.php"><i class="fa fa-fw fa-users"></i>Over ons</a>
    <a href="#"><i class="fa fa-fw fa-cart-shopping"></i>Webshop</a>
    <a href="#"><i class="fa fa-fw fa-briefcase"></i>Zakelijk</a>
    <a href="#"><i class="fa fa-fw fa-user"></i>Service</a>
    <a class="active" href="#"><i class="fa fa-fw fa-laptop"></i>Reparaties</a>
    <a href="#"><i class="fa fa-fw fa-newspaper"></i>It Nieuws</a>
    <img id="logonav" src="uneed%20it%20logo.png"/>

</div>

<img id="foto1" src="uneedit02.jpg">
        <div class="lorem">
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
            <h1>Lorem Ipsum</h5>
       <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur distinctio amet dolorum maiores dicta facere, culpa explicabo laboriosam, temporibus, saepe rem laudantium dolore? Eos commodi sit nobis ipsum velit?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias saepe quis nam iure molestiae eos adipisci possimus, illum ullam enim odio voluptatum assumenda repellendus mollitia quod magnam dolorem quia voluptates! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore adipisci aliquid officiis, eligendi nam commodi itaque quidem aliquam ab. Cum, at eaque eos corrupti illo a placeat veniam. Adipisci, explicabo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dignissimos repudiandae magni natus quos consequatur vero, soluta deserunt itaque repellendus cum rem porro sint dolorem delectus quis sapiente earum modi.</h3>
        </div>
        
        <img class="foto22" src="jaja.jpg">
        <img class="foto22" src="jaja.jpg">
        <img class="foto22" src="jaja.jpg">
        

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
              
              <label for="Device">Device</label>
              <input type="text" id="Device" name="Device" required>
            
              <label for="issue">Probleemomschrijving:</label>
              <textarea id="issue" name="issue" rows="4" required></textarea>
            
              <input type="submit" value="Verzend reparatieverzoek">
            </form>
        </div>
        <div class="lorem2"></div>
        </div>
    </body>
    </html>