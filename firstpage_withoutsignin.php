<!DOCTYPE html>
<html>
<head>
	<title>DJJ HOTELS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" type="text/css" href="details.css">
<style type="text/css">
  
  a
  {
    color:black;
  }
</style>
</head>
<body class="background">
<div class="nav">
<div class="navbar">
  <div class="firstnav">
      <div class="properties">
        	<div class="dropdown">
    			  <button class="dropbtn">OUR PROPERTIES</button>
    			  <div class="dropdown-content">
    			  <a href="AGRA details.php">THE AMARVILAS AGRA</a>
    			  <a href="MUMBAI details.php">THE TRIDENT MUMBAI</a>
    			  <a href="DELHI details.php">THE OBEROI DELHI</a>
    			  </div>
    		</div>
      </div>
      <div class="name">
          <a href="firstpage_withoutsignin.php" style="text-decoration: none;"><p>DJJ HOTELS</p></a>
      </div>
      <div class="login">
          <a href="login.php" style="text-decoration: none;"><p>LOGIN</p></a>
      </div>
      <div class="book">
          <a href="search.php" style="text-decoration: none;"><p>BOOK</p></a>
      </div>
  </div>
</div>
<div class="d1">
  
<a class="d4" href="findreservation.php"><p class="d2" >Find Reservation</p></a>
<p class="d3">Contact:9834692325</p>

</div>
<div class="d9">
<a class="d7" href="conferenceroom.html"><p class="d5" >Conference Room</p></a>
<a class="d8" href="search.html"><p class="d6" >Board Room</p></a>
</div>
</div>
<br>
<div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="w3-container w3-center w3-animate-zoom">
  <img src="detailsdelhi1.jpg" style="width:100%">
  <div class="text1"> RED FORT</div>
</div>
</div>

<div class="mySlides fade">
  <div class="w3-container w3-center w3-animate-zoom">
    <img src="detailsdelhi2.jpg" style="width:100%">
    <div class="text1"> INDIA GATE</div>
</div>
</div>

<div class="mySlides fade">
  <div class="w3-container w3-center w3-animate-zoom">
  <img src="detailsdelhi3.jpg" style="width:100%">
  <div class="text1"> AKSHARDHAM TEMPLE</div>
</div>
</div>

<div class="mySlides fade">
  <div class="w3-container w3-center w3-animate-zoom">
  <img src="detailsdelhi4.jpg" style="width:100%">
  <div class="text1"> QUTAB MINAR</div>
</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div class="l3">
  
<button type="button" class="bookbutton"><a class="link" href="search.html"> BOOK YOUR STAY</a></button>
<p class="l4">Reserve a room for your family — Far far away behind the word mountains far.</p>

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
<div class="l1">
  <p class="l11">Explore Our Services</p>
  <hr class="l12">
  <p class="l13">Whether building a new hotel from the ground up or reworking an acquired property, Valencia Hotel Group <br>provides expertise in all aspects of hospitality management and development, including branding, <br>repositioning and ongoing operations and logistics management. Combined with our dedication to a unique<br> and sophisticated atmosphere, these services create a hotel that provides guests with a one-of-a-kind travel <br>experience.</p>
</div>
<div class="s1">

</div>
<div class="s2">
   <p class="s21">HOSPITALITY MANAGEMENT SERVICES</p>
   <p class="s22">Valencia Hotel Group offers a variety of hospitality management services that enhance operational cash flow and asset value. These services include selecting the best branding concepts, implementing the most effective concept, leveraging partnerships to optimize distribution, maximizing profits through advanced use of technology, and providing operating efficiencies that lower total property costs.


</p>
</div>
<div class="s3">


</div>
<div class="s4">

</div>
<div class="s5">
   <p class="s51">HOSPITALITY BRANDING & REPOSITIONING</p>
   <p class="s52">By focusing on creating a one-of-a-kind travel experience that connects with guests and the local community, Valencia Hotel Group positions its hotels as market leaders. Infusing timeless details with modern design.


</p>
</div>
<div class="s6">


</div>
<div class="s7">

</div>
<div class="s8">
   <p class="s81">HOTEL DEVELOPMENT</p>
   <p class="s82">From selecting a site through construction, the final completion and the grand opening, Valencia Hotel Group focuses on Great Spaces in Great Places®.

</p>
</div>
<div class="s9">


</div>

<p class="text01">
<strong>About Us</strong><br>
The Oberoi Group, founded in 1934, operates 31 hotels, Nile Cruisers and a Motor Vessel in the backwaters of Kerala. The Group has presence in six countries under the luxury 'Oberoi' and five-star 'Trident' brand. The Group is also engaged in flight catering, airport restaurants, travel and tour services, car rentals, project management and corporate air charters.<br>
</p>


<p class="text01">
<strong>Our Commitment</strong><br>
The Group's commitment to excellence, attention to detail and personalised service has ensured a loyal list of guests and accolades in the worldwide hospitality industry.

Recognising the importance of quality training in hospitality management, The Oberoi Group established The Oberoi Centre of Learning and Development in New Delhi in 1966. Today, this institution is considered amongst the best in Asia with approximately 100 students graduating each year.

The Oberoi Group is committed to employing the best environmental and ecological practices in technology, equipment and operational processes. The Group also supports philanthropic activities and is a keen contributor to the conservation of nature and cultural heritage.
</p>
<hr>

<div class ="s10">
<p class="s11">DJJ HOTEL GROUP</p>
<p class="s12">FIVE POST OAK PARK | 4400 POST OAK PARKWAY SUITE | 2800 HOUSTON, TEXAS 77027</p>
<p class="s13">CALL US AT 866-842-0100</p>
<p class="s14">FOLLOW US ON SOCIAL</p>
<a href="http://www.twitter.com"><img class="s15" src="twitter.png"></a>
<a href="http://www.facebook.com"><img class="s16" src="facebook.png"></a>
</div>
</div>
</div>

</body>
</html>