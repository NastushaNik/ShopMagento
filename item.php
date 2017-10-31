<?php
include("db.php");

include("header.php");
	
?>

<?php
	$id = $_GET["id"];
	// $nameProduct = $_POST['name'];
 //    $description = $_POST['description'];
 //    $price = $_POST['price'];
 //    $pastPrice = $_POST['none_price'];
	// $dataYear = $_POST['data_year'];
	// $dataSeason = $_POST['data_season'];
	// $dataSize = $_POST['data_size'];
	// $dataMaterial = $_POST['data_material'];
	// $dataColor = $_POST['data_color'];
 //    $nameImg = $_FILES['userfile']['name'][0]; 
 //    $nameImg1 = $_FILES['userfile']['name'][1]; 
 //    $nameImg2 = $_FILES['userfile']['name'][2]; 
 //    $nameImg3 = $_FILES['userfile']['name'][3]; 
 //    $nameImg4 = $_FILES['userfile']['name'][4]; 
 //    $nameImg5 = $_FILES['userfile']['name'][5];
	
	$query = "SELECT image
				FROM Images
				WHERE main_picture = 0 AND Images.id_product = '$id'";
	
	$result = $mysqli->query($query);

	echo $mysqli->error;
	echo '<div class="wrap-product">
                <div class="item-product-wrap">
				<div style="width:20%; height:auto; display:inline-block; margin-left:10%;">';

	while($row = $result->fetch_assoc()){
		echo '<img class="exemple-image" style= "width:90%; cursor:pointer; height:auto; background-color:rgb(240, 240, 240);" src="images/'.$row["image"].'" alt="">';
		}

	$query = "SELECT image, name, description, price, none_price
				FROM F2Products JOIN Images
				ON F2Products.id = Images.id_product
				WHERE main_picture = 1 AND F2Products.id = '$id'";
	
	$result = $mysqli->query($query);

	echo $mysqli->error;	
	while($row = $result->fetch_assoc()){
				echo'</div>
				<img class="bigPhoto" style= "width:65%; height:auto; background-color: rgb(240, 240, 240); float:right;" src="images/'.$row["image"].'" alt="">
			</div>
			<div class="item-text-wrap">
				<h1 class="name-item" style="text-align:center; color:rgb(52, 52, 52); font-weight:500;line-height: 1.567em;">'.$row["name"].'</h1>
				<p style="color: #999999; font-weight: bold; line-height: normal; font-size: 30px; line-height: 2em;">$'.number_format($row['price'],2).'</p>
				
				<p class="description-item">'.$row["description"].'</p>';
	}
	$query = "SELECT Color.id, color_code
				FROM ProductColor JOIN Color
				ON ProductColor.id_color = Color.id
				WHERE ProductColor.id_product = '$id'";
	
	$result = $mysqli->query($query);

	echo $mysqli->error;	
	echo '<div class="color line">
			<h2>Color</h2>
			<form action="addToCart.php" method="POST"> 
			<input type="hidden" name="id" value="'.$id.'"> ';
	while($row = $result->fetch_assoc()){
		echo '<input style="display:none;" type="radio" name="color" value="'.$row['id'].'" id="color'.$row['id'].'">
				<label style="background:'.$row['color_code'].'" for="color'.$row['id'].'"></label>';
	}
	echo '</div>';

	$query = "SELECT Size.id, size_name, id_product
				FROM ProductSize JOIN Size 
				ON ProductSize.id_size = Size.id
				WHERE ProductSize.id_product = '$id'";
	
	$result = $mysqli->query($query);

	echo $mysqli->error;	
	echo '<div class="size line">
			<h2>Size</h2>';
	while($row = $result->fetch_assoc()){
		echo '<input style="display:none;" type="radio" name="size" value="'.$row['id'].'" id="size'.$row['id'].'">
				<label for="size'.$row['id'].'">'.$row['size_name'].'</label>';
	}
		echo '</div>
			<p><input type="submit" class="add-to-cart" name="add_to_cart" value="+ Add to cart"></p></div>
		</form>
            </div>';
?>

<?php
	include("footer.php");
?>
