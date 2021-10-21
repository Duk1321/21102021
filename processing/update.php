<?php
    $id = $_POST['txtID'];
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

    $sql = "UPDATE blood_donor SET bd_name ='$bd_name', bd_sex ='$gender', bd_age ='$age', bd_bgroup ='$b_Group', bd_reg_date ='$date', bd_phno ='$phone_Num' 
    WHERE bd_id = $id";

    echo $sql;

    $result = mysqli_query($conn,$sql);

    if($result >0){
        header("Location:../info.php");
    }
?>