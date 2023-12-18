<?php
$title = "login";
include "backend/database_con.php";
include "head.php";
if (isset($_POST['login'])){
    include 'system/loginSystem.php';

	

}


?>
<style>

@import url('https://fonts.googleapis.com/css?family=Lobster|Mako');

body {
	font-family: 'Mako', sans-serif;
  	letter-spacing: .1em;
	text-rendering: optimizeLegibility;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
	
	color: #ffffff;

	background: #282537;
	background-image: -webkit-radial-gradient(top, circle cover, #3c3b52 0%, #252233 80%);
	background-image: -moz-radial-gradient(top, circle cover, #3c3b52 0%, #252233 80%);
	background-image: -o-radial-gradient(top, circle cover, #3c3b52 0%, #252233 80%);
	background-image: radial-gradient(top, circle cover, #3c3b52 0%, #252233 80%);

}
h1 {
	font-family: 'Lobster', cursive;
	padding: 5% 0 7% 0;
}
a {
	color: #32797c;
}
a:focus, a:hover {
	color: #009898;
}
.btn-default {
  border-color: transparent;
}
.btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
  outline: 0 auto -webkit-focus-ring-color;
  outline-offset: 0;
}
.form-group {
	position: relative;
	height: 50px;
}
.form-control {
	color:white;
  	font-size: 100%;
  	letter-spacing: .07em;
  	border: 1px solid transparent;
	
  	box-shadow: inset 0 1px 1px transparent;
}
:focus {
  	outline: -webkit-focus-ring-color auto 0;
	
}
.form-control:focus {
	color:white;
  	-webkit-box-shadow: inset 0 1px 1px transparent, 0 0 8px transparent;
  	box-shadow: inset 0 1px 1px transparent, 0 0 8px transparent;
}

.form-label {
	position: absolute;
	pointer-events:none;
	top: 3px;
	font-size: 110%;
	transition: .2s ease all; 
  -moz-transition: .2s ease all; 
  -webkit-transition: .2s ease all;
}
.form-input:focus ~ .form-label, 
.form-input:valid ~ .form-label 		{
  	top:-17px;
  	font-size: 95%;
}
.has-success .form-control-feedback {
   color: #4cbd38;
}
.has-warning .form-control-feedback {
   color: #dab91a;
}
.has-error .form-control-feedback {
   color: #ec2824;
}
/*================== LOGIN ==================*/
.loginForm {
	position: absolute;
	left: 50%;
  	top: 50%;
  	transform: translate(-50%, -50%);
  	width: 25%;
  	margin: 0 auto;
}
.loginForm .form-control {
  	background-color: transparent;
  	border-bottom: 2px solid #0388fc;
  	border-radius: 0;
  	padding-left: 0;
}
.loginForm .form-control:focus {
  	border-color: transparent;
  	border-bottom: 2px solid #9c9e9f;
}
.submit {
	margin-top: 4%;
  margin-bottom: 1%;
	width: 100%;
	font-size: 100%;
	letter-spacing: .1em;
  color: #ffffff;
  background-color: #0388fc;
}
.btn-default.focus,
.btn-default.submit:focus,
.btn-default.submit:hover {
  color: #fff;
  background-color: #0388fc ;
  opacity: 0.7;
  border-color: transparent;
}
.loginPwReset {
  margin-top: .625em;
}

</style>

<div class="container loginForm ">
  <div class="">
		<h1>Login</h1>
		<form action="" method="POST">
		  <div class="form-group has-feedback">
		    <input type="text" name="username" id="username" class="form-control form-input" autocomplete="off" placeholder="" required>
			 <label class="form-label" for="">username</label>
			 <span class="glyphicon form-control-feedback"></span>
		  </div>
		  <br>
		  <div class="form-group has-feedback">
		    <input type="password" name="password" id="password" class="form-control form-input" placeholder="" required>
			 <label class="form-label" for="">password</label>
			 <span class="glyphicon form-control-feedback"></span>
		  </div>
		  <input type="submit" value="Login" name="login"  class="tombol btn btn-default submit">
		</form>
		<!-- <div class="form-inline">
			<div class="form-group pull-right">
				<label id="" class="loginPwReset">
					<a href="#">Forgot Passwort ?</a>
				</label>
			</div>
		</div> -->
		
  </div>
</div>


<!-- <br>
<br>


<form action="" method="POST">

<div>
    
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" name="login" class="tombol">
			</div>

</form> -->