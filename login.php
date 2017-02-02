<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>Theos Life Sciences</title>
<style>
.middle{
	border:2px;
	border-radius: 8px;
	width:80%;
	margin: 0 10% 0 10%;
}

</style>

</head>


<body>
<?php include dirname(__FILE__)."/header.php";?>

<br>
<br>
<?php
				$db_host = "name of the server";
				$db_username="username of the autorised user of the database";
				$db_pass="password associated with the above mentioned username";
				$conn = mysqli_connect($db_host,$db_username, $db_pass,"name of the database");
?>

<div class="middle">
<div align="center" style="font-size:200%; color:#b22222; font-weight:bold;">Please Enter the following details to login:</div>

<div align="center">
	 <form action="login2.php" method="post"> 
			<br/>
				<table>
						<tr style="font-size:150%; color:black">
							<td>Username:&nbsp;&nbsp;</td>
							<td><input class="insearch" style="padding-left:4%;" type="text" name="username" required></td>
				 	 	</tr>
 						<tr style="font-size:150%; color:black;">
 							<td>Password:&nbsp;&nbsp;</td>
 							<td><input class="insearch" style="padding-left:4%;" type="password" name="password" required></td>
						</tr>
						<tr> 
						<td></td>
						<td><Button class="button search" type="submit" formaction="login2.php" style="color:#ffa500; font-weight:bold;"><p style="font-weight:bold;">Login</p></Button></td> 
  						</tr>
 				</table>
 	</form>
 	
</div>
</div>


<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>