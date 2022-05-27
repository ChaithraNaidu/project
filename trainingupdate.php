<?php
include 'connect.php';
$Email=$_GET['id'];
$sql="select * from trainer where Email='$Email'";
if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
       $TrainerId=$row['TrainerId'];
       $TrainerName=$row['TrainerName'];
       $Gender=$row['Gender'];
       $MobileNumber=$row['MobileNumber'];
       $Email=$row['Email'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../schai/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>TD</title>
    <style>
        .container{
            border: 2px solid black;
            width: 500px; 
            padding: 10px;
            margin-top: 100px;
            background-color: violet;
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
<body>          
<form action="traininguser_update.php" method="get">
                
    <div class="container">
                 <div class="col-md-6">
                       <div class="form-group">
                           <h1><center><i>Training &nbsp&nbsp;Update</i></center></h1><br>
                           <label>TrainerId</label><br>
                            <input type="num" name="TrainerId" size="50"value=<?php echo $TrainerId; ?>>
    </div>
    </div><br><br>
                  
    <div class="col-md-6">
                        <div class="form-group">
                            <label>TrainerName</label><br>
                            <input type="text" name="TrainerName" size="50" value=<?php echo $TrainerName; ?> > 
                        </div>
    </div><br><br>

    

    <div class="col-md-6">
        <div class="form-group">
                            <label>Gender</label>
                            <input type="radio" name="Gen" value="Mal" max="3">Mal
                            <input type="radio" name="Gen" value="Fem" max="3">Fem
                            <?php echo $Gender; ?>
    </div>
                 </div><br><br>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>MobileNumber</label><br>
                            <input type="text" name="MobileNumber" size="50" value=<?php echo $MobileNumber; ?> > 
                        </div>
    </div><br><br>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label><br>
                            <input type="text" name="Email" size="50" value=<?php echo $Email; ?> > 
                        </div>
                   </div><br><br>
                   <div class="button">
                       <button class="btn btn-primary" type="submit" size="40">Submit</button>
                   </div>
         </div>
    </div>
</body>
</html>