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

<div class="middle">
<?php
try{
				$db_host = "name of the server";
				$db_username="username of the autorised user of the database";
				$db_pass="password associated with the above mentioned username";
				$conn = mysqli_connect($db_host,$db_username, $db_pass,"name of the database");

			    	
			    	$usrname= strval($_REQUEST['username']);
				    $pswd2= strval($_REQUEST['password']);
				    
					//implement some sort of incryption for the password
					
				    $query=$conn->prepare("query to match username and password and fetch corresponding details.");
				   	//bind params here
					$query->execute();
					$query->store_result();
					$query->bind_result($parameter1, $parameter2, $parameteretc); 
					
			    if ($rowque = $query->fetch())
			    	{	
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
						$_SESSION["uid2"] = $uid;
			    		$url="admin.php";
			    		redirect($url);
			    		
			    	}
			    else
			   
			    	?>
			    	
					<div align="center" style="font-size:200%; color:#b22222; font-weight:bold;">Incorrect Login Credentials.</div>
					<div align="center" style="font-size:200%; color:#b22222; font-weight:bold;">Please Enter Valid Credentials.</div>
					
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
					
	<?php
		
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
		?>
</div>
</div>



<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>