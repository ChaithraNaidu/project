<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     
  
    <style>
        .div1{
            border: 2px solid black;
            width:200px;
            height:200px;
            margin-left:25%;
            background-color:lightcoral;
            border-radius: 10%;  
         }
    
         .div2{
            border: 2px solid black;
            width:200px;
            height:200px;
            margin-left: 50%;
            background-color:lightgreen;
            margin-top:-200px;
            border-radius: 10%;
        }

        .div3{
            border: 2px solid black;
            width:200px;
            height:200px;
            margin-left: 75%;
            background-color:violet;
            margin-top:-200px;
            border-radius: 10%;

        }
        body {
       background-image: url('qe.jpg');
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
<body style="background-color:skyblue;">

<nav class="navbar shadow-lg bg-secondary">
  <div class="container-fluid">
    <h1>Tuition Management System</h1>
    <ul class="nav">
      <li class="nav-link">
        <a href="#" style="margin-left:140mm;" class="nav-link text-light"><h4>Home</h4></a>
      </li>
      <li class="nav-link text-danger">
        <a href="./training_index.php"class="nav-link text-light"><h4>Trainer View</h4></a>
      </li>
      <li class="nav-link">
        <a href="./studentindex.php"class="nav-link text-light"><h4>Student View</h4></a>
      </li>
      <li class="nav-link">
        <a href="./studcour_index.php"class="nav-link text-light"><h4>Student Course&nbsp;&nbsp;View</h4></a>
      </li>

    </ul>
  </div>
</nav>

    <br><br>
    <div class="container" style="margin-top:50mm;">
    
    <div class="div1" style="margin-left:50mm;"> <i class="fa fa-address-book-o" style='font-size:50px; margin-left: 40%; margin-top: 20px;'></i>
      <br><br> <label> Total Number Of Trainer View: </label><center>
      <?php 
            
            include 'connect.php';
            $sql="select count(*) as total from trainer";
            if($result=mysqli_query($con,$sql)){
            if($row=mysqli_fetch_assoc($result)){
            echo "<h1 style='color: blue;'>".$row['total']."</h1>";
     }
 }
?></center>
     
    </div>
    <div class="div2" style="margin-left:145mm;"><i class="fa fa-bars" style='font-size:40px; margin-left: 30%; margin-top: 30px;'></i>
        <br> <br><label> Total Number Of Student View :</label><center>
        <?php
  include 'connect.php';
  $sql="select count(*) as total from studentss";
  if($result=mysqli_query($con,$sql)){
      if($row=mysqli_fetch_assoc($result)){
          echo "<h1 style='color: blue;'>".$row['total']."</h1>";
      }
  }

          
  ?>  </center>
    </div>

    <div class="div3"> <i class="fa fa-address-book-o" style='font-size:40px; margin-left: 30%; margin-top: 30px;'></i>
      <br> <br> <label> Total Number Of Student <br>Course View: :</label><center>
      <?php
  include 'connect.php';
  $sql="select count(*) as total from student_courses";
  if($result=mysqli_query($con,$sql)){
      if($row=mysqli_fetch_assoc($result)){
          echo "<h1 style='color: blue;'>".$row['total']."</h1>";
      }
  }
?></center>
    </div>
    </div>
</body>
</html>
