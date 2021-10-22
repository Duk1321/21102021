<?php
    include '../reuse/header.php';
    include '../reuse/connect.php';
?>


<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM blood_donor WHERE bd_id = $id";
    $result1 = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result1) > 0){
        while($row=mysqli_fetch_assoc($result1)){
            $name = $row['bd_name'];
            if($row['bd_sex']){
                $gender = 1;
            }else{
                $gender = 0;
            }
            $age = $row['bd_age'];
            $b_group = $row['bd_bgroup'];
            $b_reg_date = $row['bd_reg_date'];
            $b_phno = $row['bd_phno'];
        }
    }

?>

<div class="container">
    <h1 class="text-center bg-dark text-light">Thông tin của người hiến máu</h1>
</div>

<div class="container">
    <form action="./update.php" method="POST">
    <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" id="txtID" name="txtID" value="<?php echo $id ?>" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="txtName" name="txtName" value="<?php echo $name?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Tuổi</label>
            <input type="text" class="form-control" id="txtAge" name="txtAge" value="<?php echo $age?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Giới tính: </label>
            <?php
                if($gender == 1){
                    echo "<input type=radio name=gender value=male checked>Nam";
                    echo "<input type=radio name=gender value=female>Nữ";
                }
                if($gender == 0){
                    echo "<input type=radio name=gender value=male>Nam";
                    echo "<input type=radio name=gender value=female checked>Nữ";
                }
            ?>
        </div>
        <!-- Input type text date -->
        <!-- <div class="mb-3">
            <label class="form-label">Ngày đăng ký</label>
            <input type="text" class="form-control" id="txtRegDate" name="txtRegDate" value="">
        </div> -->
        <!-- Input type date -->
        <div class="mb-3">
            <label class="form-label">Ngày đăng ký: </label>
            <input type="date" id="start" name="date" value="<?php echo $b_reg_date?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nhóm máu</label>
            <input type="text" class="form-control" id="txtBGroup" name="txtBGroup" value="<?php echo $b_group?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="txtPhone" name="txtPhone" value="<?php echo $b_phno?>">
        </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
    </form>

</div>

<?php
    include '../reuse/footer.php';
?>