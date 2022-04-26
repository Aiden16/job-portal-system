<?php
session_start();
if(isset($_SESSION['$UserName_emp'])){

}
else{
		header('location:../index.php');
}
?>

<?php $con=mysqli_connect("localhost","root","","job") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php
include "Header.php"
?>
<?php
include "menu.php"
?>
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />

        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">


            <!-- /article -->

            <hr class="noscreen" />


            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->

            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>

                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                     <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>View & Send</strong></div></th>
                  </tr>
                  <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$Status = "Apply";
$EmpID = $_SESSION["ID"];
$sql = "Select * from project_master where Status='".$Status."' and EmpID='".$EmpID."' ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
while($row = mysqli_fetch_array($result))
{
$Id=$row['ProjectId'];
$FreelancerId=$row['FreelancerID'];
$Status=$row['Status'];
$ProjectTitle=$row['ProjectTitle'];
echo $FreelancerId;

?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ProjectTitle;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                     <td class="style3"><div align="left" class="style9 style5"><strong></strong><a href="ViewBiodataFreelacer.php?FreelancerId=<?php echo $FreelancerId; ?>">View</a></div></td>
                  </tr>
                  <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                </table>
              <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />

        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->


<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>

