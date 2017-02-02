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
			    
			    $user1=strval($_SESSION['uid2']);
			    $uid4 = intval($user1);
			    
			    	$check= $conn->prepare("query to check user authentiation level");
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
			    							$user= $_REQUEST['uid'];
											$proid= $_REQUEST['aid'];
											$proname= $_REQUEST['name'];
										    $compo= $_REQUEST['compo'];
										    $pack= $_REQUEST['pack'];
										    $type2= $_REQUEST['type'];
										    $avail= $_REQUEST['avail'];
										    $desc= $_REQUEST['desc'];
										    $pic= $_REQUEST['pic'];
										    
			   
				    if (strcmp($type2,"Oral Cephalosporins and combinations")==0 || strcmp($type2,"Injectables-Cephalosporins")==0 || strcmp($type2,"Oral, Injectible Penicillins And Combinations")==0 || strcmp($type2,"Oral Quinolones And Combinations")==0 || strcmp($type2,"Oral Macrolides")==0 || strcmp($type2,"Oxazolidinones")==0 || strcmp($type2,"Carbapenem And Combinations")==0 || strcmp($type2,"Aminoglycosides")==0 || strcmp($type2,"Antimalarials")==0 || strcmp($type2,"Anti-Fungals")==0 || strcmp($type2,"Anti-Virals")==0)
				    {
				    $query=$conn->prepare("query to update the desired records");
				    //<<bind params here>>
					$query->execute();
					$query->store_result();

		    		?>
		    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"> The Product details have been updated.</h3>
		    		<?php
		    		}
		    		else 
		    			if (strcmp($type2,"Anti-allergics, Expectorants, Bronchodilators & Antiasthmatics")==0)
					    {
		    				$query=$conn->prepare("query to update the desired records");
						   //<<bind params here>>
							$query->execute();
							$query->store_result();
			    		?>
			    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">The Product details have been updated.</h3>
			    		<?php
			    	}
			    	else
			    		if (strcmp($type2,"Anti-inflammatory, Analgesic, Muscle Relaxant, Proteolytic Enzyme, Antispasmodic products")==0)
					    {
			    			$query=$conn->prepare("query to update the desired records");
						    //<<bind params here>>
							$query->execute();
							$query->store_result();
			    		?>
			    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">The Product details have been updated.</h3>
			    		<?php
			    	}
			    	else 
			    		if (strcmp($type2,"Anti Ulcerant And Antacid")==0)
					    {
			    			$query=$conn->prepare("query to update the desired records");
						    //<<bind params here>>
							$query->execute();
							$query->store_result();
			    		?>
			    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">The Product details have been updated.</h3>
			    		<?php
			    	}
			    	else
			    		if (strcmp($type2,"Haemostatic/Antihaemorrhagic & Anabolic Steroids")==0)
					    {
			    			$query=$conn->prepare("query to update the desired records");
						    //<<bind params here>>
								$query->execute();
								$query->store_result();
			    		?>
			    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">The Product details have been updated.</h3>
			    		<?php
			    	}		
			    	else
			    		if (strcmp($type2,"Nutraceuticals-Antioxidants,Vitamins & Minerals Preparations")==0 || strcmp($type2,"Nutraceuticals-Iron, Calcium and D3")==0 || strcmp($type2,"Nutraceuticals-Pre-Probiotic(Synbiotic)")==0 || strcmp($type2,"Peripheral Neuropathy")==0 || strcmp($type2,"Digestive Enzyme, Appetite stimulant, Hepato preparation")==0)
					    {
			    			$query=$conn->prepare("query to update the desired records");
						    //<<bind params here>>
							$query->execute();
							$query->store_result();
			    		?>
			    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">The Product details have been updated in the records.</h3>
			    		<?php
			 			   	}		
		    			?>
				    
				  
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
		    else 
		    {
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