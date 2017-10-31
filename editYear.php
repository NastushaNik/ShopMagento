<?php
	include("db.php");
if (isset($_POST['updateYear'])) {
		  $id = $_POST["id"];
		  $yearName = $_POST['name'];
		  
		$query = "UPDATE Year
		          SET year_name ='$yearName'
		          WHERE id ='$id'";
		$mysqli->query($query); 
		echo $mysqli->error;
		header ('Location: admin-year.php');
	}
include("admin-header.php");
	$id = $_GET["id"];
	$query = "SELECT *
	          FROM  Year
	          WHERE id='$id'";
	$result=$mysqli->query($query); // выполняем запрос query.
	echo $mysqli->error;
while ($row = $result->fetch_assoc()) {
      echo '<form action="editYear.php" method="POST">    
      			<input type="hidden" name="id" value="'.$id.'"> 
		        <input class="form-style" value="'.$row["year_name"].'" type="text" name="name"
		        placeholder="Name"> 
		        <input type="submit" name="updateYear" value="Update">
		  </form>';
	}
?>
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script> 
<script src="js/script.js"></script>