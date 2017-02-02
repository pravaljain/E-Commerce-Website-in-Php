<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>TLS Products</title>
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
    
}
.table2 {
    border-collapse: separate;
    border-spacing: 0.6em 1em;
    font-size:100%; 
    font-weight: bold;
    color:#b22222;
    margin-left:18%;
   	
    border-radius:8px;
    -moz-border-radius:8px;
}

tr.rowspace>td {
	padding-bottom: 1em;
    border-bottom: 1px solid #b22222; 
}
.rowbc{
		align:center;
		font-size:200%; 
		font-weight: bold;
		color:#b22222;
		margin-left:20%;
		margin-top:4%;
		}

</style>

</head>
<body>
<?php include dirname(__FILE__)."/header.php";?>


<div class="middle">
<?php
			try {
			    $db_host = "name of the server";
				$db_username="username of the autorised user of the database";
				$db_pass="password associated with the above mentioned username";
				$conn = mysqli_connect($db_host,$db_username, $db_pass,"name of the database");
			    
			    
			    $name= strval($_REQUEST['name']);
			    $qty2= strval($_REQUEST['qty']);
			    //int qty2= Integer.parseInt(qt1);
			    $uidp= strval($_REQUEST['uid']);
			    
			    $uname = strval($_REQUEST['uname']);
				$cname = strval($_REQUEST['cname']);
				$email = strval($_REQUEST['email']);
				$phone = strval($_REQUEST['phone']);
				$tin = strval($_REQUEST['tin']);
			    
			    
			    if ($qty2 == "0")
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
			    		$url="products.php";
			    		redirect($url);
			    }
			    else{
			    
			    /*String remove = ("delete from quotes where pid='"+proid+"' and pname='"+proname+"'");
			    PreparedStatement stmt9 = connection.prepareStatement(remove);
			    stmt9.executeUpdate();
			    System.out.println("stmt9 okay");*/
			    		     
			    
			    
			    
				    $prodid= $conn->prepare("query to select the products based on product name is given");
				    $prodid->execute();
					$prodid->store_result();
					$prodid->bind_result($aid);
				    
				    $pid1 = 0;

				    while ($rowpro = $prodid->fetch())
				    {
				    $pid1=$aid;
				    }
				    $insquo =$conn->prepare("query to insert records into the db");
				    $insquo->execute();
					$insquo->store_result();

				    //stmt3^
				    

				    $remove1 = $conn->prepare("query to delete temporary records");
				    $remove1->execute();
					$remove1->store_result(); //stmt1 <-
				    				    
				    $remove2 = $conn->prepare("query to delete temporary records from table 2"); //uid uname
				    $remove2->execute();
					$remove2->store_result(); //stmt2<-
				    			    	
			    	$quoyes=$conn->prepare("query to select datato finally display to the user");
				   $quoyes->execute();
					$quoyes->store_result();
					$quoyes->bind_result($ListOfDisplayParameters); //stmt6<-
					
				    
				    ?>
				    <h2 align="center"  style="color:#b22222; font-weight:bold; font-size:100%;margin-top:3%;" >Your request for the quote has been registered. We will be getting in touch with you within 3-4 business days.</h2>
				    <table class="table"  cellpadding="1" cellspacing="2" align="center" style="border: 2px solid #b22222; border-radius:8px; margin-top:2%;">
				    <thead>
						<tr>
							<td align="center" style="width: 200px; font-weight:bold;">ID</td>
							<td align="center" style="width: 200px; font-weight:bold;">UserID</td>
							<td align="center" style="width: 200px; font-weight:bold;">Name</td>
							<td align="center" style="width: 200px; font-weight:bold;">Company Name</td>
							<td align="center" style="width: 200px; font-weight:bold;">Email</td>
							<td align="center" style="width: 200px; font-weight:bold;">Phone</td>
							<td align="center" style="width: 200px; font-weight:bold;">TIN</td>
							<td align="center" style="width: 200px; font-weight:bold;">ProductID</td>
							<td align="center" style="width: 200px; font-weight:bold;">Product</td>
							<td align="center" style="width: 200px; font-weight:bold;">Quantity</td>
							<td align="center" style="width: 200px; font-weight:bold;">Date</td>
						</tr>
					</thead>
				    
				    <?php
			    	while ($rowquo = $quoyes->fetch())
			    	{
			    		?>
				    							
				    							
				    	<tr>
					    	<td align="center"><?php printf($id);?></td> 
					    	<td align="center"><?php printf($userid);?></td>
							<td align="center"><?php printf($name);?></td>
							<td align="center"><?php printf($company_name);?></td>
							<td align="center"><?php printf($email);?></td>
							<td align="center"><?php printf($phone);?></td>
					    	<td align="center"><?php printf($tin);?></td>
							<td align="center"><?php printf($pid);?></td>
							<td align="center"><?php printf($pname);?></td>
							<td align="center"><?php printf($quantity);?></td>
							<td align="center"><?php printf($date);?><td>
						</tr>
					   	<?php
				  
			    	}//while rs6
					?>
					</table>
						
			   
				 <table class="table" align="center" style="margin-left:30%;">
					    		<tr>
									<td  >
										<form action="products.php" >
											<input type="hidden" name="uid" value="<?php printf($uidp);?>">
											<input type="hidden" name="uname" value="<?php printf($uname);?>">
											<input type="hidden" name="cname" value="<?php printf($cname);?>">
											<input type="hidden" name="email" value="<?php printf($email);?>">
											<input type="hidden" name="tin" value="<?php printf($tin);?>">
											<input type="hidden" name="phone" value="<?php printf($phone);?>">											
											<button class="button search" style="color:#ffa500; font-weight:bold;" Type="submit" formaction="products.php">Start a Fresh Quote</button>
										</form>
									</td>
									<td >
										<form action="feed.php">
											<input type="hidden" name="uid" value="<?php printf($uidp);?>">
											<input type="hidden" name="uname" value="<?php printf($uname);?>">
											<input type="hidden" name="email" value="<?php printf($email);?>">
											<input type="hidden" name="phone" value="<?php printf($phone);?>">	
											<button class="button search" style="color:#ffa500; font-weight:bold;" Type="submit" formaction="feed.php">Write a Feedback</button>
																
										</form>
									</td>
								</tr>	
						</table>
			    <?php
			    }
			   
						if($conn)
						{    
				   			$conn->close();
						}
					}
				
				catch(Exception $ex)
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