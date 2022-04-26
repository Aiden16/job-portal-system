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
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {font-weight: bold}
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
$con = mysqli_connect ("localhost","root","","job");
$id = $_SESSION['ID'];
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
                <h2><span><a href="#">Add Skills<?php echo "id".$id;?></a></span></h2>


              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Add skills</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" action='insertSkill.php' method="post" >
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>Add Co-Curriculars:</td>
                        <td><span id="sprytextarea1">
                          <label>
                          <textarea name="curr" id="txtAddress" cols="45" rows="5"></textarea>
                          </label>

                      </tr>
                      <tr>
                        <td>Add Techincal Skills:</td>
                        <td><span id="sprytextarea1">
                          <label>
                          <textarea name="tech" id="txtAddress" cols="45" rows="5"></textarea>
                          </label>

                      </tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit"  id="button" value="Submit" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
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

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
