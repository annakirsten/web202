<?php include 'includes/doc.php' ?>

<title>Shopping Cart | Stag Coffee Co.</title>
</head>

<body>

<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div id="content-container">
<main class="shopping-cart">

<h1>SHOPPING CART</h1>

<p class="back"><a href="latte.php"><< Continue Shopping</a></p>

<div id="labels">
    <h3 class="item-details label">Cart Details</h3>
    <h3 class="item-quantity label">QTY</h3>
    <h3 class="item-cost-each label">Each</h3>
    <h3 class="item-cost-total label">Total</h3>
    <h3 class="item-edit label">Edit</h3>
    <h3 class="item-favorites label">Favorites</h3>
</div>

<div class="border"></div>

<div class="cart-item">

    <h4>Latte</h4>
    <div class="item-details">
    <img src="images/latte.png" alt="Latte">
        <p>20oz, Iced<br>
        Almond Milk<br>
        Extra Shot: 1<br>
        Flavor: None</p>
    </div> <!--end item details-->
    
    <div class="item-quantity">
    <button class="spinner-button"><p>2</p><img src="icons/spinner-arrow.png" alt="spinner arrow"></button>
    </div> <!--end item quantity-->
    
    <div class="item-cost-each">$4.50</div>
    
    <div class="item-cost-total">$9.00</div>
    
    <div class="item-edit"><a href="#"><img src="icons/ios7-trash.png" alt="delete"></a><br>
    <small><a href="latte.php">Edit</a></small>
    </div>
    
    <div class="item-favorites"><a href="#"><img src="icons/star-outline.png" alt="Add to Favorite"><p>Add</p></a></div>

</div> <!--end cart item-->

<div class="cart-item">

    <h4>Breakfast Sandwich</h4>
    <div class="item-details">
    <img src="images/breakfastsandwich.png" alt="Breakfast Sandwich">
        <p>Turkey<br>
		Cheddar<br>
		Tomato<br>
		Onions</p>
    </div> <!--end item details-->
    
    <div class="item-quantity">
    <button class="spinner-button"><p>1</p><img src="icons/spinner-arrow.png" alt="spinner arrow"></button>
    </div> <!--end item quantity-->
    
    <div class="item-cost-each">$5.00</div>
    
    <div class="item-cost-total">$5.00</div>
    
    <div class="item-edit"><a href="#"><img src="icons/ios7-trash.png" alt="delete"></a><br>
    <small><a href="#">Edit</a></small>
    </div>
    
    <div class="item-favorites"><a href="#"><img src="icons/star.png" alt="Remove from Favorite"><p>Remove</p></a></div>

</div> <!--end cart item-->

<div class="border"></div>

<div class="coupon">
<form action="#">
    <p>Coupon Code | Gift Certificate</p>
    <button><input type="text" name="coupon"></button>
    <a href="#"><button><h3>Apply</h3></button></a>
</form>
</div>

<div class="summary">

	<p>Subtotal: <strong>$14.00</strong></p>
	<p>Tax: <strong>$1.33</strong></p>
	<p>Total: <strong>$15.33</strong></p>
	<p>Order Type: <strong>PICK-UP</strong></p>
	<p>Shipping: <strong>N/A</strong></p>
	<p>Order ETA: <strong>15 minutes</strong></p>

</div>

<a href="login.php"><button class="checkout"><h2>Checkout</h2></button></a>

</main>
</div> <!--end content-container-->

<?php include 'includes/footer.php' ?>

</body>
</html>
