<div class="container" style="text-align: -webkit-center;">
  <form class="jumbotron text-center" action="http://localhost/WebPhongMay/index.php/login/check_login" style="width:350px"  method="post">
    <h2>Đăng nhập</h2>

    <div class="form-group">
      <input class="form-control" name="TenNguoiDung" placeholder="Nhập tên đăng nhập" required>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="MatKhau" id="pwd" placeholder="Nhập mật khẩu" required>
    </div>

    <?php
    $error = $this->session->flashdata('msg');
    if($error){
     echo  '<div class="alert alert-success">'.$this->session->flashdata('msg').'</div>';
   }
   ?>
    <!-- <div class="checkbox">
      <label><input type="checkbox">Nhớ mật khẩu</label>
    </div> -->
    <input type="submit" name="btnDangNhap" class="btn btn-dark" value="Đăng nhập">
  </form>
</div>


<!-- <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2017-2019</p>
</form> -->
