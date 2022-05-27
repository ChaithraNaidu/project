<?php
include 'connect.php';
$Email=$_GET['id'];
$sql="select * from studentss where StudentId='$Email'";
if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
        $StudentId=$row['StudentId'];
       $FirstName=$row['FirstName'];
       $LastName=$row['LastName'];
       $DOB=$row['DOB'];
       $Age=$row['Age'];
       $Address=$row['Address'];
       $Gender=$row['Gender'];
       $Email=$row['Email'];
       $MobileNumber=$row['MobileNumber'];
       $Mark=$row['Mark'];
       $TotalMark=$row['TotalMark'];
       $Status=$row['Status'];
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
    <title>SD</title>
    <style>
        .container{
            border: 2px solid black;
            width: 500px; 
            padding: 10px;
            margin-top: 100px;
            background-color: #d3d3d3;
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
<body style="background-color:pink";>          
<form action="./studentuser_update.php" method="get">
                
    <div class="container">
    <h1><i>Student Update</i></h1><br>
    <div class="col-md-6">
                        <div class="form-group">
                            <label>StudentId</label><br>
                            <input type="num" name="StudentId" size="50" value=<?php echo $StudentId; ?> > 
                        </div>
    </div><br><br>
                 <div class="col-md-6">
                       <div class="form-group">
                            <label>FirstName</label><br>
                            <input type="text" name="FirstName" size="50" value=<?php echo $FirstName; ?>>
                            </div>
                     </div><br><br>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>LastName</label><br>
                            <input type="text" name="LastName" size="50" value=<?php echo $LastName; ?>>
    </div>
                 </div><br><br>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>DOB</label><br>
                            <input type="date" name="DOB" size="50" value=<?php echo $DOB; ?> > 
                        </div>
    </div><br><br>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Age</label><br>
                            <input type="text" name="Age" size="50" value=<?php echo $Age; ?> > 
                        </div>
                   </div><br><br>

                   <div class="col-md-6">
            <div class="form-group">
            <label>Address</label><br>
                            <input type="text" name="Address" size="50" value=<?php echo $Address; ?> > 
                        </div>
                   </div><br><br>


                   <div class="col-md-6">
            <div class="form-group">
            <label>Gender</label><br>
                            <input type="radio" name="Gen" value="Mal" max="3">Mal
                            <input type="radio" name="Gen" value="Fem" max="3">Fem
                            <?php echo $Gender; ?>
                        </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>Email:</label><br>
                           <input type="text" name="Email"  size="50" value=<?php echo $Email;?>>
                       </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>MobileNumber:</label><br>
                           <input type="text"  name="MobileNumber" size="50" value=<?php echo $MobileNumber;?>>
                       </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>Mark:</label><br>
                           <input type="num" name="Mark" size="50" value=<?php echo $Mark;?>>
                       </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>TotalMark:</label><br>
                           <input type="num" name="TotalMark" size="50" value=<?php echo $TotalMark;?>>
                       </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>Status:</label><br>
                           <select name="Status">
                               <option></option>
                               <option>A</option>
                               <option>B</option>
                           
                           <!-- <input type="text" name="Status" size="50" value= -->
                           <?php echo $Status;?>
                           </select>
                       </div>
                   </div><br><br>


                   <div class="button">
                       <button type="submit" class="btn btn-primary" style="background:black";>Submit</button>
                   </div>
         </div>
    </div>
</body>
</html>