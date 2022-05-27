<?php 
  include 'connect.php';
  //  $CourseId=$_POST['CourseId'];
  $CourseName=$_POST['CourseName'];  
  $StudentId =$_POST['StudentId'];
  $TrainerId=$_POST['TrainerId'];
  $sqlins="insert into student_courses(CourseName,StudentId,TrainerId) values('$CourseName',$StudentId,$TrainerId)";
 
  if(mysqli_query($con,$sqlins)){
    echo "record inserted successfully";
     header('location:studcour_index.php');
}else{
    echo "error while insert <br>". mysqli_error($con);
}
?>