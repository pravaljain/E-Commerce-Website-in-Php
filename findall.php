<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>TLS List Users</title>
<style>
.middle{
	border:2px;
	border-radius: 8px;
	width:80%;
	height:auto;
	margin: 0 10% 0 10%;
}

.table {
    border-collapse: separate;
    border-spacing: 0.6em 1em;
    font-size:100%; 
    font-weight: bold;
    color:#b22222;
    align:center;
}
.table2 {
    border-collapse: separate;
    border-spacing: 0.6em 1em;
    font-size:100%; 
    font-weight: bold;
    color:#b22222;
    align:center;
    border-radius:8px;
    -moz-border-radius:8px;
}

tr.row:hover{background-color:#EFA9A9}


</style>

</head>
<body>
<?php include dirname(__FILE__)."/header.php";?>


<div class="middle">
<form action="logout.php">
			    	<button class="button search" style="color:#ffa500; font-weight:bold; margin-top:0.5%;margin-left:92%;" type="submit" formaction="logout.php">Logout</button>
			    	</form>
			    	
<?php

$sessionid= $_SESSION["uid2"];
if (  $sessionid== null || strcmp(strval($sessionid),"") == 0 ) {
	function redirect($url) {
						    if(!headers_sent()) {
						        //If headers not sent yet... then do php redirect
						        header('Location: '.$url);
						        exit;
						    } else {
						        //If headers are sent... do javascript redirect... if javascript disabled, do html redirect.
						        echo '<script type="text/javascript">';
						        echo 'window.location.href="'.$url.'";';
						        echo '</script>';
						        echo '<noscript>';
						        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
						        echo '</noscript>';
						        exit;
						    }
						}
			    		$url="login.php";
			    		redirect($url);
}
else {
	
			try {
			    $db_host = "name of the server";
				$db_username="username of the autorised user of the database";
				$db_pass="password associated with the above mentioned username";
				$conn = mysqli_connect($db_host,$db_username, $db_pass,"name of the database");
			
				$user1=strval($_SESSION['uid2']);
			    $uid4 = intval($user1);
			    
			    	$check= $conn->prepare("query to check user authentiation level");
			    	//<<bind params here>>
					$check->execute();
					$check->store_result();
					$check->bind_result($parameter1);// stmt 
		
			     while ($rowck = $check->fetch()){
					    	$s= $type;
					    	$s2= "type1";
					    	$s3= "type2";
					    	$s4= "typeetc";
					    if (strcmp($s,$s2)==0 || strcmp($s,$s3)==0 || strcmp($s,$s4)==0)
					    {
								    $user= strval($_REQUEST['uid']);
								    
								    $admin =$conn->prepare("query to select the name of the admin");
								    //<<bind params here>>
									$admin->execute();
									$admin->store_result();
									$admin->bind_result($names);
								    
								    $query=$conn->prepare("query to select all the user records ");
								    $query->execute();
									$query->store_result();
									$query->bind_result($listofparams);//rs2
								    
								    while ($rowadm = $admin->fetch())
								    {
								    	?>
								    	<h3 align="center"style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"><?php printf($names);?>,Here is/are the user(s) you are looking for.</h3>
								    	<br></br>
								    	<table class="table" border="2" cellpadding="1" cellspacing="2"  align="center">
								    	<thead>
											<tr>
												<td align="center" style="width: 200px; font-weight:bold;">User ID</td>
												<td align="center" style="width: 200px; font-weight:bold;">Username</td>
												<td align="center" style="width: 200px; font-weight:bold;">Password</td>
												<td align="center" style="width: 200px; font-weight:bold;">Full Name</td>
												<td align="center" style="width: 200px; font-weight:bold;">User Type</td>
												<td align="center" style="width: 200px; font-weight:bold;">Modify User</td>
												<td align="center" style="width: 200px; font-weight:bold;">Delete User</td>
											</tr>
										</thead>
								    	<?php
								    	while($rowque = $query->fetch()){
								    	?>
								    	
								    	<tr>
								    	<td align="center"><?php printf($uid);?></td>
										<td align="center"><?php printf($usrname);?></td>
										<td align="center"><?php printf($password);?></td>
										<td align="center"><?php printf($name);?></td>
										<td align="center"><?php printf($type);?></td>
										<form action="modify.php">
										<input type="hidden" name="userid" value="<?php printf($uid);?>">
										<input type="hidden" name="uid" value="<?php printf($user);?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="modify.php">Modify</button></td>
										</form>
										
										<form action="delete.php">
										<input type="hidden" name="userid" value="<?php printf($uid);?>">
										<input type="hidden" name="uid" value="<?php printf($user);?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="delete.php">Delete</button></td>
										</form>
										</tr>	
										
								    	<?php
								    	}
								    	?>
								    	</table>
								    	<?php
								    }
								  }	
								
							    else {
							    	http_response_code(401);
							    	}
		   					}
							if($conn)
								{    
						   			$conn->close();
								}
			}
			catch(Exception $e)
			{
			?>
			<div align="center" style="color:#708090;margin-top:10%;">
			<p style="font-size:400%;"><b>SORRY</b></p>
			<p style="font-size:200%;"><b>We couldn't process your request.</b></p>
			<p style="font-size:150%;">Please retry by going on <a style="text-decoration:none;" href="www.theoslifesciences.com">Theos Life Science's home page.</a></p>
			</div>
			<?php
			
			}
	}
?>
</div>
</div>

<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>