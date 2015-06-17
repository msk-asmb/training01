<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
		.btn {
			float:right; margin-top:20px; border-radius:3px; background-color:white; border:1px solid gray;
		}
		.log_list {
			background-color:#FFFFFF;margin-left:100px;margin-right:100px;margin-top:50px;border-radius:10px;
		}
		.tab_header {
			text-align: center;padding:5px;
		}
		.tab_view {
			border:1px solid black;border-radius:10px;margin-left:10px;margin-right:10px;width:98%;
		}
		.attribute {
			padding:8px; font-size:18px;
		}
	  </style>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome </title>
<script>
    $(function(){
    $('.test').on('click', '.toggleTest', function(e){
        var id = $(this).data('id');
        $("#test-"+id).html("Done");
        return false;
    });
});

$(document).ready(function() {
    $('#paginatedTable').dataTable();
} );
  </script>
</head>

<body>
 

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
	  <li><a href="welcome.php">Profile</a></li>
        <li class="active"><a href="#">Log Details</a></li>
        
        <li><a href="logout.php" style="margin-left:900px">Logout</a></li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="log_list">
			<form method="post" action="profilelogdetails.php">
				<div>
					<div class="tab_header">
						<h4> <u> Log Details Table </u> </h4>
					</div>
					<div>
						<table class="tab_view">
							<tr style="border:1px solid black;">
								<td class="attribute">
									<span> <u> Serial No </u> </span>
								</td>
								<td class="attribute">
									<span> <u> User Id </u> </span>
								</td>
								<td class="attribute">
									<span> <u> Dates </u> </span>
								</td>
								<td class="attribute">
									<span> <u> Start Time </u> </span>
								</td>
								<td class="attribute">
									<span> <u> End Time </u> </span>
								</td>
							</tr>
<a href="javascript:void(0)" onclick="goToURL(); return false;"> </a><br>
<?php

include('lock.php');

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

$userid = $_SESSION['user_id'];

$sql = "SELECT * FROM logintime where id='$userid'";
$result = $conn->query($sql);
		if($result->num_rows > 0){
								while($row = $result->fetch_assoc()) {
							?>
								<a href="#">
									<tr style="border:1px solid black;">
										<td class="attribute">
											<span> <?php echo $row["sno"] ?> </span>											
										</td>
										<td class="attribute">											
											<span> <?php echo $row["id"] ?> </span>											
										</td>
										<td class="attribute">
											<a href="profilelogdetails.php?record_id=<?php echo $row["sno"]; //sending hidden field value of sl_no ?>">
												<span> <?php echo $row["logindate"]; ?> </span>
											</a>
										</td>
										<td class="attribute">											
											<span> <?php echo $row["logintime"]; ?> </span>											
										</td>
										<td class="attribute">											
											<span> <?php echo $row["logouttime"]; ?>  </span>											
										</td>
									</tr>
								</a>
								<?php
								}
									if(isset($_POST['record_id'])){
										echo $record_id = $_POST['record_id'];exit;
										setcookie('record_id',$record_id);
										header('Location:profilelogdetails.php');
									}
								
							?>
 </body>
</html>
<?php
	$conn->close();
	}
	
?>

