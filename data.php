<?php
include "csrf.php";
$username =$_POST['username'];
$password =$_POST['password'];
if (isset($_POST['send'])){
	if(!empty($username && $password)){
		csrf::s_csrf();
	}else{
		echo "please correct data";
	}
}
