<title>Untitled Document</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];



	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "insert into Feedback(JobSeekId,Feedback,FeedbakDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	// execute query
	if(!mysqli_query($con,$sql)){
		echo "Not inserted";
	}
	else{
		echo "Feedback Inserted";
	};
	// Close The Connection
	mysqli_close ($con);


?>
</body>
</html>
