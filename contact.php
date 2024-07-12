<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
     <style>
        body, h2 {
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


header #logo {
  color:#FFC54D;
  text-decoration: none;
  font-size: 1em;
 background:none;
}



header a {
  text-decoration: none;
  color:#FFC54D;;
  font-size: 1em;
}

header nav a {
  margin: 0 1em;
  color: #FFC54D;;
}

header h2 i,
        nav a i {
            margin-right: .5em;
        }

header nav a:hover {
  color: #ccc;
}

#contactheading {
  text-align: center;
  margin: 2em 0;
  font-size: 2.5em;
  color: #333;
  background: none;
}

.contact-form {
  display: flex;
  justify-content: center;
  margin: 2em;
}

form {
  width: 50%;
  background-color: #f8f8f8;
  padding: 2em;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 1.5em;
}

label {
  display: block;
  margin-bottom: .5em;
  color: #444;
}

input, textarea {
  width: 100%;
  padding: .75em;
  border: 1px solid #ddd;
  border-radius: 5px;
}

button {
  width: 100%;
  padding: 1em;
  background-color: #53BF9D;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 1em;
}

button:hover {
  background-color: #46a081;
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

.social-menu a:hover {
  color: #ccc;
}

     </style>
    <title>Contact Us - Steak Cuisine</title>
</head>
<body>
    <header>
        <a href="header.html" id="logo"><h2><i class="fa-solid fa-bowl-rice"></i>Steak Cuisine</h2></a>
        <nav>
            <a href="header.php"><i class="fa-solid fa-home"></i>Home</a>
            <a href="menu.php"><i class="fa-solid fa-bars"></i>Menu</a>
            <a href="location.php"><i class="fa-solid fa-location-pin"></i>Locations</a>
            <a href="contact.php"><i class="fa-solid fa-envelope"></i> Contact Us</a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
        </nav>
    </header>
    <h2 id="contactheading">Contact Us</h2>
    <div class="contact-form">
        <form action="headers.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="names" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="emails" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phones" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="messages" rows="5" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
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
