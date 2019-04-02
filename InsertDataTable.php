<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['entr'])){

	$nama = Insinp($_POST["user"]);$noin=Insinp($_POST["no"]);$indate=Insinp($_POST["idate"]);$pterm = Insinp($_POST["term"]);
	$ddate=Insinp($_POST["due"]);$pramoun=Insinp($_POST["tax"]);$paamoun=Insinp($_POST["p_am"]);$pydate= Insinp($_POST["paydate"]);
	$total= $paamoun;

	$sql = "SELECT id,Customer,Invoice,DateOfInvoice,Amount,PayTerm,DueDate,PaymentDate,PaidAmount,Clear FROM `cmi piutang dagang`";
	$result = mysqli_query($conn, $sql);

	if (!$_POST["user"] || !$_POST["no"] || !$_POST["idate"] || $_POST["term"] === "-" || !$_POST["due"] || !$_POST["tax"]){
		echo '<span style="color:red;"><strong>Error!</strong>
		Customer,No.Invoice,Payment Terms,Invoice Date,Due Date & Price Amount Tidak Boleh Kosong
		</span>';
	}elseif(!preg_match("/^[0-9]*$/",$pramoun)){
		echo '<span style="color:red;"><strong>Error!</strong>No.Invoice,Price Amount & Paid Amount Harus Angka</span>';
	}elseif(!preg_match("/^[0-9]*$/",$paamoun)){
		echo '<span style="color:red;"><strong>Error!</strong>No.Invoice,Price Amount & Paid Amount Harus Angka</span>';
	}elseif($r = mysqli_num_rows($result)!=0){
		echo '<span style="color:red;"><strong>Error!</strong>No.Invoice sudah terdaftar</span>';
	}else {
		echo 'Data Berhasil Dimasukkan!';
		// $Tsql="INSERT INTO `cmi piutang dagang`(Customer,Invoice,DateOfInvoice,Amount,PayTerm,DueDate,PaymentDate,PaidAmount,Total) VALUES('$nama','$noin','$indate','$pramoun','$pterm','$ddate','$pydate','$paamoun','$total')";
		// mysqli_query($conn, $Tsql);
		if($_POST["tax"] != $_POST["p_am"]){
			$C2sql ="INSERT INTO `cmi piutang dagang`(Customer,Invoice,DateOfInvoice,Amount,PayTerm,DueDate,Clear) VALUES('$nama','$noin','$indate','$pramoun','$pterm','$ddate','belum lunas')";
			mysqli_query($conn, $C2sql);
		}else{
			$C1sql ="INSERT INTO `cmi piutang dagang`(Customer,Invoice,DateOfInvoice,Amount,PayTerm,DueDate,PaymentDate,PaidAmount,Total,Clear) VALUES('$nama','$noin','$indate','$pramoun','$pterm','$ddate','$pydate','$paamoun','$total','lunas')";
			mysqli_query($conn, $C1sql);
		}
	}

}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idedt'])){
	$idEdit = Insinp($_POST["eid"]);
	$esql = "SELECT id,Customer,Invoice,DateOfInvoice,Amount,PayTerm,DueDate,PaymentDate,PaidAmount,Clear FROM `cmi piutang dagang` WHERE ID = '$idEdit'";
    $eresult = mysqli_query($conn, $esql);
    $erows = mysqli_num_rows($eresult);

	if(!$erows) {
		echo '<span style="color:red;"><strong>Error!</strong>ID Tidak Valid</span>';
	}else{
		session_start();
		$_SESSION['id']=$erows["ID"];
		echo("<script>location.href = 'EditDataForm.php?$idEdit';</script>");
	}
}

function Insinp($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>