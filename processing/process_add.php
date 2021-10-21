<?php

    $bd_name = $_POST['txtName'];
    if($_POST['gender'] == "male"){
        $gender = 1;
    }
    if($_POST['gender'] == "female"){
        $gender = 0;
    }
    $age = $_POST['txtAge'];
    $b_Group = $_POST['txtBGroup'];
    $phone_Num = $_POST['txtPhone'];
    $date = date("Y/m/d");
    
    include '../reuse/connect.php';

    $sql = "INSERT INTO `blood_donor`(`bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_phno`) 
    VALUES ('$bd_name','$gender','$age','$b_Group','$phone_Num')";

    $result = mysqli_query($conn,$sql);

    if($result >0){
        header("Location:../info.php");
    }
?>