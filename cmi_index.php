<!DOCTYPE html>
<html>
<head>
	<title>CMI Home</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../atw/css/bootstrap.min.css">
	<script src="../atw/jquery.min.js"></script>
  <script src="../atw/popper.min.js"></script>
	<script src="../atw/js/bootstrap.min.js"></script>
 	<link rel="icon" href="../atw/cmi_icon.ico">

  <?php include 'connect.php'?>
  <?php include 'loginvalidate.php' ?>

<style>
#Section1{
  
  display: flex;
}
.nv{
  background-color: #24271f;
  display: inline-block;
}
.navbar-nav li a:hover{
  color: #98ed63!important;
}
.navbar-brand,.nav-link{
  color: #66a344!important;
  font: 1.8vw Azoft Sans , sans-serif;
  font-weight: 600;
  letter-spacing: 2px;
  line-height: 2em;
}
.navbar-brand img:hover{
  filter: brightness(1.1);
}
.ftr {
color: #24271f;
background-color: #24271f;color: #66a344;
padding-top: 30px;padding-bottom: 30px;
line-height: 1.8em;
}
hr{ 
display: inline-block;
margin: 0.5em;
border:solid 1px #66a344;
position: relative;
width: 25%;
}
</style>
</head>

<body>

<div class="container-fluid px-0" id="Section1">
<nav class="navbar navbar-expand-sm navbar-dark py-4 nv">
   <a class="navbar-brand py-4" href="#"><img class="img-fluid" src="../atw/CMI.png"></a>

  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon" style="display: flex;"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-2" style="flex-direction: column!important;">
      <li class="nav-item py-2 text-center">
        <a class="nav-link border-bottom" href="../atw/selectphp.php">Back</a>
      </li>
      <li class="nav-item py-2 text-center">
        <a class="nav-link border-bottom" href="../atw/cmi_index.php">Home</a>
      </li>
      <li class="nav-item py-2 text-center">
        <a class="nav-link border-bottom" href="../atw/dataform.php">Input Data</a>
      </li>
      <li class="nav-item py-2 text-center">
        <a class="nav-link border-bottom" href="#">View Data</a>
      </li>
      <li class="nav-item py-2 text-center">
        <a class="nav-link border-bottom" href="../atw/setting.php">Setting</a>
      </li> 
    </ul>
  </div> 
</nav>
<div class="row mx-0">
  <div class="col-sm-9 px-0">
    <div class="card" style="background-color: #1f2725;color: #66a344;">
      <?php session_start();?>
      <img class="card-img-top w-50 mt-4 align-self-center" src="../atw/noimage.jpg" alt="Card image">
      <!-- <img class="card-img-top" src="<?if(isset($_SESSION['gambar'])){echo ($_SESSION['gambar']);}?>" alt="Card image"> -->
      <div class="card-body py-4">
        <h4 class="card-title text-center py-4">
          Nama     :<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?><br><br>
          Comment  :<?php if(isset($_SESSION['description'])){echo $_SESSION['description'];}?>
        </h4>
        <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
        </p>
      </div>
    </div>
  </div>

  <div class="col-sm-3 py-4 px-0" style="background-color: #24271f;color: #66a344;">
    <h2 class="text-center">Due-Date</h2><br>
    <?php include 'duedateboard.php'?>
    </p>
  </div>
</div>
</div>

<footer class="container-fluid ftr text-center ">
  <hr><a href="https://www.facebook.com/SunleeOfficial"><i class='fab fa-facebook'style='font-size:24px;color:#66a344;padding-right: 10px;'></i></a>
  <a href="https://www.instagram.com/sunlee_official"><i class='fab fa-instagram' style='font-size:26px;color:#66a344;'></i></a><hr>
  <p>© 2019 Artindo Tata Warna . All rights reserved.</p>
</footer>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>