<?php include 'includes/doc.php' ?>

<title>Login | Register | Stag Coffee Co.</title>
</head>

<body>

<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div id="content-container">
<main id="order-review">

<div class="order-review">

<p class="breadcrumbs checkout">1. Login / Register &nbsp;>&nbsp; <strong>2. Order Summary</strong> &nbsp;>&nbsp; 3. Confirmation</p>
    
<div class="shopping-cart shopping-cart-summary">

    <h2>ORDER REVIEW</h2>
    
    <p class="back"><a href="index.php"><< Continue Shopping</a></p>
    
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
        
        <div class="item-favorites"><a href="#"><img src="icons/star-outline.png" alt="Add to Favorites"><p>Add</p></a></div>
    
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

</div> <!--end shopping-cart shopping-cart-summary-->

<p class="back clear"><a href="index.php"><< Continue Shopping</a></p>

<div class="border"></div>

<div class="account-review">

    <h2>Billing / Shipping Information</h2>
    
    <h4 class="edit"><a href="cart.php">Edit</a></h4>
    
    <div class="form-review">
    	<div class="form-left">
        
            <p class="field input-full">Jane</p>
            <p class="field input-full">Doe</p>
            <p class="field input-full">unknown.female@gmail.com</p>
            <p><em>Registered Account: YES</em></p>
            
            <h3>Billing Information</h3>
            <p class="field input-full">1234 Some Street</p>
            <p class="field input-half left">Seattle</p>
            <p class="field input-half right">98109</p>
            <p class="field input-half left">WA</p>
            <p class="field input-half right">206-123-4567</p>
    
    	</div> <!--end form-left-->
        
        <div class="form-right">
        
        	<h3>Payment Information</h3>
            <p class="field input-full">Jane H. Doe</p>
            <p class="field input-full">**** **** **** 7890</p>
            <p class="field input-half left">05/19</p>
            <p class="field input-half right">***</p>
        
        </div><!--end form right-->
    </div> <!--end form-review-->
    
</div> <!--end account-review-->

<a href="confirmation.php"><button class="submit"><h2>Submit Order</h2></button></a>

</div> <!--end order-review-->

</main>
</div> <!--end content-container-->

<?php include 'includes/footer.php' ?>

</body>
</html>
