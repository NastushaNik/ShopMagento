<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/product-style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="animated/animate.css">
	<title>F2AnastasiiaDnischenko</title>

<style>
	.table{
		padding-bottom: 30px;
		border-bottom: solid 1px #dadada; 
		margin: 0 auto;
	}
	table.table thead th {
   		border-bottom: solid 1px #dadada;
   		font-weight: 700;
   		text-align: left;
   		font-size: 1.15em;
	}
	table.table th, table.table td {
    	padding: 25px 15px 0;
	}
	table.table img{
		float: left;
		width: 150px;
		height: auto;
	}
	.table-price{
		vertical-align: top;
	}
	.table-name{
		font-weight:700;
		color: #cda379;
	}
	.remove, .continue, .clear-shop, .update{
		padding: 11px;
		background: #cda379;
    	color: #FFF;
    	margin: 25px;
	}
	.continue{
		line-height: 50px;
		margin: 0 25% 0 15%;
	}
	.remove:hover, .continue:hover, .clear-shop:hover, .update:hover{
		background: black;
		transition: .3s ease;
	}
</style>
</head>
<body>

<?php

	include("header.php");
?>
<h1 style="text-align:center; font-weight:bold; color:#343434; text-transform: uppercase; padding: 30px 0 50px;">Shopping Cart</h1>
<table class="table" action="Cart.php" metod="POST">
	<thead>
		<tr>
			<th><span>Item</span></th>
			<th><span>Price</span></th>
			<th><span>Qty</span></th>
			<th><span>Subtotal</span></th>
		</tr>
	</thead>
	
<?php
include("db.php");
$u_hash = ($_COOKIE['Session']);
$query = "SELECT name, price, quantity, product_id, image
FROM F2Products JOIN Cart
ON Cart.product_id = F2Products.id
JOIN Images
ON F2Products.id = Images.id_product
WHERE cart.user_hash = '$u_hash' AND main_picture = 1";

$result = $mysqli->query($query); // выполняем запрос query.
//объект результата сохраняем в $result
echo $mysqli->error;//показывает ошибку, если она есть

while ($row = $result->fetch_assoc()) {
	echo '<tbody>
		<tr>
			<td><img src="images/'.$row["image"].'" alt="">
				<span class="table-name">'.$row['name'].'</span>
				 
			</td>
			<td><span class="table-price">$'.number_format($row['price'],2).'</span></td>
			<td>
				<input class="number" style="padding:10px" type="number" min="0" max="9999" value="'.$row['quantity'].'">
				<input type="hidden"  value="'.$row['price'].'">
				<input type="hidden"  value="'.$row['product_id'].'">
			</td>
			<td>
				<span class="subtotal">$'.number_format($row['price']*$row['quantity'],2).'</span>
			</td>
		</tr>
		<tr>
			<td style="padding:10px;">
				<a class="remove" href="remove.php?id='.$row["product_id"].'" >Remove item</a>
			</td>
		</tr>

	</tbody>';
}
?>
</table>
<a class="continue" href="product.php">Continue Shopping Cart</a>
<a class="update" href="updateCart.php">Update Shopping Cart</a>
<a class="clear-shop" href="">Clear Shopping Cart</a>

<?php
	include("footer.php");
	
?>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.mySlider.js"></script>
	<script src="js/script.js"></script>
</body>
</html>