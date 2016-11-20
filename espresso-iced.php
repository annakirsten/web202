<?php include 'includes/doc.php' ?>

<title>Iced | Espresso | Drink | Stag Coffee Co.</title>
</head>

<body>

<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div id="content-container">
<aside>
<h2>DRINK</h2>

<button class="menu-button"><h3>Sort By:</h3><img src="icons/arrow-down-b.png" alt="down arrow"></button>

<h3>Category:</h3>
<ul>
	<li><a class="active" href="espresso.php">Espresso ></a></li>
    <li><a href="#">Coffee ></a></li>
    <li><a href="#">Tea ></a></li>
    <li><a href="#">Everything Else ></a></li>
</ul>

<h3>Filter:</h3>
<ul>
	<li><a class="active" href="#">Hot | Iced +</a></li>
    <ul class="sub-filter">
    	<li><input type="checkbox" name="type" value="hot">Hot</li>
    	<li><input type="checkbox" name="type" value="iced" checked>Iced</li>
        <li><input type="checkbox" name="type" value="both">Both</li>
    </ul>
    <li><a href="#">Price +</a></li>
    <li><a href="#">Size +</a></li>
    <li><a href="#">Kid Favorites +</a></li>
</ul>

</aside>

<main class="sub-category">

<p class="breadcrumbs"><a href="index.php">Home</a> &nbsp;>&nbsp; <a href="drink.php">Drink</a> &nbsp;>&nbsp; <a href="espresso.php">Espresso</a></p>

<div class="page"><p>1</p></div>

<div class="category-container filter">

    <div class="item-container filter left"><h3><a href="#">Americano</a></h3><a href="#"><img src="images/americano.png" alt="Americano"><p class="description">12oz  | 16 oz<br>$2.00 | $3.50<br>Hot or Iced</p></a><button><a href="#">Order >></a></button></div> <!--end item-container-->
    
    <div class="item-container filter right"><h3><a href="#">Latte</a></h3><a href="latte.php"><img src="images/latte.png" alt="Latte"><p class="description">12oz  | 16 oz<br>$2.50 - $4.00<br>Hot or Iced</p></a><button><a href="latte.php">Order >></a></button></div> <!--end item-container-->

</div> <!--end category-container-->

<div class="category-container filter">

    <div class="item-container filter left"><h3><a href="#">Mocha</a></h3><a href="#"><img src="images/mocha.png" alt="Mocha"><p class="description">12oz  | 16 oz<br>$3.00 - $4.50<br>Hot or Iced</p></a><button><a href="#">Order >></a></button></div> <!--end item-container-->
    
    <div class="item-container filter right"><h3><a href="#">Breve</a></h3><a href="#"><img src="images/breve.png" alt="Breve"><p class="description">12oz  | 16 oz<br>$2.50 - $4.00<br>Hot or Iced</p></a><button><a href="#">Order >></a></button></div> <!--end item-container-->

</div> <!--end category-container-->

<div class="page"><p>1</p></div>

</main>
</div> <!--end content-container-->

<?php include 'includes/footer.php' ?>

</body>
</html>
