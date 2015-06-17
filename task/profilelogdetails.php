<?php
	session_start();
	//echo "Session value: ".$_SESSION['user_name']."<br>";  $current_user_id = $_COOKIE['user'];
	if($_SESSION['user_id'] != ''){
		if($_GET['record_id'] != ''){
			$record_id = $_GET['record_id'];
			setcookie('record_id',$_GET['record_id']);
		}else{
			$record_id = $_COOKIE['record_id'];
		}		
		mysql_connect('localhost','root','');
		mysql_select_db('automate');
		$result = mysql_query("SELECT * FROM `logintime` WHERE sno = '$record_id'");
		$r = mysql_fetch_assoc($result);		
?>
<!DOCTYPE html>
<html>
	<head>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<style>
			.view{
				margin-left:100px;margin-right:100px;margin-top: 30px;font-size:18px;
			}
			.outside {
				border:1px solid gray;margin-left:300px;margin-right:300px;border-radius:10px;
			}
			.field {
				margin-left:50px;
			}
			.txt {
				padding:3px;border:1px solid gray;margin-top:3px;width:280px;
			}
			.btn {
			float:right; margin-top:20px; border-radius:3px; background-color:white; border:1px solid gray;
		}
		</style>
	</head>
	<body>
		<div class="container">               
		  <ul class="pagination">
			<li><a href="welcome.php"> Profile </a></li>
			<li><a href="logdetails.php">Log Details</a></li>
			<li><a href="addlog.php"> Add New Log</a></li>
		  </ul>
		  
		  <a href="logout.php" style="margin-left:950px"> Logout </a>
		  
		</div>
		<div class="outside">
			<fieldset class="view">
				<legend> Detail Log View: </legend>
				<div class="field" >
					User Id: <input type='text' class="txt" name='' value="<?php echo  $record_id;   ?>" readonly style="margin-left:40px;">
				</div>
				<div class="field">
					Login Date: <input type='text' class="txt" name='' value="<?php echo  $r['logindate']; ?>" readonly style="margin-left:13px;">
				</div>
				<div class="field">
					Login Time: <input type='text' class="txt" name='' value="<?php echo $r["logintime"]; ?> " readonly style="margin-left:13px;">
				</div>
				<div class="field">
					Logout Time: <input type='text' class="txt" name='' value="<?php echo  $r["logouttime"];  ?>" readonly style="margin-left:3px;">
				</div>
				<br><br>
			</fieldset>
		</div>
	</body>
</html>		
<?php
	}else{
		header('Location:login.php');
	}
	
?>