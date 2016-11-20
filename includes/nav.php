<!--MAIN NAV-->

<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<nav id="navigation">
	<ul id="main-menu">
		<li class="nav"><a href="#">ABOUT</a></li>
		<li class="nav"><a href="#">FOOD</a>
            <ul class="sub-menu">
                <li><a href="#">BREAKFAST</a></li>
                <li><a href="#">LUNCH</a></li>
                <li><a href="#">SNACKS</a></li>
                <li><a href="#">SWEETS</a></li>
            </ul>
        </li>
        <li class="nav<?php if ($page == 'drink.php' || $page == 'espresso.php' || $page == 'latte.php') { print '-on'; } ?>"><a href="drink.php">DRINK</a>
            <ul class="sub-menu">
                <li><a href="espresso.php">ESPRESSO</a></li>
                <li><a href="#">COFFEE</a></li>
                <li><a href="#">TEA</a></li>
                <li><a href="#">EVERYTHING ELSE</a></li>
            </ul>
        </li>
        <li class="nav"><a href="#">MERCH</a>
            <ul class="sub-menu">
                <li><a href="#">APPAREL</a></li>
                <li><a href="#">ACCESSORIES</a></li>
                <li><a href="#">MUGS &amp; GLASSWARE</a></li>
            </ul>
        </li>
        <li class="nav"><a href="#">LOCATIONS</a>
            <ul class="sub-menu">
                <li><a href="#">REGION 1</a></li>
                <li><a href="#">REGION 2</a></li>
                <li><a href="#">REGION 3</a></li>
                <li><a href="#">REGION 4</a></li>
                <li><a href="#">REGION 5</a></li>
                <li><a href="#">REGION 5</a></li>
            </ul>
        </li>
        <li class="nav"><a href="#">CONTACT</a></li>
    </ul>
</nav>
