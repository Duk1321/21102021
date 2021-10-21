<?php

    $id = $_GET['id'];
    
    include '../reuse/connect.php';

    $sql = "DELETE FROM blood_donor WHERE bd_id = $id ";

    $result = mysqli_query($conn,$sql);

    if($result >0){
        header("Location:../info.php");
    }
?>