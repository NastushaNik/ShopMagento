<?php
include("db.php");
	include("header.php");
?>
<h2>Customer login</h2>
<div class="loginForm">
	<p>Registered Customers</p>
	<p>If you have an account, sign in with your email address.</p>
	<form action="register.php" class="modal-login-form" method="POST">
		<label>Email:
			<input type="email" name="email">
		</label>
		<label>Password:
			<input type="password" name="password">
		</label>
		<label>
			<input type="checkbox" name="checkbox" class="modal-checkbox">Remember Me
		</label>
		<input type="submit" name="submit" class="modal-button" value="Sign in">
		<ul>
			<li><a href="">Forgot Your Username?</a></li>
			<li><a href="">Forgot Your Password?</a></li>
			<li><a href="">Create an Account</a></li>
		</ul>
	</form>						 
</div>
