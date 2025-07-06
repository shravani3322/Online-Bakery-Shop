<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bakery Order</title>
    <style>
        body {
            background-image:url("http://localhost/shraa/img/g2.gif"); 
background-size:cover;
            font-family
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #B03A2E;
        }

        .menu-item {
            display: inline-block;
            margin: 20px;
            text-align: left;
        }

        .item-image {
            max-width:70%;
            height: auto;
            border-radius: 10px;
        }

        .price {
            color: #B03A2E;
            font-weight: bold;
            margin-top: 10px;
        }

        .add-to-cart-button {
            background-color: #B03A2E;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #cart {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <center>

    <h1 style="font-family: cursive;color:violet;background:red;>  Online Order Here</h1>

<div id="cart>
        <h2>Total Amount</h2>
        <ul id="cart-items"></ul>
        <p>Total:RS-<span id="total">0.00</span></p>
        <button onclick="checkout()">Checkout</button>
    </div>
</center>



    <div class="menu-item">
        <img src="http://localhost/shraa/img/bred1.webp" alt="Croissant" class="item-image">
        <p><strong>wheat Loaf</strong></p>
        <p class="price">Price:Rs.40</p>
        <button class="add-to-cart-button" onclick="addToCart('Wheat', 40.00)">Add to Cart</button>
    </div>
<div class="menu-item">
        <img src="http://localhost/shraa/img/bred2.webp" alt="Croissant" class="item-image">
        <p><strong>French Loaf</strong></p>
        <p class="price">Price:Rs.50</p>
        <button class="add-to-cart-button" onclick="addToCart('French', 50.00)">Add to Cart</button>
    </div>
    <div class="menu-item">
        <img src="http://localhost/shraa/img/bred3.webp" alt="Baguette" class="item-image">
        <p><strong>Wheat bred Loaf</strong></p>
        <p class="price">Price:Rs.40</p>
        <button class="add-to-cart-button" onclick="addToCart('Wheat', 40.00)">Add to Cart</button>
    </div>

   


<div class="menu-item">
        <img src="http://localhost/shraa/img/bw1.webp" alt="Croissant" class="item-image">
        <p><strong>Chocochip</strong></p>
        <p class="price">Price:Rs.30</p>
        <button class="add-to-cart-button" onclick="addToCart('Chocochip', 30.00)">Add to Cart</button>
    </div>
<div class="menu-item">
        <img src="http://localhost/shraa/img/bw3.webp" alt="Croissant" class="item-image">
        <p><strong>Walnut</strong></p>
        <p class="price">Price:Rs40.00</p>
        <button class="add-to-cart-button" onclick="addToCart('Walnut', 40.00)">Add to Cart</button>
    </div>
    <div class="menu-item">
        <img src="http://localhost/shraa/img/bw2.webp" alt="Baguette" class="item-image">
        <p><strong>Cookie</strong></p>
        <p class="price">Price:Rs40.00</p>
        <button class="add-to-cart-button" onclick="addToCart('Cookie', 40.00)">Add to Cart</button>
    </div>

    




    <div class="menu-item">
        <img src="http://localhost/shraa/img/ck1.webp" alt="Croissant" class="item-image">
        <p><strong>Choclate</strong></p>
        <p class="price">Price:Rs.250</p>
        <button class="add-to-cart-button" onclick="addToCart('Choclate', 250.00)">Add to Cart</button>
    </div>
<div class="menu-item">
        <img src="http://localhost/shraa/img/ck2.webp" alt="" class="item-image">
        <p><strong>Mixfruit</strong></p>
        <p class="price">Price:Rs.350</p>
        <button class="add-to-cart-button" onclick="addToCart('Mixfruit', 350.00)">Add to Cart</button>
    </div>
    <div class="menu-item">
        <img src="http://localhost/shraa/img/ck3.webp" alt="Baguette" class="item-image">
        <p><strong>Pineapple</strong></p>
        <p class="price">Price:Rs.350</p>
        <button class="add-to-cart-button" onclick="addToCart('Pineapple', 350.00)">Add to Cart</button>
    </div>

    


    <div class="menu-item">
        <img src="http://localhost/shraa/img/ps1.webp" alt="Croissant" class="item-image">
        <p><strong>Choclate</strong></p>
        <p class="price">Price:Rs.30</p>
        <button class="add-to-cart-button" onclick="addToCart('Choclate', 30.00)">Add to Cart</button>
    </div>
    <div class="menu-item">
        <img src="http://localhost/shraa/img/ps2.webp" alt="Croissant" class="item-image">
        <p><strong>Redwelvet</strong></p>
        <p class="price">Price:Rs.25</p>
        <button class="add-to-cart-button" onclick="addToCart('Redwelvet', 25.00)">Add to Cart</button>
    </div>
    <div class="menu-item">
        <img src="http://localhost/shraa/img/ps3.webp" alt="Croissant" class="item-image">
        <p><strong>Chocoholic</strong></p>
        <p class="price">Price:Rs.40</p>
        <button class="add-to-cart-button" onclick="addToCart('Chocoholic', 40.00)">Add to Cart</button>
    </div>

   
   



<div class="menu-item">
        <img src="http://localhost/shraa/img/cupk1.webp" alt="Croissant" class="item-image">
        <p><strong>Chocolava</strong></p>
        <p class="price">Price:Rs.50</p>
        <button class="add-to-cart-button" onclick="addToCart('Chocolava', 50.00)">Add to Cart</button>
    </div>

    <div class="menu-item">
        <img src="http://localhost/shraa/img/cupk2.webp" alt="Croissant" class="item-image">
        <p><strong>Rassberry</strong></p>
        <p class="price">Price:Rs.60</p>
        <button class="add-to-cart-button" onclick="addToCart('Rassberry', 60.00)">Add to Cart</button>
    </div>

    <div class="menu-item">
        <img src="http://localhost/shraa/img/cupk3.webp" alt="Baguette" class="item-image">
        <p><strong>Cheescake cup</strong></p>
        <p class="price">Price:Rs.50</p>
        <button class="add-to-cart-button" onclick="addToCart('Cheescake cup', 50.00)">Add to Cart</button>
    </div>

    



    <script>
        var cartItems = [];
        var total = 0;

        function addToCart(itemName, itemPrice) {
            cartItems.push({ name: itemName, price: itemPrice });
            updateCart();
        }

        function updateCart() {
            var cartList = document.getElementById("cart-items");
            var totalSpan = document.getElementById("total");

            // Clear previous items
            cartList.innerHTML = "";

            // Update the cart list
            cartItems.forEach(item => {
                var listItem = document.createElement("li");
                listItem.textContent = `Rs-${item.price.toFixed(2)}`;
                cartList.appendChild(listItem);
            });

            // Update the total
            total = cartItems.reduce((acc, item) => acc + item.price, 0);
            totalSpan.textContent = total.toFixed(2);
        }

        function checkout() {
            if (cartItems.length > 0) {
                alert(`Total Amount: Rs${total.toFixed(2)}\nThank you for your order!`);
                // Additional logic for handling the order can be added here
                // For a real application, you would typically send the order to a server
                cartItems = [];
                updateCart();
            } else {
                alert("Oop's!🤧 Your cart is empty. Add items before checking out.");
            }
        }
    </script>

</body>
</html>
