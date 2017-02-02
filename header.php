
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- for the back to top button -->
<link rel="stylesheet" href="css/resetbutton.css">
<link rel="stylesheet" href="css/stylebutton.css"> 
<script src="js/modernizr.button.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.button.js"></script> <!-- Gem jQuery -->

<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">


<style>
.button{
background-color: white;
border: 2px;

padding: 12px 24px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 18px;
-webkit-transition-duration: 0.4s; 
transition-duration: 0.4s;
cursor: pointer;
border-radius: 8px;
color: black; 
border: 2px solid #b22222;
}
.search:hover {
background-color: #b22222;
color: white;
}
.insearch{
font-size:12pt;
height:3em;
border-radius: 8px;
color: black; 
border: 2px solid #b22222;
} 

</style>
</head>





<body background="img/fancy_deboss.png">
<?php session_start(); ?>
<table class="tabletop" align="center">
<tr>
<td><a align="left" href="index.php"><img src="img/logo.png" alt="logo" style="margin-bottom:-8%;"/> </a><td>
<td valign="middle" style="color:#b22222; font-size:280%;padding-left:8%;"><strong></strong></strong></td>

<td style="padding:0 0 0 50px;" align="left">
<form action="search.php">
<td><input class="insearch" style="margin-left:10%;" type="text" name="search-value" value="&nbsp;&nbsp;Type to Search" maxlength="100" required size="20" onfocus="this.value = '';" onblur="if (this.value == '&nbsp;&nbsp;') {this.value = '&nbsp;&nbsp;Type to Search';}"></td>
<td align="center"><button class="button search" type="submit" formaction="search.php" style="color:#ffa500"><b>Search</b></button></td>
</form>
</td>
</tr>
</table>




<br>
<br>




<div class="header_btm">
<div class="wrap">
<div class="header_sub">
<nav>
<div class="wrapper">
<ul id="menu" class="clearfix">
<li><a href="index.php">Home</a></li>
<li class="purple"><a href="aboutus.php">About Us</a>
<ul>
<li class="purple"><a href="aboutus.php">Profile</a></li>
<li class="purple"><a href="Theos-Brochure.pdf" target="_blank">Brochure</a></li>
</ul>
</li>
<li><a href="products.php">Products</a>
<ul>
<li class="purple"><a href="products.php#bio"> &#9656;&nbsp;Antibiotics</a>
<ul>
<li><a href="products.php#cep"> &#9656;&nbsp;Oral Cephalosporins & combinations</a></li>
<li><a href="products.php#injcep"> &#9656;&nbsp;Injectables-Cephalosporins</a></li>
<li><a href="products.php#peni"> &#9656;&nbsp;Oral,Injectible Penicillins & Combinations</a></li>
<li><a href="products.php#quin"> &#9656;&nbsp;Oral Quinolones & Combinations</a></li>
<li><a href="products.php#macr"> &#9656;&nbsp;Oral Macrolides</a></li>
<li><a href="products.php#oxaz"> &#9656;&nbsp;Oxazolidinones</a></li>
<li><a href="products.php#carb"> &#9656;&nbsp;Carbapenem & Combinations</a></li>
<li><a href="products.php#amin"> &#9656;&nbsp;Aminoglycosides</a></li>
<li><a href="products.php#mala"> &#9656;&nbsp;Antimalarials</a></li>
<li><a href="products.php#fung"> &#9656;&nbsp;Anti-Fungals</a></li>
<li><a href="products.php#vira"> &#9656;&nbsp;Anti-Virals</a></li>
</ul>
</li>
<li class="purple"><a href="products.php#inf"> &#9656;&nbsp;Anti-inflammatory, Analgesic, Muscle Relaxant, Proteolytic Enzyme, Antispasmodic</a></li>
<li class="purple"><a href="products.php#all"> &#9656;&nbsp;Anti-allergics, Expectorants, bronchodilators and Antiasthmatics</a></li>
<li class="purple"><a href="products.php#ali"> &#9656;&nbsp;Alimentary-Anti Ulcerant And Antacid</a></li>
<li class="purple"><a href="products.php#hae"> &#9656;&nbsp;Haemostatic/ Antihaemorrahgic & Anabolic Steroids</a></li>
<li class="purple"><a href="products.php#neu"> &#9656;&nbsp;Nutraceuticals</a>
<ul>
<li><a href="products.php#vit"> &#9656;&nbsp;Antioxidants,Vitamins & Minerals Preparations</a></li>
<li><a href="products.php#iron"> &#9656;&nbsp;Iron, calcium and D3</a></li>
<li><a href="products.php#prob"> &#9656;&nbsp;Pre-Probiotic(Synbiotic)</a></li>
<li><a href="products.php#peri"> &#9656;&nbsp;Peripheral Neuropathy</a></li>
<li><a href="products.php#dige"> &#9656;&nbsp;Digestive Enzyme, Appetite stimulant, Hepato preparation</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="contact.php">Contact Us</a></li>

<!-- li><a href="#">Your Cart ( <%//out.println(rsa.getString("total"));%>)</a></li-->

</ul>
</div>
</nav>
<script type="text/javascript">
$(function () {
$('a[href="#"]').on('click', function (e) {
e.preventDefault();
});

$('#menu > li').on('mouseover', function (e) {
$(this).find("ul:first").show();
$(this).find('> a').addClass('active');
}).on('mouseout', function (e) {
$(this).find("ul:first").hide();
$(this).find('> a').removeClass('active');
});

$('#menu li li').on('mouseover', function (e) {
if ($(this).has('ul').length) {
$(this).parent().addClass('expanded');
}
$('ul:first', this).parent().find('> a').addClass('active');
$('ul:first', this).show();
}).on('mouseout', function (e) {
$(this).parent().removeClass('expanded');
$('ul:first', this).parent().find('> a').removeClass('active');
$('ul:first', this).hide();
});
});
</script>
<div class="top-nav">

<script src="js/responsive.menu.js"></script>
</div> 
<div class="clear"></div>
</div>
</div>
</div>

</body>
</html>

