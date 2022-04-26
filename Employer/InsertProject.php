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
	$txtSkills=$_POST['txtSkills'];
	$txtPay=$_POST['txtPay'];
	$txtDesc=$_POST['txtDesc'];
	$EmpID=$_SESSION['ID'];
    $Status = "Pending";
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "insert into project_master (ProjectTitle,SkillsReq,PayRange,Description,EmpID,Status) values('".$txtTitle."','".$txtSkills."','".$txtPay."','".$txtDesc."', '".$EmpID."','".$Status."')";
	// execute query
    
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
    // echo $txtTitle;
    // echo $EmpID;
    echo $txtDesc;
	echo '<script type="text/javascript">alert("Project Inserted Succesfully");window.location=\'ManageProjects.php\';</script>';

?>
</body>
</html>
