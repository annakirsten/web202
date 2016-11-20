<?php include 'includes/doc.php' ?>

<title>Latte | Espresso | Drink | Stag Coffee Co.</title>
</head>

<body>

<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div id="content-container">

<main class="product-page">

<p class="breadcrumbs"><a href="index.php">Home</a> &nbsp;>&nbsp; <a href="drink.php">Drink</a> &nbsp;>&nbsp; <a href="espresso.php">Espresso</a> &nbsp;>&nbsp; <a href="latte.php">Latte</a></p>

<div class="product">

<img class="product-full" src="images/latte-full.png" alt="Latte">

<h1>LATTE</h1>

<div class="favorites"><a href="#"><img src="icons/star-outline.png" alt="star"> <p>Add to Favorites</a></p></div>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Order</a></li>
    <li><a href="#tabs-2">Description</a></li>
    <li><a href="#tabs-3">Nutrition</a></li>
  </ul>
  <div id="tabs-1">
  <div class="product-left">
  
        <p>Please select:</p>
        
        <button class="menu-button"><h3>Size &nbsp; | &nbsp; $</h3><img src="icons/arrow-down-b.png" alt="down arrow"></button>
        
        <button class="spinner-button"><h3>Extra Shot (+$.50)</h3><img src="icons/spinner-arrow.png" alt="spinner arrow"></button>
        
        <button class="menu-button"><h3>Dairy / Alternative</h3><img src="icons/arrow-down-b.png" alt="down arrow"></button>
    
	</div> <!--end product-left-->
        
	<div class="product-right">
    
        <div class="radio">
        <input type="radio" name="type" value="hot">Hot &nbsp;
        <input type="radio" name="type" value="iced">Iced
        </div>
    
    	<button class="spinner-button"><h3>QTY</h3><img src="icons/spinner-arrow.png" alt="spinner arrow"><p>2</p></button>
    
    	<a href="cart.php"><button class="menu-button cart"><h3>Add to Cart</h3></button></a>
	</div> <!--end product-right-->
  </div> <!--end tabs 1-->

  <div id="tabs-2">
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis.</p>
  </div> <!--end tabs 2-->
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. </p>
  </div> <!--end tabs 3-->
</div> <!--end tabs-->
</div> <!--end product-->

<div id="suggested">

	<h3>You might also like:</h3>
	<div class="suggested-item"><a href="#"><img src="images/breakfastsandwich.png" alt="Breakfast Sandwich"></a><div class="suggested-text"><a href="#">Breakfast Sandwich<br>$5.00 - $6.50</a></div></div>
    <div class="suggested-item"><a href="#"><img src="images/cheese-fruit.png" alt="Cheese &amp; fruit"></a><div class="suggested-text"><a href="#">Cheese &amp; Fruit<br>$3.50</a></div></div>
    <div class="suggested-item"><a href="#"><img src="images/parfait.png" alt="Yogurt Parfait"></a><div class="suggested-text"><a href="#">Yogurt Parfait<br>$4.00</a></div></div>
    <div class="suggested-item"><a href="#"><img src="images/cookies.png" alt="Chocolate Chip Cookie"></a><div class="suggested-text"><a href="#">Chocolate Chip Cookie<br>$2.00</a></div></div>

</div>

<div class="suggestions"></div>

</main>
</div> <!--end content-container-->

<?php include 'includes/footer.php' ?>

</body>
</html>
