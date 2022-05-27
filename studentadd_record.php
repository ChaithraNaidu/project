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
            border: 3px solid black;
            width: 499px;
            height: 1300px;
            padding: 10px;
            margin-top: 100px;
            background-color:orange;
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
<body style="background-color:black";>
         <form action="studentinsert.php"  method="post">
         <div class="container">
         <div class="forms">
         <div class="col-md-6">
                        <div class="form-group">
                        <h1><i><center>Student View</center></i></h1><br>
                            <label>FirstName:</label><br>
                            <input type="text" name="FirstName" size="50">
                        </div>
                   </div> <br><br>              
         <div class="col-md-6">
                       <div class="form-group">
                           <label>LastName:</label>
                            <input type="text" name="LastName" size="50">
                            <br><br><br>
                       </div>
                 </div>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>DOB:</label><br>
                            <input type="date" name="DOB" size="50">
                        </div>
                   </div> <br><br>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Age:</label><br>
                            <input type="text" name="Age" size="50"> 
                        </div>
                   </div><br><br>

                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Address:</label><br>
                            <input type="text" name="Address" size="50"> 
                        </div>
                   </div><br><br>
                  
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender:</label><br>
                            <input type="radio" name="Gen" value="Mal" max="3" size="50">Mal
                            <input type="radio" name="Gen" value="Fem" max="3" size="50">Fem
                        </div>
                   </div><br><br>
                  
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Email:</label><br>
                            <input type="text" name="Email" size="50"> 
                        </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>MobileNumber:</label><br>
                           <input type="text" name="MobileNumber" size="50">
                       </div>
                   </div><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>Mark:</label>
                           <input type="text" name="Mark" size="50">
                       </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>TotalMark:</label>
                           <input type="text" name="TotalMark" size="50">
                       </div>
                   </div><br><br>

                   <div class="col-md-6">
                       <div class="form-group">
                           <label>Status:</label>
                           <input type="text" name="Status" size="50">
                       </div>
                   </div><br><br>

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
                   </div><br><br>

                  
                    <div class="button"> 
                     <button type="submit" class="btn btn-primary" style="background:white";>Submit</button> 
                    </div> 
                      </div>
                     </form>
         </div>
    </div>
</body>
</html>