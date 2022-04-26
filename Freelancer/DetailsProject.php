<?php
session_start();
if(isset($_SESSION['$UserName_freelancer'])){
}
	else{
		header('location:../index.php');
	}
?>
<?php $con=mysqli_connect("localhost","root","","job");

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// $sql = "select * from jobseeker_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$ID = $_GET['ProjectId'];
// Specify the query to execute
$sql = "select * from project_master where ProjectId='".$ID."'";
// Execute query
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row['ProjectTitle'];
?>   
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
.style2 {font-weight: bold}
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
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100%">&nbsp;
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                          <td><strong>ProjectID</strong></td>
                          <td><strong><?php echo $row['ProjectId']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Project Title</strong></td>
                          <td><strong><?php echo $row['ProjectTitle']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Skills Required</strong></td>
                          <td><strong><?php echo $row['SkillsReq']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Pay</strong></td>
                           <td><strong><?php echo $row['PayRange']; ?></strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td><strong><?php echo $row['Description']; ?></strong></td>
                        </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="Apply.php?ProjectId=<?php echo $row['ProjectId'];?>"><strong>Apply For Project</strong></a></td>
                           </tr>
                        </table></td>
                  </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Status of Project</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Project Title</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Skills Required</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Status</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Description</strong></div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

$ID = $_SESSION['ID'];
// Specify the query to execute
$sql = "select * from project_master where FreelancerID ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
while($row = mysqli_fetch_array($result))
{
$SkillsReq=$row['SkillsReq'];
$ProjectTitle=$row['ProjectTitle'];
$Status=$row['Status'];
$Description=$row['Description'];
?>
                      <tr>
                      <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ProjectTitle;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $SkillsReq;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>
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


</div> <!-- /main -->

</body>
</html>