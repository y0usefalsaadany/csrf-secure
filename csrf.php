<?php

class csrf{
	
	public static function start_csrf(){
		session_start();
		$_SESSION['token'] = md5(uniqid(mt_rand(),true));
	}
	
	public static function token(){
		echo $_SESSION['token'];
	}
	
	public static function s_csrf(){
		session_start();
		if ($_SESSION['token'] == $_POST['token'] ){
			$token = $_POST['token'] ;
			echo "this token : $token ";
		}else{
			 die("this form not secure");
		}
}
}
