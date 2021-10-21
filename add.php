<?php
    include './reuse/header.php';
    include './reuse/connect.php';
?>


<div class="container">
    <h1 class="text-center bg-dark text-light">Thêm người vào danh sách</h1>
</div>
<div class="container">
    <form action="./processing/process_add.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="txtName" name="txtName">
        </div>
        <div class="mb-3">
            <label class="form-label">Tuổi</label>
            <input type="text" class="form-control" id="txtAge" name="txtAge">
        </div>
        <div class="mb-3">
            <label class="form-label">Giới tính </label>
            <input type="radio" name="gender" value="male">Nam
            <input type="radio" name="gender" value="female">Nữ
        </div>
        <div class="mb-3">
            <label class="form-label">Nhóm máu</label>
            <input type="text" class="form-control" id="txtBGroup" name="txtBGroup">
        </div>
        <div class="mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="txtPhone" name="txtPhone">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>


<?php
    include './reuse/footer.php';
?>