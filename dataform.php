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
	<link rel="stylesheet" type="text/css" href="../atw/css/jquery.dataTables.css">
  	<script src="../atw/popper.min.js"></script>
	<script src="../atw/js/bootstrap.min.js"></script>
 	<link rel="icon" href="../atw/cmi_icon.ico">

  <?php include 'connect.php'?>
  <?php include 'loginvalidate.php' ?>

<style>
	#Section1{
	  display: flex;
	  overflow-x: auto;
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
	.r5{
	  font: 14px Assistant , sans-serif!important;
	  text-transform: capitalize;
	}
	.r5 thead{
	  font: 14px Assistant , sans-serif!important;
	  font-weight: 600!important;
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
	.modal-title{
	  color: #fff;
	  font: 1.5rem Azoft Sans , sans-serif!important;
	  line-height: 1.5;
	  font-weight: 500!important;
	  letter-spacing: 4px;
	}
	.modal-body{
	  font: 12px Assistant , sans-serif!important;
	}
	.table thead th{
	  vertical-align: middle;
	}
	.rekapcl{
		font: 14px Assistant , sans-serif!important;
		font-weight: 600!important;
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
	<h3 class="text-center" style="font: 2.5vw Azoft Sans,sans-serif;letter-spacing: 16px;line-height: 5em;">DATA FORM</h3>
  	<br>

  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link nl2 active" data-toggle="tab" href="#home">Piutang Dagang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nl2" data-toggle="tab" href="#menu1">Report Penjualan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nl2" data-toggle="tab" href="#menu2">Trial Balance</a>
    </li>
  </ul>

  <div class="tab-content tc">
    <div id="home" class="container tab-pane active"><br>
      <h3 class="pb-2 border-bottom" style="font: 1.8vw Assistant,sans-serif;letter-spacing: 16px;line-height: 1.2em;">
      	FORM-PIUTANG DAGANG
  	  </h3>
	    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	    
	      <div class="row r1 pt-4 mx-0 mb-1 bg-light">
	      	<div class="col-sm-6 px-0">
		      <ul>
				<div class="form-group">

				 <div class="col-sm-10">
				 <div class="input-group mb-3 input-group-sm">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Customer Name:</span>
				  </div>
				  <input type="text" class="form-control" name="user" id="user_n" placeholder="Masukkan Nama">
				 </div>
				 </div>

				</div>
				
				<div class="form-group">
				<div class="col-sm-10">
				 <div class="input-group mb-3 input-group-sm">
				 	<div class="input-group-prepend">
				     <span class="input-group-text">No. Invoice:</span>
				  	</div>

					<input type="text" class="form-control" name="no" id="no_i" placeholder="Masukkan No Invoice">
					
					<div class="input-group-append">
					 <button class="btn btn-success" type="submit" name="srch" data-toggle="tooltip" title="Search">
					 <i class="fas fa-search"></i>
					 </button> 
				    </div>
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
				  <input type="date" class="form-control" name="idate" id="date_i">
				 </div>

				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-10">

				 <div class="input-group mb-3 input-group-sm">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Due Date:</span>
				  </div>
				  <input type="date" class="form-control" name="due" id="d_date">
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
				  <input type="text" class="form-control" name="tax" id="tax_a" placeholder="Masukkan Harga">
				 </div>
				</div>
				</div>

				<div class="form-group">
				<div class="col-sm-10">
				 <div class="input-group mb-3 input-group-sm">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Paid Amount:</span>
				  </div>
				  <input type="text" class="form-control" name="p_am" id="am_p" placeholder="Masukkan Harga">
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
				  <input type="date" class="form-control" name="paydate" id="p_date">
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
			    <button class="btn btn-success px-5" type="submit" name="entr">Enter Data</button>
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
    	<?php include 'piutangdagang.php' ?>  
    </div>

    <div id="menu1" class="container tab-pane fade"><br>
      <h3 class="pb-2 border-bottom" style="font: 1.8vw Assistant,sans-serif;letter-spacing: 16px;line-height: 1.2em;">
      	FORM-REPORT PENJUALAN
  	  </h3>

      <form class="form-horizontal form-user" role="form" data-toggle="validator" class="shake" method="post">
      	<?php include 'formpenjualan.php' ?>
      </form>
      <?php include 'tablerekap.php' ?>

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Form-Trial Balance</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>

</div>

<footer class="container-fluid ftr text-center">
  <hr><a href="https://www.facebook.com/SunleeOfficial"><i class='fab fa-facebook'style='font-size:24px;color:#66a344;padding-right: 10px;'></i></a>
  <a href="https://www.instagram.com/sunlee_official"><i class='fab fa-instagram' style='font-size:26px;color:#66a344;'></i></a><hr>
  <p>© 2019 Artindo Tata Warna . All rights reserved.</p>
</footer>


<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
 
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#piutangTables').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    }
   }, {

   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#piutangTables').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  }); 
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#piutangTables').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });

 });
</script>
            
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>