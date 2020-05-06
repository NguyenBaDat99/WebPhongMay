<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Thêm người dùng</a>
</nav>

<form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/themNguoiDung" style="padding: 20px;" method="post">
    <label>Tên người dùng (Tên đăng nhập):</label>
    <input class="form-control" style="width: 300px;" name="TenNguoiDung" placeholder="Nhập tên người dùng" autofocus>
    <label>Mật khẩu:</label>
    <input class="form-control" style="width: 300px;" name="MatKhau" type="password" placeholder="Nhập mật khẩu" >
    <label>Xác nhận mật khẩu:</label>
    <input class="form-control" style="width: 300px;" name="XacNhanMatKhau" type="password" placeholder="Nhập mật khẩu" >
    <label>Loại người dùng:</label>
    <!-- <select class="form-control" name="LoaiNguoiDung" style="width: 300px;" id="exampleFormControlSelect1">
        <option>User</option>
        <option>Admin</option>
    </select> -->
    <!-- <input class="form-control" style="width: 300px;" name="LoaiNguoiDung" placeholder="Nhập loại người dùng"> -->
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
    <br/>
    <input type="submit" name="btnThem" class="btn btn-primary right" value="Thêm">
    <input type="submit" name="btnHuy" class="btn btn-danger" value="Hủy">
    <?php
    echo validation_errors();
    ?>
</form>
<?php
  $error = $this->session->flashdata('msg');
    if($error){
      echo  '<div class="alert alert-danger" style="width: 300px;margin-left: 20px;">'.$this->session->flashdata('msg').'</div>';
    }
?>

