<?php
   include 'connect.php';
    $StudentId=$_GET['StudentId'];
   $FirstName=$_GET['FirstName'];
       $LastName=$_GET['LastName'];
       $DOB=$_GET['DOB'];
       $Age=$_GET['Age'];
       $Address=$_GET['Address'];
      $Gender=$_GET['Gender'];
       $Email=$_GET['Email'];
       $MobileNumber=$_GET['MobileNumber'];
        $Mark=$_GET['Mark'];
        $TotalMark=$_GET['TotalMark'];
        $Status=$_GET['Status'];
        // $TrainerId=$_GET['TrainerId'];
   $sql="update studentss set FirstName='$FirstName',LastName='$LastName',DOB='$DOB',Age='$Age',Address='$Address',Gender='$Gender',Email='$Email',MobileNumber='$MobileNumber',Mark='$Mark',TotalMark='$TotalMark',Status='$Status' where StudentId='$StudentId'";
    if(mysqli_query($con,$sql)){
    echo "inserted Records Successfully";
    header('Location:studentindex.php');
}else{
    echo "Records Not Inserted" . mysqli_error($con);
}
?>
