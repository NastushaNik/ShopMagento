<?php
	include("db.php");
if (isset($_POST['updateMaterial'])) {
		  $id = $_POST["id"];
		  $materialName = $_POST['name'];
		  
		$query = "UPDATE Material
		          SET material_name='$materialName'
		          WHERE id='$id'";
		$mysqli->query($query); 
		echo $mysqli->error;
		header ('Location: admin-material.php');
	}
include("admin-header.php");
	$id = $_GET["id"];
	$query = "SELECT *
	          FROM  Material
	          WHERE id='$id'";
	$result=$mysqli->query($query); // выполняем запрос query.
	echo $mysqli->error;
while ($row = $result->fetch_assoc()) {
      echo '<form action="editMaterial.php" method="POST">    
      			<input type="hidden" name="id" value="'.$id.'"> 
		        <input class="form-style" value="'.$row["material_name"].'" type="text" name="name"
		        placeholder="Name"> 
		        <input type="submit" name="updateMaterial" value="Update">
		  </form>';
	}
?>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script> 
<script src="js/script.js"></script>