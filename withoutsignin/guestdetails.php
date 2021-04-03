<html>
<head>
<meta charset="utf-8">


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/newnavbar.css">



<link rel="stylesheet"  href="guest.css">
<style type="text/css">
  

body{
              
              background-size:cover;
              background:url(http://localhost/IPhotel/images/pic3.jpg); 
              
        }

.j13
{
  border:1px solid ;
  margin:0px 0px 0px 770px;
  width:350px;
  height:440px;
}
.j1
{
  background:rgba(0,0,0,.4);
  border:1px solid ;
  width:95%;
  height:540px;
  margin:10px 0px 0px 20px;
  color:white;
  font-size:18px;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
}
.j12
{
  width:100%;
  height:130px;
  border:none;
  border-bottom:1px solid ;
}
.j2
{
  width:100%;
  height:150px;
  border:none;
  border-bottom:1px solid ;
}
.j3
{
  width:100%;
  height:200px;
  border:none;

}
h2
{
  font-size:20px;
  padding:8px;
}
#register
{
  margin-left:50px;
  
}
label
{
  color:white;
  font-family:sans-serif;
  font-size:18px;
  font-style:italic;
  color:white;
}
#name
{
  width:130px;
  border-radius:3px;
  outline:none;
  padding:8px;
  height:35px;
}
#phone
{
  width:165px;
  border-radius:3px;
  outline:none;
  padding:7px;
}
#num
{
  width:200px;
  border-radius:3px;
  outline:none;
  padding:7px;
}
#h3
{
  width:150px;
  padding-left:5px;
  font-size:16px;
  font-family:sans-serif;
  font-style:italic;
  box-sizing:border-box;
  border:none;
  border-radius:20px;
  outline:0px;
  opacity:0.2px;
  margin-top: 70px;
}
#h3:hover
{
  cursor:pointer;
  background: #ffc107;
  color: #000;
  
}
#male
{
  color:white;
  padding:40px;
}
.container {
      width: 600px;
      margin: 20px auto;
      margin-left: 350px;

  }
  .progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 25%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: green;
  }
  .progressbar li.active:before {
      border-color: #55b776;
  }
  .progressbar li.active + li:after {
      background-color: #55b776;
  }
  .d1
{
  width:100%;
  height:40px;
  background-color: white;
  margin: 0px 0px 0px 0px; 
}
.d2
{
  margin: 0px 0px 0px 1080px ;
  padding: 10px;
  text-decoration: none;
}
.d3
{
  margin: -35px 0px 0px 1220px ;
  padding: 10px;
}
.button1
{ 
  background-color: white;
  margin: 0px 0px 0px 530px;
  padding-top: 0px;
  border-radius: 20px;
}
#name
{
  width:200px;
  border-radius:3px;
  outline:none;
  padding:8px;
  margin-left:90px;
}
</style>

</head>
<body>
<header>
      <div class="fullnav">
          <div class="image">
            <a href="http://localhost/IPhotel/withoutsignin/firstpage_withoutsignin.php"><img src="http://localhost/IPhotel/images/logo2.png" style="width: 100%;height: 100%;"></a>
          </div>

          <div class="login">
            <a href="http://localhost/IPhotel/withoutsignin/search.php" class="login1">Book</a>
          </div>

          <div class="book">
            <a href="http://localhost/IPhotel/login/login.php" class="book1">Login</a>
          </div>

      </div>
      <div class="nav2">
        <div class="subnav">
          <a href="http://localhost/IPhotel/conferenceroom/conference room.php" class="nav21">Conference Hall</a>
          <a href="http://localhost/IPhotel/boardroom/board_room.php">Board Room</a>
          <a href="http://localhost/IPhotel/withoutsignin/findreservation.php">Find Reservation</a>
          <a href="nav24"></a>
        </div>
      </div>
</header>



  <section>

<div class="j1">

	<div class="j12">
		<h2></h2>
		<div class="container">
      <ul class="progressbar">
          <li class="active">step1</li>
          <li>step2</li>
          <li>step3</li>
  		</ul>
  		</div>
	</div>
	<div class="j2">
		<h2>Guest Details</h2>
    <input type="text" name="Fname" id="name" placeholder="Enter FirstName">
    <input type="text" name="Fname" id="name" placeholder="Enter LastName">
    <input type="text" name="Fname" id="name" placeholder="Enter MobileNumber">
    <input type="text" name="Fname" id="name" placeholder="Enter Email">
		
	</div>
	<div class="j3">
    	   <h2>Card Details</h2>
            <input type="text" name="Fname" id="name" placeholder="Enter Card Number">
            <input type="text" name="Fname" id="name" placeholder="Enter Expiry Date">
            <input type="text" name="Fname" id="name" placeholder="Enter Name On Card">
    		    
    		    <a class="button1" type="submit" value="CompleteBooking" id="h3" href="http://localhost/IPhotel/withoutsignin/completebooking.php">Complete Booking</a>
    	</div>
  </div>

	


</section>
<footer>
    <div>
      <p class="des">DJJ Hotels Mumbai <sup>&#169;</sup></p>
      <p class="des">
        <span class="contact"> 
          <i class="fa fa-phone">&ensp;&ensp;7666624277&ensp;|&ensp;9049414611</i>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
          <i class="fa fa-envelope">&ensp;&ensp;djjhotels@gmail.com</i>
        </span>
        <span  class="social">
          <a href="https://twitter.com" class="fa fa-twitter"></a>&ensp;&ensp;&ensp;<a href="https://facebook.com" class="fa fa-facebook"></a>&ensp;&ensp;&ensp;<a href="https://instagram.com" class="fa fa-instagram">
          </a>
        </span>
        <span class="map">
          <a href="http://localhost/IPhotel/map/map.php" style="text-decoration: none; color: white;"><i class="material-icons" style="font-size:12px;color:white;">LOCATION:&ensp;hotel</i></a>
        </span>
      </p>
    </div>
  </footer>





</body>
</html>


