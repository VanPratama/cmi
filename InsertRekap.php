<?php
include 'connect.php';
$errorMSG = "";

if (empty($_POST["coa"]) || empty($_POST["customer"]) || empty($_POST["barang"])) {
    $errorMSG = '<span style="color:red;"><strong>Error!</strong> COA,Customer,Nama Barang tidak boleh kosong</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["coa"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> COA harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["nospk"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Nomor SPK harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["qty"])){
	$errorMSG .= '<span style="color:red;"><strong> Error!</strong>SPK Quantity harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["hasil"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Hasil harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["selisih"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Selisih harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["nomorinvoice"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Nomor Invoice harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["invqty"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Invoice Quantity harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["pu"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> PU harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["nominal"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Nominal harus angka</span>';
}elseif(!preg_match("/^[0-9]*$/",$_POST["totalbayar"])){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Total Pembayaran harus angka</span>';
}else {
    $coa = $_POST["coa"];
    $customer = $_POST["customer"];
    $barang = $_POST["barang"];
    $spkdate = $_POST["spkdate"];
    $nospk = $_POST["nospk"];
    $qty = $_POST["qty"];
    $hasil = $_POST["hasil"];
    $selisih = $_POST["selisih"];
    $invoicedate = $_POST["invoicedate"];
    $nomorinvoice = $_POST["nomorinvoice"];
    $invqty = $_POST["invqty"];
    $pu = $_POST["pu"];
    $nominal = $_POST["nominal"];
    $tglbayar = $_POST["tglbayar"];
    $totalbayar = $_POST["totalbayar"];
}

if(empty($errorMSG)){
	// $msg = "COA: ".$coa.", Customer: ".$customer.", Barang: ".$barang.", SPK Date:".$spkdate.", No. SPK: ".$nospk.", Quantity: ".$qty.", Hasil: ".$hasil.", Selisih: ".$selisih.", Invoice Date: ".$invoicedate.", No. Invoice: ".$nomorinvoice.", Invoice Quantity: ".$invqty.", PU: ".$pu.", Nominal: ".$nominal.", Tanggal Bayar: ".$tglbayar.", Total Pembayaran: ".$totalbayar;
	$msg = "INSERT INTO 'rekapharga'(coa,customer,namabarang,totalrekap,tglspk,nospk,qtypo,hasil,selisih,tglinv,noinv,qty,pu,nominal,total,tglbayar,paytotal,besar,kecil) VALUES('$coa', '$customer', '$barang', '$spkdate', '$nospk', '$qty', '$hasil', '$selisih', '$invoicedate', '$nomorinvoice', '$invqty', '$pu', '$nominal', '$tglbayar', '$totalbayar')";
	mysqli_query($conn, $msg);
	echo json_encode($msg);
	exit;
}

echo json_encode(['code'=>404, 'msg'=>$errorMSG]);


?>