<?php
    include "connection.php";
    $conn=Opencon();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Login hello</title>



    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   
    <link rel="stylesheet" type="text/css" href="http://localhost/IPhotel/withoutsignin/newnavbar.css">
    <style type="text/css">
      
.bigbox
{
  font-family:sans-serif;
  background-size:cover;
  background:url(http://localhost/IPhotel/images/pic3.jpg);
  background-repeat: no-repeat;
  width:100%;
  height:100%;
}
.box
{
  position:absolute;
  margin: 70px 0px 0px 450px;
  width:450px;
  height:420px;
  padding:80px;
  background:rgba(0,0,0,.6);
  box-sizing:border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius:10px;
}

 .j4{
  text-align:right;
  position:absolute;
  margin: 15px 0px 0px 1150px;
} 
 .j4 input
{
  position:absolute;
  width:80px;
  height:50px;
  background-color:red;
  
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

            <div class="box">
              <?php
              if(isset($_POST['submit'])){

                 $email= $_POST['Email'];
                 $password=$_POST['password'];
                 $sql=$conn->query("SELECT type from login1 where Email='$email'");
                 if($sql-> num_rows==0)
                 {
                    echo'<p style="color:white; margin-left:80px;padding-top:-200px;margin-top:-40px;">Invalid Username.</p>';
                 }
                 else
                 {
                       $row=mysqli_fetch_assoc($sql);
                       $type=$row['type'];
                       if($type=='admin')
                       {

                          $adminentry=$conn->query("SELECT * from admin_details where Email='$email' and password='$password'");
                          if($adminentry-> num_rows==0)
                          {
                             echo'<p style="color:white; margin-left:80px;padding-top:-200px;margin-top:-40px;">Invalid password.</p>';
                          }
                          else
                          {
                              
                               $admin=$conn->query("SELECT Admin_id from admin_details where Email='$email'");
                              $row1=mysqli_fetch_assoc($admin);
                              $id=$row1['Admin_id'];
                              session_start();
                              $_SESSION['id']=$id;
                              header('Location: admin.php');
                          }
                       }
                       else
                       {
                          
                          if($type=='user')
                          {
                              $userentry=$conn->query("SELECT * from registered_customer where Email='$email' and Password='$password'");
                              if($userentry-> num_rows==0)
                              {
                                  echo '<p style="color:white; margin-left:80px;padding-top:-200px;margin-top:-40px;">Invalid Password.</p>';  
                              }
                              else
                              {
                                  
                                    $user=$conn->query("SELECT cust_id from registered_customer where Email='$email'");
                                    $row2=mysqli_fetch_assoc($user);
                                    $id1=$row2['cust_id'];
                                    session_start();
                                    $_SESSION['id']= $id1;
                                    //echo  $_SESSION['id'];
                                    header('Location: user.php');
                              }


                          }
                          else
                          {
                            echo '<p style="color:white; margin-left:80px;padding-top:-200px;margin-top:-40px;">Invalid Username.</p>';
                          }
                        }
                   }
              }
    ?>

            	
            	<h1>Login </h1>
            	<form action="" method="post">  

            		<div class="inputbox">
            			<input type="text" name="Email" required="" >
            			<label>Username</label>
            		</div>

            		<div class="inputbox">
            			<input type="Password" name="password" required="" >
            			<label>Password</label>
            		</div>

            			<input type="submit" name="submit" value="Login">


            	</form>
            <p ><a class="r2" href="http://localhost/IPhotel/register/register.php" style="color: white;">Register.?</a></p>
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