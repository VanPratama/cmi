<?php 
if($_SESSION['level']=='3'){
	
	$l_query = "SELECT Customer,Invoice,DateOfInvoice,DueDate,PaymentDate FROM `cmi piutang dagang` WHERE Clear = 'belum lunas'";
	$Lresult = mysqli_query($conn,$l_query);
	//$row = mysqli_fetch_assoc($Lresult);
	//$rows = mysqli_num_rows($Lresult);
	$tdydate = date("Y-m-d");

	if ($rows = mysqli_num_rows($Lresult)!=0){
		date_default_timezone_set("Asia/Jakarta"); 
		// if($tdydate<$row["DueDate"]){
		// 	echo "No Due Date";
		// }
		while($row = mysqli_fetch_assoc($Lresult)){

			if($tdydate==$row["DueDate"]){
				echo "<p class='border-bottom' style='width: 100%'>".$row["Invoice"]."-".$row["Customer"]."</p>";
			}else if($tdydate>$row["DueDate"]){
				$date1 = new DateTime($row["DueDate"]);
				$date2 = new DateTime('now');
				$interval = $date1->diff($date2);

				echo "<p class='border-bottom text-center mx-3' style='width: 90%'>".$row["Invoice"]."-".$row["Customer"].
				" <span class='badge badge-danger'>".$interval->days."</span></p>";
			}
		}
	
	}

}
?>