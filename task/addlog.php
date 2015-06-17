<?php
	session_start();
	//echo "Session value: ".$_SESSION['user_name']."<br>";
	if($_SESSION['user_id'] != ''){
		$record_id = $_SESSION['user_id'];
?>
<html>
	<head>
	
	
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
			<script>
				var curdate = new Date();
				$(function() {
					$( "#logindate" ).datepicker({
						dateFormat: "yy-mm-dd",
						value: curdate,   // the current date is used as default value
						min: curdate,
						max:curdate,
					});
				},
				function(){
					$('#logintime').TimeSelect({
						containerClass: "timeCntr",
						containerWidth: "350px",
						setButtonLabel: "Select",
						minutesLabel: "min",
						hoursLabel: "Hrs"
					});
				});
				
       		</script>
			 <script language="javascript" src="protoplasm.js"></script>
        <script language="javascript">
            Protoplasm.use('timepicker').transform('input.timepicker');
        </script>
			
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
		
		<link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />
	  </style>
	</head>
	<body>
		<div class="container">               
		  <ul class="pagination">
			<li><a href="welcome.php"> Profile </a></li>
			<li><a href="logdetails.php"> Log Details </a></li>
		  </ul>
		  
			<a href="logout.php" style="margin-left:800px"> Logout </a>
		  
		</div>
		<form method="post">
			<div class="outside">
				<fieldset class="view">
					<legend> Create New Log: </legend>
					<div class="field">
						Login Date: <input type='text' class="txt" name='logindate' id="logindate" style="margin-left:17px;">
					</div>
					<div class="field">
						User Id: <input type='text' class="txt" name='user_id' value="<?php echo $record_id; ?>" readonly style="margin-left:47px;">
					</div>
					<div class="field">
						Login Time: <input type='text' class="timepicker" style="margin-left:19px;">
					</div>
					<div class="field">
						Logout Time: <input type='text'  id="" style="margin-left:9px;">
					</div>
					<br>
					<input type="submit" name="submit" value="Submit" style="margin-left:260px;border-radius:8px;">
					<input type="submit" name="cancel" value="Cancel" style="margin-left:20px;border-radius:8px;">
				</fieldset>
				<br>
			</div>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$logindatedate = $_POST['logindate'];
				$id = $_POST['id'];
				$logintime = $_POST['logintime'];
				$logouttime = $_POST['logouttime'];
				mysql_connect('localhost','root','');
				mysql_select_db('automate');
				$rs = mysql_query("insert into `logintime` values(' ','$id','$logindate','$logintime','$logouttime')");
				if($rs > 0){
					header('Location:timelog.php');
				}
			}
			if(isset($_POST['cancel'])){
				header('Location:profilelogdetails.php');
			}
		?>
	</body>
</html>
<?php
	}else{
		header('Location:login.php');
	}
?>