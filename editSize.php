<?php
	include("db.php");
if (isset($_POST['updateSize'])) {
		  $id = $_POST["id"];
		  $sizeName = $_POST['name'];
		  
		$query = "UPDATE Size
		          SET size_name ='$sizeName'
		          WHERE id ='$id'";
		$mysqli->query($query); 
		echo $mysqli->error;
		header ('Location: admin-size.php');
	}
include("admin-header.php");
	$id = $_GET["id"];
	$query = "SELECT *
	          FROM  Size
	          WHERE id='$id'";
	$result=$mysqli->query($query); // выполняем запрос query.
	echo $mysqli->error;
while ($row = $result->fetch_assoc()) {
      echo '<form action="editSize.php" method="POST">    
      			<input type="hidden" name="id" value="'.$id.'"> 
		        <input class="form-style" value="'.$row["size_name"].'" type="text" name="name"
		        placeholder="Name"> 
		        <input type="submit" name="updateSize" value="Update">
		  </form>';
	}
?>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script> 
<script src="js/script.js"></script>