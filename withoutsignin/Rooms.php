<?php
include"connection.php";
$conn=Opencon();
?>
<html>
<head>
<title>Rooms Agra</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/newnavbar.css">

    <style type="text/css">
    	
    			.bigbox{

						  width:100%;
						  height:4000px;
			    		
						  background-size:cover;
						  background:url(http://localhost/IPhotel/images/pic3.jpg);
						  margin-top: 0px;
						  padding-top: 10px;	
						  
				}
				.j1
				{
							background:rgba(0,0,0,.4);
							border:1px solid ;
							width:95%;
							height:95%;
							margin:10px 0px 0px 20px;
							color:white;
							font-size:18px;
							box-shadow: 0 15px 25px rgba(0,0,0,.5);
				}
				.j12{
						width:100%;
						height:150px;
						border:none;
						border-bottom:1px solid ;
					
				}
					
				.container {
						      width: 600px;
						      margin: 20px auto; 
						   
						      margin-left: 350px;
				}
				.progressbar {
						      counter-reset: step;
						      background-color: white;
				}
				.progressbar li {
						      list-style: none;
						      width: 25%;
						      float: left;
						      font-size: 12px;
						      position: relative;
						      text-align: center;
						      text-transform: uppercase;
						      color: #7d7d7d;
						      display: inline-block;
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
						      background-color: white;
						      top: 15px;
						      left: -50%;
						      z-index: -1;
				}
				.progressbar li:first-child:after {
						      content: none;
			  	}
				.progressbar li.active {
						      color: white;
				}
				.progressbar li.active:before {
						      border-color: #55b776;
				}
				.progressbar li.active + li:after {
						      background-color:#55b776 ;
				}
				h2
				{
					font-size:20px;
					padding:8px;
				}


				.room
					{
						float: left;
						margin: 50px;
						width: 950px;
						height: 450px;
						background-color: white;
						border: 1px solid black;
						box-shadow: 7px 7px 10px black;
					}
				.roomtitle
					{
						margin-left: 20px;
						margin-top: -5px;
						margin-bottom: -10px;
						float: left;
						font-size: 30px;
				

					}
				.description
					{
						text-align: center;
						font-size: 25px;
					
					}
				.imagebook
					{
						float: left;
						margin:20px;
						width: 450px;
						height: 275px;
					}
				.hello
					{
						width: 400px;
						height: 100px;
						margin:-300px 0px 0px 500px;
						display: inline;
						float: right;
						font-size: 12px;
						color:black;
					}
				.night
					{
						float: left;
						margin-left: 7px;
						color:black;
						
					}
				.cost
					{
						
						margin-left: 30px; 
						float: left;
						font-size: 30px;
						color:black;
					}
				.bookbutton
					{
						background-color: white;
						border: 2px solid black;
						float: right;
						
						margin-bottom: -50px;
						margin-right: 10px;
						width: 125px;
						height: 35px;
					}
				.bookbutton:hover
					{
						background-color: white;
					}
				.savings
					{
						float: right;
						margin-top: 100px;
						color:black;
						margin-right: 10px;
					}
				.discount
					{
						color: blue;
						text-decoration: none; 
					}
				@media screen and (max-width:850px) {
				   .image, .background{
				    width:90%; 
				    height: auto;
				    /* The width is 100%, when the viewport is 850px or smaller */
				  }
				}
				@media screen and (max-width:850px) {
				   .hello{
				    width:90%; 
				    /* The width is 100%, when the viewport is 850px or smaller */
				    margin-right: 15px;
				  }

				@media screen and (max-width:850px) {
				  .room{
				    width:90%; 
				    height: 80%;
				    margin-left: 25px; /* The width is 100%, when the viewport is 850px or smaller */
				  }
				}
				@media screen and (max-width:850px) {
				   .savings {
				    width:90%; 
				    float: left;
				    margin: 20px;
				    /* The width is 100%, when the viewport is 850px or smaller */
				  }
				@media screen and (max-width:850px) {
				   .cost {
				    float: left;
				    margin-left: 20px;
				    /* The width is 100%, when the viewport is 850px or smaller */
				  }
				}
				@media screen and (max-width:850px) {
				   .bookbutton {
				    float: right;
				    /* The width is 100%, when the viewport is 850px or smaller */
				  }
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
	
<div class="bigbox">
	<div class="j1">
		<div class="j12">
				<h2></h2>
			<div class="container">
		      <ul class="progressbar">
		          <li>step1</li>
		          <li>step2</li>
		          <li>step3</li>
		  		</ul>
		  	</div>
		</div>
		
<?php
	
		$sql=$conn->query("SELECT roomno from room where cust_id=0 ");
		if($sql-> num_rows==0){

			echo "no rooms available";
		}
		else{
			while($row=mysqli_fetch_assoc($sql)){
			$roomno=$row['roomno'];
				$sql1=$conn->query("SELECT * from hoteldetails where roomno=$roomno");
				$row1=mysqli_fetch_assoc($sql1);

				echo'<div class="room">
					
					<img src="'.$row1['image'].'" class="imagebook">
					<br>
					<div class="roomtitle">
						'.$row1['roomtype'].'
					</div>
					<br>
					<div class="hello">
						<p>'.$row1['discription'].'
						<br>'.$row1['bed'].'
						<br>'.$row1['area'].'</p>
						<p>Room Amenities:
						<br>1. '.$row1['first'].'
						<br>2.'.$row1['second'].'</p>
						<p>'.$row1['para'].'<br>
						</p>
					</div>
					<div class="cost">
						Rs.'.$row1['cost'].'
					</div>
					<div class="night"> per day</div>
					<br>
					<br>
					<form method="post">
					<button type="button" class="bookbutton" onclick=window.location="http://localhost/IPhotel/withoutsignin/guestdetails.php";>BOOK</button>
					</form>
					<p class="savings"><a href="http://localhost/IPhotel/login/login.php" class="discount">Login</a> for 10% additional savings.</p>
				</div>';
				}
			}
?>
				
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