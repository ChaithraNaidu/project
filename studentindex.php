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
       background-image: url('ee.jfif');
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
<body style="background-color:skyblue";>
<a href="logout.php">Logout</a>
<h1><center>Student View</center></h1><br>
<button class='btn btn-dark'><a href='./studentadd_record.php'>Student Add Records</a></button>
    <div class="container">
    <table class ='table table-bordered text-center  bg-light' >
                <thead>
                <tr>
                 <th>StudentId</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Email</th>
                <th>MobileNumber</th>
                <th>Mark</th>
                <th>TotalMark</th>
                <th>Status</th>
                <th>TrainerId</th>
                <th colspan=3>Action</th>
                </tr>
                </thead>  <tbody>
         <?php
           include 'connect.php';
           $sql="SELECT studentss.StudentId,studentss.FirstName,studentss.LastName,studentss.DOB,studentss.Age,studentss.Address,studentss.Gender,studentss.Email,studentss.MobileNumber,studentss.Mark,studentss.TotalMark,studentss.Status, trainer.TrainerId  FROM studentss
           INNER JOIN trainer
            ON studentss.TrainerId = trainer.TrainerId";      
           if($result=mysqli_query($con,$sql)){
              if(mysqli_num_rows($result)){
                while($row=mysqli_fetch_array($result)){
                     $Email=$row['StudentId'];
                     echo "<tr><td>".$row['StudentId']."</td>";
                    echo "<td>".$row['FirstName']."</td>";
                    echo "<td>".$row['LastName']."</td>";
                    echo "<td>".$row['DOB']."</td>";
                    echo "<td>".$row['Age']."</td>";
                    echo "<td>".$row['Address']."</td>";
                    echo "<td>".$row['Gender']."</td>";
                    echo "<td>".$row['Email']."</td>";
                    echo "<td>".$row['MobileNumber']."</td>";
                    echo "<td>".$row['Mark']."</td>";
                    echo "<td>".$row['TotalMark']."</td>";
                    echo "<td>".$row['Status']."</td>";
                    echo "<td>".$row['TrainerId']."</td>";
                    echo "<td><a href='studentview.php?id=".$Email."'><i class='fa fa-eye'  style='font-size:20px;color:green'>eye</i></a></td>";
                    echo "<td><a href='studentupdate.php?id=".$Email."'><i class='fa fa-edit' style='font-size:20px;color:blue' >edit</i></a></td>";
                        echo "<td><a href='student_delete.php?id=".$Email."'><i class='fa fa-trash' style='font-size:20px;color:red' >delete</i></a></td>";
                     }  
                }
                 echo "</tr>";
                    echo"</tbody>";                
              }
                 
           ?></table>
    </div>
</body>
</html>