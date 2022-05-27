<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SCD</title>
    <style>
        .container{
            border: 3px solid black;
            width: 450px;
            height: 500px;
            padding: 10px;
            margin-top: 100px;
            background-color: gray;
        }
        .form-group1 label{
            margin-left: 200px;
            margin-top: -50px;
        }

        .form-group1 input{
            margin-left: 400px;
        }
        .l label{
            margin-top: -10px;
        }
    </style>
</head>
<body style="background-color:pink";>
         <form action="studcour_insert.php"  method="post">
         <div class="container">
         <div class="forms">
         <div class="col-md-6">
                        <div class="form-group">
                        <h1><i><center>Student-Course View</center></i></h1>
                             <label>CourseName:</label><br>
                             <input type="text" name="CourseName" size="40">
                            <!-- <select>
                                <option></option>
                                <option>php</option>
                                <option>csharp</option>
                                <option>java</option>
                                <option>Javascript</option>
                                <option>Php</option>
                                <option>cpp</option>
                                <option></option>
                            </select> -->
                        </div>
                   </div> <br> 

                   <!-- <label>CourseName</label>
                   <select name="CourseName" id="">
                        
                       include 'connect.php';
                       $sql="select CourseId,CourseName from student_courses";
                       if($res=mysqli_query($con,$sql)){
                        if(mysqli_num_rows($res)>0){
                                 while($row=mysqli_fetch_array($res)){
                    echo "<option value=".$row['CourseName'].">".$row['CoursetName']."
                    </option>";
                    
                                     
                                 }
                            } else{
                                    echo " No records Found";
                    
                            }  
                    
                    }else{
                    echo "Error while running query";
                    echo mysqli_error($con);
                    
                    }
                    
                    ?> -->  
                    


                  <div div class="col-md-6">
                       <div class="form-group">
                           <label>StudentId</label>
                   
<select name="StudentId" id="">
<?php
include 'connect.php';
$sql="select StudentId,FirstName,LastName from studentss ";
if($res=mysqli_query($con,$sql)){
    if(mysqli_num_rows($res)>0){
             while($row=mysqli_fetch_array($res)){
echo "<option value=".$row['StudentId'].">".$row['StudentId']."
 [". $row['FirstName']."[".$row['LastName']."]</option>";

                 
             }
        } else{
                echo " No records Found";

        }  

}else{
echo "Error while running query";
echo mysqli_error($con);

}

?>
</select>  
</div>
</div>   <br><br>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label>TrainerId</label>
                           
                        <select name="TrainerId"  id=""> 
                               <?php
                               include 'connect.php';
                               $sql="select TrainerId,TrainerName from trainer";
                           if($res=mysqli_query($con,$sql)){
                if(mysqli_num_rows($res)>0){
            
                         while($row=mysqli_fetch_array($res)){
echo "<option value=".$row['TrainerId'].">".$row['TrainerId']."
[".$row['TrainerName']."]</option>";
                             
                         }
                    } else{
                            echo " No records Found";

                    }  
         
}else{
     echo "Error while running query";
     echo mysqli_error($con);
}
?>
</select> 
</div>
</div><br>

                   <div class="button">
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                     </form>
         </div>
    </div>
</body>
</html>