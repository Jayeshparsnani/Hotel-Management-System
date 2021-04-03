<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/newnavbar.css">
      <style type="text/css">
        
      .Reservation
      {
        font-family:sans-serif;
        background-size:cover;
        background-image:url(http://localhost/IPhotel/images/pic3.jpg);
        background-repeat: no-repeat;
        width:100%;
        height:550px;

      }


.bigbox
{
  font-family:sans-serif;
  background-size:cover;
  background:url(http://localhost/IPhotel/pic3.jpg);
  background-repeat: no-repeat;
  width:100%;
  height:100%;
}
.box
{
  position:absolute;
  margin: 70px 0px 0px 450px;
  width:450px;
  height:400px;
  padding:80px;
  background:rgba(0,0,0,.6);
  box-sizing:border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius:10px;
}

.box h1
{
  margin:0 0 40px;
  padding: 0;
  color:#fff;
  text-align: center;
  
}

.box .inputbox
{
  position:relative;
}


.box input{
  width:100%;
  margin-bottom:20px;
}
.box input[type="text"],input[type="password"]
{
  border:none;
  width:300px;
  border-bottom:1px solid ;
  background:transparent;
  outline:none;
  height:40px;
  color:#fff;
  font-size:16px;
  
}
.box .inputbox label
{
  position:absolute;
  top:0;
  left:0;
  padding:10px 0;
  font-size:16px;
  color:#fff;
  
  transition:.5s;
}

.box .inputbox input:focus~label,
.box .inputbox input:valid~label
{
  top:-18px;
  left:0;
  color:#3a9f4;
  font-size:12px;
  
}

.box input[type="submit"]
{
  border:none;
  width:160px;
  outline:none;
  height:40px;
  background:#fb2525;
  color:#fff;
  font-size:18px;
  border-radius:20px;
  
}
.box input[type="submit"]:hover
{
  cursor:pointer;
  background: #ffc107;
  color: #000;
  
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
  width:150px;
  border-radius:3px;
  outline:none;
  padding:8px;
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
  margin:0px 0px 0px 50px;
  width:200px;
  border-radius:3px;
  outline:none;
  padding:7px;
}
#h3
{
  margin:0px 0px 0px 0px;
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
  margin-right: 75px;
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
  <div>
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
    </div>
</header>



<section>
        <div class="Reservation">

                <div class="box">
                  
                  <h1>Find Reservation </h1>
                  <form action="" method="post">  

                    <div class="inputbox">
                      <input type="text" name="Email" required="" >
                      <label>Confirmation No.</label>
                    </div>

                    <div class="inputbox">
                      <input type="text" name="password" required="" >
                      <label>Email</label>
                    </div>

                      <input type="submit" name="submit" value="Find">


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