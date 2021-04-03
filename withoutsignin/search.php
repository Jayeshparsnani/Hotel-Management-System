<?php
include"connection.php";
$conn=Opencon();

?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/newnavbar.css">

<style type="text/css">
.down{

	font-family:sans-serif;
  background-size:cover;
  background:url(http://localhost/IPhotel/images/pic3.jpg);
  background-repeat: no-repeat;
  width:100%;
  height:700px;
  padding: 10px;
  margin-top: 0px;
  margin-bottom: 0px;
  padding-bottom: 0px;
}
.dropbtn1 {
  background-color: white;
  color: black;
  width: 100px;
  height: 75px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  border-color: white;
}

.dropbtn1:hover {
  background-color: white;
  border-color: none;
}

.dropdown1 {
  position: relative;
  display: inline-block;
  border-color: none;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  width: 100px;
  background-color: white;
  color: black;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-color:none;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-color: none;
}

.dropdown1 a:hover {background-color: black; color: white;border-color: none;}

.show {display: block;,border-color: none;}
.j1
{
	background:rgba(0,0,0,.4);
	width:900px;
	height:550px;
	margin:50px 0px 0px 150px;
	color:white;
	font-size:18px;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
	}
h2
{
	text-align:center;
	padding:25px;
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
	width:200px;
	border-radius:3px;
	outline:none;
	padding:8px;
	height:35px;
}
#phone
{
	width:200px;
	border-radius:3px;
	outline:none;
	padding:7px;
	height:35px;
}
#num
{
	width:230px;
	border-radius:3px;
	outline:none;
	padding:7px;
	height:35px;
}
#h3
{
	width:200px;
	padding:10px;
	font-size:16px;
	font-family:sans-serif;
	font-style:italic;
	box-sizing:border-box;
	border:none;
	border-radius:20px;
	outline:0px;
	opacity:0.2px;
	float: right;
	margin-right: 50px;
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






<?php
				if(isset($_POST['submit'])){
					header('location: http://localhost/IPhotel/withoutsignin/Rooms.php');
				}
			?>
<section>
<div class="down">
		<div class="j1">
			<form method="post" id="register" action="">
			<h2>Search Here</h2>
			<br>
			<label>Place:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select id="Phone">
				<option>Mumbai</option>
				<option>Delhi</option>
				<option>Agra</option>
			</select><br>
			<br>
			<label>From :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="date" name="bday" id="name"><br>
			<br>
			<label>To :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="date" name="bday" id="name"><br>
			<br>
			<label>Adults :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="number" name="Mnum" id="Phone"><br>
			<br>
			<label>Children :</label>&nbsp;&nbsp;
			<input type="number" name="Mnum" id="Phone"><br>
			<br>
			<input type="submit" name="submit" value="CheckAvaliability" id="h3">
			
			</form>
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