<?php
  include("admin-header.php");

  include("db.php");

  $id = $_GET["id"];
 
$query = "SELECT *
          FROM  F2Products
          WHERE id='$id'";
$result=$mysqli->query($query); // выполняем запрос query.
echo $mysqli->error;
while ($row = $result->fetch_assoc()) {
      echo '<form enctype="multipart/form-data" action="updateAdmin.php" method="POST">
        <input type="hidden" name="id" value="'.$id.'">    
        <input class="form-style" value="'.$row["name"].'" type="text" name="name"
        placeholder="Name">   
        <textarea class="form-style" name="description"
        placeholder="Descriptions">'.$row["description"].'</textarea> 
        <input class="form-style" value="'.$row["data_color"].'" type="text" name="dataColor" placeholder="Color">
        <input class="form-style" value="'.$dataSize.'" type="text" name="dataSize"
        placeholder="Size">
        <input class="form-style" value="'.$dataYear.'" type="text" name="dataYear"
        placeholder="Year">
        <input class="form-style" value="'.$dataMaterial.'" type="text" name="dataMaterial" placeholder="Material">
        <select class="form-style" value="'.$dataSeason.'" name="dataSeason">
        <option>Choose a season</option>
        <option value="Spring">Spring</option>
        <option value="Summer">Summer</option>
        <option value="Winter">Winter</option>
        <option value="Autumn">Autumn</option>      
        </select>
        <input class="form-style"  value="'.$price.'" type="text" name="price"placeholder="Price">
        
        <input class="form-style"  value="'.$pastPrice.'" type="text" name="pastPrice" placeholder="Past price"><br>
        <img style="width:100px; height:auto;" src="images/'.$row["image"].'" alt="">
        <input class="form-style" type="text" name="image" value="'.$img.'" placeholder="Image">
        <input type="submit" value="Update">
  </form>';
}
?>
</body>
</html>