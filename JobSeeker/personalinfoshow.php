<?php
$id = $_GET['id'];
echo "id".$id;

// personalinfoshow.php
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
<?php
 // $ID=$_SESSION['ID'];
 // Establish Connection with Database
 $con = mysqli_connect("localhost","root","","job");
 // Specify the query to execute
 $sql = "select * from personal_info where JobSeekId='".$id."'  ";

 // Execute query for jobseeker
 $result = mysqli_query($con,$sql);
 // Loop through each records for jobseekr
 $row = mysqli_fetch_array($result)
 ?>


 <table width="100%" border="1" cellspacing="2" cellpadding="2">
   <tr>
     <td><strong>Address:<?php echo "id".$id;?></strong></td>
     <td><?php echo $row['address'];?></td>
   </tr>
   <tr>
     <td><strong>Gender:</strong></td>
     <td><?php echo $row['gender'];?></td>
   </tr>
   <tr>
     <td><strong>Date of birth:</strong></td>
     <td><?php echo $row['dob'];?></td>
   </tr>

   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
 </table>
