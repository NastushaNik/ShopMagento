<?php
	include("db.php");
if (isset($_POST['updateColor'])) {
		  $id = $_POST["id"];
		  $colorName = $_POST['name'];
		  $colorCode = $_POST['code'];
		$query = "UPDATE Color
		          SET color_name='$colorName', color_code='$colorCode'
		          WHERE id='$id'";
		$mysqli->query($query); 
		echo $mysqli->error;
		header ('Location: admin-color.php');
	}
include("admin-header.php");
	$id = $_GET["id"];
	$query = "SELECT *
	          FROM  Color
	          WHERE id='$id'";
	$result=$mysqli->query($query); // выполняем запрос query.
	echo $mysqli->error;
while ($row = $result->fetch_assoc()) {
      echo '<form action="editColor.php" method="POST">    
      			<input type="hidden" name="id" value="'.$id.'"> 
		        <input class="form-style" value="'.$row["color_name"].'" type="text" name="name"
		        placeholder="Name">
		        <input id="colorPicker" class="form-style " type="color" name="color">
				<span  style="cursor:pointer; padding:1%; line-height: 4em ;color: white;
				background: #cda379;" class="getСode">Change The Code</span>
				<input type="text" value="'.$row["color_code"].'" name="code" id="result" class="form-style" placeholder="Color code"> 
		        
		        <input type="submit" name="updateColor" value="Update">
		  </form>';
	}
?>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script> 
<script src="js/script.js"></script>