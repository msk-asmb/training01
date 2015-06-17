<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		session_unset();
		//$userid1 = $_COOKIE['user_id'];
		$serialno = $_COOKIE['serialno'];
		$logindate = date("Y-m-d");
		date_default_timezone_set('Asia/Kolkata');  // this sets time zone to IST
			$logouttime = date('h:i:s a');				//current time
		mysql_connect('localhost','root','');
		mysql_select_db('automate');
		mysql_query("update logintime set logouttime = '$logouttime' where sno = '$serialno'");
		header('Location:login.php');
	}else{
		header('Location:login.php');
	}
	
?>
