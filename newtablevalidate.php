<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insdb'])){
$namatbl = Inst($_POST["tablename"]);

	if (!$_POST["tablename"]){
		echo '<span style="color:red;"><strong>Error!</strong>Nama Table Tidak Boleh Kosong</span>';
	}elseif(!preg_match("/^[a-zA-Z0-9]*$/",$namatbl)){
		echo '<span style="color:red;"><strong>Error!</strong>Nama Table Hanya Boleh Huruf Dan Angka</span>';
	}else {
		$newquery = "CREATE TABLE IF NOT EXISTS `$namatbl` (
		 `id` int(11) NOT NULL AUTO_INCREMENT,
		 `Customer` varchar(100) NOT NULL,
		 `Invoice` varchar(50) NOT NULL,
		 `DateOfInvoice` date NOT NULL,
		 `Amount` int(11) NOT NULL,
		 `PayTerm` varchar(10) NOT NULL,
		 `DueDate` date NOT NULL,
		 `PaymentDate` date DEFAULT NULL,
		 `PaidAmount` int(11) NOT NULL,
		 `Total` int(11) NOT NULL,
		 `Clear` varchar(15) NOT NULL,
		 PRIMARY KEY (`id`),
		 KEY `INDEX` (`Customer`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		if (mysqli_query($conn, $newquery)) {
		    echo '<span class="text-success">Table berhasil dibuat!</span>';;
		}
	}



}

function Inst($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>