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
                <h2><span><a href="#">Status</a></span></h2>


                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Hired by</strong></div></th>

</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
//mysqli_select_db("job", $con);
// Specify the query to execute
$sql = "select * from freelancer_reg where Status='Confirm'";
// Execute query



$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$empId = $row['hired'];

//var_dump($result);

// Loop through each records
$sql1 = "select * from employer_reg where EmployerId='".$empId."'";
$result1 = mysqli_query($con,$sql1);
// $row1 = mysqli_fetch_array($result1);
// echo $row1['Email'];
while($row = mysqli_fetch_array($result1))
{
$ContactPerson=$row['ContactPerson'];
$CompanyName=$row['CompanyName'];



?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong>Hired by: - <?php echo $ContactPerson;?> from <?php echo $CompanyName;?> </strong></div></td>


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
