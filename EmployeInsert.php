<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$CompnayName=$_POST['txtName'];
	$ContactPerson=$_POST['txtPerson'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Area=$_POST['txtAreaWork'];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserType="Employer";

	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "insert into Employer_Reg(CompanyName,ContactPerson,Address,City,Email,Mobile,Area_Work,Status,UserName,Password) values('".$CompnayName."','".$ContactPerson."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Area."','".$Status."','".$UserName."','".$Password."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);

	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';

?>
</body>
</html>
