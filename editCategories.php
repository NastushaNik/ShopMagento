<?php
	include("db.php");
if (isset($_POST['updateCategories'])) {
		  $id = $_POST["id"];
		  $categoriesName = $_POST['name'];
		  
		$query = "UPDATE Categories
		          SET name_cat='$categoriesName'
		          WHERE id='$id'";
		$mysqli->query($query); 
		echo $mysqli->error;
		header ('Location: admin-categories.php');
	}
include("admin-header.php");
	$id = $_GET["id"];
	$query = "SELECT *
	          FROM  Categories
	          WHERE id='$id'";
	$result=$mysqli->query($query); // выполняем запрос query.
	echo $mysqli->error;
while ($row = $result->fetch_assoc()) {
      echo '<form action="editCategories.php" method="POST">    
      			<input type="hidden" name="id" value="'.$id.'"> 
		        <input class="form-style" value="'.$row["name_cat"].'" type="text" name="name"
		        placeholder="Name"> 
		        <input type="submit" name="updateCategories" value="Update">
		  </form>';
	}
?>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script> 
<script src="js/script.js"></script>