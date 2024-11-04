<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
            position: relative;
            animation: fadeIn 3s ease-out;
        }

        header {
            display: flex;
            flex-wrap: wrap;
            row-gap: 1em;
            padding: 1em;
            justify-content: space-between;
            align-items: center;
            animation: slideIn 2s ease-in-out;
        }

        header a {
            text-decoration: none;
            color: var(--yellow);
            min-width: 120px; 
        }

        #logo {
            flex: 3;
            font-size: 1.1em;
            min-width: 260px;
            animation: zoomIn 1.5s ease-in-out;
        }

        nav {
            flex: 2;
            display: flex;
            align-items: center;
        }

        nav a {
            flex: 1;
            font-size: 1em;
            padding: 0.5em;
            transition: transform 0.3s ease-in-out;
        }

        nav a:hover {
            color: var(--green);
            transform: scale(1.2);
            transition: 0.5s;
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
            /* text-align: center; */
            animation: fadeInUp 2s ease-out;
        }

        .tagline1 {
            color: var(--red);
            /* font-size: 0.3em; */
            font-weight: bolder;
            animation: bounceIn 2.5s ease-in-out;
        }

        .tagline2 {
            color: var(--yellow);
            /* font-size: 1em; */
            animation: fadeIn 3s ease-in;
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
            animation: pulse 2s infinite;
        }

        .hello a {
            text-decoration: none;
            color: white;
        }

        .hello:hover {
            background-color: transparent;
        }

        footer {
            background-color: rgb(55, 55, 55);
            color: var(--white);
            padding: .25em 1em;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        @keyframes zoomIn {
            from { transform: scale(0.5); }
            to { transform: scale(1); }
        }

        @keyframes bounceIn {
            0% { transform: scale(0.5); opacity: 0; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(1); }
        }

        @keyframes fadeInUp {
            from { transform: translateY(100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .tagline1 {
                font-size: 1.8em;
            }
            .tagline2 {
                font-size: 1.2em;
            }
            nav a {
                font-size: 1em;
            }
            .maintext button {
                width: 50vw;
            }
        }

        @media (min-width: 1024px) {
            .tagline1 {
                font-size: 2.3em;
            }
            .tagline2 {
                font-size: 1.6em;
            }
            .maintext button {
                width: 15vw;
            }
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
            <div class="tagline1">Finest Treat for Your Taste Buds</div>
            <div class="tagline2">
                Freshest Ingredients Guaranteed
                <br>Come And Enjoy The Day with us
            </div>
            <div class="callus">Call us @+91 1234567890</div>
            <button class="hello"><a href="menu.php">Order Online</a></button>
        </div>
    </div>
</body>
</html>
