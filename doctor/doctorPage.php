<?php
include_once 'doctorLoginCTRL.php';//connection
include_once 'doctorLogoutCTRL.php';//connection
include_once '../assets/conn/dbconnect.php';//connectio

session_start();

$doctor = new doctorLoginCTRL();  

$doctorId = $_SESSION['id'];//get id
$doctorPw = $_SESSION['password'];//get id

if (!$doctor->session())
    {  
        header("Location:../doctorLoginPage.php");  
    }

$doctorLogout = new doctorLogoutCTRL();  

if(isset($_POST['logout'])) 
{
  $doctorLogout->logout();
  header('Location:doctorLoginPage.php'); //exit to home page
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doctor Page</title>
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/material.css" rel="stylesheet">
      	<link rel="stylesheet" href="../assets/css/page.css">
      	<!-- Boxicons CDN Link -->
      	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      	<style>
    		input[type="submit"]
    		{
    			width: 150px;
    			height: 40px;
    			border: none;
    			background-color: #0a1172;
    			border-radius: 50px ;
    			font-weight: bold;
    			color: white;
    			font-family: Arial, Helvetica, sans-serif;
    		}

    		input[type="submit"]:hover
    		{
    			width: 150px;
    			height: 40px;
    			border: none;
    			background-color: #000137;
    			border-radius: 50px 20px ;
    			font-weight: bold;
    			color: white;
    			font-family: Arial, Helvetica, sans-serif;
    		}
   		</style>
    </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-clinic'></i>
      <span class="logo_name">E-Prescription</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-first-aid' ></i>
            <span class="links_name">New Prescription</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-history'></i>
            <span class="links_name">Past Prescription</span>
          </a>
        </li>
        
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      	<h2> <b> Welcome, <?php echo $doctor->verifyUser($doctorId, $doctorPw);?> </b></h2> 
      </div>  
       <form method = "POST" >
              	<input type = "submit" value="Log Out" name="logout" />
            </form>
     
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Precription created today</div>
            <div class="number">100</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Collected Precription</div>
            <div class="number">50</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Non-collected prescription for more than 3 days</div>
            <div class="number">2</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Today Date</div>
            <div class="number"><p>
            <script> document.write(new Date().toLocaleDateString()); </script>
            </p></div>
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Write smtg here..</div>
          
        </div>
        <div class="top-sales box">
          <div class="title">Write smtg here..</div>
         
        </div>
      </div>
    </div>
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>