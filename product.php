<?php
include("db.php");
	include("header.php");
?>	

		<div class="wrap-product">
		
<?php
	include("filters.php");
?>				
			<div class="product">
				<p id="catalog">Catalog</p>
				<div class="view">
					<a href="" class="material-icons module square">view_module</a>
					<a href="" class="material-icons module lineM">view_list</a>
					<span>Items 1-14 of 14</span>
				</div>
		<?php 
		$num=1;
		$id_cat=$_GET["id"];
		
		// if ($_GET["num"]||$_GET["year"]||$_GET["size"]||$_GET["material"]||$_GET["year"]) {
		// 	$num = $_GET["num"];
		// 	$id_year=$_GET["year"];
		// 	$id_size=$_GET["size"];
		// 	$id_material=$_GET["material"];
		// 	$id_season=$_GET["season"];
		// }
		// if ($_GET["year"]) {
		// 	$id_year=$_GET["year"];
		// }
		// if ($_GET["size"]) {
		// 	$id_size=$_GET["size"];
		// }
		// if ($_GET["material"]) {
		// 	$id_material=$_GET["material"];
		// }
		// if ($_GET["year"]) {
		// 	$id_season=$_GET["season"];
		// }
		if ($_GET["num"]) {
			$num = $_GET["num"];
		}
		$pagenum = 4;
		$start=($num-1)*$pagenum;
		$query = "SELECT F2Products.id, name, image, price, none_price, description, id_material, id_season,
		id_year
				FROM F2Products 
						JOIN Images
				ON F2Products.id = Images.id_product
						JOIN ProductCat
				ON F2Products.id = ProductCat.id_product
				WHERE main_picture = 1 AND ProductCat.id_cat = $id_cat
				ORDER BY F2Products.id DESC
				LIMIT $start, $pagenum ";
		$result = $mysqli->query($query); 
		echo $mysqli->error;
		while ($row = $result->fetch_assoc()) {
		   echo '<div class="product-img">
				<a href="item.php?id='.$row["id"].'" class="item-product"><img src="images/'.$row["image"].'" alt=""></a>
				<a href="item.php?id='.$row["id"].'" class="item-product"><p class="name">'.$row["name"].'</p></a>
				<p class="price">$ '.$row["price"].'</p>
				<input type="hidden"  value="'.$row['id_material'].'">
				<input type="hidden"  value="'.$row['id_season'].'">
				<input type="hidden"  value="'.$row['id_year'].'">
				<p class="none-price"><s>$ '.$row["none_price"].'</s></p>
				<p class="description">'.$row["description"].'</p>
				<div class="rating"><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i></div>
				<br><br><br>
				<a href="item.php?id='.$row["id"].'" class="add-to-cart">choice options</a>
			</div>';
		    
		 }
		$query ="SELECT F2Products.id
				FROM F2Products JOIN ProductCat
				ON F2Products.id = ProductCat.id_product
				WHERE ProductCat.id_cat = $id_cat";

		$result = $mysqli->query($query);

		$num2 =  mysqli_num_rows($result);

		$num_pages = $num2 / $pagenum;
		echo'</div></div><ul class="page-wrap">';
		for ($i=1;$i<($num_pages+1);$i++) {
			echo '
			<li class="page"><a href="product.php?id='.$id_cat.'&num='.$i.'">'.$i.'</a></li>
			';
		}
echo "</ul>";
	
	include("footer.php");
?>			
	