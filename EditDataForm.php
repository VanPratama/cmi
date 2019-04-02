<!DOCTYPE html>
<html>
<head>
	<title>Data Form</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="../atw/css/bootstrap.min.css">
	<script src="../atw/jquery.min.js"></script>
	<script src="../atw/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
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
.form-horizontal{
  font: 12px Assistant , sans-serif;
}
.input-group-text{
  font: 14px Assistant , sans-serif!important;
  background-color: #24271f;
  color: #66a344;
  border: 1px solid #98ed63;
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
        <a class="nav-link border-bottom nl" href="#">Setting</a>
      </li> 
    </ul>
  </div> 
</nav>

<div class="container-fluid py-5" style="background-color: #1f2725;color: #66a344;">
	<h3 class="text-center" style="font: 1.8vw Azoft Sans,sans-serif;letter-spacing: 16px;line-height: 2em;">
		EDIT DATA CUSTOMER
	</h3>
  	<br>
  
    <h3 class="pb-2 border-bottom" style="font: 1.8vw Assistant,sans-serif;letter-spacing: 16px;line-height: 1.2em;">
		FORM-PIUTANG DAGANG
  	</h3>

    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    
    <div class="row r0 pt-4 mx-0 bg-light">
      	<div class="col-sm-5 px-0">
	      <ul>
	      	<div class="form-group">
			<div class="col-sm-4">
			 <div class="input-group mb-3 input-group-sm">
			 	<div class="input-group-prepend">
			     <span class="input-group-text">ID:</span>
			  	</div>
				<input type="text" class="form-control" name="eid" id="e_id">
				<div class="input-group-append" style="background-color: #24271f;">
				    <button class="btn" type="submit" name="edt" style="color: #66a344;">Go</button> 
				</div>			 
			 </div>
			</div>
			</div>
	      </ul>
	  	</div>
	  	<div class="col-sm-7 px-0"><span class="text-danger">*Masukkan ID Customer Yang Ingin Diedit</span></div>
	</div>

    <div class="row r1 pt-4 mx-0 mb-1 bg-light">
      	<div class="col-sm-6 px-0">
	      <ul>
			<div class="form-group">

			 <div class="col-sm-10">
			 <div class="input-group mb-3 input-group-sm">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Customer Name:</span>
			  </div>
			  <input type="text" class="form-control" name="euser" id="euser_n" placeholder="Masukkan Nama">
			 </div>
			 </div>

			</div>
			
			<div class="form-group">
			<div class="col-sm-10">
			 <div class="input-group mb-3 input-group-sm">
			 	<div class="input-group-prepend">
			     <span class="input-group-text">No. Invoice:</span>
			  	</div>
				<input type="text" class="form-control" name="eno" id="eno_i" placeholder="Masukkan No Invoice">
			 </div>
			</div>
			</div>

			<div class="form-group">
			 <div class="col-sm-10">

			  <div class="input-group mb-3 input-group-sm">
			 	<div class="input-group-prepend">
			     <span class="input-group-text">Payment Terms:</span>
			  	</div>
			  <select name="term" id="terms" class="custom-select">
			    <option selected>-</option>
			    <option value="Langsung">Langsung</option>
			    <option value="Hutang">Hutang</option>
			  </select>
			  </div>

			 </div>
			</div>
	      </ul>
  		</div>

  		<div class="col-sm-6 px-0">
	      <ul>
			<div class="form-group">
			<div class="col-sm-10">
			 
			 <div class="input-group mb-3 input-group-sm">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Invoice Date:</span>
			  </div>
			  <input type="date" class="form-control" name="eidate" id="edate_i">
			 </div>

			</div>
			</div>
			
			<div class="form-group">
			<div class="col-sm-10">

			 <div class="input-group mb-3 input-group-sm">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Due Date:</span>
			  </div>
			  <input type="date" class="form-control" name="edue" id="ed_date">
			 </div>

			</div>
			</div>
	      </ul>
  		</div>
	  </div>

	  <div class="row r2 pt-4 mx-0 bg-light">
	  <div class="col-sm-6 px-0">
	      <ul>
			<div class="form-group">
			<div class="col-sm-10">
			 <div class="input-group mb-3 input-group-sm">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Price Amount:</span>
			  </div>
			  <input type="text" class="form-control" name="etax" id="etax_a" placeholder="Masukkan Harga">
			 </div>
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-10">
			 <div class="input-group mb-3 input-group-sm">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Paid Amount:</span>
			  </div>
			  <input type="text" class="form-control" name="ep_am" id="eam_p" placeholder="Masukkan Harga">
			 </div>
			</div>
			</div>

	      </ul>
  	  </div>

  	  <div class="col-sm-6 px-0 ">
	      <ul>
			<div class="form-group pb-3">
			<div class="col-sm-10">
			 <div class="input-group mb-3 input-group-sm">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Payment Date:</span>
			  </div>
			  <input type="date" class="form-control" name="epaydate" id="ep_date">
			 </div>
			</div>
			</div>
	      </ul>
  	  </div>

	  </div>

	  <div class="row r3 pt-4 mx-0 mb-2 bg-light">
	  <div class="col-sm-12" align="center">
	 	<div class="form-group">

	    <div class="col-sm-10">
	     <div class="input-group input-group-md">
	     <!-- <div class="input-group mb-3 input-group-md" style="border: 1px solid black;border-radius: 5px;"> -->
	     <div class="input-group-prepend">
		    <button class="btn btn-warning px-5" type="submit" name="edt">Edit Data</button>
		 </div>
		 <label class="control-label col-sm-8 align-self-center text-center mb-0" for="dateinp1">
		 	<?php include 'InsertDataTable.php';?>
		 </label>
		 </div> 
	 	</div>

	 	</div>
	  </div>	
	  </div>

    </form>
    

    <div class="container-fluid">

    <div class="row r5 mb-1 bg-light justify-content-center py-4">
     <table  id="piutangTables" class="table table-striped-bordered display">
     	<thead class="bg-success" style="font-size: 15px;">
     	<tr>
     		<th>ID</th>
	     	<th>Customer</th>
	     	<th>No.Invoice</th>
	     	<th>Invoice Date</th>
	     	<th>Amount</th>
	     	<th>Pay Term</th>
	     	<th>Due Date</th>
	     	<th>Pay Date</th>
	     	<th>Paid Amount</th>
	     	<th>Clear</th>
     	</tr>
     	</thead>
     	
     	<tbody style="text-transform: capitalize;font-size: 12px;">
     	 <?php include 'ViewTable.php'?>
     	</tbody>
     </table>
    </div>
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
$(document).ready(function() {
    $('#piutangTables').DataTable();
} );
</script>

</body>
</html>