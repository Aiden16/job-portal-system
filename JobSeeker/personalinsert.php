<title>Insertion of personal information</title>
</head>

<body>

<?php

session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
$con = mysqli_connect ("localhost","root","","job");
$id = $_SESSION['ID'];


$Address=$_POST['txtAddress'];

$BirthDate=$_POST['txtBirthDate'];
$Gender=$_POST['cmbGender'];

	$con = mysqli_connect ("localhost","root","","job");

  $sql1="insert into personal_info(jobseekid,address,dob,gender) VALUES ('$id','$Address','$BirthDate','$Gender')";
  var_dump($sql1);
   if(mysqli_query ($con,$sql1)){



   echo '<script type="text/javascript">alert("information inserted Succesfully");window.location=\'index.php\';</script>';
  	 }
