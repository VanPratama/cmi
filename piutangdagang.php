<div class="row r4 mt-3 mx-0">
  	<div class="col-sm-12 px-0">
  	 <div class="btn-group">
  	 <button class="btn btn-success" type="submit" name="add" data-toggle="modal" data-target="#newModal">
		<i class="far fa-plus-square" data-toggle="tooltip" title="New Document"></i>
	 </button>
	 <button class="btn btn-success" type="submit" name="load" data-toggle="modal" data-target="#myModal">
	 	<i class="fas fa-book-open" data-toggle="tooltip" title="Load Document"></i>
	 </button>
	 <button class="btn btn-success" type="submit" name="expr" data-toggle="tooltip" title="Export">
		<a href="export.php" style="color: #fff;"><i class="fas fa-file-export"></i></a>
	 </button>

  	 </div>
  	</div>
</div>

<div class="row r5 mx-0 mb-1 bg-light px-3 py-4 table-responsive">
 <div id="alert_message"></div>
 <table  id="piutangTables" class="table table-striped table-bordered text-center">
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
     	<th> </th>
 	</tr>
 	</thead>	
 	<tbody id="tb" style="text-transform: capitalize;font-size: 12px;">
 	 <!-- <?php include 'ViewTable.php'?> -->
 	</tbody> 
 </table>
</div>