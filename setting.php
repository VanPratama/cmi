<!DOCTYPE html>
<html>
<head>
	<title>Setting Profile</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../atw/css/bootstrap.min.css">
	<script src="../atw/jquery.min.js"></script>
	<script src="../atw/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../atw/css/jquery.dataTables.css">
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
  max-width: 25%;
}
.navbar-nav li a:hover{
  color: #98ed63!important;
}
.navbar-brand,.nl{
  color: #66a344!important;
  font: 1.8vw Azoft Sans , sans-serif;
  font-weight: 600;
  letter-spacing: 2px;
  line-height: 2em;
}
.nl2{
  color: #66a344!important;
  font: 15px Azoft Sans , sans-serif;
  font-weight: 600;
  letter-spacing: 2px;
  line-height: 1.2em;
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
<div class="container-fluid px-0" id="Section1">
	<nav class="navbar navbar-expand-sm navbar-dark py-4 px-2 nv">
	   <a class="navbar-brand px-2 mx-0 py-4" href="#"><img class="img-fluid" src="../atw/CMI.png"></a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav mx-2" style="flex-direction: column!important;">
	      <li class="nav-item py-2 text-center">
	        <a class="nav-link border-bottom nl" href="../atw/selectphp.php">Back</a>
	      </li>
	      <li class="nav-item py-2 text-center">
	        <a class="nav-link border-bottom nl" href="../atw/cmi_index.php">Home</a>
	      </li>
	      <li class="nav-item py-2 text-center">
	        <a class="nav-link border-bottom nl" href="../atw/dataform.php">Input Data</a>
	      </li>
	      <li class="nav-item py-2 text-center">
	        <a class="nav-link border-bottom nl" href="#">View Data</a>
	      </li>
	      <li class="nav-item py-2 text-center">
	        <a class="nav-link border-bottom nl" href="../atw/setting.php">Setting</a>
	      </li> 
	    </ul>
	  </div> 
	</nav>

	<div class="container-fluid py-5" style="background-color: #1f2725;color: #66a344;">
	<div class="row">
	<div class="col-sm-12 py-5" style="color: #66a344;" >
		<h3 class="pb-4 text-center">Upload File</h3>
		<ul>
	    	<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				<div class="form-group">
				<label class="control-label col-sm-2" for="f"><h5>Photo/File:</h5></label>
				<div class="col-sm-12">
					<input type="file" name="f" id="f" class="form-control-file border">
				</div>
				</div>

				<div class="form-group">
				 <div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" name="sbmt3" value="Upload" class="btn btn-success">Submit</button>
				 </div>
				</div>

				<?php include 'upload.php' ?>
			</form>
		</ul>
	</div>
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