<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Sửa mật khẩu người dùng</a>
</nav>

<form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/suaNguoiDung" style="padding: 20px;" method="post">
    <label>Mã người dùng:</label>
    <input class="form-control" style="width: 300px;" name="MaNguoiDung" value=<?php echo '"'.$NguoiDung['MaNguoiDung'].'"'?> readonly>
    <label>Tên người dùng (Tên đăng nhập):</label>
    <input class="form-control" style="width: 300px;" name="TenNguoiDung" value=<?php echo '"'.$NguoiDung['TenNguoiDung'].'"'?> readonly>
    <label>Mật khẩu:</label>
    <input class="form-control" style="width: 300px;" name="MatKhau" type="password" placeholder="Nhập mật khẩu mới" >
    <label>Xác nhận mật khẩu:</label>
    <input class="form-control" style="width: 300px;" name="XacNhanMatKhau" type="password" placeholder="Nhập lại mật khẩu mới" >
    <label>Xác nhận mật khẩu cũ:</label>
    <input class="form-control" style="width: 300px;" name="XacNhanMatKhauCu" type="password" placeholder="Nhập mật khẩu cũ" >     
    <!-- <?php
      //if($this->session->userdata['LoaiNguoiDung'] == 'Admin')
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
    ?> -->    
    <br/>
    <input type="submit" name="btnSua" class="btn btn-primary right" value="Sửa">
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

