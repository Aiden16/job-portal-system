<title>Insertion of Skills</title>
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
$curr=$_POST['curr'];

$tech=$_POST['tech'];

	$con = mysqli_connect ("localhost","root","","job");

  $sql="insert into skills(co_curricular,technical,jobseekid) VALUES ('$curr','$tech','$id')";
  var_dump($sql);
   if(mysqli_query ($con,$sql)){
   echo '<script type="text/javascript">alert("information inserted Succesfully");window.location=\'index.php\';</script>';
  	 }
