<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Sửa thông tin người dùng</a>
</nav>

<form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/suaNguoiDung" method="post">
    <label>Mã người dùng:</label>
    <input class="form-control" style="width: 300px;" name="MaNguoiDung" value=<?php echo '"'.$NguoiDung['MaNguoiDung'].'"'?> readonly>
    <label>Tên người dùng (Tên đăng nhập):</label>
    <input class="form-control" style="width: 300px;" name="TenNguoiDung" value=<?php echo '"'.$NguoiDung['TenNguoiDung'].'"'?>>
    <label>Mật khẩu</label>
    <input class="form-control" style="width: 300px;" name="MatKhau" type="password" placeholder="Nhập mật khẩu mới">
    <label>Xác nhận mật khẩu:</label>
    <input class="form-control" style="width: 300px;" name="XacNhanMatKhau" type="password" placeholder="Xác nhận mật khẩu">
    <?php
      if($NguoiDung['LoaiNguoiDung'] == 'Admin')
      {?>
         <label>Loại người dùng:</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="LoaiNguoiDung" id="Radios1" value="User" checked>
            <label class="form-check-label" for="exampleRadios1">
              User
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="LoaiNguoiDung" id="Radios2" value="Admin">
            <label class="form-check-label" for="exampleRadios2">
              Admin
            </label>
          </div>
      <?php
      }
    ?>
    
    
    <br/>
    <input type="submit" name="btnThem" class="btn btn-primary right" value="Sửa">
    <input type="submit" name="btnHuy" class="btn btn-danger" value="Hủy">
    <?php
    echo validation_errors();
    ?>
</form>

