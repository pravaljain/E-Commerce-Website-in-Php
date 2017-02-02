<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script src="js/float-panel.js"></script>
<link rel="icon" type="image/png" sizes="16x16" href ="img/favicon.ico">
<title>TLS Products</title>
<style>
.middle{
	border:2px;
	border-radius: 8px;
	width:80%;
	height:auto;
	
}
.sidemenu{
font-family: 'bebas_neueregular';
   font-size: large;
   color: white !important;
   
}
.table {
    border-collapse: separate;
    border-spacing: 0.6em 1em;
    font-size:100%; 
    font-weight: bold;
    color:#b22222;
    
}
.table2 {
    border-collapse: separate;
    border-spacing: 0.6em 1em;
    font-size:100%; 
    font-weight: bold;
    color:#b22222;
   	
    border-radius:8px;
    -moz-border-radius:8px;
}
.table3 {
    border-collapse: separate;
    border-spacing: 0.6em 1em;
    font-size:100%; 
    font-weight: bold;
    
    margin-left:10.5%;
   	
    border-radius:8px;
    -moz-border-radius:8px;
}

.big
{ font-size:130%;
}
tr.rowspace>td {
	padding-bottom: 1em;
    border-bottom: 1px solid #b22222; 
}
.rowbc{
		align:center;
		font-size:170%; 
		font-weight: bold;
		color:#b22222;
		margin-left:20%;
		margin-top:2%;
		text-shadow: 2px 2px #ffa500;
		}
.typedcss{
		font-size:170%; 
		font-weight: bold;
		color:#b22222;
		margin-top:2%;
		margin-left:20%;
		text-shadow: 2px 2px #ffa500;
		 text-align:center;
		}		
.headbc{
		align:center;
		font-size:250%; 
		font-weight: bold;
		color:#b22222;
		margin-left:20%;
		margin-top:3%;
		text-shadow: 2px 2px #ffa500;
		}
		
		
        @media only screen and (max-width: 500px) {
            .floatWrapper {float:none!important;}       
            .float-panel {position:static!important;}
            .main-content {padding:20px;margin-left:10%;}
        }
</style>

</head>
<body>
<?php include dirname(__FILE__)."/header.php";?>

<table class="table3" align="center" width="1500" style="margin-top:1%;">
	<tr>
		<td width="200" class="floatWrapper" style="float:left;">
		 	
         
		</td>
		
		<td width="1000" style="">
			<div class="middle">
			
				
					
						<?php
							$db_host = "name of the server";
							$db_username="username of the autorised user of the database";
							$db_pass="password associated with the above mentioned username";
					try{
							$conn = mysqli_connect($db_host,$db_username, $db_pass,"name of the database");
						   
						    	## Initialization
								$uid= NULL;
								$uname = NULL;
								$cname = NULL;
								$email = NULL;
								$phone = NULL;
								$tin = NULL;

								if(isset($_REQUEST['uid'])) {
															    $uid1= $_REQUEST['uid'];
															    
															    $uid= strval($uid1);
															    $uid4 = intval($uid);
															    
															    $uname = strval($_REQUEST['uname']);
															    $cname = strval($_REQUEST['cname']);
															    $email = strval($_REQUEST['email']);
															    $phone = strval($_REQUEST['phone']);
															    $tin = strval($_REQUEST['tin']);
							    }
							    else {
							    		$uid4 = intval($_SESSION["uid2"]);
							    }


						    $typea=$conn->prepare("query to select the subcategory of a product from its category ");
						    $typea->execute();
						  	$typea->store_result();
						  	$typea->bind_result($type);
						    //ResultSet rsa=stata.executeQuery(typea);
						    			    
						    $typeai=$conn->prepare("query to select the subcategory of a product from its category");
						    $typeai->execute();
						  	$typeai->store_result();
						  	$typeai->bind_result($type);
						    //ResultSet rsai=statai.executeQuery(typeai);
						    
						    $typeaeb=$conn->prepare("query to select the subcategory of a product from its category");
						    $typeaeb->execute();
						  	$typeaeb->store_result();
						  	$typeaeb->bind_result($type);
						    //ResultSet rsaeb=stataeb.executeQuery(typeaeb);
						    
						    $typeau=$conn->prepare("query to select the subcategory of a product from its category");
						    $typeau->execute();
						  	$typeau->store_result();
						  	$typeau->bind_result($type);
						    //ResultSet rsau=statau.executeQuery(typeau);
						    
						    $typeh=$conn->prepare("query to select the subcategory of a product from its category");
						    $typeh->execute();
						  	$typeh->store_result();
						  	$typeh->bind_result($type);
						    //ResultSet rsh=stath.executeQuery(typeh);
						    
						    $typen=$conn->prepare("query to select the subcategory of a product from its category");
						    $typen->execute();
						  	$typen->store_result();
						  	$typen->bind_result($type);
						    //ResultSet rsn=statn.executeQuery(typen);
						    			    
						    
						    ?>
						    <h1 id="bio" align="center" class="headbc">Antibiotics</h1>
						    <?php
						    //antibiotics
						    while($rowa = $typea->fetch()){
						    	$typed= $type;
						    	//System.out.println(typed);
						    	$typer ="bio";
						    	if (strcmp($typed,"Oral Cephalosporins and combinations")){
						    		$typer = "cep";
						    	}
						    	else if (strcmp($typed,"Injectables-Cephalosporins")){
						    		$typer = "injcep";
						    	}
						    	else if (strcmp($typed,"Oral, Injectible Penicillins And Combinations")){
						    		$typer = "peni";
						    	}
						    	else if (strcmp($typed,"Oral Quinolones And Combinations")){
						    		$typer = "quin";
						    	}
						    	else if (strcmp($typed,"Oral Macrolides")){
						    		$typer = "macr";
						    	}
						    	else if (strcmp($typed,"Oxazolidinones")){
						    		$typer = "oxaz";
						    	}
						    	else if (strcmp($typed,"Carbapenem And Combinations")){
						    		$typer = "carb";
						    	}
						    	else if (strcmp($typed,"Aminoglycosides")){
						    		$typer = "amin";
						    	}
						    	else if (strcmp($typed,"Antimalarials")){
						    		$typer = "mala";
						    	}
						    	else if (strcmp($typed,"Anti-Fungals")){
						    		$typer = "fung";
						    	}
						    	else if (strcmp($typed,"Anti-Virals")){
						    		$typer = "vira";
						    	}
						    	
						    			?>
						    	
						    	<h2 id="<?php printf($typer);?>" align="center" class="typedcss"><?php echo $typed;?></h2>
						    	<?php
						    	$querya= $conn->prepare("query to select the details of the products in a particular category");
						    		//<<bind some params here>>
								  	$querya->execute();
								  	$querya->store_result();
								  	$querya->bind_result($listofattributes);
								  	

						    		while ($rowa1 = $querya->fetch()) 
								    {
								    	?>
								    	<table class="table2" border="2" cellpadding="1" cellspacing="2" align="center" width="1000">
								    	<tr class="rowspace">
									    	<td>
									    		<table class="table" width="400">
										    		<tr align="center" class="big"><td><?php printf($aid);?></td></tr>
										    		<tr align="center"><td><img src="img/<?php printf($picture);?>" style="height: 318px; width:318px;"></td></tr>
										    		<tr align="justify"><td><?php printf($composition);?><td></tr>
									    		</table>
									    	</td>
									    	<td>
									    		<table class="table" width="600">
									    			<tr align="justify" width="600"><td style="font-size:200%; "><?php printf($name);?></td></tr>
										    		<tr align="justify"width="600"><td><?php printf($description);?></td></tr>
										    		<?php

										    		if (strcmp($availability,"Currently Not Available") == 0){
										    		?>
										    		<tr align="justify"width="600"><td style="font-size:100%;color:#708090;"><?php printf($availability);?></td></tr>
										    		<?php	
										    		}
										    		else{
										    		?>
										    		<tr align="justify"width="600"><td style="font-size:150%;"><?php printf($availability);?></td></tr>
										    		<?php
										    		} 
										    		?><tr width="600">
											    		<form align="left" action="cart.php">
															<input type="hidden" name="name" value="<?php printf($name);?>">
															<input type="hidden" name="uid" value="<?php printf($uid4);?>">
															<td><input class="insearch" align="center" style="text-align:center; margin:auto;" type="text" name="qty" size="3" required value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0';}">
															<input type="hidden" name="uname" value="<?php printf($uname);?>">
															<input type="hidden" name="cname" value="<?php printf($cname);?>">
															<input type="hidden" name="email" value="<?php printf($email);?>">
															<input type="hidden" name="tin" value="<?php printf($tin);?>">
															<input type="hidden" name="phone" value="<?php printf($phone);?>">
															<button class="button search" type="submit" formaction="cart.php" style="color:#ffa500;" type="submit" formaction="cart.php">Request Quote</button></td>
															
														</form>
										    		</tr>
										    	</table>
										    </td>
								    	</tr>
								    	</table>
									<?php
								    }
						    	}
						    ?>
						    <h1 id="inf" align="center" class="headbc" style="font-size:280%;">Anti-Inflamatory-Analgesic</h1>
						    <?php
						    //AntiInflamatoryAnalgesic
						    while($rowai = $typeai->fetch()){
						    	$typed= $type;
						    	?>
						    	<h1 class="typedcss"><?php printf ($typed);?></h1>
						    	<?php
						    	$queryai= $conn->prepare("query to select the details of the products in a particular category");
							    $queryai->execute();
								$queryai->store_result();
								$queryai->bind_result($listofattributes);
								  	
							    
							    	while ($rowai1 = $queryai->fetch())
								    {
								    	?>
								    	<table class="table2" border="2" cellpadding="1" cellspacing="2" align="center" width="1000">
								    	<tr class="rowspace">
									    	<td><table class="table" width="400">
									    		<tr align="center" class="big"><td><?php printf($aiaid);?></td></tr>
									    		<tr align="center"><td><img src="img/<?php printf($picture);?>" style="height: 318px; width:318px;"></td></tr>
									    		<tr align="justify"><td><?php printf($composition);?><td></tr>
									    	</table></td>
									    	<td><table class="table" width="600">
									    		<tr align="justify" width="600"><td style="font-size:200%;"><?php printf($name);?></td></tr>
									    		<tr align="justify"width="600"><td><?php printf($description);?></td></tr>
									    		<?php
									    		if (strcmp($availability,"Currently Not Available") == 0){
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:100%;color:#708090;"><?php printf($availability);?></td></tr>
									    		<?php	
									    		}
									    		else{
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:150%;"><?php printf($availability);?></td></tr>
									    		<?php
									    		} 
									    		?><tr width="600">
										    		<form align="left" action="cart.php">
															<input type="hidden" name="name" value="<?php printf($name);?>">
															<input type="hidden" name="uid" value="<?php printf($uid4);?>">
															<td><input class="insearch" align="center" style="text-align:center; margin:auto;" type="text" name="qty" size="3" required value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0';}">
															<input type="hidden" name="uname" value="<?php printf($uname);?>">
															<input type="hidden" name="cname" value="<?php printf($cname);?>">
															<input type="hidden" name="email" value="<?php printf($email);?>">
															<input type="hidden" name="tin" value="<?php printf($tin);?>">
															<input type="hidden" name="phone" value="<?php printf($phone);?>">
															<button class="button search" type="submit" formaction="cart.php" style="color:#ffa500"  type="submit" formaction="cart.php">Request Quote</button></td>
															
														</form>
									    		</tr>
									    	</table></td>
								    	</tr>
								    	</table>
									<?php
								    }
						    	}
						   
						    
						    //AntiallergicsExpectorantsBronchodilatorsAntiasthmatics
						     ?>
						    <h1 id="all" align="center" class="headbc">Anti-allergics,Expectorants, Bronchodilators & Antiasthmatics</h1>
						    <?php
						    
						    while($rowaeb = $typeaeb->fetch()){
						    	$typed= $type;
						    	?>
						    	<h1 class="typedcss"><?php printf($typed);?></h1>
						    	<?php
						    	$queryaae=$conn->prepare("query to select the details of the products in a particular category");
							    $queryaae->execute();
								$queryaae->store_result();
								$queryaae->bind_result($listofattributes);
							    			    	
							    	while ($rowaeb1 = $queryaae->fetch())
								    {
								    	?>
										<table class="table2" border="2" cellpadding="1" cellspacing="2" align="center" width="1000">
								    	<tr class="rowspace">
									    	<td><table class="table" width="400">
									    		<tr align="center" class="big"><td><?php printf($aaebaid);?></td></tr>
									    		<tr align="center"><td><img src="img/<?php printf($picture);?>" style="height: 318px; width:318px;"></td></tr>
									    		<tr align="justify"><td><?php printf($composition);?><td></tr>
									    	</table></td>
									    	<td><table class="table" >
									    		<tr align="justify" width="600"><td style="font-size:200%;"><?php printf($name);?></td></tr>
									    		<tr align="justify"width="600"><td><?php printf($description);?></td></tr>
									    		<?php
									    		if (strcmp($availability,"Currently Not Available") == 0){
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:100%;color:#708090;"><?php printf($availability);?></td></tr>
									    		<?php
									    		}
									    		else{
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:150%;"><?php printf($availability);?></td></tr>
									    		<?php
									    		} 
									    		?><tr width="600">
										    		<form align="left" action="cart.php">
															<input type="hidden" name="name" value="<?php printf($name);?>">
															<input type="hidden" name="uid" value="<?php printf($uid4);?>">
															<td><input class="insearch" align="center" style="text-align:center; margin:auto;" type="text" name="qty" size="3" required value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0';}">
															<input type="hidden" name="uname" value="<?php printf($uname);?>">
															<input type="hidden" name="cname" value="<?php printf($cname);?>">
															<input type="hidden" name="email" value="<?php printf($email);?>">
															<input type="hidden" name="tin" value="<?php printf($tin);?>">
															<input type="hidden" name="phone" value="<?php printf($phone);?>">
															<button class="button search" type="submit" formaction="cart.php" style="color:#ffa500" type="submit" formaction="cart.php">Request Quote</button></td>
															
														</form>
									    		</tr>
									    	</table></td>
								    	</tr>
								    	</table>
									<?php
								    }
						    	}
						    
						    
						    //AntiUlcerantsAntacids
						    
						    ?>
						    <h1 id="ali" align="center" class="headbc">Anti Ulcerants & Antacids</h1>
						    <?php
						    
						    while($rowau = $typeau->fetch()){
						    	$typed= $type;
						    	?>
						    	<h1 class="typedcss"></h1>
						    	<?php
						    	$queryau=$conn->prepare("query to select the details of the products in a particular category");
							    $queryau->execute();
								$queryau->store_result();
								$queryau->bind_result($listofattributes);
							   
							    	while ($rowau1 = $queryau->fetch())
								    {
								    	
								    	?>
								    	<table class="table2" border="2" cellpadding="1" cellspacing="2" align="center" width="1000">
								    	<tr class="rowspace">
									    	<td><table class="table" width="400">
									    		<tr align="center" class="big"><td><?php printf($auaid);?></td></tr>
									    		<tr align="center"><td><img src="img/<?php printf($picture);?>" style="height: 318px; width:318px;"></td></tr>
									    		<tr align="justify"><td><?php printf($composition);?><td></tr>
									    	</table></td>
									    	<td><table class="table" >
									    		<tr align="justify" width="600"><td style="font-size:200%;"><?php printf($name);?></td></tr>
									    		<tr align="justify"width="600"><td><?php printf($description);?></td></tr>
									    		<?php
									    		if (strcmp($availability,"Currently Not Available") == 0){
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:100%;color:#708090;"><?php printf($availability);?></td></tr>
									    		<?php	
									    		}
									    		else{
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:150%;"><?php printf($availability);?></td></tr>
									    		<?php
									    		} 
									    		?><tr width="600">
										    		<form align="left" action="cart.php">
															<input type="hidden" name="name" value="<?php printf($name);?>">
															<input type="hidden" name="uid" value="<?php printf($uid4);?>">
															<td><input class="insearch" align="center" style="text-align:center; margin:auto;" type="text" name="qty" size="3" required value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0';}">
															<input type="hidden" name="uname" value="<?php printf($uname);?>">
															<input type="hidden" name="cname" value="<?php printf($cname);?>">
															<input type="hidden" name="email" value="<?php printf($email);?>">
															<input type="hidden" name="tin" value="<?php printf($tin);?>">
															<input type="hidden" name="phone" value="<?php printf($phone);?>">
															<button class="button search" type="submit" formaction="cart.php" style="color:#ffa500" type="submit" formaction="cart.php">Request Quote</button></td>
															
														</form>
									    		</tr>
									    	</table></td>
								    	</tr>
								    	</table>
									<?php
								    }
						    	}
						    
						    
						    //HaemostaticAnabolicSteroids
						    
						    ?>
						    <h1 id="hae" align="center" class="headbc">Haemostatic/Antihaemorrhagic Anabolic Steroids</h1>
						    <?php
						    
						    while($rowh = $typeh->fetch()){
						    	$typed= $type;
						    	?>
						    	<h1 class="typedcss"><?php printf($typed); ?></h1>
						    	<?php
							    $queryh=$conn->prepare("query to select the details of the products in a particular category");
							   	$queryh->execute();
								$queryh->store_result();
								$queryh->bind_result($listofattributes);
							   
							    	while ($rowh1 = $queryh->fetch())
								    {
								    	?>
								    	<table class="table2" border="2" cellpadding="1" cellspacing="2" align="center" width="1000">
								    	<tr class="rowspace">
									    	<td><table class="table" width="400">
									    		<tr align="center" class="big"><td><?php printf($hasid);?></td></tr>
									    		<tr align="center"><td><img src="img/<?php printf($picture);?>" style="height: 318px; width:318px;"></td></tr>
									    		<tr align="justify"><td><?php printf($composition);?><td></tr>
									    	</table></td>
									    	<td><table class="table" >
									    		<tr align="justify" width="600"><td style="font-size:200%;"><?php printf($name);?></td></tr>
									    		<tr align="justify"width="600"><td><?php printf($description);?></td></tr>
									    		<?php
									    		if (strcmp($availability,"Currently Not Available") == 0){
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:100%;color:#708090;"><?php printf($availability);?></td></tr>
									    		<?php	
									    		}
									    		else{
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:150%;"><?php printf($availability);?></td></tr>
									    		<?php
									    		} 
									    		?><tr width="600">
										    		<form align="left" action="cart.php">
															<input type="hidden" name="name" value="<?php printf($name);?>">
															<input type="hidden" name="uid" value="<?php printf($uid4);?>">
															<td><input class="insearch" align="center" style="text-align:center; margin:auto;" type="text" name="qty" size="3" required value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0';}">
															<input type="hidden" name="uname" value="<?php printf($uname);?>">
															<input type="hidden" name="cname" value="<?php printf($cname);?>">
															<input type="hidden" name="email" value="<?php printf($email);?>">
															<input type="hidden" name="tin" value="<?php printf($tin);?>">
															<input type="hidden" name="phone" value="<?php printf($phone);?>">
															<button class="button search" type="submit" formaction="cart.php" style="color:#ffa500" type="submit" formaction="cart.php">Request Quote</button></td>
															
														</form>
									    		</tr>
									    	</table></td>
								    	</tr>
								    	</table>
								    	
									<?php
								    }
						    	}		
						    	
						    //Nutraceuticals
						    ?>
						    <h1 id="neu" align="center" class="headbc">Nutraceuticals</h1>
						    <?php
						    
						    
						    while($rown = $typen->fetch()){
						    	$typed= $type;
						    	
						    	$typer ="neu";
						    	if (strcmp($typed,"Nutraceuticals-Antioxidants,Vitamins & Minerals Preparations")){
						    		$typer = "vit";
						    	}
						    	else if (strcmp($typed,"Nutraceuticals-Iron, Calcium and D3")){
						    		$typer = "iron";
						    	}
						    	else if (strcmp($typed,"Nutraceuticals-Pre-Probiotic(Synbiotic)")){
						    		$typer = "prob";
						    	}
						    	else if (strcmp($typed,"Peripheral Neuropathy")){
						    		$typer = "peri";
						    	}
						    	else if (strcmp($typed,"Digestive Enzyme, Appetite stimulant, Hepato preparation")){
						    		$typer = "dige";
						    	}
						    	?>
						    	
						    	<h2 id="<?php printf($typer);?>" align="center" class="typedcss"><?php echo $typed;?></h2>
						    	<?php
						    	$queryn=$conn->prepare("query to select the details of the products in a particular category");
						    	//<<bind some params here>>
								$queryn->store_result();
								$queryn->bind_result($listofattributes);
							   						    	
							    	while ($rown1 = $queryn->fetch())
								    {
								    	
								    	?>
										<table class="table2" border="2" cellpadding="1" cellspacing="2" align="center" width="1000">
								    	<tr class="rowspace">
									    	<td><table class="table" width="400">
									    		<tr align="center" class="big"><td><?php printf($nid);?></td></tr>
									    		<tr align="center"><td><img src="img/<?php printf($picture);?>" style="height: 318px; width:318px;"></td></tr>
									    		<tr align="justify"><td><?php printf($composition);?><td></tr>
									    	</table></td>
									    	<td><table class="table" >
									    		<tr align="justify" width="600"><td style="font-size:200%;"><?php printf($name);?></td></tr>
									    		<tr align="justify"width="600"><td><?php printf($description);?></td></tr>
									    		<?php
									    		
									    		if (strcmp(strval($availability),"Currently Not Available") == 0){
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:100%;color:#708090;"><?php printf($availability);?></td></tr>
									    		<?php	
									    		}
									    		else{
									    		?>
									    		<tr align="justify"width="600"><td style="font-size:150%;"><?php printf($availability);?></td></tr>
									    		<?php
									    		} 
									    		?>
									    		<tr width="600">
										    		<form align="left" action="cart.php">
															<input type="hidden" name="name" value="<?php printf($name);?>">
															<input type="hidden" name="uid" value="<?php printf($uid4);?>">
															<td><input class="insearch" align="center" style="text-align:center; margin:auto;" type="text" name="qty" size="3" required value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0';}">
															<input type="hidden" name="uname" value="<?php printf($uname);?>">
															<input type="hidden" name="cname" value="<?php printf($cname);?>">
															<input type="hidden" name="email" value="<?php printf($email);?>">
															<input type="hidden" name="tin" value="<?php printf($tin);?>">
															<input type="hidden" name="phone" value="<?php printf($phone);?>">
															<button class="button search" type="submit" formaction="cart.php" style="color:#ffa500" type="submit" formaction="cart.php">Request Quote</button></td>
															
														</form>
									    		</tr>
									    	</table></td>
								    	</tr>
								    	</table>
									<?php
								    }
						    	}		
						   

							
						    	?>
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
			<a href="#0" class="cd-top">Top</a>
		</td>
	</tr>
</table>

<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>