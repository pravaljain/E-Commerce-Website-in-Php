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
			    
			    $uidp= strval($_REQUEST['uid']);
			    $uname = strval($_REQUEST['uname']);
				$email = strval($_REQUEST['email']);
				$phone = strval($_REQUEST['phone']);
			    
			    $feed= NULL;
			    if(isset($_REQUEST['feed'])) 
			    	{
			    		$feed = strval($_REQUEST['feed']);
			   		}

			    if ($feed == null)
			    {
				    	?>
				    	<table class="table" style="margin-left:33%;">
						<tr >
						<td></td>
								<td style="font-size: small;">
									* mandatory fields
								</td>
								<td></td>
							</tr>
						
				 	 	<tr>
							<td>Name :</td>
							<td><?php printf($uname);?></td>
				 	 	</tr>
						<tr>
							<td>User ID :</td>
							<td><?php printf($uidp);?></td>
				 	 		<td></td>
				 	 	</tr>
							<tr>
								<td>Email :</td>
								<td><?php printf($email);?></td>
						</tr>
						<tr>
							<td>Phone :</td>
							<td><?php printf($phone);?></td>
				 	 	</tr>
						<tr> 	
						<form action="feed.php">
						<td>Your Feedback :</td>
						<input type="hidden" name="uid" value="<?php printf($uidp);?>">
						<input type="hidden" name="uname" value="<?php printf($uname);?>">
						<input type="hidden" name="email" value="<?php printf($email);?>">
						<input type="hidden" name="phone" value="<?php printf($phone);?>">	
						<td><input class="insearch" type="text" name="feed" required maxlength="1000"></td> 
						<td><button class="button search" style="color:#ffa500; font-weight:bold;" Type="submit" formaction="feed.php">Submit Feedback</button></td>	
						</form>
							</tr>
		  						
		 				</table><?php
			    }
			    else{
			    
					    $feedback=$conn->prepare("query to record feedback");
					    //<<bind some params here>>
						$feedback->execute();
						$feedback->store_result();
		 
					    ?>
					    <h2 align="center"style="color:#b22222; font-weight:bold; font-size:100%;margin-top:3%;" >Thank You. Your feedback has been recorded.</h2>
					    <table class="table" style="margin-left:33%;">
							<tr >
							<td></td>
									<td style="font-size: small;">
										* mandatory fields
									</td>
									<td></td>
								</tr>
							
					 	 	<tr>
								<td>Name :</td>
								<td><?php printf($uname);?></td>
					 	 	</tr>
							<tr>
								<td>User ID :</td>
								<td><?php printf($uidp);?></td>
					 	 		<td></td>
					 	 	</tr>
								<tr>
									<td>Email :</td>
									<td><?php printf($email);?></td>
							</tr>
							<tr>
								<td>Phone :</td>
								<td><?php printf($phone);?></td>
					 	 	</tr>
							<tr> 	
							<form></form>
							<td>Your Feedback :</td>
							<td><<?php printf($feed);?></td> 
								</form>
								</tr>
			  						
			 				</table>
				
							<?php
								if($conn)
								{    
						   			$conn->close();
								}
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