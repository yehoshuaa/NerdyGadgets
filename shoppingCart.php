<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart UI</title>
    <link rel="stylesheet" type="text/css" href="css/shoppingCart.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
<div class="CartContainer">
    <div class="Header">
        <h3 class="Heading">Shopping Cart</h3>
        <h5 class="Action">Remove all</h5>
    </div>

    <div class="Cart-Items">
        <div class="image-box">
            <img src="images/laptop.jpg" style={{ height="150px" }} />
        </div>
        <div class="about">
            <h1 class="title">HP laptop</h1>
            <h3 class="subtitle">16 inch</h3>
            <img src="images/laptop.jpg" style={{ height="30px" }}/>
        </div>
        <div class="counter">
            <div class="btn">-</div>
            <div class="count">1</div>
            <div class="btn">+</div>
        </div>
        <div class="prices">
            <div class="amount">€999.99</div>
            <div class="save"><u>Save for later</u></div>
            <div class="remove"><u>Remove</u></div>
        </div>
    </div>

    <div class="Cart-Items pad">
        <div class="image-box">
            <img src="images/laptop2.jpg" style={{ height="150px" }} />
        </div>
        <div class="about">
            <h1 class="title">Grapes Juice</h1>
            <h3 class="subtitle">16 inch</h3>
            <img src="images/laptop2.jpg" style={{ height="30px" }}/>
        </div>
        <div class="counter">
            <div class="btn">-</div>
            <div class="count">1</div>
            <div class="btn">+</div>
        </div>
        <div class="prices">
            <div class="amount">€999.99</div>
            <div class="save"><u>Save for later</u></div>
            <div class="remove"><u>Remove</u></div>
        </div>
    </div>
    <hr>
    <div class="checkout">
        <div class="total">
            <div>
                <div class="Subtotal">Sub-Total</div>
                <div class="items">2 items</div>
            </div>
            <div class="total-amount">€999.99</div>
        </div>
        <button class="button">Checkout</button></div>
</div>
</body>
</html>