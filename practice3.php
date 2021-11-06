<?php
$conn = mysqli_connect('localhost','Aiden','123','test');

if(!$conn){
  echo "Connection error: ". mysqli_connect_error();
}
else{
  echo "workin fine";
}


// mysqli_query($conn,"CREATE TABLE people(
//   firstname varchar(20),
//   gender varchar(6),
//   age int
// )");
mysqli_query($conn,"CREATE TABLE jobseeker(
  jobseekid int(11) not null AUTO_INCREMENT PRIMARY KEY,
  name varchar(20),
  gender varchar(10)
)");

mysqli_query($conn,"CREATE TABLE skill(
  skillid int(10) not null AUTO_INCREMENT PRIMARY KEY,
  jobseekid int(11) not null,
  co_curricular varchar(30),
  techical varchar(20),
  foreign key(jobseekid) references jobseeker(jobseekid)

)");
echo "Databse cretaed";



?>

<form class="" action="pr3index.php" method="post">
  <input type="number" name="jobid" value="">
  <input type="text" name="cur" value="">
  <input type="text" name="tech" value="">

<hr>
<p>Loolllll</p>
<form class="" action="p3index.php" method="post">
  <input type="text" name="name" value="">
  <input type="text" name="gen" value="">
  <input type="submit" name="" value="submit2">

</form>
