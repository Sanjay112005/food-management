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
        }

        header {
            display: flex;
            flex-wrap: wrap;
            row-gap: 1em;
            padding: 1em;
            background-color: #333;
            color: #fff;
        }

        header a {
            text-decoration: none;
            color: #FFC54D;
            min-width: 120px;
        }

        #logo {
            flex: 3;
            font-size: 1em;
            min-width: 260px;
        }

        nav {
            flex: 2;
            display: flex;
            align-items: center;
        }

        nav a {
            flex: 1;
            color:#FFC54D;;
            text-align: center;
        }

        nav a:hover {
            color: #53BF9D;
        }

        header h2 i,
        nav a i {
            margin-right: .5em;
        }

        h2#menuheading {
            background:rgba(0, 0, 0, .2);
            font-size: 2em;
            color: crimson;
            display: flex;
            justify-content: center;
            padding: 1em;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 2fr));
            gap: 1.5em;
            padding: 2em;
            background-color: rgba(0, 0, 0, .2);
        }

        .menu-section {
            background-color: #f9f9f9;
            padding: 1em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-section h3 {
            margin-bottom: 1em;
            text-align: center;
            color: #53BF9D;
        }

        .menu-section table {
            width: 100%;
            border-collapse: collapse;
        }

        .menu-section table th,
        .menu-section table td {
            padding: 0.2em;
        }

        .menu-section table th {
            background-color: #53BF9D;
            color: #fff;
        }

        .menu-section table td {
            display: flex;
            align-items: center;
            
        }

        .menu-section table td img {
            width: 85px;
            height: 85px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 8px;
        }


        .menu-section table td button {
            margin-left: auto;
            padding: 0.5em 1em;
            background-color: #53BF9D;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .menu-section table td button:hover {
            background-color: #FFC54D;
        }

        footer {
            background-color: #373737;
            color: #fff;
            padding: 0.25em 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer #copyright {
            margin-left: 20px;
        }

        .social-menu ul {
            display: flex;
            padding: 0;
            list-style: none;
        }

        .social-menu ul li {
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
    </style>
    <title>Menu - Steak Cuisine</title>
</head>
<body>
<header>
    <a href="header.html" id="logo"><h2><i class="fa-solid fa-bowl-rice"></i>Steak Cuisine</h2></a>
    <nav>
        <a href="header.php"><i class="fa-solid fa-home"></i>Home</a>
        <a href="menu.php"><i class="fa-solid fa-bars"></i> Menu</a>
        <a href="location.php"><i class="fa-solid fa-location-pin"></i>Locations</a>
        <a href="contact.php"><i class="fa-solid fa-address-book"></i>Contact Us</a>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
    </nav>
</header>
<h2 id="menuheading">Menu</h2>
<div class="menu">
    <div class="menu-section">
        <h3>Non-Veg Items</h3>
        <table>
            <tr>
                <td><img src="https://www.bing.com/th?id=OIP.2iWS4NJfB5y_mu30Nsq_bwHaHa&w=146&h=146&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Chicken Biryani">Chicken Biryani</td>
                <td>&#36;12 <button class="add-to-cart" data-name="Chicken Biryani" data-price="12">Add</button></td>
            </tr>
            <tr>
                <td><img src="https://th.bing.com/th?id=OIP.63S5dArPPRrawEUW0yGNxgHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Mutton Curry">Mutton Curry</td>
                <td>&#36;15 <button class="add-to-cart" data-name="Mutton Curry" data-price="15">Add</button></td>
            </tr>
            <tr>
                <td><img src="https://www.bing.com/th?id=OIP.UfhPMpFSbzeMKClppjcl0AHaE8&w=146&h=120&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Chicken Curry">Chicken Curry</td>
                <td>&#36;15 <button class="add-to-cart" data-name="Chicken Curry" data-price="15">Add</button></td>
            </tr>
        </table>
    </div>

    <div class="menu-section">
        <h3>Veg Items</h3>
        <table>
            <tr>
                <td><img src="https://th.bing.com/th?id=OSK.36ef5c22ffde4107d3a85c5dd223627b&w=176&h=176&rs=2&qlt=80&o=6&cdv=1&dpr=1.5&pid=16.1" alt="Paneer Butter Masala">Paneer Butter Masala</td>
                <td>&#36;10 <button class="add-to-cart" data-name="Paneer Butter Masala" data-price="10">Add</button></td>
            </tr>
            <tr>
                <td><img src="https://th.bing.com/th?id=OIP.Bmui8r3XxTzNbohdpsrioAAAAA&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Veg Biryani">Veg Biryani</td>
                <td>&#36;8  <button class="add-to-cart" data-name="Veg Biryani" data-price="8">Add</button></td>
            </tr>
            <tr>
                <td><img src="https://www.bing.com/th?id=OIP.B2spdrbos5c8Oq5Vuuq4BgHaLH&w=146&h=219&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Mushroom Noodles">Mushroom Noodles</td>
                <td>&#36;12  <button class="add-to-cart" data-name="Mushroom Noodles" data-price="12">Add</button></td>
            </tr>
        </table>
    </div>

    <div class="menu-section">
        <h3>Star Dishes</h3>
        <table>
            <tr>
                <td><img src="https://th.bing.com/th?id=OIP.p7Yk32-sJzmE5keNbDXcgwHaLH&w=204&h=306&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Grilled Salmon">Grilled Salmon</td>
                <td class="hi">&#36;20  <button class="add-to-cart" data-name="Grilled Salmon" data-price="20">Add</button></td>
            </tr>
            <tr>
                <td><img src="https://www.bing.com/th?id=OIP.vNwEV9yK5j7JdifFbm3LGQHaE8&w=146&h=120&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Beef Steak">Beef Steak</td>
                <td>&#36;25   <button class="add-to-cart" data-name="Beef Steak" data-price="25">Add</button></td>
            </tr>
            <tr>
                <td><img src="https://th.bing.com/th?id=OIP.1zlnwBOKe447oocyUy2qagHaFj&w=288&h=216&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" alt="Kunafa">Kunafa</td>
                <td>&#36;26  <button class="add-to-cart" data-name="Kunafa" data-price="26">Add</button></td>
            </tr>
        </table>
    </div>

  
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('.add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                const itemName = this.dataset.name;
                const itemPrice = parseFloat(this.dataset.price);

                const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

                const existingItemIndex = cartItems.findIndex(item => item.name === itemName);
                if (existingItemIndex > -1) {
                    cartItems[existingItemIndex].quantity += 1;
                } else {
                    cartItems.push({ name: itemName, price: itemPrice, quantity: 1 });
                }

                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                alert(`${itemName} added to cart.`);
            });
        });
    });
</script>

</body>
</html>