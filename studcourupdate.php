<?php
include 'connect.php';
$Email=$_GET['id'];
$sql="select * from student_courses where CourseId='$Email'";
if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
        $CourseId=$row['CourseId'];
        $CourseName=$row['CourseName'];  
        $studentId =$row['studentId'];
        $TrainerId=$row['TrainerId'];
        
      }else{
        echo "no data in database";
    }
}else{
    echo "error in update data". mysqli_error($con);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../schai/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>SCD</title>
    <style>
        .container{
            border: 2px solid black;
            width: 500px; 
            padding: 10px;
            margin-top: 100px;
            background-color:pink;
        }
        .form-group1 label{
            margin-left: 200px;
            margin-top: -50px;
        }
        .form-group1 input{
            margin-left: 200px;
        }
        .l label{
            margin-top: -10px;
        }
    </style>
</head>
<body style="background-color:bisque";>          
<form action="./studcouruser_update.php" method="get">
                
    <div class="container">
                 <div class="col-md-6">
                       <div class="form-group">
                           <h1><i><center>Student_course_Update</center></i></h1><br>
                            <label>CourseName</label><br>
                            <input type="text" name="CourseName" size="50" value=<?php echo $CourseName; ?>>
                            </div>
                     </div><br><br>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>studentId</label><br>
                            <input type="text" name="studentId" size="50" value=<?php echo $studentId; ?>>
    </div>
                 </div><br><br>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>TrainerId</label><br>
                            <input type="num" name="TrainerId" size="50" value=<?php echo $TrainerId; ?> > 
                        </div>
    </div><br><br>
                   
                   <div class="button">
                       <button class="btn btn-primary" style="background:black";>Submit</button>
                   </div>
         </div>
    </div>
</body>
</html>