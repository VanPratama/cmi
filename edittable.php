<?php 
include 'connect.php';


/*$enama = Edinp($_POST["euser"]);$enoin=Edinp($_POST["eno"]);$eindate=Edinp($_POST["eidate"]);$epterm = Edinp($_POST["eterm"]);
$eddate=Edinp($_POST["edue"]);$epramoun=Edinp($_POST["etax"]);$epaamoun=Edinp($_POST["ep_am"]);$epydate= Edinp($_POST["epaydate"]);
$total= $paamoun;$idEdit = Edinp($_POST["eid"]);
*/
//ob_start();

// do your logic here
$mydata = isset($_POST['jdata']);
$data = json_decode(stripslashes($mydata),true);
// right before outputting the JSON, clear the buffer.
//ob_end_clean();

//json_encode($mydata);
  // here i would like use foreach:
  /* $i = 0;
  foreach($mydata as $j){
    echo $j = $j[$i]."<br />";
    $i++;
  }*/

$response = array();
     if($mydata){
        $response['reply']="Success";
        //var_dump($mydata);
     }
    else{
        $response['reply']="Failure";
      }
   echo json_encode($response);

  /*$esql = "SELECT ID,Customer,Invoice,DateOfInvoice,Amount,PayTerm,DueDate,PaymentDate,PaidAmount,Clear FROM `cmi piutang dagang` WHERE ID = '$idEdit'";
    $eresult = mysqli_query($conn, $esql);
    $erows = mysqli_num_rows($eresult);


    $query = "UPDATE `cmi piutang dagang` SET Customer='$enama' , Invoice='$enoin', DateOfInvoice='$eindate',Amount='$etax',PayTerm='$eterm',DueDate='$edue',PaymentDate='$epydate',PaidAmount='$ep_am' WHERE id='$id' ";*/

?>