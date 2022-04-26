<?php
if(!isset($_SESSION))
{
session_start();
}
?>
</head>

<body>
<?php

	$freelancerId=$_GET['freelancerId'];
	$EmpId=$_SESSION['ID'];
	echo $freelancerId;
    echo $EmpId;
	$Status="Apply";
	// $Desc="No Message";

	// Establish Connection with MYSQL
	$con1 = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record

	$sql1 = "select * from freelancer_reg where freelancerId='".$freelancerId."' and hired='".$EmpId."'";
	// execute query
	$result1 = mysqli_query ($con1,$sql1);
    $row = mysqli_fetch_array($result1);
    echo $row['freelancerName'];
	$records1 = mysqli_num_rows($result1);
	// Close The Connection
	mysqli_close ($con1);
	if($records1==0) //if no records found then add..
	{

	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	$sql = "Update freelancer_reg  set hired='".$EmpId."'";
	mysqli_query ($con,$sql);

	// Close The Connection
	mysqli_close ($con);

	echo '<script type="text/javascript">alert("Succesfully Hired");window.location=\'ProjectApplications.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("Already hired!");window.location=\'ProjectApplications.php\';</script>';
}
?>
</body>
</html>
