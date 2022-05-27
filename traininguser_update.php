<?php
   include 'connect.php';
 $TrainerId=$_GET['TrainerId'];

   $TrainerName=$_GET['TrainerName'];
       $Gender=$_GET['Gen'];
       $MobileNumber=$_GET['MobileNumber'];
       $Email=$_GET['Email'];
   $sql="update trainer set TrainerName='$TrainerName',Gender='$Gender',MobileNumber='$MobileNumber',Email='$Email' where TrainerId='$TrainerId'";
    
    if(mysqli_query($con,$sql)){
    echo "inserted Records Successfully";
    header('Location:training_index.php');
}else{
    echo "Records Not Inserted" . mysqli_error($con);
}
?>
