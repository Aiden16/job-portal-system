<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{
$con = mysqli_connect("localhost","root","","job");

$sql = "select * from admin where UserName='".$UserName."' and Password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
	$_SESSION['$UserName']=$UserName;
header("location:Admin/index.php");
}
mysqli_close($con);
}
else if($UserType=="Freelancer")
{
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from freelancer_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['freelancerId'];
$_SESSION['Name']=$row['freelancerName'];
$_SESSION['$UserName_freelancer']=$UserName;
header("location:Freelancer/Profile.php");
}
mysqli_close($con);
}
else if($UserType=="JobSeeker")
{
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from jobseeker_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
$_SESSION['$UserName_job']=$UserName;
header("location:JobSeeker/index.php");
}
mysqli_close($con);
}
else
{
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from employer_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
$_SESSION['$UserName_emp']=$UserName;
header("location:Employer/index.php");
}
mysqli_close($con);
}
?>

</body>
</html>
