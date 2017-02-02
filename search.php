<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
<title>TLS Search</title>
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
    width:98%;
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

th {
    border-bottom: 3px solid black !important;
}

tr.row:hover{background-color:#EFA9A9}


</style>

</head>
<body>
<?php include dirname(__FILE__)."/header.php";?>


<div class="middle">

<?php

		try{	 
			$db_host = "name of the server";
				$db_username="username of the autorised user of the database";
				$db_pass="password associated with the above mentioned username";
				$conn = mysqli_connect($db_host,$db_username, $db_pass,"name of the database");
			
				$user1 = intval($_SESSION["uid2"]);
		    //int uid4 = Integer.parseInt(user1);
		   
								    $searchterm= strval($_REQUEST['search-value']);
								    
								    $query= $conn->prepare("query to find the user input in the entire database.");
								    

								    	/*$query->bind_param("ssssssssssssssssssssssssssssssssssssssssss", $st1, $st2, $st3,$st4,$st5,$st6,$st7,$st8,$st9,$st10, $st11, $st12, $st13,$st14,$st15,$st16,$st17,$st18,$st19,$st20,$st21, $st22, $st23,$st24,$st25,$st26,$st27,$st28,$st29,$st30,$st31, $st32, $st33,$st34,$st35,$st36,$st37,$st38,$st39,$st40,$st41,$st42);
									  	$st1 = $searchterm;
									  	$st2 = $searchterm;
									  	$st3 = $searchterm;
									  	$st4 = $searchterm;
									  	$st5 = $searchterm;
									  	$st6 = $searchterm;
									  	$st7 = $searchterm;
									  	$st8 = $searchterm;
									  	$st9 = $searchterm;
									  	$st10 = $searchterm;
									  	$st11 = $searchterm;
									  	$st12 = $searchterm;
									  	$st13 = $searchterm;
									  	$st14 = $searchterm;
									  	$st15 = $searchterm;
									  	$st16 = $searchterm;
									  	$st17 = $searchterm;
									  	$st18 = $searchterm;
									  	$st19 = $searchterm;
									  	$st20 = $searchterm;
									  	$st21 = $searchterm;
									  	$st22 = $searchterm;
									  	$st23 = $searchterm;
									  	$st24 = $searchterm;
									  	$st25 = $searchterm;
									  	$st26 = $searchterm;
									  	$st27 = $searchterm;
									  	$st28 = $searchterm;
									  	$st29 = $searchterm;
									  	$st30 = $searchterm;
									  	$st31 = $searchterm;
									  	$st32 = $searchterm;
									  	$st33 = $searchterm;
									  	$st34 = $searchterm;
									  	$st35 = $searchterm;
									  	$st36 = $searchterm;
									  	$st37 = $searchterm;
									  	$st38 = $searchterm;
									  	$st39 = $searchterm;
									  	$st40 = $searchterm;
									  	$st41 = $searchterm;
									  	$st42 = $searchterm;*/
									  	$query->execute();
									  	$query->store_result();
									  	$query->bind_result($listofitems); //stmt6<-rs2
								    
								    $name2= "&nbsp;&nbsp;Type to Search";
								    $comp= strcmp($searchterm,$name2);
								    if ($searchterm==null||$searchterm=="" ||$searchterm=="  " || $comp== 0)// || !rs2.first())//rs2
								    {
								    	?>
								    	<h4 align="center" style="color:#b22222;margin-top:5%; margin-bottom:5%; font-size:200%"><b><?php printf('No Records Found.');?></b></h4>
						    	<?php
								    }
								    else {
							    ?>
									    	<table class="table" border="2" cellpadding="1" cellspacing="2"  align="center">
									    	<thead style="font-size:130%;">
												<tr>
													<td align="center" style="width: 200px; font-weight:bold;">Product ID</td>
													<td align="center" style="width: 200px; font-weight:bold;">Name</td>
													<td align="center" style="width: 200px; font-weight:bold;">Composition</td>
													<td align="center" style="width: 200px; font-weight:bold;">Packing</td>
													<td align="center" style="width: 200px; font-weight:bold;">Type</td>
													<td align="center" style="width: 200px; font-weight:bold;">Availability</td>
													<td align="center" style="width: 200px; font-weight:bold;">Description</td>
												</tr>
											</thead>
									    	<?php
									    	while($rowquer = $query->fetch())
									    	{
									    	?>
										    	<tr>
										    	<td align="center"><?php printf($aid);?></td>
												<td align="center"><?php printf($name);?></td>
												<td align="center"><?php printf($composition);?></td>
												<td align="center"><?php printf($packing);?></td>
												<td align="center"><?php printf($type);?></td>
												<td align="center"><?php printf($availability);?></td>
												<td align="center"><?php printf($description);?></td>
												</tr>	
										<?php
									    	}
									    ?>
									    	</table>
								    	<?php
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
									?>
</div>
</div>

<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>