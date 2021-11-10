<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
// $txtId = $_POST['txtId'];
// $txtName=$_POST['txtName'];
// $txtContact=$_POST['txtContact'];
// $txtAddress = $_POST['txtAddress'];
// $txtCity=$_POST['txtCity'];
// $txtEmail=$_POST['txtEmail'];
// $txtMobile = $_POST['txtMobile'];
// $txtArea=$_POST['txtArea'];
$txtId=$_GET['txtId'];
$txtUser=$_GET['txtUser'];
$txtPassword=$_GET['txtPassword'];
echo "Study " . $txtUser. " at " . $txtPassword;
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
// // Execute query
// $result = mysqli_query($con,$sql);
// // Loop through each records
// $row = mysqli_fetch_array($result);

// echo $row['EmployerId'];
// Select Database

// Specify the query to Update Record

$sql = "Update employer_reg  set UserName='".$txtUser."',Password='".$txtPassword."' where EmployerId=".$txtId."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">window.location=\'http://127.0.0.1/\';</script>';
?>
</body>
</html>
