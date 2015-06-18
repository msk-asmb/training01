
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome </title>
</head>

<body bgcolor="#FFFFFF">
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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="welcome.php">Profile</a></li>
        <li><a href="logdetails.php">Log Details</a></li>
        <li><a href="logout.php" style="margin-left:900px">Logout</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<?php

include('lock.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "automate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Kolkata');
$myusername = $_SESSION['login_user'];
$userid = $_SESSION['user_id'];
$_SESSION['user_id']=$userid;
$logindate=date("Y-m-d");
$logintime=date("h:i:sa");
//$serialno='sno';


//setcookie('userid',$user_id);
//setcookie($serialno,'sno');

$updatelogsql = "INSERT INTO `logintime` VALUES (' ',$userid,'$logindate','$logintime','')";

$sql = "SELECT id, username, passcode, mobileNo,Address,Street,City,Country FROM admin where username='$myusername'";
$result = mysql_query($sql);
$logresult = $conn->query($updatelogsql);
$row = mysql_fetch_row($result);
$userid = $row[0];
$userName = $row[1];
$password = $row[2];
$MobileNo = $row[3];
$Address  =$row[4];
$Street = $row[5];
$City =$row[6];
$Country =$row[7];
$sss = mysql_query("select max(sno) from logintime");

$id = mysql_result($sss,0);
setcookie('serialno',$id);


$conn->close();

} else {
    echo "Please log in first to see this page.";
}



?>
<div class="outside">
			<fieldset class="view">
				<legend> User's Profile: </legend>
				<div class="field">
					Userid: <input type='text' class="txt" name='' value="<?php echo  $userid; ?>" readonly style="margin-left:32px;">
				</div>
				<div class="field">
					Username: <input type='text' class="txt" name='' value="<?php echo $myusername; ?>" readonly style="margin-left:1px;">
				</div>				
				<div class="field">
					Password: <input type='text' class="txt" name='' value="<?php echo $password ; ?>" readonly style="margin-left:2px;">
				</div>
				<div class="field">
					Mobile: <input type='text' class="txt" name='' value="<?php echo $MobileNo; ?>" readonly style="margin-left:28px;">
				</div>
				<div class="field">
					Address: <input type='text' class="txt" name='' value="<?php echo $Address; ?>" readonly style="margin-left:15px;">
				</div>
				<div class="field">
					Street: <input type='text' class="txt" name='' value="<?php echo $Street; ?>" readonly style="margin-left:32px;">
				</div>
				<div class="field">
					City: <input type='text' class="txt" name='' value="<?php echo $City; ?>" readonly style="margin-left:50px;">
				</div>
				<div class="field">
					Country: <input type='text' class="txt" name='' value="<?php echo $Country; ?>" readonly style="margin-left:18px;">
				</div>
				<br><br>
			</fieldset>
		</div>
</body>
</html>
