<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students-Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../schai/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <style>
        body {
       background-image: url('yy.jfif');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       /* height: 50%; */
       /* width:100%; */
/* Center and scale the image nicely */
background-position: center;
        }

    </style>

</head>
<body style="background-color:green";>
<a href="logout.php">Log out</a>
<h1><center>Student Course View</center></h1>
    <div class="container">  
         <?php
           include 'connect.php';
           $sql="select * from student_courses";
            echo "<div class='btn'>
             <button class='btn btn-info'><a href='./studcour_addrecord.php'>student_course Add Records</a></button>
         </div>";
                echo "<table class ='table table-bordered text-center  bg-light' >";
                echo "<thead>";
                echo "<tr>";
                echo "<th>CourseId</th>";
                echo "<th>CourseName</th>";
                echo "<th>studentId</th>";
                echo "<th>TrainerId</th>";
                echo "<th colspan=3>Action</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
           if($result=mysqli_query($con,$sql)){
              if(mysqli_num_rows($result)){
                while($row=mysqli_fetch_array($result)){  
                    echo "<tr>";
                    $Email=$row['CourseId'];    
                    echo "<td>".$row['CourseId']."</td>";
                    echo "<td>".$row['CourseName']."</td>";
                    echo "<td>".$row['studentId']."</td>";
                    echo "<td>".$row['TrainerId']."</td>";
                    echo "<td><a href='studcour_view.php?id=".$Email."'><i class='fa fa-eye'  style='font-size:20px;color:green'>eye</i></a></td>";
                    echo "<td><a href='studcourupdate.php?id=".$Email."'><i class='fa fa-edit' style='font-size:20px;color:blue' >edit</i></a></td>";
                    echo "<td><a href='studcour_delete.php?id=".$Email."'><i class='fa fa-trash' style='font-size:20px;color:red' >delete</i></a></td>";
                     }  
                }
                 echo "</tr>";
                    echo"</tbody>";                
              }
           echo "</table>";      
           ?>
    </div>
</body>
</html>