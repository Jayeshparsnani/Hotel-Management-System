<?php
  include"connection.php";
  $conn=Opencon();
?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin_navbar1.css">
<link rel="stylesheet" type="text/css" href="admin_content1.css">
<style type="text/css">
  a{
    color:black;
  }
</style>
</head>
<body class="background">
  
<div class="navbar">
  <div class="empty">
  </div>
   <div class="name">
      <a href="admin.php" style="text-decoration: none;"><p>DJJ HOTELS</p></a>
  </div>
  
  <div class="admin">
      <div class="dropdown1">

      <?php  
        session_start();
        $user=$_SESSION['id'];
        $adminentry=$conn->query("SELECT * from admin_details where Admin_Id=$user");
        $row2=mysqli_fetch_assoc($adminentry);
        $firstname=$row2['First_name'];
        echo '<button onclick="myFunction()" class="dropbtn1">'.$firstname.'</button>';
       
      ?>

      <div id="myDropdown1" class="dropdown-content1">
    <a href="logout.php">LOGOUT</a>
  </div>
</div>
</div>

     
</div>
<br>
  <div class="options">
      <button type="button" class="users"> USERS </button>
      <button type="button" class="status"> STATUS </button>
      <button type="button" class="addrooms"> ADD ROOMS </button>
      <button type="button" class="addoffers"> ADD OFFERS </button>
  </div>
  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>

  