<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['EmpId'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");
// Select Database

// Specify the query to Update Record
$sql = "Update Employer_Reg set Status='Confirm' where EmployerId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Employer Request Confirmed");window.location=\'ManageEmployer.php\';</script>';
?>
</body>
</html>
