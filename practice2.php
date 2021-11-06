<?php

$conn = mysqli_connect('localhost','Aiden','123','test');

if(!$conn){
  echo "Connection error: ". mysqli_connect_error();
}
else{
  echo "workin fine";
}

if(isset($_POST['name']) && isset($_POST['email'])){
$Name = $_POST['name'];
$Email = $_POST['email'];
$sql =  "INSERT INTO users (name,email) VALUES ('$Name','$Email')";
if(!mysqli_query($conn,$sql)){
  echo "Not inserted";
}
else {
  echo "Inserted";
}
}


if(isset($_POST['Degree']) && isset($_POST['University'])&& isset($_POST['HighSchool'])&& isset($_POST['cgpa'])&& isset($_POST['txtPer'])){
$degree = $_POST['Degree'];
$university = $_POST['University'];
$highschool = $_POST['HighSchool'];
$cgpa = $_POST['cgpa'];
$per = $_POST['txtPer'];
$sql =  "INSERT INTO Academics (Degree, University, HighSchool, Cgpa,Percentage) VALUES ('$degree','$university,'$highschool','$cgpa','$per' )";
if(!mysqli_query($conn,$sql)){
  echo "Not inserted". mysqli_error($conn);
}
else {
  echo "Inserted";
}
}
if( isset($_POST['hs']) && isset($_POST['us']) && isset($_POST['cg']) && isset($_POST['per'])){

  $dg=$_POST['deg'];
  $hs=$_POST['hs'];
  $us=$_POST['us'];
  $cg=$_POST['cg'];
  $per=$_POST['per'];
  $sql1="INSERT INTO Academics (degree,HighSchool,University,CGPA,Percentage) VALUES('$dg','$hs','$us','$cg','$per')";
  if(!mysqli_query($conn,$sql1)){
    echo "Not inserted". mysqli_error($conn);
  }
  else {
    echo "Inserted";
  }

}

 ?>
 <form class=""  method="post">


   <input type="text" name="name" value="">
   <input type="text" name="email" value="">
   <input type="submit" name="" value="Add New">

 </form> <hr>



<form class="" action="" method="post">

  <input type="text" name="deg" value="">
  <input type="text" name="hs" value="">
  <input type="text" name="us" value="">
  <input type="number" name="cg" value="">
  <input type="text" name="per" value="">
  <input type="submit" name="" value="Submit">

</form>
