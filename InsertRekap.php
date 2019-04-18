<?php
include 'connect.php';
$errorMSG = "";

$check = "SELECT * FROM `rekapharga` WHERE coa = '".$_POST["coa"]."' AND customer = '".$_POST["customer"]."' AND namabarang = '".$_POST["barang"]."' AND tglspk = '".$_POST["spkdate"]."' AND nospk = '".$_POST["nospk"]."' AND qtypo = '".$_POST["qty"]."' AND hasil = '".$_POST["hasil"]."' AND selisih = '".$_POST["selisih"]."' AND tglinv = '".$_POST["invoicedate"]."' AND noinv = '".$_POST["nomorinvoice"]."' AND qty = '".$_POST["invqty"]."' AND pu = '".$_POST["pu"]."' AND nominal = '".$_POST["nominal"]."' AND tglbayar = '".$_POST["tglbayar"]."' AND paytotal = '".$_POST["totalbayar"]."' AND besar = '".$_POST["mesinbesar"]."' AND kecil = '".$_POST["mesinkecil"]."' ";
$duplikat = mysqli_query($conn, $check);

if (empty($_POST["coa"]) || empty($_POST["customer"]) || empty($_POST["barang"])) {
    $errorMSG = '<span style="color:red;"><strong>Error!</strong> COA,Customer,Nama Barang tidak boleh kosong</span>';
}elseif(!preg_match("/^[0-9.]*$/",$_POST["coa"])){
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
}elseif(mysqli_num_rows($duplikat)>0){
	$errorMSG .= '<span style="color:red;"><strong>Error!</strong> Duplikat Data</span>';
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
    $mesinbesar = $_POST["mesinbesar"];
    $mesinkecil = $_POST["mesinkecil"];
}

if(empty($errorMSG)){
include 'connect.php';
	$msg = "INSERT INTO `rekapharga`(coa,customer,namabarang,tglspk,nospk,qtypo,hasil,selisih,tglinv,noinv,qty,pu,nominal,tglbayar,paytotal,besar,kecil) VALUES('$coa', '$customer', '$barang', '$spkdate', '$nospk', '$qty', '$hasil', '$selisih', '$invoicedate', '$nomorinvoice', '$invqty', '$pu', '$nominal', '$tglbayar', '$totalbayar', '$mesinbesar', '$mesinkecil')";

	$idupd = "UPDATE `rekapharga` SET idspk = id, idinv = id, idbayar = id, idmesin = id, shiftid = id";


	mysqli_query($conn, $msg);
	mysqli_query($conn, $idupd);
	echo json_encode(['code'=>200, 'msg'=>$msg]);
	exit;
}

echo json_encode(['code'=>404, 'msg'=>$errorMSG]);


?>