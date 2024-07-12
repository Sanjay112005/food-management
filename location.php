<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
     <style>
        body, h2, h3 {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background:rgba(0, 0, 0, .2);

  
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1em;
  background-color: #333;
  color: white;
}

header a {
  text-decoration: none;
  color: #FFC54D;;
  font-size: 1em;
}

header nav a {
  margin: 0 1em;
  color:#FFC54D;;
}

header h2 i,
        nav a i {
            margin-right: .5em;
        }
        

header nav a:hover {
  color: #ccc;
}



#locheading {
  text-align: center;
  margin: 2em 0;
  font-size: 2.5em;
  color: #333;
  background: none;

  
}

.locations {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
 
  padding: 1em;
}

.location {
  width: 45%;
  margin-bottom: 2em;
}

.location h3 {
  text-align: center;
  margin-bottom: .5em;
  background: none;
  color: #444;
}

.location address {
  text-align: center;
  color: #666;
}

.map {
  text-align: center;
  border-radius:7px;
  
  margin: 2em 0;
}

footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 1em 0;
}

.social-menu ul {
  display: flex;
  justify-content: center;
  padding: 0;
  margin: 1em 0;
}

.social-menu li {
  list-style: none;
  margin: 0 10px;
}

.social-menu a {
  color: white;
  font-size: 1.5em;
}

social-menu a:hover {
  color: #ccc;
}

     </style>
    <title>Locations - Steak Cuisine</title>
</head>
<body>
    <header>
        <a href="header.html" id="logo"><h2><i class="fa-solid fa-bowl-rice"></i>Steak Cuisine</h2></a>
        <nav>
            <a href="header.php"><i class="fa-solid fa-home"></i>Home</a>
            <a href="menu.php"><i class="fa-solid fa-bars"></i>Menu</a>
            <a href="location.php"><i class="fa-solid fa-location-pin"></i>Locations</a>
            <a href="contact.php"><i class="fa-solid fa-address-book"></i>Contact Us</a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
        </nav>
    </header>
    <h2 id="locheading">Locations</h2>
    <div class="locations">
        <div class="location">
            <h3>Anna Nagar</h3>
            <address>
                15, 10th Main Road<br>
                Anna Nagar,<br>
                Kanchipuram - 631501
            </address>
        </div>
        <div class="location">
            <h3>Gandhi Nagar</h3>
            <address>
                5, 3rd Cross Road,<br>
                Gandhi Nagar,<br>
                Little Kanchipuram,<br>
                Kanchipuram - 631502
            </address>
        </div>
        <div class="location">
            <h3>Rajakulam</h3>
            <address>
                145, MIT Road,<br>
                Nambi Kulam St,<br>
                Kanchipuram - 631507
            </address>
        </div>
        <div class="location">
            <h3>Thiruvalluvar Nagar</h3>
            <address>
                20, 5th Street,<br>
                Thiruvalluvar Nagar,<br>
                Kanchipuram - 631509
            </address>
        </div>
        <div class="location">
            <h3>Chromepet</h3>
            <address>
                100, 2nd Main Road,<br>
                Chromepet,<br>
                Kanchipuram - 631510
            </address>
        </div>
    </div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31120.74608380719!2d79.68357526104974!3d12.837249797798991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52c2f7e0c7f12d%3A0xde5f8682b1cb2a4d!2sKanchipuram%2C%20Tamil%20Nadu%20631501!5e0!3m2!1sen!2sin!4v1720797071579!5m2!1sen!2sin" width="60%" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <footer>
        <div class="social-menu">
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
        <div id="copyright">&copy; Steak Cuisine</div>
    </footer>
</body>
</html>
