<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>TLS Quotes</title>
<style>
.middle{
	border:2px;
	border-radius: 8px;
	width:80%;
	margin: 0 10% 0 10%;
}

.table {
    
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
			    	$admin = $conn->prepare("query to retrieve quotes");
			    	$admin->execute();
					$admin->store_result();
					$admin->bind_result($listofdetailsofquotes);// rs1
			    
			    ?>
			    <div align="center" style="margin-top:5%;">
			    <table class="table"  cellpadding="1" cellspacing="1" align="center" style="border: 2px solid #b22222; border-radius:8px; ">
			    	<thead>
						<tr style="border-bottom:2px solid ;height:2em;">
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">ID</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">UID</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">Name</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">Company Name</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">Email</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">Phone</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">TIN</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">ProductID</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">Product</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">Quantity</td>
							<td align="center" style="width: 200px; font-weight:bold;vertical-align: middle;">Date</td>
						</tr>
					</thead>
			    <?php
			    while ($rowadm = $admin->fetch())
			    {
			    	?>
			    	<div align="center" style="margin-top:5%">
			    	<tr style="border-bottom:1px groove black;">
			    	<td align="center" style="vertical-align: middle;"><?php printf($id);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($userid);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($name);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($company_name);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($email);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($phone);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($TIN);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($pid);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($pname);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($quantity);?></td>
					<td align="center"style="vertical-align: middle;"><?php printf($Date);?></td>
					</tr>
			    	<?php
			    }
			    	    
			?>
		</div>	
	</table>
	<br></br>
	<br></br>
	<div align="center"> 
				   					<table class="table" cellpadding="1" cellspacing="2" >
				   					<tr>
							    	<h4 align="center" style="color:#b22222; font-weight:bold; font-size:100%;">What would you like to do next?</h4>
							    	</tr>
							    	
							    	<tr style="margin-top:-2%;">
							    		<form action="umanage.php">
										<input type="hidden" name="uid" value="<?php printf($user); ?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="umanage.php">Manage Users.</button></td>
										</form>
							    		
							    		<td align="center">or</td>
							    		
							    		<form action="pmanage.php">
										<input type="hidden" name="uid" value="<?php printf($user); ?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="pmanage.php">Manage Products</button></td>
										</form>	
										
										<td align="center">or</td>
							    		
							    		<form action="admin.php">
										<input type="hidden" name="uid" value="<?php printf($user); ?>">
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
</div>

<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>