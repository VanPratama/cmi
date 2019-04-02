<div class="row r5 mx-0 mb-1 bg-light justify-content-center py-4">
     <div id="alert_message"></div>
     <table  id="piutangTables" class="table table-striped table-bordered">
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

<?php
include 'connect.php';
$sql = "SELECT * FROM `cmi piutang dagang`";
$result = mysqli_query($conn, $sql);


 if (mysqli_num_rows($result) > 0) {
 	$r=0;
	while($row = mysqli_fetch_assoc($result)) {
		$r++;

		echo '<tr class="text-center">';
		echo '<td class="px-0">'.$row["id"].'</td>';
		echo '<td class="r_data" name="cust" id="'.$row["id"].'">'.$row["Customer"].'</td>';
		echo '<td class="r_data" name="inv" id="'.$row["id"].'">'.$row["Invoice"].'</td>';
		echo '<td class="r_data" name="doi" id="'.$row["id"].'">'.$row["DateOfInvoice"].'</td>';
		echo '<td class="r_data" name="am" id="'.$row["id"].'">'.$row["Amount"].'</td>';
		echo '<td class="r_data" name="pt" id="'.$row["id"].'">'.$row["PayTerm"].'</td>';
		echo '<td class="r_data" name="dd" id="'.$row["id"].'">'.$row["DueDate"].'</td>';
		echo '<td class="r_data" name="pd" id="'.$row["id"].'">'.$row["PaymentDate"].'</td>';
		echo '<td class="r_data" name="pa" id="'.$row["id"].'">'.$row["PaidAmount"].'</td>';
		echo '<td class="r_data" id="'.$row["id"].'">'.$row["Clear"].'</td>';
		echo "</tr>";
	}
 }

?>


	</table>
</div>
</div>