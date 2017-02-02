
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
<link rel="stylesheet" type="text/css" media="all" href="css/footer.css">

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">
<!--
//v1.7
// Flash Player Version Detection
// Detect Client Browser type
// Copyright 2005-2008 Adobe Systems Incorporated.  All rights reserved.
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
function ControlVersion()
{
	var version;
	var axo;
	var e;
	// NOTE : new ActiveXObject(strFoo) throws an exception if strFoo isn't in the registry
	try {
		// version will be set for 7.X or greater players
		axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
		version = axo.GetVariable("$version");
	} catch (e) {
	}
	if (!version)
	{
		try {
			// version will be set for 6.X players only
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
			
			// installed player is some revision of 6.0
			// GetVariable("$version") crashes for versions 6.0.22 through 6.0.29,
			// so we have to be careful. 
			
			// default to the first public version
			version = "WIN 6,0,21,0";
			// throws if AllowScripAccess does not exist (introduced in 6.0r47)		
			axo.AllowScriptAccess = "always";
			// safe to call for 6.0r47 or greater
			version = axo.GetVariable("$version");
		} catch (e) {
		}
	}
	if (!version)
	{
		try {
			// version will be set for 4.X or 5.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = axo.GetVariable("$version");
		} catch (e) {
		}
	}
	if (!version)
	{
		try {
			// version will be set for 3.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = "WIN 3,0,18,0";
		} catch (e) {
		}
	}
	if (!version)
	{
		try {
			// version will be set for 2.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			version = "WIN 2,0,0,11";
		} catch (e) {
			version = -1;
		}
	}
	
	return version;
}
// JavaScript helper required to detect Flash Player PlugIn version information
function GetSwfVer(){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	var flashVer = -1;
	
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
			var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			var descArray = flashDescription.split(" ");
			var tempArrayMajor = descArray[2].split(".");			
			var versionMajor = tempArrayMajor[0];
			var versionMinor = tempArrayMajor[1];
			var versionRevision = descArray[3];
			if (versionRevision == "") {
				versionRevision = descArray[4];
			}
			if (versionRevision[0] == "d") {
				versionRevision = versionRevision.substring(1);
			} else if (versionRevision[0] == "r") {
				versionRevision = versionRevision.substring(1);
				if (versionRevision.indexOf("d") > 0) {
					versionRevision = versionRevision.substring(0, versionRevision.indexOf("d"));
				}
			}
			var flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	else if ( isIE && isWin && !isOpera ) {
		flashVer = ControlVersion();
	}	
	return flashVer;
}
// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision)
{
	versionStr = GetSwfVer();
	if (versionStr == -1 ) {
		return false;
	} else if (versionStr != 0) {
		if(isIE && isWin && !isOpera) {
			// Given "WIN 2,0,0,11"
			tempArray         = versionStr.split(" "); 	// ["WIN", "2,0,0,11"]
			tempString        = tempArray[1];			// "2,0,0,11"
			versionArray      = tempString.split(",");	// ['2', '0', '0', '11']
		} else {
			versionArray      = versionStr.split(".");
		}
		var versionMajor      = versionArray[0];
		var versionMinor      = versionArray[1];
		var versionRevision   = versionArray[2];
        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
		if (versionMajor > parseFloat(reqMajorVer)) {
			return true;
		} else if (versionMajor == parseFloat(reqMajorVer)) {
			if (versionMinor > parseFloat(reqMinorVer))
				return true;
			else if (versionMinor == parseFloat(reqMinorVer)) {
				if (versionRevision >= parseFloat(reqRevision))
					return true;
			}
		}
		return false;
	}
}
function AC_AddExtension(src, ext)
{
  if (src.indexOf('?') != -1)
    return src.replace(/\?/, ext+'?'); 
  else
    return src + ext;
}
function AC_Generateobj(objAttrs, params, embedAttrs) 
{ 
  var str = '';
  if (isIE && isWin && !isOpera)
  {
    str += '<object ';
    for (var i in objAttrs)
    {
      str += i + '="' + objAttrs[i] + '" ';
    }
    str += '>';
    for (var i in params)
    {
      str += '<param name="' + i + '" value="' + params[i] + '" /> ';
    }
    str += '</object>';
  }
  else
  {
    str += '<embed ';
    for (var i in embedAttrs)
    {
      str += i + '="' + embedAttrs[i] + '" ';
    }
    str += '> </embed>';
  }
  document.write(str);
}
function AC_FL_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".swf", "movie", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
     , "application/x-shockwave-flash"
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}
function AC_SW_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".dcr", "src", "clsid:166B1BCA-3F9C-11CF-8075-444553540000"
     , null
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}
function AC_GetArgs(args, ext, srcParamName, classid, mimeType){
  var ret = new Object();
  ret.embedAttrs = new Object();
  ret.params = new Object();
  ret.objAttrs = new Object();
  for (var i=0; i < args.length; i=i+2){
    var currArg = args[i].toLowerCase();    
    switch (currArg){	
      case "classid":
        break;
      case "pluginspage":
        ret.embedAttrs[args[i]] = args[i+1];
        break;
      case "src":
      case "movie":	
        args[i+1] = AC_AddExtension(args[i+1], ext);
        ret.embedAttrs["src"] = args[i+1];
        ret.params[srcParamName] = args[i+1];
        break;
      case "onafterupdate":
      case "onbeforeupdate":
      case "onblur":
      case "oncellchange":
      case "onclick":
      case "ondblclick":
      case "ondrag":
      case "ondragend":
      case "ondragenter":
      case "ondragleave":
      case "ondragover":
      case "ondrop":
      case "onfinish":
      case "onfocus":
      case "onhelp":
      case "onmousedown":
      case "onmouseup":
      case "onmouseover":
      case "onmousemove":
      case "onmouseout":
      case "onkeypress":
      case "onkeydown":
      case "onkeyup":
      case "onload":
      case "onlosecapture":
      case "onpropertychange":
      case "onreadystatechange":
      case "onrowsdelete":
      case "onrowenter":
      case "onrowexit":
      case "onrowsinserted":
      case "onstart":
      case "onscroll":
      case "onbeforeeditfocus":
      case "onactivate":
      case "onbeforedeactivate":
      case "ondeactivate":
      case "type":
      case "codebase":
      case "id":
        ret.objAttrs[args[i]] = args[i+1];
        break;
      case "width":
      case "height":
      case "align":
      case "vspace": 
      case "hspace":
      case "class":
      case "title":
      case "accesskey":
      case "name":
      case "tabindex":
        ret.embedAttrs[args[i]] = ret.objAttrs[args[i]] = args[i+1];
        break;
      default:
        ret.embedAttrs[args[i]] = ret.params[args[i]] = args[i+1];
    }
  }
  ret.objAttrs["classid"] = classid;
  if (mimeType) ret.embedAttrs["type"] = mimeType;
  return ret;
}
// -->
</script>

 <!--<link href="css/owl.carousel.css" rel="stylesheet">
		     Owl Carousel Assets -->
		    <!-- Prettify 
		    <script src="js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets 
		<!-- start top_js_button 
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		   <script type="text/javascript">
		       jQuery(document).ready(function ($) {
		           $(".scroll").click(function (event) {
		               event.preventDefault();
		               $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
		           });
		       });
			</script>-->
<style>

        .style51
        	{	
        	color:#ffa500; 
			font-weight: bold;		 
			font-size:120%;
			padding-top:2%;
			padding-bottom:2%;
		    }
        
        a.praval:hover
        	{
         	color: #b22222;
         	}
		
</style>
</head>





<body>
<!-- start footer -->
<div class="footer" align="center">
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4" style="text-align:left;">
			
			<div class="grid1_of_4">
				<h4>*Products</h4>
				<ul class="f_nav">
					<li><a href="products.html#bio1">&#9656;&nbsp;Antibiotics</a></li>
					<li><a href="products.html#inf">&#9656;&nbsp;Anti-inflammatory, Analgesic, Muscle Relaxant, Proteolytic Enzyme, Antispasmodic</a></li>
					<li><a href="products.html#all">&#9656;&nbsp;Anti-allergics, Expectorants, bronchodilators and Antiasthmatics </a></li>
					<li><a href="products.html#ali">&#9656;&nbsp;Anti Ulcerant And Antacid</a></li>
					<li><a href="products.html#hae">&#9656;&nbsp;Haemostatic/ Antihaemorrahgic & Anabolic Steroids</a></li>
				    <li><a href="products.html#neu">&#9656;&nbsp;Nutraceuticals</a></li>
				    </ul>
			</div>
			
			<div class="grid1_of_4">
				<h4>*Antibiotics</h4>
				<ul class="f_nav">
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
			</div>
			<div class="grid1_of_4">
				<h4>*Nutraceuticals</h4>
				<ul class="f_nav">
					<li><a href="products.php#vit"> &#9656;&nbsp;Antioxidants,Vitamins & Minerals Preparations</a></li>
                <li><a href="products.php#iron"> &#9656;&nbsp;Iron, calcium and D3</a></li>
                <li><a href="products.php#prob"> &#9656;&nbsp;Pre-Probiotic(Synbiotic)</a></li>
                <li><a href="products.php#peri"> &#9656;&nbsp;Peripheral Neuropathy</a></li>
                <li><a href="products.php#dige"> &#9656;&nbsp;Digestive Enzyme, Appetite stimulant, Hepato preparation</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>Quick Links</h4>
				<ul class="f_nav">
                <li><a href="aboutus.php">&#9656;&nbsp;Profile</a></li>
				<li><a href="products.php">&#9656;&nbsp;Products</a></li>
				<li><a href="products.php#bio">&#9656;&nbsp;Antibiotics</a></li>
				<li><a href="products.php#inf">&#9656;&nbsp;Anti-Inflamatory-Analgesic</a></li>
                <li><a href="products.php#all">&#9656;&nbsp;Anti-allergics</a></li>
                <li><a href="products.php#sli">&#9656;&nbsp;Anti-Ulcerants & Antacids</a></li>
                <li><a href="products.php#hse">&#9656;&nbsp;Haemostatic & Anabolic Steroids</a></li>
				<li><a href="products.php#neu">&#9656;&nbsp;Nutraceuticals</a></li>
				<li><a href="contact.php">&#9656;&nbsp;Contact us</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	
    </div>
</div>
</div>	
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
	        $(document).ready(function () {

	            var defaults = {
	                containerID: 'toTop', // fading element id
	                containerHoverID: 'toTopHover', // fading element hover id
	                scrollSpeed: 1200,
	                easingType: 'linear'
	            };


	            $().UItoTop({ easingType: 'easeOutQuart' });

	        });
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link"><b>2015 &copy;  All rights reserved |  | Developed by : <a href="https://www.linkedin.com/in/pravaljain" style="text-decoration:none;" class="praval">Praval</a></b></p>
            
  
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>

</body>
</html>
