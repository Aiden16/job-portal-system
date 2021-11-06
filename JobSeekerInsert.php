<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Address=$_POST['txtAddress'];

$BirthDate=$_POST['txtBirthDate'];
$Gender=$_POST['cmbGender'];
	$Name=$_POST['txtName'];
	$Qualification=$_POST['txtQualification'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserType="JobSeeker";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

$sql="insert into jobSeeker_reg(JobSeekerName,Qualification,Resume,Status,UserName,Password) VALUES (
'$Name','$Qualification','$path1','$Status','$UserName','$Password'

)";
	// execute query

var_dump($sql);
	if(mysqli_query ($con,$sql)){
        echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
    }
$sql1="insert into personal_info(address,dob,gender) VALUES ('$Address','$BirthDate','$Gender')";
var_dump($sql1);
 if(mysqli_query ($con,$sql1)){
 echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
	 }
mysqli_close ($con);
	// Close The Connection
?>
</body>
</html>
