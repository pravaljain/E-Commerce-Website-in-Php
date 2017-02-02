<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>TLS Manage Users</title>
<style>
.middle{
	border:2px;
	border-radius: 8px;
	width:80%;
	margin: 0 10% 0 10%;
}

.table {
    border-collapse: separate;
    border-spacing: 0.6em 1em;
    font-size:150%; 
    font-weight: bold;
    color:#b22222;
}

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
			
				$var1=strval($_SESSION['var1']);
			    $var2 = intval($var1);
			    
			    	$check= $conn->prepare("query to check user authentiation level");
			    	//bind params here
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
			    
			    			$u= strval($_REQUEST['var']);
			    			
						    $admin =$conn->prepare("Select column4 from table1 where column2=? and column3=? union distinct Select column4 from table2 where column2=? and column3=? union distinct Select column4 from table3 where column2=? and column3=?");
					    	//bind params here
							$admin->execute();
							$admin->store_result();
							$admin->bind_result($column4);// stmt2 rs1<-
			    
			    while ($rowadmin=$admin->fetch())
			    {
			    	?>
			    	
			    	<div align="center" style="margin-top:5%">
			    	
			    	
			    	<table class="table"  cellpadding="1" cellspacing="2" align="center" >
			    	<tr>
									    
			    		<form action="add.php">
						<input type="hidden" name="u" value="<?php printf($u);?>">
						<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="add.php">Add New User</button></td>
						</form>
			    		
			    		<td align="center">or</td>
						
			    		<form action="find.php">
						<input type="hidden" name="u" value="<?php printf($u);?>">
						<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="find.php">Search</button></td>
						<td><input class="insearch" style="margin-left:10%;margin-left:-3%; text-padding:3%;  text-align:center;" type="text" name="name" value="username or name" maxlength="50" required required size="20" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username or name';}"></td>
						</form>
			    		
			    		<td align="center">or</td>
			    		
			    		<form action="findall.php">
						<input type="hidden" name="u" value="<?php printf($u);?>">
						<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="findall.php">Show All Users</button></td>
						</form>	
			    					    		
					</tr>	
			    	<?php
			    }
			    	    
			?>
			
	</table>
	</div>
	<?php
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