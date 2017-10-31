<?php
  if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['none_price']) && isset($_POST['data_year']) && isset($_POST['data_color']) && isset($_POST['data_size']) && isset($_POST['data_season']) && isset($_POST['data_material']) && isset($_FILES['userfile'])) {
    move_uploaded_file($_FILES['userfile']['tmp_name'],$_FILES['userfile']['name']);
    $mysqli = new mysqli("localhost", "root", "", "F2Magento");
    $nameProduct = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $pastPrice = $_POST['none_price'];
	$dataYear = $_POST['data_year'];
	$dataSeason = $_POST['data_season'];
	$dataSize = $_POST['data_size'];
	$dataMaterial = $_POST['data_material'];
	$dataColor = $_POST['data_color'];
    $nameImg = $_FILES['userfile']['name'][0]; 
    $nameImg1 = $_FILES['userfile']['name'][1]; 
    $nameImg2 = $_FILES['userfile']['name'][2]; 
    $nameImg3 = $_FILES['userfile']['name'][3]; 
    $nameImg4 = $_FILES['userfile']['name'][4]; 
    $nameImg5 = $_FILES['userfile']['name'][5]; 
    $query = "INSERT INTO F2Products
        (name,description,price,image,image2,image3,image4,image5,image6,none_price,data_year,data_color,data_season,data_size,data_material)
        VALUES('$nameProduct','$description','$price','$nameImg','$nameImg1','$nameImg2','$nameImg3','$nameImg4','$nameImg5','$pastPrice','$dataYear','$dataColor','$dataSeason','$dataSize','$dataMaterial')";
        $mysqli->query($query);
        echo $mysqli->error;
    header("Location: admin.php");
  }
?>
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
	.header{
		overflow: hidden;
	}
	#admin-wrap-product{
		margin-top: 50px;
	}
	.product-img{
		width: 20%;		
		padding: 0 20px;
		height: 490px;
	}
	form{
		margin-top: 150px;
		text-align: center;
	}
	.form-style{
		border-color: #615149;
	    height: 42px;
	    width: 30%;
	    font-size: 14px;
	    line-height: 1.4;
	    padding: .38rem 1rem;
	    display: block;
	    background: transparent;
	    border: 1px solid #615149;
	    margin: 0 auto 5px;
	}
	input[type="submit"]{
		background: #cda379;
	    color: #FFF;
		width: 30%;
		display: block;
		text-transform: uppercase;
	    font-weight: 700;
	    font-size: 16px;
	    line-height: 18px;
	    padding: 16px 10px;
	    transition: .3s all ease;
	    text-align: center;
	    overflow: visible;
	    border: 0;
    	cursor: pointer;
    	margin: 10px auto 10px;
	}
	input[type="submit"]:hover{
		background: black;
	}
</style>
</head>
<body>

	<div class="header">
				<div class="logo">
					<a href="admin.php">
						<img src="images/logo_dark.png" alt="">
					</a>
				</div>					
				<div class="welcome">
					<span>Welcome to our online store!</span>
				</div>
	</div>	
	<form enctype="multipart/form-data" action="admin.php" method="POST">     
        <input class="form-style" type="text" name="name"
        placeholder="Name">   
        <textarea class="form-style" name="description"
        placeholder="Descriptions"></textarea> 
        <input class="form-style" type="text" name="data_color"
        placeholder="Color">
        <input class="form-style" type="text" name="data_size"
        placeholder="Size">
        <input class="form-style" type="text" name="data_year"
        placeholder="Year">
        <input class="form-style" type="text" name="data_material"
        placeholder="Material">
        <select class="form-style" name="data_season">
        <option>Choose a season</option>
        <option value="Spring">Spring</option>
        <option value="Summer">Summer</option>
        <option value="Winter">Winter</option>
        <option value="Autumn">Autumn</option>     	
        </select>
        <input class="form-style" type="text" name="price"
        placeholder="Price">
        <input class="form-style" type="text" name="none_price"
        placeholder="Past price"><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>    
       Image: <input name="userfile[]" type="file" multiple="true" />
        <input type="submit" value="Sign in">
	</form>
	<div id="admin-wrap-product">
	<?php 
		$mysqli = new mysqli("localhost", "root", "", "F2Magento");
		$query = "SELECT *
				FROM F2Products
				ORDER BY id DESC"; 
		$result = $mysqli->query($query); 
		echo $mysqli->error;
		while ($row = $result->fetch_assoc()) {
		   echo '<div class="product-img" data-year="'.$row["data_year"].'" data-color="'.$row["data_color"].'" data-material="'.$row["data_material"].'" data-season="'.$row["data_season"].'" data-size="'.$row["data_size"].'">
				<img src="images/'.$row["image"].'" alt="">
				<p class="name">'.$row["name"].'</p>
				<p class="price">$ '.$row["price"].'</p>
				<p class="none-price"><s>$ '.$row["none_price"].'</s></p><br>
				<a href="delete.php?id='.$row["id"].'"class="add-to-cart">Delete product</a><br>
				<a href="edit.php?id='.$row["id"].'" class="add-to-cart">Edit product</a>
			</div>';
		}
	 ?>
	</div>
</body>
</html>