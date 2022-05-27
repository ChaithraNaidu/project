<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <title>TD</title>
    <style>
        .container{
            border: 3px solid black;
            width: 450px;
            padding: 10px;
            margin-top: 100px;
            background-color: pink;
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
<body style="background-color:bisque";>
         <form name="myform" action="training_insert.php" onclick="return validateform()" method="post">
         <div class="container">
         <div class="forms">
         <div class="col-md-6">
                        <div class="form-group">
                        <h1><i><center>Training View</center></i></h1>
                            <label>TrainerName:</label><br>
                            <input type="text" name="TrainerName" size="50">
                            <span id="alert1" style="color:brown"></span>
                        </div>
                   </div> <br><br> 
                   
         
         <div class="col-md-6">
                       <div class="form-group">
                            <label>Gender&nbsp&nbsp&nbsp&nbsp</label>
                            <input type="radio" name="Gen" value="Mal" max="3">Mal
                            <input type="radio" name="Gen" value="Fem" max="3">Fem
                            <span id="alert2" style="color:brown"></span>
                            <br><br><br>
                       </div>
                 </div>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>MobileNumber:</label><br>
                            <input type="num" name="MobileNumber" size="50">
                            <span id="alert3" style="color:brown"></span>
                        </div>
                   </div> <br><br>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Email:</label><br>
                            <input type="text" name="Email" size="50"> 
                            <span id="alert4" style="color:brown"></span>
                        </div>
                   </div><br><br>
                   <div class="button">
                       <button class="btn btn-primary" type="Submit" style="background:black";>Submit</button>
                   </div>

    </div>
                     </form>
         </div>
    </div>
         <script>
        function validateform(){
        var flag=true;
                    if(document.myform.TrainerName.value==""){
                    document.getElementById('alert1').innerHTML="this field is required";
                    document.TrainerName.style.border="solid 2px red";
                    document.TrainerName.focus();
                    flag=false;
                    }else{
                        document.getElementById('alert1').innerHTML="";
                        document.TrainerName.style.border="solid 2px green";
                        flag=true;
                        }
                    if(document.myform.Gender.value==""){
                        document.getElementById('alert2').innerHTML="this field is required";
                        document.Gender.style.border="solid 2px red";
                        document.Gender.focus();
                        flag=false;
                    }else{
                        document.getElementById('alert2').innerHTML="";
                        document.Gender.style.border="solid 2px green";
                        flag=true;
                    }
                    if(document.myform.MobileNumber.value==""){
                        document.getElementById('alert3').innerHTML="this field is required";
                        document.MobileNumber.style.border="solid 2px red";
                        document.MobileNumber.focus();
                        flag=false;
                    }else{
                        document.getElementById('alert3').innerHTML="this field is required";
                        document.MobileNumber.style.border="solid 2px green";
                        document.MobileNumber.focus();
                        flag=true;
                    }
                    if(document.myform.Email.value==""){
                        document.getElementById('alert4').innerHTML="this field is required";
                        document.Email.style.border="solid 2px red";
                        document.Email.focus();
                        flag=false;
                    }else{
                        document.getElementById('alert4').innerHTML="this field is required";
                        document.Email.style.border="solid 2px green";
                        document.Email.focus();
                        flag=true;
                    }
                    if(flag==false){
                            return false;
                            }else{
                                return true;
                            }
                        }
    </script>
</body>
</html>