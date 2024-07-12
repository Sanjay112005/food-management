<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="css/home.css"> -->
     <style>
        :root {
  --red: crimson;
  --green: #53BF9D;
  --yellow: #FFC54D;
  --white: whitesmoke;
}

body, h2 {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.landing {
  background-image: url('https://images.unsplash.com/photo-1615937657715-bc7b4b7962c1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
  background-size: cover;
  background-position: center;
  height: 100vh;
  color: var(--white);
}

header a {
  text-decoration: none;
  color: var(--yellow);
  min-width: 120px; 
}

header {
  display: flex;
  flex-wrap: wrap;
  row-gap: 1em;
  padding: 1em;
}

#logo {
  flex: 3;
  font-size: 1.25em;
  min-width: 260px;
}

nav {
  flex: 2;
  display: flex;
  align-items: center;

}

nav a {
  flex: 1;
}

nav a:hover {
  color: var(--green);
}

header h2 i, nav a i {
  margin-right: .5em; 
}

.maintext {
  display: flex;
  flex-direction: column;
  height: 60vh;
  justify-content: center;
  padding: 2em;
}

.tagline1 {
  color: var(--red);
  font-size: 2.5em;
  font-weight: bolder;
}

.tagline2 {
  color: var(--yellow);
}

.maintext div {
  margin-top: .75em;
}

.maintext button {
  width: 20vw;
  margin-top: 2em;
  border-radius: 10px;
  padding: .7em;
  background-color: var(--green);
  color: var(--white);
  border: 1px solid var(--green);
}

footer {
  background-color: rgb(55, 55, 55);
  color: var(--white);
  padding: .25em 1em;
}

#copyright {
  margin-left: 20px;
}

.social-menu ul {
  display: flex;
  padding: 0;
}

.social-menu ul li {
  list-style: none;
  display: inline-block;
  margin: 0 15px;
}

.social-menu ul li .fab {
  font-size: 25px;
  line-height: 35px;
  transition: .5s;
  color: #000;
}

.social-menu ul li .fab:hover {
  color: #fff;
}

.social-menu ul li a {
  position: relative;
  display: block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #fff;
  text-align: center;
  transition: .6s;
  box-shadow: 0 5px 4px rgba(0, 0, 0, .5);
}

.social-menu ul li a:hover {
  transform: translate(0, -10%);
}

.social-menu ul li:nth-child(1) a:hover {
  background-color: #4267B2;
}

.social-menu ul li:nth-child(2) a:hover {
  background-color: #E4405F;
}

.social-menu ul li:nth-child(3) a:hover {
  background-color: green;
}

.social-menu ul li:nth-child(4) a:hover {
  background-color: aqua;
}
.hello a{
  text-decoration: none;
  color:white;
}

.hello:hover{
background-color: transparent;
}

     </style>
    <title>Steak Cuisine</title>
</head>
<body>
    <div class="landing">
        <header>
           <a href="header.htmls" id="logo"><h2><i class="fa-solid fa-bowl-rice"></i>Steak Cuisine</h2></a>
           <nav>
            <a href="header.php"><i class="fa-solid fa-home"></i>Home</a>
            <a href="menu.php"><i class="fa-solid fa-bars"></i>Menu</a>
            <a href="location.php"><i class="fa-solid fa-location-pin"></i>Locations</a>
            <a href="contact.php"><i class="fa-solid fa-address-book"></i>Contact Us</a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
           </nav>
        </header>
        <div class="maintext">
            <div class="tagline1">
                Finest Treat for Your Taste Buds 
            </div>
            <div class="tagline2">
                Freshest Ingredients Guaranteed
                Come And Enjoy The Day with us
            </div>
            <div class="callus">
                Call us @+91 1234567890         
            </div>
            <button class="hello" ><a href="menu.html">Order Online</a></button>
        </div>
    </div>

</body>
</html>
