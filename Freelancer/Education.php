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

if( isset($_POST['hs']) && isset($_POST['us']) && isset($_POST['cg']) && isset($_POST['per'])){

  $dg=$_POST['deg'];
  $hs=$_POST['hs'];
  $us=$_POST['us'];
  $cg=$_POST['cg'];
  $per=$_POST['per'];
  $sql1="INSERT INTO Academics (JobSeekId,degree,HighSchool,University,CGPA,Percentage) VALUES('$id','$dg','$hs','$us','$cg','$per')";
  if(!mysqli_query($con,$sql1)){
    echo "Not inserted". mysqli_error($con);
  }
  else {
    echo "Inserted";
  }

}

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
                <h2><span><a href="#">Academics Qualification<?php echo "id".$id;?></a></span></h2>


              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Create Academics Profile</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" >
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Degree:</strong></td>
                          <td>
                          <input type="text" name="deg" id="cmbQual">

                          </td>
                        </tr>
                        <tr>
                          <td><strong>HighSchool Name:</strong></td>
                          <td><label>
                            <input type="text" name="hs" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>University/Board Name:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="us" id="txtBoard" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>CGPA:</strong></td>
                          <td><label>
                            <input type='number' name='cg' id='cmbYear'>
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>HighSchool %</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="per" id="txtPer" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
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
