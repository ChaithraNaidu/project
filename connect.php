<?php
$con=mysqli_connect(
    'localhost',
    'root',
    'bangaru@3',
    'tuitionms');
    if($con===false){
        echo "error in connection",
        mysqli_connect_error();
    }
?>