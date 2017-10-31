<?php
include("db.php");
if (isset($_POST['add_to_cart'])) {
   $id = $_POST['id'];
   
    if (!empty($_POST['color']) && !empty($_POST['size']) && !empty($_POST['id']) ) {

      $quantity = 1;
     
      $color_id = $_POST['color'];
      $size_id = $_POST['size'];
      $hash = ($_COOKIE['Session']);
        if (isset($_COOKIE['Session'])) {
            
            $query = "SELECT *
                    FROM  Cart
                    WHERE product_id = '$id' AND user_hash = '$hash' AND id_color = '$color_id' AND id_size = '$size_id' ";
          $result = $mysqli->query($query); 
          echo $mysqli->error;

            if ($row = $result->fetch_assoc()) {
              $query = "UPDATE Cart
                        SET quantity=quantity+1
                        WHERE product_id = '$id' AND user_hash = '$hash' AND id_color = '$color_id' AND id_size = '$size_id'";
              $mysqli->query($query);
              echo $mysqli->error;
              header ('Location: item.php?id='.$id.'');
            }
            else{
              $query = "INSERT INTO Cart
                  (user_hash,product_id,quantity,id_color,id_size,datetime)
                  VALUES('$hash','$id','$quantity','$color_id','$size_id',NOW())";
                  $mysqli->query($query); 
                  echo $mysqli->error; 
                  header ('Location: item.php?id='.$id.'');
            } 
        }
        else if (!isset($_COOKIE['Session'])){
          $hash = md5(mt_rand(1000,1000000000));
          setcookie('Session', $hash);
            $query = "SELECT *
                    FROM  Cart
                    WHERE product_id = '$id' AND user_hash = '$hash' AND id_color = '$color_id' AND id_size = '$size_id'";
          $result = $mysqli->query($query); 
          echo $mysqli->error;

            if ($row = $result->fetch_assoc()) {
              $query = "UPDATE Cart
                        SET quantity=quantity+1
                        WHERE product_id = '$id' AND user_hash = '$hash' AND id_color = '$color_id' AND id_size = '$size_id'";
                  
              header ('Location: item.php?id='.$id.'');
            }
            else{
              $query = "INSERT INTO Cart
                  (user_hash,product_id,quantity,id_color,id_size,datetime)
                  VALUES('$hash','$id','$quantity','$color_id','$size_id',NOW())";
                  $mysqli->query($query); 
                  echo $mysqli->error;
                  header ('Location: item.php?id='.$id.'');
            } 
         } 
    }
    else{
      include("header.php");
      echo'<h2 style="color:red; margin:10px 0 20px; text-align:center;">Choice color and size</h2>
      <a href="item.php?id='.$id.'">Назад</a>';
      
    }
}

?>