<?php 
  include 'connect.php';

  $FirstName=$_POST['FirstName'];
  $LastName=$_POST['LastName'];
  $DOB=$_POST['DOB']; 
  $Age=$_POST['Age'] ;
  $Address=$_POST['Address'];
  $Gender=$_POST['Gen'];
  $Email=$_POST['Email'];
  $MobileNumber=$_POST['MobileNumber'];
  $Mark=$_POST['Mark'];
  $TotalMark=$_POST['TotalMark'];
  $Status=$_POST['Status'];
  $TrainerId=$_POST['TrainerId'];
  $sqlins="insert into studentss(FirstName,LastName,DOB,Age,Address,Gender,Email,MobileNumber,Mark,TotalMark,Status,TrainerId) 
  values('$FirstName','$LastName','$DOB','$Age','$Address','$Gender','$Email','$MobileNumber','$Mark','$TotalMark','$Status','$TrainerId')";
 
  if(mysqli_query($con,$sqlins)){
    echo "record inserted successfully";
     header('location:studentindex.php');
}else{
    echo "error while insert <br>". mysqli_error($con);
}
?>   