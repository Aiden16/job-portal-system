<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$Name=$_POST['txtName'];
	$Qualification=$_POST['txtQualification'];
	$Skills=$_POST['txtSkills'];
	$Contact=$_POST['txtMobile'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserType="Freelancer";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

$sql="insert into freelancer_reg(freelancerName,Qualification,Skills,Contact,Resume,Status,UserName,Password) VALUES (
'$Name','$Qualification','$Skills','$Contact','$path1','$Status','$UserName','$Password'

)";
	// execute query

var_dump($sql);
	if(mysqli_query ($con,$sql)){
        echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
    }
mysqli_close ($con);
	// Close The Connection
?>
</body>
</html>
