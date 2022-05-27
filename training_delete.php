<?php
include 'connect.php';
$Email=$_GET['id'];
echo $Email;
$sql="delete from trainer where Email='$Email'";
if(mysqli_query($con,$sql)){
  echo "Deleted  Records Successfully";
  header('Location:training_index.php');
}else{
  echo "Records Not Deleted" . mysqli_errno($con);
}
?>