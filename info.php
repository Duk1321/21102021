<?php
    include './reuse/header.php';
    include './reuse/connect.php';
?>

<div class="container">
    <h1 class="text-center bg-dark text-light">Thông tin của người hiến máu</h1>
</div>
<div class="container pt-5">
    <a href="add.php"><button type="button" class="btn btn-success" name="addbtt">Add</button></a>
</div>
<div class="container pt-5">
    <table class="table table-bordered">
        <thead>
            <tr class="table-dark">
                <th scope="col">STT</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Tuổi</th>
                <th scope="col">Nhóm máu</th>
                <th scope="col">Ngày đăng ký</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM blood_donor";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<td>'.$row['bd_id'].'</td>';
                        echo '<td>'.$row['bd_name'].'</td>';
                        if($row['bd_sex']){
                            echo '<td>Nam</td>';
                        }else{
                            echo '<td>Nữ</td>';
                        }
                        echo '<td>'.$row['bd_age'].'</td>';
                        echo '<td>'.$row['bd_bgroup'].'</td>';
                        echo '<td>'.$row['bd_reg_date'].'</td>';
                        echo '<td>'.$row['bd_phno'].'</td>';
                        echo 
                            '<td>
                                <form>
                                <a href="./processing/edit.php?id='.$row['bd_id'].'"><button type="button" class="btn btn-success">Chỉnh sửa</button></a>
                                <a href="./processing/delete.php?id='.$row['bd_id'].'"><button type="button" class="btn btn-danger">Xóa</button></a>
                                </form>
                            </td>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>

<?php
    include './reuse/footer.php';
?>