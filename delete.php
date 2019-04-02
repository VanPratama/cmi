<?php
include 'connect.php';
if(isset($_POST["id"]))
{
 $query = "DELETE FROM `cmi piutang dagang` WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($conn, $query))
 {
  echo 'Data Deleted';
 }
}
?>