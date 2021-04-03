
<?php
	include 'connection.php';
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

    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/details.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/newnavbar.css">


</head>
<style type="text/css">
.bigbox{
	font-family:sans-serif;
  background-size:cover;
  background:url(http://localhost/IPhotel/images/pic3.jpg);
  background-repeat: no-repeat;
  width:100%;
  height:900px;
  margin: 0px;
  padding-top:20px;
  margin-bottom: 0px;
  padding-bottom: 0px;
}
	
.j1
{
	
	background:rgba(0,0,0,.4);
	width:750px;
	height:750px;
	margin:0px 0px 0px 300px;
	color:white;
	font-size:18px;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);

}

h2
{
	margin-left: 238px;
	padding:10px;
}
#register
{
	margin-left:50px;
	
}
label
{
	color:white;
	font-family:sans-serif;
	font-size:15px;
	font-style:italic;
	color:white;
}
select{
	margin-left: 80px;
}
#name
{
	width:300px;
	border-radius:3px;
	outline:none;
	padding:10px;
	height: 38px;
	margin-left: 70px;
}
#phone
{
	width:65px;
	border-radius:3px;
	outline:none;
	padding:7px;
	height: 45px;
}
#num
{
	width:230px;
	border-radius:3px;
	outline:none;
	padding:7px;
}
#h3
{
	width:200px;
	padding:7px;
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
	padding:10px;
}
</style>
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
							<form method="post" id="register" action="">
							<h2>Register Here</h2>
							<label>First Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="Fname" id="name" placeholder="Enter FirstName"><br><br>
							<label>Last Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="Lname" id="name" placeholder="Enter LastName"><br><br>
							<label>Mobile Number :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select id="Phone">
								<option>+91</option>
								
							</select>
							
							<input type="text" name="Mnum" id="num" placeholder="Enter Mobile Number"><br><br>
							<label>DateOfBirth :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="date" name="bday" id="name"><br><br>
							<label>Email :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="Email" name="email" id="name" placeholder="Enter Email"><br><br>
							<label>Address :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="address" name="address" id="name" placeholder="Enter Address"><br><br>
							<label>Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="password" name="password" id="name" placeholder="Enter Password"><br><br>
							<label>Confirm Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="password" name="cpassword" id="name" placeholder="Confirm Password"><br><br>
							<label>Gender :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="male" id="male" value="male"><span id="male">Male</span>
							<input type="radio" name="male" id="male" value="female"><span id="male">Female</span>
							<input type="radio" name="male" id="male" value="others"><span id="male">Others</span><br><br>
							<input type="submit" value="Register" id="h3" name="submit">
							
							</form>
						<?php

						if(isset($_POST['submit'])){

							$fname=$_POST['Fname'];
							$lname=$_POST['Lname'];
							$phone=$_POST['Mnum'];
							$date=$_POST['bday'];
							$email=$_POST['email'];
							$address=$_POST['address'];
							$password=$_POST['password'];
							$confirm=$_POST['cpassword'];
							$gender=$_POST['male'];
							if(strlen($phone)>9 and strlen($phone)<11 )
							{
								if(strlen($password)>8)
								{
											if($password == $confirm)
											{
												$count=$conn->query("SELECT cust_id from registered_customer order by cust_id DESC limit 1");
												if($count-> num_rows==0)
												{
													$cust_id=1;
												}
												else
												{
												$row=mysqli_fetch_assoc($count);
												$cust_id=$row['cust_id']+1;
												}
												
												$sql=$conn->query("INSERT INTO registered_customer (cust_id,First_name,Last_name,Mobile_number,Date_of_Birth,Email,Address,Password,Gender)values($cust_id,'$fname','$lname',$phone,'$date','$email','$address','$password','$gender')");
												$sql2=$conn->query("INSERT INTO login1(Email,Type)values('$email','user')");
													echo ('<script>alert("\nSuccessfully Registered.");
													 window.location.href="login.php"</script>');
						 
														
													//header('Location: login.php');

											}
											else
											{

												echo '<p style="margin-left:120px ; margin-top:50px;">Password And confirm password does not match</P>';
											}
								}
								else
								{
									echo '<p style="margin-left:120px ; margin-top:50px;">Password Too short. Password should be more than 8</p>';
								}

							}
							else
							{
								echo '<p style="margin-left:120px ; margin-top:50px;">Incorrect Phone number.</p>';

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