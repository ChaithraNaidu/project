<?php
include 'connect.php';
$Email=$_GET['id'];
$sql="delete from studentss where Email='$Email'";
if(mysqli_query($con,$sql)){
  echo "Deleted  Records Successfully";
  header('Location:studentindex.php');
}else{
  echo "Records Not Deleted" . mysqli_errno($con);
}
?>