<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="details.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<style type="text/css">
  
  a
  {
    color:black;
  }
</style>

</head>
<body class="background">
<div class="navbar">
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
      <a href="search.html" style="text-decoration: none;"><p>BOOK</p></a>
  </div>
</div>
  <div class="w3-container w3-center w3-animate-zoom">
    <p class="define">WELCOME TO AGRA</p>
    
    <br>
  </div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="w3-container w3-center w3-animate-zoom">
  <img src="detailsagra1.jpg" style="width:100%">
  <div class="text1"> TAJ MAHAL</div>
</div>
</div>

<div class="mySlides fade">
    <div class="w3-container w3-center w3-animate-zoom">
    <img src="detailsagra2.jpg" style="width:100%">
    <div class="text1"> AGRA FORT</div>
</div>
</div>

<div class="mySlides fade">
  <div class="w3-container w3-center w3-animate-zoom">
  <img src="detailsagra3.jpg" style="width:100%">
  <div class="text1"> FATEHPUR SIKHRI</div>
</div>
</div>

<div class="mySlides fade">
  <div class="w3-container w3-center w3-animate-zoom">
  <img src="detailsagra4.jpg" style="width:100%">
  <div class="text1"> ITMAD-UD-DAULAB: "THE BABY TAJ"</div>
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


</body>
</html>