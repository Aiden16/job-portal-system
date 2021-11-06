<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['WalkinId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "delete from interview where int_id='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Walkin Deleted Succesfully");window.location=\'ManageWalkin.php\';</script>';

?>
</body>
</html>
