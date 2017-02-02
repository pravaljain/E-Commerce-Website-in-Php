
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">


<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">

<title>THEOS LIFESCIENCES LLP</title>
<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="js/js-image-slider.js" type="text/javascript"></script>
 <script type="text/javascript" src="js/prefixfree.min.js"></script>
<link href="css/generic.css" rel="stylesheet" type="text/css" />
<style>
.imgbc{
height:306px;
width:700px;
}
.middle{
	border:2px;
	border-radius: 8px;
	width:80%;
	height:auto;
    color:#b22222;
	margin: 0 10% 0 10%;
}

div#carousel { 
  perspective: 1200px; 
  background: #100000; 
  padding-top: 10%; 
  font-size:0; 
  margin-bottom: 3rem; 
  overflow: hidden; 
}
figure#spinner { 
  transform-style: preserve-3d; 
  height: 300px; 
  transform-origin: 50% 50% -500px; 
  transition: 1s; 
} 
figure#spinner img { 
  width: 40%; max-width: 425px; 
  position: absolute; left: 30%;
  transform-origin: 50% 50% -500px;
  outline:1px solid transparent; 
}
figure#spinner img:nth-child(1) { transform:rotateY(0deg); 
}
figure#spinner img:nth-child(2) { transform: rotateY(-45deg); }
figure#spinner img:nth-child(3) { transform: rotateY(-90deg); }
figure#spinner img:nth-child(4) { transform: rotateY(-135deg); }
figure#spinner img:nth-child(5){ transform: rotateY(-180deg); }
figure#spinner img:nth-child(6){ transform: rotateY(-225deg); }
figure#spinner img:nth-child(7){ transform: rotateY(-270deg); }
figure#spinner img:nth-child(8){ transform: rotateY(-315deg); }
div#carousel ~ span { 
  color: #fff; 
  margin: 5%; 
  display: inline-block; 
  text-decoration: none; 
  font-size: 2rem; 
  transition: 0.6s color; 
  position: relative; 
  margin-top: -6rem; 
  border-bottom: none; 
  line-height: 0; }
div#carousel ~ span:hover { color: #888; cursor: pointer; }


</style>

</head>





<body background="img/fancy_deboss.png">



<?php include dirname(__FILE__)."/header.php";?>


<?php

$db_host = "name of the server";
$db_username="username of the autorised user of the database";
$db_pass="password associated with the above mentioned username";
try{
$conn = mysqli_connect($db_host,$db_username, $db_pass,"name of the database");
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$rid = rand(1,99999);
$_SESSION["uid2"] = $rid;


	
/*$dropimg = "DROP TABLE IF EXISTS pictures";*/
$dropimg= mysqli_query($conn,"DROP TABLE IF EXISTS xyz");

//$creimg = "CREATE TABLE IF NOT EXISTS pictures (picture VARCHAR(300))"; 
$creimg=mysqli_query($conn,"CREATE TABLE IF NOT EXISTS xyz (picture VARCHAR(300))");
 
  
  $insimg= mysqli_query($conn,"insert into xyz'");
  //$insimg=execute();

  
  $image=mysqli_query($conn,"select picture from xyz");
  //$image->execute();
  //$img = $image->setFetchMode(PDO::FETCH_ASSOC);
 
  ?>
  <div id="top-image-slider" style="margin-top:4%;border-radius:8px; border:2px solid #b22222; width:705px; margin-left:33%;" align="center">
    
    <div id="sliderFrame">
      <div id="slider">
         <?php
        
         while ($row = $image->fetch_row())
      {
         ?>
        <a href="#" target="_blank">
          <img class="imgbc" src="img/<?php printf ($row[0]);?>" width="700" height="306"/>
        </a>
        <?php
      }
  ?>    
      </div>
     </div>
  </div>
      
  <div style="width:80%;margin-left:10%;">
  <div class="middle">
          <p style="font-size:180%;margin-top:4%;"><b>Vision</b></p>
          <h4 align="justify" style="margin-top:1%;font-size:130%;">To be recognized and respected as a pharmaceutical product solution provider with focus on latest and innovative products to its end users and business associates.</h4>
  </div>
  <div class="middle">
          <p style="font-size:180%;margin-top:3%;"><b>Mission</b></p>
          <h4 align="justify" style="margin-top:1%;font-size:130%;">We promise to delight our customers with best pharmaceutical products and solutions by collaborating with our vendors diligently for cost effective solutions.</h4>
  </div>
  <div class="middle">
          <p style="font-size:180%;margin-top:3%;"><b>Goals and Objective</b></p>
          <h4 align="justify" style="margin-top:1%;font-size:130%;">To be among the leading & respected pharma companies with a pan-India presence having satisfied customers at every step. Also, providing our business associates a business model which creates ample possibilities and potentialities at their local level to generate lucrative and handful earnings.</h4>
  </div>
  
  
  
  </div>
  
  
  
  <?php
  
}
catch(Exception $e)
    {
    echo 'Error:'.$e->getMessage();
    }
 ?>

?>
<?php include dirname(__FILE__)."/footer.php";?>
</body>
</html>