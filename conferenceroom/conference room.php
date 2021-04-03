<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>conference hall</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/newnavbar.css">

  <style type="text/css">
.title
  {
    text-align: center;
    font-size: 30px;
    color: black;
  }
.img
  {  
    width: 90%; 
    height: 450px;
    margin-left: 5%; 
    
    
  }
.text
  {
    font-size: 15px;
    text-align: justify;
    margin: 20px;
  }
.table
  {
    margin-left: 2%; 
    margin-right: 2%;
  }
.img1
  {
    width: 100%; 
    height: 400px; 
    display: inline-block;
  }
.img2
  {
    width: 100%; 
    height: 400px; 
    display: inline-block; 
    margin-left: -2px;
  }
.img3
  {
    width:75%; 
    height: 350px; 
    display: inline-block; 
    margin-left: -2px; 
    margin-top: -3px;
  }
  .conferencebook
  {
    float: center;
    height: 30px;
    width: 100px;
    text-align: center;
    font-size: 15px;
    margin-top:50px;
    border: 1px solid black;
    background-color: white;
    margin-left: 46%;
  }
.conferencebook:hover
  {
    background-color: white;
    color: black;
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
    <br>
    <div>
          <div class="title">
            CONFERENCE ROOM    
          </div>
          <br>
            <img src="http://localhost/IPhotel/images/conference room.jpg" class="img"><br>
          <div class="text">
            A conference hall, conference room, or meeting room is a room provided for singular events such as business conferences and meetings. It is commonly found at large hotels and convention centers though many other establishments, including even hospitals,have one. Sometimes other rooms are modified for large conferences such as arenas or concert halls. Aircraft have been fitted out with conference rooms.
          </div>
          <table class="table">
            <tr>
              <td>
                <img src="http://localhost/IPhotel/images/conference room4.jpg" class="img1">
              </td>
              <td>
                <img src="http://localhost/IPhotel/images/conference room1.jpg" class="img2">
                <img src="http://localhost/IPhotel/images/conference room3.jpg" class="img3">
              </td>
            </tr>

          </table>
          <div>
            <button type="button" onclick="window.location.href='http://localhost/IPhotel/login/login.php'" class="conferencebook"> BOOK </button>
          </div>
  </div>
  </section>
<br>
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