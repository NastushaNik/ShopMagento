<?php 
include("db.php");
$id = $_GET["id"];
$query = "DELETE 
		FROM F2Products JOIN Image
		ON F2Products.id = Images.id_product
        WHERE id='$id'";
   //Удаляем товар из базы данных из HTML
$mysqli->query($query); // выполняем запрос query.
//объект результата сохраняем в $result
echo $mysqli->error;//для вывода инф если есть ошибки базы данных
header ('Location: admin.php');
