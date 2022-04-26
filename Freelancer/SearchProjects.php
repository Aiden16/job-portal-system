<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

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
-->
    </style>
</head>

<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						  ["minlen=1",
		"Please Enter Name "
						  ]

                     ],
                   [//Address
						   ["minlen=1",
		"Please Enter Address "
						  ]

                   ],
                   [//Country




                   ],
				   [//State


                   ],
				   [//City


                   ],
				   [//Mobile

						  ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ]



                   ],
				   [//Email
						   ["minlen=1",
		"Please Enter Email "
						  ],
						  ["email",
		"Please Enter valid email "
						  ]

                   ],
				   [//ID


                   ],
				   [//TDType

						  ["minlen=1",
		"Please Select File "
						  ]

                   ],
				   [//UserName

					 ["minlen=1",
		"Please Enter UserName "
						  ]
                   ],
				   [//Password

						 ["minlen=1",
		"Please Enter Password "
						  ]

                   ],
				   [//Confirm

						   ["minlen=1",
		"Please Enter Confirm Password "
						  ]

                   ]
            ];
</SCRIPT>
<!-- Main -->
<div id="main" class="box">

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
                <h2><span><a href="#">Projects</a></span></h2>


                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
 <tr>
                    <td bgcolor="#A0B9F3"><strong>Posted Projects</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Project Title</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Required Skills</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Pay Range</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>

                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Details</div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "select * from project_master";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
while($row = mysqli_fetch_array($result))
{
$Id=$row['ProjectId'];
$ProjectTitle=$row['ProjectTitle'];
$SkillsReq=$row['SkillsReq'];
$PayRange=$row['PayRange'];
$Description=$row['Description'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ProjectTitle;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $SkillsReq;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $PayRange;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>


                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="DetailsProject.php?ProjectId=<?php echo $Id;?>">Details</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <tr>
                        <td colspan="8" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
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


<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>
</body>
</html>
</table>
    </td>
  </tr>
</table>
                </p>

                <div align="center"><a href="FreelancerReg.php"><strong>New Freelancer? Register Here</strong></a>                  </div>
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
