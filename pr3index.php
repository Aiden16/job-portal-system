<?php
$conn = mysqli_connect('localhost','Aiden','123','test');

if(!$conn){
  echo "Connection error: ". mysqli_connect_error();
}
else{
  echo "workin fine";
}

if(isset($_POST['cur']) && isset($_POST['tech']) && isset($_POST['jobid'])){
$cur = $_POST['cur'];
$tech = $_POST['tech'];
$jobid = $_POST['jobid'];

$sql =  "INSERT INTO skill (jobseekid,co_curricular,techical) VALUES ('$jobid','$cur','$tech')";

if(!mysqli_query($conn,$sql)){
  echo "Not inserted". mysqli_error($conn);
}
else {
  echo "Inserted";
}
}
if(isset($_POST['name']) && isset($_POST['gen'])){
$cur = $_POST['name'];
$tech = $_POST['gen'];
$sql =  "INSERT INTO jobseeker (name,gender) VALUES ('$cur','$tech')";

if(!mysqli_query($conn,$sql)){
  echo "Not inserted". mysqli_error($conn);
}
else {
  echo "Inserted";
}
}
// if(isset($_GET['number'])){
// $id = $_GET['number'];
// echo "id".$id;
// }
?>
<form class="" action="show.php" method="post">
  <input type="number" name="number" value="">
  <input type="submit" name="" value="Submit">

  <!-- <div align="left" class="style9 style5"><strong><a
              href="DetailJob.php?JobId=<?php echo $Id; ?>">Detail</a></strong> -->
</form>
