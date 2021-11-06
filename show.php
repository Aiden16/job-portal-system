<?php
$conn = mysqli_connect('localhost','Aiden','123','test');

$id = $_POST['number'];

echo "id".$_POST['number'];

if(!$conn){
  echo "Connection error: ". mysqli_connect_error();
}
else{
  echo "workin fine";
}

// $sql =  "select * from skill";;
// $result = $conn->query($sql);
//
// if ($result->num_rows > 0) {
//   // output data of each row
//   echo "<table> <tr><th>Curr</th><th>Tech</th></tr></table>";
//   while($row = $result->fetch_assoc()) {
//
//      echo nl2br ("<td>".$row["co_curricular"]."</td>". $row["techical"]."\n");
//   }
// } else {
//   echo "0 results";
// }
// // <div align="left" class="style9 style5"><strong><a
// //             href="DetailJob.php?JobId= <?php echo $Id; ?>">Detail</a></strong>
// ?>

<hr>
<?php

$sql =  "select * from skill where jobseekid='" . $id . "'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table> <tr><th>Curr</th><th>Tech</th></tr></table>";
  while($row = $result->fetch_assoc()) {

     echo nl2br ("<td>".$row["co_curricular"]."</td>". $row["techical"]."\n");
  }
} else {
  echo "0 results";
}



 $sql =  "select * from jobseeker where jobseekid='" . $id . "'  ";
 $result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>

<table width="100%" border="1" cellspacing="2" cellpadding="2">
    <tr>
        <td>Id:</td>
        <td><?php echo $row['jobseekid']; ?></td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><?php echo $row['name']; ?></td>
    </tr>

 <!-- if ($result->num_rows > 0) {
   // output data of each row
   // echo "<table> <tr><th>Curr</th><th>Tech</th></tr></table>";
   while($row = $result->fetch_assoc()) {

      echo nl2br ("<td>".$row["name"]."</td>". $row["gender"]."\n");
   }
 } else {
   echo "0 results";
 } -->
