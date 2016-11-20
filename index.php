<?php include 'includes/doc.php' ?>

<title>Homepage | Stag Coffee Co.</title>
</head>

<body>

<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div class="flexslider">
<ul class="slides">
    <li>
        <img src="images/spotlight1.png" alt="Spotlight 1">
        <div class="slider-caption left"><h2>Stay Cool!</h2><p>Beat the heat with an iced coffee or tea. </p></div>
        <a href="drink.php"><button class="slider-button left">Order Now</button></a>
    </li>
	<li>
        <img src="images/spotlight2.png" alt="Spotlight 2">
        <div class="slider-caption right"><h2>Only the Best</h2><p>We aim to use only the best ingredients in our food and beverages.</p></div>
        <a href="#"><button class="slider-button  right">Learn More</button></a>
    </li>
    <li>
        <img src="images/spotlight3.png" alt="Spotlight 3">
        <div class="slider-caption left"><h2>Treat Yo’ Self</h2><p>Go ahead, treat yourself to something sweet.</p></div>
        <a href="#"><button class="slider-button left">Order Now</button></a>
    </li>
</ul>
</div>  <!--end flexslider-->

<main>

<div class="feature-container top">

    <div class="feature left small">
        <h4>Welcome to Stag Coffee Co.</h4>
        <p>And, saucer mocha, at extra cappuccino ristretto cortado sweet, medium mocha aftertaste, aromatic single origin, foam black and redeye single shot. Viennese fair trade decaffeinated aroma galão cream.</p>
    </div> <!--end feature left-->
    
    <div class="feature right large">
        <img src="images/home_coffee.png" alt="Espresso + Coffee" />
        <div class="feature-text"><a href="drink.php">Espresso &amp; Coffee <img src="icons/arrow-right.png"></a></div>
	</div> <!--end feature right-->

</div>  <!--end feature container-->

<div class="feature-container">

    <div class="feature left large">
        <img src="images/home_parfait.png" alt="Breakfast" />
        <div class="feature-text"><a href="#">Breakfast <img src="icons/arrow-right.png"></a></div>
    </div> <!--end feature left-->
    
    <div class="feature right small">
        <img src="images/home_kids.png" alt="Kids' Favorites" />
        <div class="feature-text narrow"><a href="#">Kids' Favorites <img src="icons/arrow-right.png"></a></div>
    </div> <!--end feature right-->

</div>  <!--end feature container-->

<div class="feature-container">

    <div class="feature left small">
        <img src="images/home_lunch.png" alt="Lunch" />
        <div class="feature-text"><a href="#">Lunch <img src="icons/arrow-right.png"></a></div>
    </div> <!--end feature left-->
    
    <div class="feature right large">
        <img src="images/home_merch.png" alt="Merch" />
        <div class="feature-text"><a href="#">Merch &amp; Gifts <img src="icons/arrow-right.png"></a></div>
    </div> <!--end feature right-->

</div>  <!--end feature container-->

</main>

<?php include 'includes/footer.php' ?>

</body>
</html>
