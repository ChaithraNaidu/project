<?php
   include 'connect.php';
    $CourseId=$_GET['CourseId'];
   $CourseName=$_GET['CourseName'];
       $studentId=$_GET['studentId'];
       $TrainerId=$_GET['TrainerId'];
       $sql="update student_courses set CourseName='$CourseName',studentId='$studentId',TrainerId='$TrainerId' where CourseId='$CourseId'";
         
    if(mysqli_query($con,$sql)){
    echo "inserted Records Successfully";
    header('Location:studcour_index.php');
}else{
    echo "Records Not Inserted" . mysqli_error($con);
}
?>
