<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
  --primary-color: #53BF9D;
  --secondary-color: #FFC54D;
  --dark-color: #333;
  --light-color: #f4f4f4;
}

body, h2 {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background:rgba(0, 0, 0, .2);
 
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #333;
  padding: 1em;
}

header #logo {
  color:#FFC54D;
  text-decoration: none;
  font-size: 1em;
 background-color: #333;
}

header nav a {
  margin: 0 1em;
  color:#FFC54D;
  text-decoration: none;
}

header h2 i,
        nav a i {
            margin-right: .5em;
        }
        
header nav a:hover {
  color: #ccc;
}


#cartheading {
  text-align: center;
  margin: 2em 0;
  font-size: 2.5em;
  background: none;
  color: var(--dark-color);
}

.cart-items {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 2em;
}

table {
  width: 80%;
  border-collapse: collapse;
  margin-bottom: 2em;
}

th, td {
  border: 1px solid rgba(0, 0, 0, .1);
  padding: 1em;
  text-align: center;
}

th {
  background-color: var(--light-color);
}

.cart-summary {
  width: 80%;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.cart-summary h3 {
  margin-bottom: 1em;
  color: var(--dark-color);
}

.summary-item {
  display: flex;
  justify-content: space-between;
  width: 100%;
  padding: 0.5em 0;
}

button {
  padding: 0.75em 1.5em;
  background-color: var(--primary-color);
  color: white;
  border: none;
  cursor: pointer;
  margin-top: 1em;
}

button:hover {
  background-color: var(--secondary-color);
}

#payment-options h2{
  position: relative;
  left: 5%;
  bottom:10px;
  background: none;
}



#payment-options {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  left: 35%;
}

#payment-options button {
  margin: 1em;
}

    </style>
</head>
<body>
    <header>
        <a href="header.html" id="logo"><h2><i class="fa-solid fa-bowl-rice"></i> Steak Cuisine</h2></a>
        <nav>
          <a href="header.php"><i class="fa-solid fa-home"></i>Home</a>
          <a href="menu.php"><i class="fa-solid fa-bars"></i>Menu</a>
          <a href="location.php"><i class="fa-solid fa-location-pin"></i>Locations</a>
          <a href="contact.php"><i class="fa-solid fa-address-book"></i>Contact Us</a>
          <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
        </nav>
    </header>
   <section>
    <h2 id="cartheading">Your Cart</h2>
    <div class="cart-items">
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-items"></tbody>
        </table>
        <div class="cart-summary">
            <h3>Cart Summary</h3>
            <div class="summary-item">
                <span>Total Items: </span><span id="total-items">0</span>
            </div>
            <div class="summary-item">
                <span>Total Price: &#36;</span><span id="total-price">0.00</span>
            </div>
            <button onclick="checkout()">Proceed to Checkout</button>
        </div>
    </div>

    <div id="payment-options" style="display:none;">
        <h2>Select Payment Method</h2>
        <button onclick="processPayment('UPI')">UPI</button>
        <button onclick="processPayment('COD')">Cash on Delivery</button>
        <button onclick="processPayment('Card')">Card Payment</button>
    </div>
  </section>

    <script>
  document.addEventListener('DOMContentLoaded', function() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartItemsContainer = document.getElementById('cart-items');
    const totalItemsElement = document.getElementById('total-items');
    const totalPriceElement = document.getElementById('total-price');

    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let totalItems = 0;
        let totalPrice = 0;
        cartItems.forEach((item, index) => {
            totalItems += item.quantity;
            totalPrice += item.quantity * item.price;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>&#36;${item.price.toFixed(2)}</td>
                <td>&#36;${(item.quantity * item.price).toFixed(2)}</td>
                <td><button onclick="removeFromCart(${index})">Remove</button></td>
            `;
            cartItemsContainer.appendChild(row);
        });

        totalItemsElement.textContent = totalItems;
        totalPriceElement.textContent = totalPrice.toFixed(2);

        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    }

    window.removeFromCart = function(index) {
        cartItems.splice(index, 1);
        updateCart();
    };

    window.checkout = function() {
        document.querySelector('.cart-items').style.display = 'none';
        document.getElementById('payment-options').style.display = 'block';
    };

    window.processPayment = function(method) {
        if (method === 'UPI') {
            
            const qrCodeUrl = 'data:image/png;base64,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'; 
            const paymentOptions = document.getElementById('payment-options');
            paymentOptions.innerHTML = `
                <h2>Scan QR Code to Pay</h2>
                <img src="${qrCodeUrl}" alt="QR Code" style="max-width: 100%;">
            `;
        } else if (method === 'COD') {
            const paymentOptions = document.getElementById('payment-options');
            paymentOptions.innerHTML = `
                <h2>Order Successful!</h2>
                <p>Your order will be delivered shortly.</p>
            `;
        } else if (method === 'Card') {
       
            alert('Card payment processing...'); 
        }

        localStorage.removeItem('cartItems');
       ;
    };

    updateCart();
});


    </script>
</body>
</html>
