<?php
    include './reuse/header.php';
    include './reuse/connect.php';
?>

<div class="container">
    <h1 class="text-center bg-dark text-light">DANH SÁCH THÔNG TIN NGƯỜI HIẾN MÁU</h1>
</div>
<div class="container pt-5">
    <a href="add.php"><button type="button" class="btn btn-success">Add</button></a>
</div>
<div class="container pt-5">
    <table class="table table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">STT</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Thông tin</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql = "SELECT bd_id , bd_name FROM blood_donor";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<td>'.$row['bd_id'].'</td>';
                        echo '<td>'.$row['bd_name'].'</td>';
                        echo '<td><a href="info.php">Xem chi tiết</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
            
        </tbody>
    </table>
</div>

<?php
    include './reuse/footer.php';
?>