<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost/WebPhongMay/asset/css/bootstrap.min.css">
    <script type="text/javascript" src="http://localhost/WebPhongMay/asset/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://localhost/WebPhongMay/asset/js/bootstrap.bundle.min.js"></script>
    
    <meta charset="utf-8">
    <title>Quản lý phòng máy</title>
    
</head>
<body>
  <nav class="navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="http://localhost/WebPhongMay/index.php/QLyPhongMay">Website Quản lý phòng máy</a>
    <!-- <a class="navbar-brand" >
    </a> -->
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $this->session->userdata('TenNguoiDung');?>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href= <?php echo "http://localhost/WebPhongMay/index.php/QLyNguoiDung/load_suaNguoiDung/".$this->session->userdata('MaNguoiDung');?>>Tùy chỉnh</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href=" http://localhost/WebPhongMay/index.php/login/logout">Đăng xuất</a>
        </div>
    </div>
</nav>

<div class="container-fluid" style="margin-top: 56px;">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="height: 1000px;" >
            <div style="position: fixed; font-size: 19px;">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyPhongMay">
                            Quản lý phòng máy
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyMonHoc">
                            Quản lý môn học
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu">
                            Quản lý thời khóa biểu
                        </a>
                    </li>
                    <?php
                    if($this->session->userdata('LoaiNguoiDung') == 'Admin')
                        {?>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyNguoiDung">
                                    Quản lý người dùng
                                </a>
                            </li>
                            <?php
                        } 
                        ?>
                        
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main">


                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            </body>
            </html>



            

            

            
            
