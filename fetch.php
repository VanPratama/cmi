<?php
include 'connect.php';
$columns = array('Customer', 'No.Invoice', 'Invoice Date', 'Amount', 'Pay Term', 'Due Date', 'Pay Date', 'Paid Amount');

$query = "SELECT * FROM `cmi piutang dagang` ";

// if(isset($_POST["search"]["value"]))
// {
//  $query .= '
//  WHERE Customer LIKE "%'.$_POST["search"]["value"].'%" 
//  OR No.Invoice LIKE "%'.$_POST["search"]["value"].'%" 
//  ';
// }

// if(isset($_POST["order"]))
// {
//  $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
//  ';
// }
// else
// {
//  $query .= 'ORDER BY id DESC ';
// }

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
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="first_name">' . $row["Customer"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["No.Invoice"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["Invoice Date"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["Amount"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["Pay Term"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["Due Date"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["Pay Date"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["Paid Amount"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="last_name">' . $row["Clear"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
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

?>
