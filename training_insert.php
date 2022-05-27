<?php 
  include 'connect.php';
  $TrainerName=$_POST['TrainerName'];
  $Gender=$_POST['Gen'];
  $MobileNumber=$_POST['MobileNumber'];
  $Email=$_POST['Email'];  
  $sqlins="insert into trainer(TrainerName,Gender,MobileNumber,Email) values('$TrainerName','$Gender','$MobileNumber','$Email')";
  if(mysqli_query($con,$sqlins)){
    echo "record inserted successfully";
     header('location:training_index.php');
}else{
    echo "error while insert <br>". mysqli_error($con);
}
?>