<!DOCTYPE html>
<html>
<head>
	<title>Bridge Site</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../atw/css/bootstrap.min.css">
	<script src="../atw/jquery.min.js"></script>
  <script src="../atw/popper.min.js"></script>
	<script src="../atw/js/bootstrap.min.js"></script>
  <link rel="icon" href="../atw/Logo-Artindo2.ico">

  <?php include 'connect.php'?>
  <?php include 'loginvalidate.php' ?>

<style>
.nav1{
background-color: #24271f;
position: relative;
}
.navbar-brand{
color: #66a344!important;
font: 2.3vw Azoft Sans , sans-serif;
font-weight: 600;
letter-spacing: 4px;
line-height: 2.5em;
}
.c{
font: 2vw Amerika Sans , sans-serif;
line-height: 2.5em;
color: #24271f;
background-image: url("../atw/gedung_atw.png");
background-repeat: no-repeat;
background-size: cover;
}
.c h1{
font-weight: 800;
letter-spacing: 8px;
text-transform: capitalize;
}
.c img:hover{
  opacity: 0.7;
}
.ftr {
color: #24271f;
background-color: #24271f;color: #66a344;
padding-top: 30px;padding-bottom: 30px;
line-height: 1.8em;
}
.ftr a:hover{
opacity: 0.5;
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

<nav class="navbar navbar-expand-sm nav1">
	<a class="navbar-brand" style="margin-left: 10px;">ARTINDO TATA WARNA</a>

  <ul class="navbar-nav ml-auto" style="text-align: center;">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class='fas fa-sign-out-alt' data-toggle="tooltip" title="Sign Out" style='font-size:2.3vw;color:#66a344;padding-right: 10px;'>
          
        </i>
      </a>
    </li>
  


</nav>


<div class="container-fluid c py-5 text-center">

  <div class="pb-2 mt-4 mb-2 border-bottom" style="border-bottom: 2px solid!important;">
  <h1>Welcome, <?php 
  session_start();
  if(isset($_SESSION['name'])){echo $_SESSION['name'];}
  ?>
  </h1>
  </div>

  <h2 class="py-4">Choose</h2>
 
  
  <div class="row py-3 justify-content-center">

  <div class="col-sm-3">
    <a href="cmi_index.php"><img class="img-fluid img-thumbnail p-3" src="../atw/Kartu-Nama-CMI.PNG"></a>
  </div>

  <div class="col-sm-3">
    <a href="#"><img class="img-fluid img-thumbnail" src="../atw/Koala.jpg"></a>
  </div>

  <div class="col-sm-3">
    <a href="#"><img class="img-fluid img-thumbnail" src="../atw/Penguins.jpg"></a>
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