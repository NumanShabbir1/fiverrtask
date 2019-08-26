<?php
ob_start();?>
<?php if($_POST['fname']):?>
<?php



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$title=$_POST['title'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$affiliate_code=$_POST['affiliate_code'];
$email=$_POST['email'];


?>

<?php 
header('Content-type: text/html');
header('Content-Disposition: attachment; filename="landing.html"');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="fonts/fontawesome-all.min.css">
<title><?php echo $fname?> <?php echo $lname?></title>
<style>
*{margin:0; adding:0;font-family:Arial;}
body{padding-bottom: 100px;}
.container{padding:0 250px; position:relative;}
.row{width:100%; display:block; margin:0; padding:0;}
.col-30{display:inline-block; width:30%; margin:0; padding:0; vertical-align:top;}
.col-50{display:inline-block; width:50%; margin:0; padding:0; vertical-align:middle;}
.col-70{display:inline-block; width:calc(70% - 2px); margin:0; padding:0; vertical-align:top;}
a{text-decoration:none; color:#000;}
.btnPurple{background:#d10582; padding:10px 15px; color:#fff; border-radius: 5px; border:none;}
.btnPurple:hover{background:#b4006e;}
.text-right{text-align:right;}
.text-center{text-align:center;}
.text-left{text-align:left;}
.coverLink{position:absolute; top:25vw; left:60vw; max-width:30vw;}
.coverLink img{max-width:90%;}
small{font-size:.6em;}
td p{font-size:.8em;}
.thin{font-weight:lighter;}
.form-control{display:block; margin-top: 15px; width:calc(100% - 22px); border: 1px solid #e0e0e0; padding: 10px; border-radius:5px;}
#affiliatePicture{width: 200px; height:200px; margin:auto; margin-bottom:15px; border-radius:5px; background: url('afpic.jpg'); background-position:center; background-size:cover; box-shadow: 0 3px 5px #a1a1a1;}
#affiliatContactTable{width: 200px;margin:auto; }
#mainBody{border-left: 1px solid #e0e0e0;border-right: 1px solid #e0e0e0;}
.videowrapper {
    float: none;
    clear: both;
    width: 100%;
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
}
.videowrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

@media (max-width: 1200px) {.container{padding:0 100px;}}
@media (max-width: 990px) {.container{padding:0 80px;}}
@media (max-width: 950px) {.container{padding:0 50px;}}
@media (max-width: 800px) {
.container{padding:0 30px;}
.row{padding: 5px 0;}
.col-30, .col-70{display:block; width:100%;}
#mainBody{border-left: none;border-right: none; border-top:1px solid #e0e0e0;}
}
</style>
</head>
<body>
<div class="container">
  <div class="row">
	<div class="col-50">
	  <a href="#affiliate1"><img src="http://mybrightchoices.com/promasters-new-picture-logo-blue450x100.png" alt="promasters" style="height:auto; max-height:40px; max-width:90%;"></a>
	</div>
  </div>
</div>
<div style="width:100%; height:55.5vw; background:url('http://mybrightchoices.com/Splash.jpg'); background-position:center; background-size:cover; position:relative;">
	<a href="https://promasters.com/request-a-quote.html?st_code=<?php echo $affiliate_code;?>" target="_blank" class="coverLink"><img src="http://mybrightchoices.com/Get-Started-button.png" alt="getting started"></a></div>
<div style="height:5px; background:#e0e0e0"></div>

<div class="container">
  <div class="row">
	<div class="col-30 text-center" style="margin-top:-30px;">
	  <div id="affiliatePicture"></div>
	  <h1>Phylesia LeMar</h1>
	  <table class="text-left" id="affiliatContactTable">
	  <tr><td>&nbsp;</td><td></td></tr>
	  <tr>
		<td><i class="fas fa-envelope"></i></td>
		<td><small>Email address</small><p><a href="mailto:<?php echo $email?>"><?php echo $email?></a></p></td>
	  </tr>
	  
	  <tr>
		<td><i class="fas fa-phone"></i></td>
		<td><small>Phone number</small><p><a href="tel:<?php echo $phone?>"><?php echo $phone?></a></p></td>
	  </tr>
	  
	  <tr>
		<td><i class="fas fa-globe"></i></td>
		<td><small>Website url</small><p><a href="https://<?php echo $fname.$lname?>.mybrightchoices.com"><?php echo $fname.$lname?>.mybrightchoices.com</a></p></td>
	  </tr>
		  
	  <tr>
		<td><i class="fas fa-globe"></i></td>
		<td><small>Make $ referring other people to Save $</small><p><a href="http://mybrightchoices.com/affiliate.html?affiliate=<?php echo $affiliate_code;?>" target="_blank">Click Here</a></p></td>
	  </tr>
	  </table>
	  <p class="text-center"><br><i class="fab fa-facebook-square"></i> <i class="fab fa-linkedin"></i></p>
	</div><div class="col-70 text-center" id="mainBody">
	  <h1 class="thin"><br><?php echo $location;?> Residents</h1>
	  <p><br><?php echo $title;?> , <?php echo $fname;?> <?php echo $lname;?> , is helping <?php echo $location;?> Residents with Great Deals to save them Money.</p><br />
		<p><div><h2 class=>Click Here To Find the Best Deals for Your Home:</h2></div>
		<div><a href="https://brightchoice.ositracker.com/[affiliate_code]"><img src="https://promasters.com/images/Get-Started-button.png" alt="Get Started"></a></div></p>
	  		
	  <h1 class="thin"><br><br>SAVE MONEY and get GREAT DEALS</h1>
	  <p><br>SAVEMONEY on your BILLS<br><br></p>
	 <script src="https://fast.wistia.com/embed/medias/e6g25gjzdu.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_e6g25gjzdu videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/e6g25gjzdu/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
	</div>
  </div>
</div>
</body>
</html>



  <?php endif;?>