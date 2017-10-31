<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<!-- <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/product-style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
		if ($row['COUNT(*)']>0) {
			echo '<div class="icon"><a href="#modal-cart" class="material-icons open-modal">&#xE54C;</a><sup style="color:white;">'.$row['COUNT(*)'].'</sup>
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
				echo'<div id="modal-cart" class="modal-div">
					<h1 style="text-align:center; font-weight:500; color:white; text-transform: uppercase; padding: 30px 0 50px;">Shopping Cart</h1>
					<ul>';
				while ($row = $result->fetch_assoc()){
					
		echo '
				<li style="margin:0 20px 100px 20px;">
					<img style="width:170px; margin-right:10%; background-color:rgb(250,250,250); float:left;"src="images/'.$row["image"].'" alt="">
				<div>
					<div class="table-name" style="color:white; display:block; text-align: center; margin: 10px 0;" >'.$row['name'].'</div>
					<div style="color: #cda379;">Color:
						<span style="color:white;">'.$row['color_name'].'</span>
					</div>
					<div style="color: #cda379;">Size:
						<span style="color:white;">'.$row['size_name'].'</span>
					</div>
					<div style="color: #cda379; margin-top: 10px;">Price:
						<span class="table-price" style="color: white; font-weight: bold; line-height: normal; font-size: 24px;">$'.number_format($row['price'],2).'</span>
					</div>	
					<div style="color: #cda379;  margin-top: 10px;">Qty:
						<input class="number-cart" type="text" size"4" value="'.$row['quantity'].'">
					</div>
					<input type="hidden"  value="'.$row['price'].'">
					<input type="hidden"  value="'.$row['product_id'].'">
					<div style="color: #cda379;  margin-top: 10px;">Subtotal:
						<span class="subtotal-cart" style="color:white; margin-top: 10px;">$ '.number_format($row['price']*$row['quantity'],2).'</span>
					</div>
					
				</div>
				</li>';
		}
		echo '</ul>
				<div>
					<div style="font-size: 20px; line-height: 20px; color: #FFF; font-weight: 700;">Cart Subtotal
						<span style="color:white;">'.$row['price'].'</span>
					</div>
					<a href="Cart.php" class="view-shopping-cart">view shopping cart</a>
					<a href="Cart.php" class="view-shopping-cart">checkout</a>
				</div>	
		</div>';
		}
	
	else{
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
						<button><span class="material-icons">&#xE8B6;</span> </button>
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
					<form class="modal-login-form">
						<input type="email" class="modal-email" placeholder="Email:">
						<input type="password" class="modal-password" placeholder="Password:">
						<label>
							<input type="checkbox" class="modal-checkbox">Remember Me
						</label>
						<input type="button" class="modal-button" value="Sign in">
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
		echo '<li><a href="product.php?id='.$row["id"].'&num=1">'.$row["name_cat"].'</a></li>';
						
	}
?>
				</ul>
				<div class="menu-clothe-access">
					<a href=""><p>Clothes</p></a>
						<ul>
                            <li><a href="">Dresses</a></li>
                            <li><a href="">T-shirts</a></li>
                            <li><a href="">Blouses</a></li>
                            <li><a href="">Sweaters</a></li>
                            <li><a href="">Outerwear</a></li>
                            <li><a href="">Jackets</a></li>
                            <li><a href="">Jeans</a></li>
						</ul>
					<a href=""><p>Accessories</p></a>
						<ul>
                            <li><a href="">Bags</a></li>
                            <li><a href="">Shoes</a></li>
                            <li><a href="">Hats</a></li>
                            <li><a href="">Scarves</a></li>
                            <li><a href="">Belts</a></li>
                            <li><a href="">Sunglasses</a></li>
						</ul>
				</div>		
			</div>
			<div class="header">
				<div class="logo">
					<a href="index.php">
						<img src="images/logo_dark.png" alt="">
					</a>
				</div>
					<ul class="nav">
<?php
		$query = "SELECT *
				  FROM Categories";
		$result = $mysqli->query($query);
		echo $mysqli->error;

	while ($row = $result->fetch_assoc()) {
		echo '<li><a href="product.php?id='.$row["id"].'&num=1">'.$row["name_cat"].'</a></li>';
						
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
							<a href="" class="mega-menu"><img src="images/megamenu.jpg" alt=""></a>
						</div>					
				<div class="welcome">
					<span>Welcome to our online store!</span>
				</div>
			</div>	
		</div>
	