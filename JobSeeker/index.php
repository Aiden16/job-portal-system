<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
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


                <table width="100%" border="0">
                  <tr>
                    <td><div align="center"><img src="design/Profile.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Edu.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Search.png" alt="" width="64" height="64" /></div></td>
										<td><div align="center"><img src="https://uwaterloo.ca/quest/sites/ca.quest/files/uploads/images/personal_information_tile_13.jpg" alt="" width="64" height="64" /></div></td>
										<td><div align="center"><img src="https://www.mindmattersjo.com/uploads/1/1/7/6/117647938/working-mem_1_orig.png" alt="" width="64" height="64" /></div></td>


                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Profile.php"><strong>Profile</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Education.php"><strong>Education</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="SearchJob.php"><strong>Search JOB</strong></a></div></td>
										<td bgcolor="#A0B9F3"><div align="center"><a href="personalinfo.php"><strong>ADD personal info</strong></a></div></td>
										<td bgcolor="#A0B9F3"><div align="center"><a href="addskill.php"><strong>ADD Skills</strong></a></div></td>


                  </tr>
                  <tr>
                    <td><div align="center"><img src="design/Feedback.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Log.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Feedback.php"><strong>Feedback</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="logout.php"><strong>Logout</strong></a></div></td>
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
