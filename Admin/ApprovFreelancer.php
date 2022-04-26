<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['FreelancerId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to Update Record
$sql = "Update freelancer_reg set Status='Confirm' where freelancerId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Freelancer Request Confirmed");window.location=\'ManageFreelancer.php\';</script>';
?>
</body>
</html>
