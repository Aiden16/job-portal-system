<?php
if(!isset($_SESSION))
{
session_start();
}
?>
</head>

<body>
<?php

	$ProjecId=$_GET['ProjectId'];
	$freelancerId=$_SESSION['ID'];
		
	$Status="Apply";
	// $Desc="No Message";

	// Establish Connection with MYSQL
	$con1 = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql1 = "select * from project_master where freelancerId='".$freelancerId."' and ProjectId='".$ProjecId."'";
	// execute query
	$result1 = mysqli_query ($con1,$sql1);
	$records1 = mysqli_num_rows($result1);
	// Close The Connection
	mysqli_close ($con1);
	if($records1==0) //if no records found then add..
	{

	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	$sql = "Update project_master  set FreelancerID='".$freelancerId."',Status='".$Status."' where ProjectId='".$ProjecId."'";
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);

	echo '<script type="text/javascript">alert("Succesfully Applied For Project");window.location=\'SearchProjects.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("You have already Applied For the Project");window.location=\'SearchProjects.php\';</script>';
}
?>
</body>
</html>
