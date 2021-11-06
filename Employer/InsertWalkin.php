<?php
if (!isset($_SESSION))
{
  session_start();

}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$txtTitle=$_POST['txtTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	$txtDate=$_POST['txtDate'];
	$txtTime=$_POST['txtTime'];
  $interviewType=$_POST['interviewType'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "insert into interview (CompanyName,JobTitle,Vacancy,MinQualification,Description,InterviewDate,InterviewTime,int_id_type) values('".$Name."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."','".$txtDate."','".$txtTime."','".$interviewType."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Walkin Inserted Succesfully");window.location=\'ManageWalkin.php\';</script>';

?>
</body>
</html>
