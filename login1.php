<?php session_start();
include 'connect.php';
$userid=$_POST['userid'];
  $password=$_POST['password'];
  $dbroll=[''];
  $dbuserid=[''];
  $dbpassword=[''];
$sql="select * from log_details where userid='$userid'" ;
if($result=mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
       $dbuserid=$row['userid'];
       $dbpassword=$row['password'];
       $dbroll=$row['roll'];
      }
      if($password==$dbpassword){
          echo "welcome to login page";
          $_SESSION['userid']=$dbuserid;
          $_SESSION['roll']=$dbroll;
          header('location:training_index.php');
      }else{
        echo "password not match";
}if($_SESSION['roll']=='A'){
    header('location:d2.php');
}
}else{
    echo "not matching record";
}
}else{
    echo "no data";
}
if($_SESSION['roll']=='U'){
    header('location:studentindex.php');
}else{
    echo "no data";
}
?>
