<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>TLS Product Statistics</title>
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

$sessionid= $_SESSION["variable12"];
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
						    		$uvar= strval($_REQUEST['variable1']);
								    $variabled1= strval($_REQUEST['variable1']);
								    $variabled2= strval($_REQUEST['variable2']);
								    $var4= strval($_REQUEST['variable4']);
								    
					
								    $query1 = $conn->prepare("Select v1, v2, v3, v4, v5, v6, v8 from table3 where v8 >= ? and v8 <=?");
								    	//bind params here
										$query1->execute();
										$query1->store_result();
										$query1->bind_result($v1, $v2, $v3, $v4, $v5, $v6, $v8);// stmt rs<-
								    
								    
								    $query2 = $conn->prepare("select v5, sum(v6) from table3 where v5=? group by (v5) order by sum(v6)");
								    	//bind params here
										$query2->execute();
										$query2->store_result();
										$query2->bind_result($v5, $sum2);
										// stmt rs2<-
								    ?>
				    		
						    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">The Statistics of Orders between <?php printf($variabled1);?> and <?php printf($variabled2);?> are as follow:</h3>
						    		<div align="center" style="overflow-x:auto;">
				 					<table class="table2" border="2" cellpadding="1" cellspacing="2" style="border: 2px solid; border-radius:8px;margin-top:2%;">
										<thead>
											<tr class="row" style="border-bottom: 2px solid #b22222; height:2em; font-size:130%;">
												<td align="center" style="font-weight:bold;">User ID</td>
												<td align="center" style="font-weight:bold;">Name</td>
												<td align="center" style="font-weight:bold;">Company Name</td>
												<td align="center" style="font-weight:bold;">Product ID</td>
												<td align="center" style="font-weight:bold;">Product Name</td>
												<td align="center" style="font-weight:bold;">v6</td>
												<td align="center" style="font-weight:bold;">v8 of Order</td>
												</tr>
										</thead>
			  						<?php
			  						if ($row1 = $query1->fetch()) 
			 						{
			  							while ($row1 = $query1->fetch())
					  			    	{
					  						  ?>
					  							<tr class="row">
								    				<td align="center"><?php printf($v1);?></td>
													<td align="center"><?php printf($v2);?></td>
													<td align="center"><?php printf($v3);?></td>
													<td align="center"><?php printf($v4);?></td>
													<td align="center"><?php printf($v5);?></td>
													<td align="center"><?php printf($v6);?></td>
													<td align="center"><?php printf($v8);?></td>
													</tr>
					  						
					  						<?php
					  			    	}
			  												
	 								}	
	  								else{
	  									?>
			  							<tr class="row">
						    				<td align="center"><?php printf('0');?></td>
											<td align="center"><?php printf('0');?></td>
											<td align="center"><?php printf('0');?></td>
											<td align="center"><?php printf('0');?></td>
											<td align="center"><?php printf('0');?></td>
											<td align="center"><?php printf('0');?></td>
											<td align="center"><?php printf('0');?></td>
										</tr>
			  						
			  							<?php		
	  									}
	  						
	  								?>
	  						
	  						
	 								</table>
	 						
	 								 <?php
	 								if ($var4==null || strcmp($var4,"")==0) 
	 								{

	 								}
	 								else
	 									{
					 						?>
					 						<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">Sales statistics are as follow:</h3>
					 						<table class="table2" border="2" cellpadding="1" cellspacing="2" align="center" style="border: 2px solid; border-radius:8px;margin-top:2%;">
												<thead>
													<tr class="row">
														<td align="center" style="font-weight:bold;">Product Name</td>
														<td align="center" style="font-weight:bold;">Total Sales</td>
														</tr>
												</thead>
					  						<?php 
					  						
	  										while ($row2=$query2->fetch())
	  			    							{ 
						  						if (strcmp($v5,"0")==0 || strcmp($sum2,"0")==0 || $v5== null || $sum2== null) 
						  							{
						  	  						?>
						  								<tr class="row">
						  								<td align="center">0</td>
						  			    				<td align="center">0</td>
						  								</tr>
						  							<?php
						  							}
				  	  							else{	
							  							  ?>
							  							<tr class="row">
							  								<td align="center"><?php printf($v5);?></td>
															<td align="center"><?php printf($sum2);?></td>
														</tr>
							  								<?php
								  			    	}
		 										}
	 					
						  						?>
						  						
						  						
						 						</table>
						 						</div>
						 						<br></br>
						 						<?php
	 									}
									?>	
		 							 <div align="center"> 
				   					<table class="table" cellpadding="1" cellspacing="2" style="margin-top:2%;">
				   					<tr>
							    	<h4 align="center" style="color:#b22222; font-weight:bold; font-size:100%;margin-top:2%;">What would you like to do next?</h4>
							    	</tr>
							    	
							    	<tr style="margin-top:-2%;">
							    		<form action="umanage.php">
										<input type="hidden" name="variable1" value="<?php printf($u); ?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="umanage.php">Manage Users.</button></td>
										</form>
							    		
							    		<td align="center">or</td>
							    		
							    		<form action="pmanage.php">
										<input type="hidden" name="variable1" value="<?php printf($u); ?>">
										<td align="center"><button class="button search" style="color:#ffa500; font-weight:bold;" type="submit" formaction="pmanage.php">Manage Products</button></td>
										</form>	
										
										<td align="center">or</td>
							    		
							    		<form action="admin.php">
										<input type="hidden" name="variable1" value="<?php printf($u); ?>">
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
<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>