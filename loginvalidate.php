<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sbmt'])){
	$username=inp($_POST['usr']);
	$pass=inp($_POST['pwd']);
	$l_query = "SELECT level,name,password,description,gambar FROM worker WHERE name = '$username' AND password = '$pass'";
	$Lresult = mysqli_query($conn,$l_query);
	$row = mysqli_fetch_assoc($Lresult);
	$rows = mysqli_num_rows($Lresult);

	if (!$rows) 
	{
		//header("location: home.php?error=Invalid Username or Password!");
		echo '<div class="card card-body" style="width:50%"><img class="img-fluid" src="../test/uploads/tomferguso.jpg">
		Username or Password is invalid</div>';
		//echo "  Username or Password is invalid";
	}else{

		if ($rows == 1) {
			session_start();
			$_SESSION['level']=$row['level'];
			$_SESSION['name']=$row['name'];
			$_SESSION['password']=$row['password'];
			$_SESSION['description']=$row['description'];
			$_SESSION['gambar']=$row['gambar'];
		}

		//mysqli_close($conn); 


		//echo "success";
		if($_SESSION['level']=='5'){
			// echo '<img src="../test/uploads/jerry.PNG">';
			// echo "	admin";
			header("location: selectphp.php?superadmin");
		}
		else{
			header("location: selectphp.php");
			// echo '<img src="../test/uploads/gg7f.PNG">';
			// echo "	success";
		}
	}
}

function inp($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>