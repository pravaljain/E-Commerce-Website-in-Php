<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>Add New Product</title>
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
			    
			    			$user= strval($_REQUEST['user']);
							$proname= strval($_REQUEST['proname']);
						    $compo= strval($_REQUEST['compo']);
							$pack= strval($_REQUEST['pack']);
							$type= strval($_REQUEST['type']);
							$avail= strval($_REQUEST['avail']);
							$desc= strval($_REQUEST['desc']);
							$pic= strval($_REQUEST['pic']);
							    
							    
							    $query1=$conn->prepare("query to select product where product name is given");
							    //bind params here
								$query1->execute();
								$query1->store_result();
								$query1->bind_result($nameq1);//rs
			    if ($rowq1 = $query1->fetch())
			    	{
			    	?>	
			    		
			    		<form action="logout.php">
			    			<button class="button search" style="color:#ffa500; font-weight:bold; margin-top:0.5%;margin-left:92%;" type="submit" formaction="logout.php">Logout</button>
			    		</form>
			    	
			    		
			    		
			    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;">Product Name '<?php printf($nameq1);?>' is Unavailable!</h3>
			    		<div align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:1%;">Please try again with a different Name.</div>

						<div class="middle" align="center">
									  <form action="addpro2.php" method="post"> 
											<br/>
												<table class="table" style=" color:#b22222; font-weight:bold;">
														<tr >
														<td></td>
								  							<td style="font-size: small;">
								  								* mandatory fields
								  							</td>
								  							<td></td>
								  						</tr>
														<tr>
															<td>Product Name*:</td>
																<td><input class="insearch" type="text" name="proname" maxlength="50" required></td>
								 								
													 	</tr>
													 	
														<tr>
															<td>Composition *:</td>
															<td><input class="insearch" type="text" name="compo" maxlength="500" required"></td>
												 	 		
												 	 	</tr>
								 						<tr>
								 							<td>Packing *:</td>
								 							<td><input class="insearch" type="text" name="pack" maxlength="80" required ></td>
														</tr>
														<tr>
															<td>Type *:</td>
															<td>
																	<select class="insearch" name="type">
																			  <option  value="Oral Cephalosporins and combinations">Oral Cephalosporins and combinations</option>
																			  <option value="Injectables-Cephalosporins">Injectables-Cephalosporins</option>
																			  <option value="Oral, Injectible Penicillins And Combinations">Oral, Injectible Penicillins And Combinations</option>
																			  <option value="Oral Quinolones And Combinations">Oral Quinolones And Combinations</option>
																			 <option value="Oral Macrolides">Oral Macrolides</option>
																			  <option value="Oxazolidinones">Oxazolidinones</option>
																			  <option value="Carbapenem And Combinations">Carbapenem And Combinations</option>
																			  <option value="Aminoglycosides">Aminoglycosides</option>
																			  <option value="Antimalarials">Antimalarials</option>
																			  <option value="Anti-Fungals">Anti-Fungals</option>
																			  <option value="Anti-Virals">Anti-Virals</option>
																			  <option value="Anti-allergics, Expectorants, Bronchodilators & Antiasthmatics">Anti-allergics, Expectorants, Bronchodilators & Antiasthmatics</option>
																			 <option value="Anti-inflammatory, Analgesic, Muscle Relaxant, Proteolytic Enzyme, Antispasmodic products">Anti-inflammatory, Analgesic, Muscle Relaxant, Proteolytic Enzyme, Antispasmodic products</option>
																			  <option value="Anti Ulcerant And Antacid">Anti Ulcerant And Antacid</option>
																			  <option value="Haemostatic/Antihaemorrhagic & Anabolic Steroids">Haemostatic/Antihaemorrhagic & Anabolic Steroids</option>
																			  <option value="Nutraceuticals-Antioxidants,Vitamins & Minerals Preparations">Nutraceuticals-Antioxidants,Vitamins & Minerals Preparations</option>
																			  <option value="Nutraceuticals-Iron, Calcium and D3">Nutraceuticals-Iron, Calcium and D3</option>
																			 <option value="Nutraceuticals-Pre-Probiotic(Synbiotic)">Nutraceuticals-Pre-Probiotic(Synbiotic)</option>
																			  <option value="Peripheral Neuropathy">Peripheral Neuropathy</option>
																			  <option value="Digestive Enzyme, Appetite stimulant, Hepato preparation">Digestive Enzyme, Appetite stimulant, Hepato preparation</option>
																			  
																	</select>
															</td>
												 	 	</tr>
												 	 	<tr>
															<td>Availability *:</td>
															<td>
																	<select class="insearch" name="avail">
																			  <option class="insearch"value="Available">Available</option>
																			  <option class="insearch"value="Currently Not  Available">Currently Not Available</option>
																	</select>
															</td>
												 	 	</tr>
												 	 	<tr>
															<td>Description:</td>
															<td><input class="insearch" type="text" name="desc" size="50"  maxlength="1000"></td>
												 	 	</tr>
												 	 	<tr>
															<td>Picture:</td>
															<td><input class="insearch" type="text" name="pic"></td>
												 	 	</tr>
														<tr> 	
														<br/>
														
														<td><input type="hidden" name="user" value="<?php printf($user);?>"></td>
								 						<td><Button class="button search" style="color:#ffa500; font-weight:bold;" Type="submit" formaction="addpro2.php">Submit</Button></td> 
								  						<td></td>
								  						</tr>
										  						
										 				</table>
										 	</form>
										 	
										</div> 	
					<?php
			    	
			    	}
			    else
			    	{	
				    	if (strcmp($type,"Oral Cephalosporins and combinations")==0 || strcmp($type,"Injectables-Cephalosporins")==0 || strcmp($type,"Oral, Injectible Penicillins And Combinations")==0 || strcmp($type,"Oral Quinolones And Combinations")==0 || strcmp($type,"Oral Macrolides")==0 || strcmp($type,"Oxazolidinones")==0 || strcmp($type,"Carbapenem And Combinations")==0 || strcmp($type,"Aminoglycosides")==0 || strcmp($type,"Antimalarials")==0 || strcmp($type,"Anti-Fungals")==0 || strcmp($type,"Anti-Virals")==0)
					    {
					    $query =$conn->prepare("query to insert new product");
					    		//bind params here
								$query->execute();
								$query->store_result();

					    ?>
			    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"> The Product has been added to the database</h3>
			    		<?php
			    	}
			    		else 
			    			if (strcmp($type,"Anti-allergics, Expectorants, Bronchodilators & Antiasthmatics")==0)
						    {
						    $query =$conn->prepare("query to insert new product into its respective table");
						    	//bind params here
								$query->execute();
								$query->store_result();

				    		?>
				    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"> The Product has been added to the database</h3>
				    		<?php }
				    	else
				    		if (strcmp($type,"Anti-inflammatory, Analgesic, Muscle Relaxant, Proteolytic Enzyme, Antispasmodic products")==0)
						    {
						    $query =$con->prepare("query to insert new product into its respective table");
						    	//bind params here
								$query->execute();
								$query->store_result();

				    		?>
				    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"> The Product has been added to the database</h3>
				    		<?php }
				    	else
				    		if (strcmp($type,"Anti Ulcerant And Antacid")==0)
						    {
						    $query =$conn->prepare("query to insert new product into its respective table");
						    	//bind params here
								$query->execute();
								$query->store_result();
							?>
				    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"> The Product has been added to the database</h3>
				    		<?php }
				    	else
				    		if (strcmp($type,"Haemostatic/Antihaemorrhagic & Anabolic Steroids")==0)
						    {
						    $query =$conn->prepare("query to insert new product into its respective table");
						    	//bind params here
								$query->execute();
								$query->store_result();
							?>
				    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"> The Product has been added to the database</h3>
				    		<?php }		
				    	else
				    		if (strcmp($type,"Nutraceuticals-Antioxidants,Vitamins & Minerals Preparations")==0 || strcmp($type,"Nutraceuticals-Iron, Calcium and D3")==0 || strcmp($type,"Nutraceuticals-Pre-Probiotic(Synbiotic)")==0 || strcmp($type,"Peripheral Neuropathy")==0 || strcmp($type,"Digestive Enzyme, Appetite stimulant, Hepato preparation")==0)
						    {
						    $query =$conn->prepare("query to insert new product into its respective table");
						   		//bind params here
								$query->execute();
								$query->store_result();

				    		?>
				    		<h3 align="center" style="font-size:150%; color:#b22222; font-weight:bold; padding-top:4%;"> The Product has been added to the database</h3>
				    		<?php 
				    	}
			    ?>
			    <div align="center" style="margin-top:3%;"> 
				   					<table class="table" cellpadding="1" cellspacing="2" style="font-size:150%; color:#b22222; font-weight:bold;">
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