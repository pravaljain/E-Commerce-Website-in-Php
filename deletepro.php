<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>TLS Delete Product</title>
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
							$name= strval($_REQUEST['name']);
						    
						    $del1 = $conn->prepare("query to delete products");
						    //<<bind params here>>
							$del1->execute();
							$del1->store_result();
						    
						    
			    
			    	?>
			    	<form action="logout.php">
			    	<button class="button search" style="color:#ffa500; font-weight:bold; margin-top:0.5%;margin-left:92%;" type="submit" formaction="logout.php">Logout</button>
			    	</form>
			    	
			    	<h3 align="center"style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">Product <b><?php printf($name);?></b> was deleted.</h3>
			    	<br></br>
			    	<br></br>
			    	<div align="center"> 
				   					<table class="table" cellpadding="1" cellspacing="2" >
				   					<tr>
							    	<h4 align="center" style="color:#b22222; font-weight:bold; font-size:100%;">What would you like to do next?</h4>
							    	</tr>
							    	
							    	<tr style="margin-top:-2%;">
							    		<form action="umanage.php">
										<input type="hidden" name="uid" value="<?php printf($user);?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="umanage.php">Manage Users.</button></td>
										</form>
							    		
							    		<td align="center">or</td>
							    		
							    		<form action="pmanage.php">
										<input type="hidden" name="uid" value="<?php printf($user);?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="pmanage.php">Manage Products</button></td>
										</form>	
										
										<td align="center">or</td>
							    		
							    		<form action="admin.php">
										<input type="hidden" name="uid" value="<?php printf($user);?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="admin.php">Go To Main Admin Page.</button></td>
										</form>	
							    					    		
									</tr>
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
				 echo 'Caught exception: ',  $e->getMessage(), "\n";
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