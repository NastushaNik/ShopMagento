<?php
	include("header.php");
if (isset($_POST['password']) && isset($_POST['email'])) {	
	$mysqli = new mysqli("localhost", "root", "", "F2Magento");
	$login = $_POST['email'];
	$password = $_POST['password'];
	$remember = $_POST['checkbox'];
	$query = "SELECT *
			  FROM  users
			  WHERE login = '$login'";
	$result = $mysqli->query($query); 
	echo $mysqli->error;
	if (empty($login) or empty($password)) {
		    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
	}
	if ($row = $result->fetch_assoc()) {				
			if ($login != $row["login"]){			
				if($remember=='remember'){
					setcookie('Session',$password,time()+60*60*24*1);
				}
				else{
					setcookie('Session',$password);
				}
				echo 'Поздравляем, Вы зарегистрированы!';
			}		
			else{
				echo 'Такой пользователь уже существует!';					
			}
	}
	else{
		$query = "INSERT INTO users
		(login,password)
		VALUES('$login','$password')";
		$mysqli->query($query);
		echo $mysqli->error;
		echo 'Поздравляем, Вы успешно зарегистрированы!';				
	}
}

include("footer.php");
?>