<?php include 'includes/doc.php' ?>

<title>Login | Register | Stag Coffee Co.</title>
</head>

<body>

<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div id="content-container">
<main id="login-register">

<div class="login-register">
    
    <div class="form-current-customer">
    <p class="breadcrumbs checkout"><strong>1. Login / Register</strong> &nbsp;>&nbsp; 2. Order Summary &nbsp;>&nbsp; 3. Confirmation</p>
    
    <h2>RETURNING CUSTOMER</h2>
    
    <p class="back"><a href="cart.php"><< Back to Cart</a></p>
    
    <form>
        <input class="input-half" type="text" name="email" placeholder="Email Address">
        <input class="input-half" type="text" name="password" placeholder="Password">
        <a href="summary.php"><button class="submit"><h2>Submit</h2></button></a>
        <p class="float-right"><a href="#">Forgot Login / Password?</a></p>
    </form>
    </div> <!--end form-current-customer-->

</div> <!--end login-register-->

<div class="border"></div>

<div class="login-register">

    <div class="form-new-customer">
        <h2>NEW CUSTOMER</h2>
        <div class="form-left">
        <form>
            <input class="input-full" type="text" name="first-name" placeholder="First Name"><br>
            <input class="input-full" type="text" name="last-name" placeholder="Last Name"><br>
            <input class="input-full" type="text" name="email" placeholder="Email Address"><br>
            
            <h4>Billing Address</h4>
            <input class="input-full" type="text" name="address-1" placeholder="Street Address 1"><br>
            <input class="input-full" type="text" name="address-2" placeholder="Street Address 2"><br>
            <input class="input-half" type="text" name="zip" placeholder="Zip">
            <input class="input-half" type="text" name="city" placeholder="City"><br>
            <select class="state "name="state">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select><br>
            <input class="input-half" type="text" name="phone" placeholder="Phone Number"><br>
            
            <h4>Shipping Address</h4>
            <input type="checkbox" name="shipping" value="shipping=billing">Same as Billing<br>
                <input class="input-full" type="text" name="address-1" placeholder="Street Address 1"><br>
            <input class="input-full" type="text" name="address-2" placeholder="Street Address 2"><br>
            <input class="input-half" type="text" name="zip" placeholder="Zip">
            <input class="input-half" type="text" name="city" placeholder="City"><br>
            <select class="state "name="state">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            </form>
            <input class="input-half" type="text" name="phone" placeholder="Phone Number"><br>
        </div> <!--end form left-->
        
        <div class="form-right">
        <form action="#">
            <p><em>If you would like to register for an account, please provide a password:</em></p>
            <input class="input-full" type="text" name="password" placeholder="Password (Optional)"><br>
            <input class="input-full" type="text" name="password-confirm" placeholder="Confirm Password"><br>
            <h4>Payment Information</h4>
            <label>Payment Type:</label>
            <div class="card-types">
                <input type="radio" name="Visa" value="Visa">Visa<br>
                <input type="radio" name="MasterCard" value="MasterCard">MasterCard<br>
                <input type="radio" name="AMEX" value="AMEX">AMEX<br>
                <input type="radio" name="Paypal" value="Paypal">Paypal
            </div> <!--end card types-->
            <input class="input-full" type="text" name="card-name" placeholder="Name on Card"><br>
            <input class="input-full" type="text" name="card-number" placeholder="Card Number"><br>
            <input class="input-half" type="text" name="exp-date" placeholder="Exp. Date">
            <input class="input-half" type="text" name="security-code" placeholder="Security Code">
            <img class="help" src="icons/help-circled.png" alt="help">
            </form>
            <a href="summary.php"><button class="submit"><h2>Submit</h2></button></a>
        
        </div><!--end form right-->
    </div> <!--end form-new-customer-->

</div> <!--end login-register-->

<div class="border"></div>

<div class="shopping-cart shopping-cart-summary">

    <h3>CART SUMMARY</h3>
    
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
    
    <a href="summary.php"><button class="submit"><h2>Submit</h2></button></a>

</div> <!--end shopping-cart shopping-cart-summary-->

</main>
</div> <!--end content-container-->

<?php include 'includes/footer.php' ?>

</body>
</html>
