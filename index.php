<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="animated/animate.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>F2AnastasiiaDnischenko</title>
</head>
<body>
<div id="fixed-menu">

    <?php
    include("db.php");
    $u_hash = ($_COOKIE['Session']);
    $query = "SELECT COUNT(*)
				  FROM Cart
				  WHERE user_hash = '$u_hash'";
    $result = $mysqli->query($query);
    echo $mysqli->error;

    while ($row = $result->fetch_assoc()) {
        if ($row['COUNT(*)'] > 0) {
            echo '<div class="icon"><a href="#modal-cart" class="material-icons open-modal">&#xE54C;</a><sup style="color:white;">' . $row['COUNT(*)'] . '</sup>
			</div>';
            $u_hash = ($_COOKIE['Session']);
            $query = "SELECT name, price, quantity, product_id, image, color_name, size_name
						FROM F2Products JOIN Cart
					ON Cart.product_id = F2Products.id
									JOIN Images
					ON F2Products.id = Images.id_product
									JOIN Color
					ON Cart.id_color = Color.id
									JOIN Size
					ON Cart.id_size = Size.id
					WHERE Cart.user_hash = '$u_hash' AND main_picture = 1";

            $result = $mysqli->query($query); // выполняем запрос query.
            //объект результата сохраняем в $result

            echo $mysqli->error;//показывает ошибку, если она есть
            echo '<div id="modal-cart" class="modal-div">
					<h1 style="text-align:center; font-weight:500; color:white; text-transform: uppercase; padding: 30px 0 50px;">Shopping Cart</h1>
					<ul>';
            while ($row = $result->fetch_assoc()) {

                echo '
				<li style="margin:0 20px 100px 20px;">
					<img style="width:170px; margin-right:10%; background-color:rgb(250,250,250); float:left;"src="images/' . $row["image"] . '" alt="">
				<div>
					<div class="table-name" style="color:white; display:block; text-align: center; margin: 10px 0;" >' . $row['name'] . '</div>
					<div style="color: #cda379;">Color:
						<span style="color:white;">' . $row['color_name'] . '</span>
					</div>
					<div style="color: #cda379;">Size:
						<span style="color:white;">' . $row['size_name'] . '</span>
					</div>
					<div style="color: #cda379; margin-top: 10px;">Price:
						<span class="table-price" style="color: white; font-weight: bold; line-height: normal; font-size: 24px;">$' . number_format($row['price'], 2) . '</span>
					</div>	
					<div style="color: #cda379;  margin-top: 10px;">Qty:
						<input class="number-cart" type="text" size"4" value="' . $row['quantity'] . '">
					</div>
					<input type="hidden"  value="' . $row['price'] . '">
					<input type="hidden"  value="' . $row['product_id'] . '">
					<div style="color: #cda379;  margin-top: 10px;">Subtotal:
						<span class="subtotal-cart" style="color:white; margin-top: 10px;">$ ' . number_format($row['price'] * $row['quantity'], 2) . '</span>
					</div>
				</div>
				</li>';
            }
            echo '</ul>
				<div>
					<div style="font-size: 20px; line-height: 20px; color: #FFF; font-weight: 700;">Cart Subtotal
						<span style="color:white;">' . $row['price'] . '</span>
					</div>
					<a href="Cart.php" class="view-shopping-cart">view shopping cart</a>
					<a href="Cart.php" class="view-shopping-cart">checkout</a>
				</div>	
		</div>';
        } else {
            echo '<div class="icon"><a href="#modal-cart" class="material-icons open-modal">&#xE54C;</a>
		</div>
				<div id="modal-cart" class="modal-div">
					<p class="mod-card-text">You have no items in your shopping cart.</p>					
				</div>';

        }
    }
    ?>
    <div class="btn-close">
        <span class="material-icons modal-close">clear</span>
    </div>
    <div class="overlay"></div>
    <div class="icon">
        <a href="#modal-search" class="material-icons open-modal">&#xE8B6;</a>
    </div>
    <div id="modal-search" class="modal-div">
        <form id="form-search">
            <input type="text" placeholder="SEARCH">
            <button><span class="material-icons">&#xE8B6;</span></button>
        </form>
    </div>
    <div class="btn-close">
        <span class="material-icons modal-close">clear</span>
    </div>
    <div class="overlay"></div>
    <div class="icon">
        <a href="#modal-account" class="material-icons open-modal">&#xE7FD;</a>
    </div>
    <div id="modal-account" class="modal-div">
        <ul>
            <li><a href="">My account</a></li>
            <li><a href="">My wish list</a></li>
            <li><a href="">Help</a></li>
        </ul>
    </div>
    <div class="btn-close">
        <span class="material-icons modal-close">clear</span>
    </div>
    <div class="overlay"></div>
    <div class="icon">
        <a href="#modal-form" class="material-icons open-modal">&#xE0DA;</a>
    </div>
    <div id="modal-form" class="modal-div">
        <p>Login form</p>
        <form action="register.php" class="modal-login-form" method="POST">
            <input type="email" name="email" class="modal-email" placeholder="Email:">
            <input type="password" name="password" class="modal-password" placeholder="Password:">
            <label>
                <input type="checkbox" name="checkbox" class="modal-checkbox">Remember Me
            </label>
            <input type="submit" name="submit" class="modal-button" value="Sign in">
            <ul>
                <li><a href="">Forgot Your Username?</a></li>
                <li><a href="">Forgot Your Password?</a></li>
                <li><a href="">Create an Account</a></li>
            </ul>
        </form>
    </div>
    <div class="btn-close">
        <span class="material-icons modal-close">clear</span>
    </div>
    <div class="overlay"></div>
    <div class="icon">
        <a href="#modal-setting" class="material-icons open-modal">&#xE869;</a>
    </div>
    <div id="modal-setting" class="modal-div">
        <form>
            <select>
                <option>English</option>
                <option>German</option>
                <option>Spanish</option>
            </select>
        </form>
    </div>
    <div class="btn-close">
        <span class="material-icons modal-close">clear</span>
    </div>
    <div class="overlay"></div>
</div>
<div class="home">
    <div class="wrap-slider">
        <img class="slider" src="images/0.jpg" alt="Image">
    </div>
    <div class="text-slider">
        <h2 class="header0">2016</h2>
        <p class="txt0">collection </p>
        <h3 class="head-h0">Best selling products</h3>
        <a href="#" class="slider-btn">shop now!</a>
    </div>

    <div class="navigation">
        <div data-nav="0"></div>
        <div data-nav="1"></div>
        <div data-nav="2"></div>
    </div>
    <div class="toggle-menu">
        <i class="material-icons">menu</i>
    </div>
    <div class="menu-opacity">
        <ul class="menu">
            <?php
            $query = "SELECT *
				  FROM Categories";
            $result = $mysqli->query($query);
            echo $mysqli->error;

            while ($row = $result->fetch_assoc()) {
                echo '<li><a href="product.php?id=' . $row["id"] . '&num=1">' . $row["name_cat"] . '</a></li>';

            }
            $query = "SELECT *
				  FROM Categories
				  LIMIT 3, 1";
            $result = $mysqli->query($query);
            echo $mysqli->error;

            while ($row = $result->fetch_assoc()) {
                echo '<li class="last-child material-icons"><a href="product.php?id=' . $row["id"] . '&num=1">' . $row["name_cat"] . '</a>&#xE313;</li>';

            }
            ?>

        </ul>
        <div class="menu-clothe-access">
            <a href=""><p>Clothes</p></a>
            <ul>
                <li><a href="product.php">Dresses</a></li>
                <li><a href="product.php">T-shirts</a></li>
                <li><a href="product.php">Blouses</a></li>
                <li><a href="product.php">Sweaters</a></li>
                <li><a href="product.php">Outerwear</a></li>
                <li><a href="product.php">Jackets</a></li>
                <li><a href="product.php">Jeans</a></li>
            </ul>
            <a href=""><p>Accessories</p></a>
            <ul>
                <li><a href="product.php">Bags</a></li>
                <li><a href="product.php">Shoes</a></li>
                <li><a href="product.php">Hats</a></li>
                <li><a href="product.php">Scarves</a></li>
                <li><a href="product.php">Belts</a></li>
                <li><a href="product.php">Sunglasses</a></li>
            </ul>
        </div>
    </div>
    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
        </div>
        <ul class="nav">
            <?php

            $query = "SELECT *
				  FROM Categories
				  LIMIT 0, 3";
            $result = $mysqli->query($query);
            echo $mysqli->error;

            while ($row = $result->fetch_assoc()) {
                echo '<li><a href="product.php?id=' . $row["id"] . '&num=1">' . $row["name_cat"] . '</a></li>';

            }
            $query = "SELECT *
				  FROM Categories
				  LIMIT 3, 1";
            $result = $mysqli->query($query);
            echo $mysqli->error;

            while ($row = $result->fetch_assoc()) {
                echo '<li class="last-child material-icons"><a href="product.php?id=' . $row["id"] . '">' . $row["name_cat"] . '</a>&#xE313;</li>';

            }
            ?>

        </ul>
        <div class="submenu">
            <div class="clothe">
                <a href=""><p>Clothes</p></a>
                <ul>
                    <li><a href="product.php">Dresses</a></li>
                    <li><a href="product.php">T-shirts</a></li>
                    <li><a href="product.php">Blouses</a></li>
                    <li><a href="product.php">Sweaters</a></li>
                    <li><a href="product.php">Outerwear</a></li>
                    <li><a href="product.php">Jackets</a></li>
                    <li><a href="product.php">Jeans</a></li>
                </ul>
            </div>
            <div class="accessor">
                <a href=""><p>Accessories</p></a>
                <ul>
                    <li><a href="product.php">Bags</a></li>
                    <li><a href="product.php">Shoes</a></li>
                    <li><a href="product.php">Hats</a></li>
                    <li><a href="product.php">Scarves</a></li>
                    <li><a href="product.php">Belts</a></li>
                    <li><a href="product.php">Sunglasses</a></li>
                </ul>
            </div>
            <a href="" class="mega-menu"><img src="images/megamenu.jpg" alt="Megamenu"></a>
        </div>
        <div class="welcome">
            <span>Welcome to our online store!</span>
        </div>
    </div>
    <div class="categories">
        <div class="wrap-img">
            <img src="images/showcase1.jpg" alt="Img"><a href="">Jeans</a>
        </div>
        <div class="wrap-img">
            <img src="images/showcase2.jpg" alt="Img"><a href="">Shirts</a>
        </div>
        <div class="wrap-img">
            <img src="images/showcase3.jpg" alt="Img"><a href="">Accessories</a>
        </div>
        <div class="wrap-img">
            <img src="images/showcase4.jpg" alt="Img"><a href="">Shose</a>
        </div>
    </div>
</div>
<div class="main">
    <h1>new products</h1>
    <div class="prev" data-image="prev"><i class="material-icons">&#xE5CB;</i></div>
    <div class="carusell">
        <div class="carusell-wrap">
            <?php
            $query = "SELECT F2Products.id, image, price, name
			FROM F2Products JOIN Images
			ON F2Products.id = Images.id_product
			WHERE main_picture = 1
			ORDER BY F2Products.id DESC
			LIMIT 0, 6";
            $result = $mysqli->query($query);
            echo $mysqli->error;

            while ($row = $result->fetch_assoc()) {
                echo '<div class="carusell-img1">
						<a href="item.php?id=' . $row["id"] . '"><img src="images/' . $row['image'] . '" alt="Product"></a>
						<a href="item.php?id=' . $row["id"] . '"><p class="description">' . $row['name'] . '</p></a>
						<p class="price">' . number_format($row['price'], 2) . '</p>
						<div class="rating"><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i></div>
					</div>';
            }
            ?>
        </div>
    </div>
    <div class="next" data-image="next"><i class="material-icons">&#xE5CC;</i></div>
    <div class="sale">
        <div class="wrap-sale">
            <img src="images/box-1.jpg" alt="Img">
            <p class="new-arr">new arrivals</p>
            <a href="#" class="button">shop now!</a>
        </div>
        <div class="wrap-sale">
            <img src="images/box-2.jpg" alt="Img">
            <p class="big-sale">sale</p>
            <p class="percent">-50%</p>
            <a href="#" class="button btn2">shop now!</a>
        </div>
    </div>
    <div class="main2">
        <h1>special products</h1>
        <div class="prev2" data-image="prev2"><i class="material-icons">&#xE5CB;</i></div>
        <div class="long-carusell">
            <div class="long-carusell-wrap">

                <?php
                $query = "SELECT F2Products.id, image, price, name, none_price
			FROM F2Products JOIN Images
			ON F2Products.id = Images.id_product
			WHERE main_picture = 1
			ORDER BY F2Products.price
			LIMIT 0, 8";
                $result = $mysqli->query($query);
                echo $mysqli->error;

                while ($row = $result->fetch_assoc()) {
                    echo '<div class="carusell-img2">
						<a href="item.php?id=' . $row["id"] . '"><img src="images/' . $row['image'] . '" alt="Carousel"></a>
						<a href="item.php?id=' . $row["id"] . '"><p class="description">' . $row['name'] . '</p></a>
						<p class="price">' . number_format($row['price'], 2) . '</p>
						<p class="none-price"><s>' . number_format($row['none_price'], 2) . '</s></p>
						<div class="rating"><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i></div>
					</div>';
                }
                ?>

            </div>
        </div>
        <div class="next2" data-image="next2"><i class="material-icons">&#xE5CC;</i></div>
        <div class="photo-text">
            <div class="photo pht1"><img src="images/add-info-1.jpg" alt="Info">
                <div class="none-block-text nonebt1">
                    <h3>Establishing Your Brand</h3>
                    <span>Many students are cash-strapped, nowadays. Nevertheless, their purchasing power is very high. Research reveals that 20 million students in the US have a combined disposable income of $417 billion. Moreover, another survey of students' parents reveals that students now make 70 percent of their purchases themselves.</span>
                    <a href="#">read more</a>
                </div>
            </div>
            <div class="photo pht2"><img src="images/add-info-2.jpg" alt="Info">
                <div class="none-block-text nonebt2">
                    <h3>Believe in the Business</h3>
                    <span>If you have not yet considered this demographic, it is time to reach out to them now! Social media is a popular method for socialization and communication between many young people. Students are the majority users of social networking sites like Facebook and Twitter. These are the right places to introduce brands to young people.</span>
                    <a href="#">read more</a>
                </div>
            </div>
            <div class="photo pht3"><img src="images/add-info-3.jpg" alt="Info">
                <div class="none-block-text nonebt3">
                    <h3>Impact - The Heart</h3>
                    <span> The problem starts when you stop there instead of setting realizable immediate targets. Success cannot come from one day to the next. So you need to build your dream business bit by bit. When your dreams begin to be transformed into reality thanks to your actions, you become aware of the power you possess for catalyzing success.</span>
                    <a href="#">read more</a>
                </div>
            </div>
            <div class="photo pht4"><img src="images/add-info-4.jpg" alt="Info">
                <div class="none-block-text nonebt4">
                    <h3>The success of business</h3>
                    <span>Many students are cash-strapped, nowadays. Nevertheless, their purchasing power is very high. Research reveals that 20 million students in the US have a combined disposable income of $417 billion. Moreover, another survey of students' parents reveals that students now make 70 percent of their purchases themselves.</span>
                    <a href="#">read more</a>
                </div>
            </div>
        </div>
        <div class="mail-info">
            <h2>Newsletter</h2>
            <p class="mail-text">Subscribe to the f2 mailing list to receive updates on new arrival,<br>spesial offers
                and oter discount information.</p>
            <form>
                <input class="email" type="email" placeholder="Enter please your e-mail"><input class="email-btn"
                                                                                                type="button"
                                                                                                value="Subscribe">
            </form>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="images/box-3.jpg" alt="Img">
                <p class="save-free">Save 20%</p>
                <p class="text-cad">WHEN YOU USE CREDIT CARD</p>
            </div>
            <div class="box-img">
                <img src="images/box-4.jpg" alt="Img">
                <p class="save-free">FREE SHIPPING</p>
                <p class="text-cad">ON ORDERS OVER $99</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="wrap-info">
            <div class="info footer-text">
                <h3>Information</h3>
                <div class="footer-accord">
                    <a href="#">Specials</a>
                    <a href="#">New products</a>
                    <a href="#">Top sellers</a>
                    <a href="#">Our stores</a>
                    <a href="#">Contact us</a>
                    <a href="#">Pages configuration</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
            <div class="form footer-text">
                <h3>Why buy from us</h3>
                <div class="footer-accord">
                    <a href="#">Shipping & Returns</a>
                    <a href="#">Secure Shopping</a>
                    <a href="#">International Shipping</a>
                    <a href="#">Affiliates</a>
                    <a href="#">Group Sales</a>
                </div>
            </div>
            <div class="account footer-text">
                <h3>My account</h3>
                <div class="footer-accord">
                    <a href="login.php">Sign In</a>
                    <a href="#">View Cart</a>
                    <a href="#">My Wishlist</a>
                    <a href="#">Track My Order</a>
                    <a href="#">Help</a>
                </div>
            </div>
            <div class="contact footer-text">
                <h3>Contacts</h3>
                <div class="footer-accord">
                    <p>My Company Glasgow D04 89GR </p>
                    <p>Tel: 800-2345-6789</p>
                    <a href="#">info@demolink.org</a>
                    <p>7 Days a weer from 9:00 am to 7:00 pm</p>
                </div>
            </div>
        </div>
        <p class="author">© 2017 Anastasiia Dnishchenko.</p>
    </div>
</div>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.mySlider.js"></script>
<script src="js/script.js"></script>
</body>
</html>

       