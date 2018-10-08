<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Online Courier Software Script, Cargo Tracking Module in PHP, MySql in India</title>
<meta name="description" content="A Simple Solution to enable Tracking in your Existing Website.">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/aalpha.css" rel="stylesheet" type="text/css">

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}




#sliderbox img{
	float:left;
	
}
@keyframes slideranimation{
	0%
	{
		left:0px;
	}
	20%
	{
		left:0px;
	}
	25%
	{
		left:-500px;
	}
	45%
	{
		left:-500px;
	}
	50%
	{
		left:-1000px;
	}
	70%
	{
		left:-1000px;
	}
	80%
	{
		left:-1600px;
	}
	
}
</style>
</head>

<body bgcolor="#F4F4F4">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900" style="padding-top:20px;">
  <tbody><tr>
    <td width="900"><img src="images/trheader.jpg" height="120" width="900" ></td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" width="900">
      <tbody><tr>
        <td bgcolor="#EE4035">&nbsp;</td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#FFFFFF" width="900"><table border="0" align="center" width="99%">
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/pic1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/pic2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/pic4.png" style="width:100%" height="50%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

	
	
	
	
	
      <tbody><tr>
        <td width="22%"><table border="0" align="center" width="185">
          <tbody><tr bgcolor="#EFF7FC">
            
          </tr>
          
          
          
          
          
          
          
          
          
        </tbody></table>
              <p align="center"></p>
          <p align="center"></p><!-- #EndLibraryItem --></td>
        <td height="221" width="1%"><img src="home_files/l1.gif" height="292" width="1"></td>
        <td class="aalpha" width="54%"><p class="navi" align="justify"><strong>Courier Management System  </strong> is the simplest solution for <strong>Courier &amp; Cargo Tracking</strong> Business. If you need to enable Tracking Option in your existing or new website, this is quickest Software Solution. </p>
          <p class="navi" align="justify">You can get install it yourselves or  We do the installation and brand it in your name on your hosting ! </p>
          <p class="navi" align="justify">The Courier Software is Very 
easy to setup and manage powerful administration. Provide online 
tracking system of consignment and shipping detail for International or 
domestic shipping. </p>
          <p class="navi" align="justify">We have made this script, a very simple one, which means SIMPLE  ! Read More on the Features<strong>.</strong></p>
          <p class="navi" align="justify"><strong>Our CEO quotes : </strong></p>
          <p class="navi" align="justify">" We decided to develop this 
small application for the simple reason being, not many such scripts are
 available in the market and few of such that exist are vast and 
complex" </p></td>
        <td class="aalpha" width="2%"><div align="center"><img src="home_files/l2.gif" height="292" width="1"></div></td>
        <td class="aalpha" width="21%"><table border="0" align="center" width="89%">
          <tbody><tr bgcolor="#EFF7FC">
            <td class="aalpha" bgcolor="#008C00" height="19"><img src="home_files/whoca.gif" height="24" width="140"></td>
          </tr>
          <tr bgcolor="#EFF7FC">
            <td class="aalpha" height="19"><img src="home_files/arrow_right.gif" height="9" width="9"> Courier Company </td>
          </tr>
          <tr>
            <td class="aalpha"><img src="home_files/arrow_right.gif" height="9" width="9"> Cargo Company </td>
          </tr>
          <tr bgcolor="#EFF7FC">
            <td class="aalpha"><img src="home_files/arrow_right.gif" height="9" width="9"> Any Logistics </td>
          </tr>
          <tr>
            <td class="aalpha"><img src="home_files/arrow_right.gif" height="9" width="9"> Shipping Company </td>
          </tr>
          <tr bgcolor="#EFF7FC">
            <td class="aalpha"><img src="home_files/arrow_right.gif" height="9" width="9"> Freight Company </td>
          </tr>
        </tbody></table>
              <br>
              <table border="0" align="center" width="90%">
                <tbody><tr bgcolor="#EFF7FC">
                  <td class="aalpha" bgcolor="#EFF7FC" height="19"><div align="center">
                      <p><strong> Status Check </strong>:</p>
                  </div></td>
                </tr>
                <tr bgcolor="#EFF7FC">
                  <td class="aalpha" bgcolor="#FFFFFF" height="19"><div align="center"><a href="track-status.php" target="_self">Click Here </a> </div></td>
                </tr>
                <tr bgcolor="#EFF7FC">
                  <td class="aalpha" bgcolor="#EFF7FC" height="19"><div align="center">
                      <p><strong> ADMIN Login </strong>:</p>
                  </div></td>
                </tr>
                <tr bgcolor="#EFF7FC">
                  <td class="aalpha" bgcolor="#FFFFFF" height="19"><div align="center"><a href="login.php" target="_self">Click here </a> </div></td>
                </tr>
              </tbody></table>
              <br></td>
      </tr>
    </tbody></table>
        <table border="0" align="center" width="100%">
          <tbody><tr bgcolor="#EFF7FC">
            <td class="aalpha" bgcolor="#FFFFFF" height="19"><div class="lowerstyle style1" align="center"></div></td>
          </tr>
      </tbody></table></td>
  </tr>
</tbody></table>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td colspan="2" class="aalpha" bgcolor="#FFCC00" height="25"><div align="center">
	</div></td>
  </tr>
  <tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
	<tr bgcolor="#EFF7FC">
            <td class="aalpha"><strong><a href="faq.php"> FAQ</a>
			|
	
	<strong><a href="contact.php"> Contact</a>
			|
	<strong><a href="terms.php">Terms and Conditions</a> </strong></td>
          </tr>
    <td bgcolor="#2284d5" width="304"><p class="lowerstyle">
    
    </p>
      <p class="lowerstyle">&nbsp;</p></td>
  </tr>
</tbody></table>

</body></html>