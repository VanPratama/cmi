<?php

include 'connect.php';
if(isset($_POST["id"]))
{
$columns = array('id','Customer', 'Invoice', 'DateOfInvoice', 'Amount', 'PayTerm', 'DueDate', 'PaymentDate', 'PaidAmount', 'Clear');
// $bulanv = (int)isset($_POST["blndta"]);
// $tahunv = (int)isset($_POST["thndta"]);
$bulanv = mysqli_real_escape_string($conn, $_POST["blndta"]);
$tahunv = mysqli_real_escape_string($conn, $_POST["thndta"]);

$query = "SELECT id,Customer,Invoice,DateOfInvoice,Amount,PayTerm,DueDate,PaymentDate,PaidAmount,Clear FROM `cmi piutang dagang` WHERE Month = $bulanv AND Year = $tahunv ";

die($query);

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE id LIKE "%'.$_POST["search"]["value"].'%"
 OR Customer LIKE "%'.$_POST["search"]["value"].'%" 
 OR Invoice LIKE "%'.$_POST["search"]["value"].'%"
 OR DateOfInvoice LIKE "%'.$_POST["search"]["value"].'%"
 OR Amount LIKE "%'.$_POST["search"]["value"].'%"
 OR PayTerm LIKE "%'.$_POST["search"]["value"].'%"
 OR DueDate LIKE "%'.$_POST["search"]["value"].'%"
 OR PaymentDate LIKE "%'.$_POST["search"]["value"].'%"
 OR PaidAmount LIKE "%'.$_POST["search"]["value"].'%" 
 OR Clear LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id ASC '; //DESC
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="customer">' . $row["id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="customer">' . $row["Customer"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="noinvoice">' . $row["Invoice"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="invoicedate">' . $row["DateOfInvoice"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="amount">' . $row["Amount"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="payterm">' . $row["PayTerm"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="duedate">' . $row["DueDate"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="paydate">' . $row["PaymentDate"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="paidamount">' . $row["PaidAmount"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="clear">' . $row["Clear"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'"><i class="far fa-trash-alt"></i></button>';
 $data[] = $sub_array;
}

function get_all_data($conn)
{
 $query = "SELECT * FROM `cmi piutang dagang`";
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);
}
?>