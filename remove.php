<?php 
$mysqli = new mysqli("localhost", "root", "", "F2Magento");
$id = $_GET["id"];

$query = "DELETE FROM cart
          WHERE product_id='$id'";
   //Удаляем товар из базы данных из HTML
$mysqli->query($query); // выполняем запрос query.
//объект результата сохраняем в $result
echo $mysqli->error;//для вывода инф если есть ошибки базы данных
header ('Location: Cart.php');
?>