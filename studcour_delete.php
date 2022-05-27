<?php
include 'connect.php';
$Email=$_GET['id'];
$sql="delete from student_courses where Email='$Email'";
if(mysqli_query($con,$sql)){
  echo "Deleted  Records Successfully";
  header('Location:studcour_index.php');
}else{
  echo "Records Not Deleted" . mysqli_errno($con);
}
?>