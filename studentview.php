<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../STUDENT/bootstrap/css/bootstrap.min.css">
    <title>TD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
         <div class="btn">
             <button class="btn btn-dark"><a href="./studentindex.php">Go Back</a></button>
         </div>    
         <?php  
           include 'connect.php';
           $Email=$_GET['id'];
           $sql="select * from studentss where StudentId='$Email'";
           if($result=mysqli_query($con,$sql)){
              if(mysqli_num_rows($result)){
                echo" <table class='table table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>StudentId</th>";
                echo "<th>FirstName</th>";
                echo "<th>LastName</th>";
                echo "<th>DOB</th>";
                echo "<th>Age</th>";
                echo "<th>Address</th>";
                echo "<th>Gender</th>";
                echo "<th>Email</th>";
                echo "<th>MobileNumber</th>";
                echo "<th>Mark</th>";
                echo "<th>TotalMark</th>";
                echo "<th>Status</th>";
                echo "<th>TrainerId</th>";
                echo "<th>Creationdate</th>";
                echo "</tr>";
                echo "</thead>";
                while($row=mysqli_fetch_array($result)){
                    echo "<tbody>";
                    echo "<tr>";
                     $Email=$row['StudentId'];
                     echo "<td>".$row['StudentId']."</td>";
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
                     echo "<td>".$row['Creationdate']."</td>";
                     echo "</tr>";
                    echo"</tbody>";
                }
                echo "</table>";
              }
           }
         ?>
    </div>
</body>
</html>