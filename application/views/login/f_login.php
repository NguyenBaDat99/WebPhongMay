<div class="container" style="text-align: -webkit-center;">
  <form class="jumbotron text-center" action="http://localhost/WebPhongMay/index.php/login/check_login" style="width:350px"  method="post">
    <h2>Đăng nhập</h2>
    <div class="form-group">
      <input class="form-control" name="TenNguoiDung" placeholder="Nhập tên đăng nhập" value="<?php if(isset($_COOKIE['tenNguoiDung_cookie']))
      { echo $_COOKIE['tenNguoiDung_cookie'];} ?>"required>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="MatKhau" value="<?php if(isset($_COOKIE['matKhau_cookie']))
      { echo $_COOKIE['matKhau_cookie'];} ?>"  id="pwd" placeholder="Nhập mật khẩu" required>
    </div>
    <?php
    $error = $this->session->flashdata('msg');
    if($error){
     echo  '<div class="alert alert-danger">'.$this->session->flashdata('msg').'</div>';
   }?>
   <div class="checkbox">
    <label><input type="checkbox"  name="NhoMatKhau">Nhớ mật khẩu</label>
  </div>
  <input type="submit" name="btnDangNhap" class="btn btn-dark" value="Đăng nhập">
</form>
</div>
