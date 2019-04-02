<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../atw/css/bootstrap.min.css">
	<script src="../atw/jquery.min.js"></script>
	<script src="../atw/js/bootstrap.min.js"></script>
  <link rel="icon" href="../atw/Logo-Artindo2.ico">
  
  <?php include 'connect.php'?>

<style>
.nav1{
background-color: #dbecc0!important;
position: relative;
}
.navbar-brand{
color: #66a344!important;
font: 2.3vw Azoft Sans , sans-serif;
font-weight: 600;
letter-spacing: 4px;
line-height: 2.5em;
}
.ftr {
background-color: #dbecc0;color: #66a344;
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

<nav class="navbar navbar-expand-sm justify-content-center nav1">
	<a class="navbar-brand" style="margin-left: 10px;">ARTINDO TATA WARNA</a>
</nav>

<div class="container-fluid py-5">
  <div class="row py-3 justify-content-center">
  <div class="col-sm-6">
  <ul>
    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <div class="form-group">
       <label class="control-label col-sm-2" for="usr"><h5>Name:</h5></label>
       <div class="col-sm-10">
        <input type="text" class="form-control" name="usr" id="usr" placeholder="Enter your name">
        <span class="help-block">Can only contain 3-15 letters and white space.</span>
       </div>
      </div>
        
      <div class="form-group">
       <label class="control-label col-sm-2" for="pwd"><h5>Password:</h5></label>
       <div class="col-sm-10">
         <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password">
         <span class="help-block">Can only contain numbers, must not less than 6 characters.</span>  
       </div>
      </div>

      <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="sbmt" class="btn w-100" style="background-color: #ffdc39;letter-spacing: 5px;">Login</button>
       </div>

      </div>
    </form> 
  </ul>
  </div>

  <?php
    session_start();
    session_destroy();
  ?>

  <div class="col-sm-6">
    <?php include "loginvalidate.php" ?>
  </div>
  </div>

  
</div>


<footer class="container-fluid ftr text-center ">
  <hr><a href="https://www.facebook.com/SunleeOfficial"><i class='fab fa-facebook'style='font-size:24px;color:#66a344;padding-right: 10px;'></i></a>
  <a href="https://www.instagram.com/sunlee_official"><i class='fab fa-instagram' style='font-size:26px;color:#66a344;'></i></a><hr>
  <p>© 2019 Artindo Tata Warna . All rights reserved.</p>
</footer>

</body>
</html>