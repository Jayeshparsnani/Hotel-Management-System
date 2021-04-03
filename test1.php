<?php
	include"connection.php";
	$conn=Opencon();
?>
<html>
<head>
<title>PHP File Upload example</title>
<style>
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
		margin-left: 520px;
		margin-top: -5px;
		margin-bottom: -10px;
		float: left;
		font-size: 30px;
		font-family: cursive;

	}
.image
	{
		float: left;
		margin:20px;
		margin-top: -20px;
		width: 450px;
		height: 275px;
	}
.hello
	{
		width: 400px;
		height: 100px;
		margin-top: 10px;
		margin-left: 0px;
		margin-right: 30px;
		display: inline;
		float: right;
	}
.night
	{
		float: left;
		margin-left: 7px;
		margin-top: 160px;
	}
.cost
	{
		margin-top: 150px;
		margin-left: 30px; 
		float: left;
		font-size: 30px;
	}
.bookbutton
	{
		background-color: gold;
		border: 2px solid black;
		float: right;
		margin-top: 155px;
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
		margin-right: 10px;
	}
.discount
	{
		color: blue;
		text-decoration: none; 
	}
</style>
</head>
<body>
 <form action="" enctype="multipart/form-data" method="post">

	
 <div class="room">
	
	<br>
	<div class="roomtitle">
		<input class="test" name="room" type="text" onfocus="this.value=''" value="Room Type" />
	</div>
	<br>
	<div class="image">

		<?php
		if(isset($_POST['Submit1']))
			{ 
				$filepath = "http://localhost/IPhotel/images/" . $_FILES["file"]["name"];
				echo $filepath;
 
			
				echo "<img src=".$filepath." height=275 width=450 />";

				$roomtype=$_POST['room'];
				echo $discription=$_POST['description'];
				echo $bed=$_POST['bed'];
				echo $area=$_POST['area'];
				echo $first=$_POST['first'];
				echo $second=$_POST['second'];
				echo $para=$_POST['para'];
				echo $cost=$_POST['cost'];
				echo $roomtype;
				//$result=$conn->query("SELECT * from hoteldetails order by roomno desc limit 1");
				//if($result-> num_rows==0){
					$roomno=1;
					$conn->query("INSERT into hoteldetails(roomno,image,roomtype,discription,bed,area,first,second,para,cost)values($roomno,'$filepath','$discription','$bed','$area','$first','$second','$para',$cost)");

				//}
				//else
				//{
				//	$row=mysqli_fetch_assoc($result);
				//	$roomno=$row['roomno']+1;
				//	$conn->query("INSERT into hoteldetails(roomno,image,roomtype,discription,bed,area,first,second,para,cost)values($roomno,'$filepath','$description','$bed','$area','$first','$second','$para',$cost)");

				//}
			}
			
		
?>
	
	<br>
	<br>
	
		Select image :
		<input type="file" name="file"><br><br>
		<input type="submit" value="Upload" name="Submit1">&nbsp;&nbsp; 
		<button onclick="document.getElementById('test').value=''">CLEAR</button>

		

	</div>
	<div class="hello">
		<input class="test" name="description" style="width: 350px;" type="text" onfocus="this.value=''" value="short description" />
		<br><input class="test" name="bed" type="text" onfocus="this.value=''" value="1 or 2 king beds?" />
		<br><input class="test" name="area" type="text" onfocus="this.value=''" value="Area of Room" />
		<p>Room Amenities:
		<br>1.<input name="first" class="test" type="text" onfocus="this.value=''" value="first" />
		<br>2.<input class="test" name="second"type="text" onfocus="this.value=''" value="second" />
		<p><textarea name="para" class="test" cols="55" rows="5"></textarea></p><br>
		</p>
	</div>
	<div class="cost">
		<input name="cost"class="test" type="text" value="" >
	</div>
	<div class="night"> per day</div>
	<br>
	<br>
	<button type="button" class="bookbutton">BOOK</button>
	
</div>
</form>
<form>



</form>
</body>
</html>



