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
       background-image: url('ccc.png');
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

<body style="background-color:bisque";>

<a href="logout.php">log out</a>
<!-- <a href="login1.php"><button type="submit">Log In</button></a> -->
<h1><center>Trainer View</center></h1>
    <div class="container">  
         <?php
         session_start();
           include 'connect.php';
           $sql="select * from trainer";
            echo "<div class='btn'>
             <button class='btn btn-success'><a href='trainingadd_recordes.php'>Training Add Records</a></button>
         </div>";
           if($result=mysqli_query($con,$sql)){
              if(mysqli_num_rows($result)){
                echo "<table class ='table table-bordered text-center  bg-white' >";

                echo "<thead>";
                echo "<tr>";
                echo "<th>TrainerId</th>";
                echo "<th>TrainerName</th>";
                echo "<th>Gender</th>";
                echo "<th>MobileNumber</th>";
                echo "<th>Email</th>";
                echo "<th colspan=3>Action</th>";
                echo "</tr>";
                echo "</thead>";
                while($row=mysqli_fetch_array($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    $Email=$row['Email'];
                    echo "<td>".$row['TrainerId']."</td>";
                    echo "<td>".$row['TrainerName']."</td>";
                    echo "<td>".$row['Gender']."</td>";
                    echo "<td>".$row['MobileNumber']."</td>";
                    echo "<td>".$row['Email']."</td>";
         if($_SESSION['roll']=='A'){
            echo "<td><a href='training_delete.php?id=".$Email."'><i class='fa fa-trash' style='font-size:20px;color:red' >delete</i></a></td>";
        }
                    echo "<td><a href='training_view.php?id=".$Email."'><i class='fa fa-eye'  style='font-size:20px;color:green'>eye</i></a></td>";
                    echo "<td><a href='trainingupdate.php?id=".$Email."'><i class='fa fa-edit' style='font-size:20px;color:blue' >edit</i></a></td>";
                  
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