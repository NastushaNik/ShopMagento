<?php
$mysqli = new mysqli("localhost", "root", "", "F2Magento");
  $id = $_GET["id"];
  $nameProduct = $_GET['name'];
  $description = $_GET['description'];
  $price = $_GET['price'];
  $pastPrice = $_GET['none_price'];
  $dataYear = $_GET['data_year'];
  $dataSeason = $_GET['data_season'];
  $dataSize = $_GET['data_size'];
  $dataMaterial = $_GET['data_material'];
  $dataColor = $_GET['data_color'];
  $nameImg = $_FILES['userfile']['name'];
  $img = $_GET['image']; 
$query = "UPDATE F2products
          SET name='$nameProduct', description='$description', price = '$price', none_price ='$pastPrice', data_year='$dataYear', data_season='$dataSeason', data_size='$dataSize', data_material='$dataMaterial', data_color='$dataColor', image='$img'
          WHERE id='$id'";
$mysqli->query($query); 
echo $mysqli->error;
header ('Location: admin.php');

?>