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
    <form class="form-inline">
        <div class="dropdown">
            <button class="navbar-toggler" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item " href="http://localhost/WebPhongMay/index.php/QLyPhongMay">Quản lý phòng máy</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item " href="http://localhost/WebPhongMay/index.php/QLyMonHoc">Quản lý môn học</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item " href="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu">Quản lý thời khóa biểu</a>
                <div class="dropdown-divider"></div>
                <?php
                    if($this->session->userdata('LoaiNguoiDung') == 'Admin')
                        {?>
                            <a class="dropdown-item " href="http://localhost/WebPhongMay/index.php/QLyNguoiDung">Quản lý người dùng</a>
                        <?php
                        } 
                        ?>
            </div>
        </div>
        &emsp;
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $this->session->userdata('TenNguoiDung');?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href= <?php echo "http://localhost/WebPhongMay/index.php/QLyNguoiDung/load_suaNguoiDung/".$this->session->userdata('MaNguoiDung');?>>Tùy chỉnh</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href=" http://localhost/WebPhongMay/index.php/login/logout">Đăng xuất</a>
            </div>
        </div>
    </form>

    
</nav>

<div class="container-fluid" style="margin-top: 56px;">
    <div class="row">
        <!-- <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="height: auto;" >
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
            </nav> -->

            
            <div class="col-md-2 d-none d-md-block sidebar">
                <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <a class="nav-link active" data-toggle="tab" href="#http://localhost/WebPhongMay/index.php/QLyPhongMay" role="tab" aria-selected="true">Quản lý phòng máy</a>
                <a class="nav-link" data-toggle="tab" href="#http://localhost/WebPhongMay/index.php/QLyMonHoc" role="tab" aria-selected="false">Quản lý môn học</a>
                <a class="nav-link" data-toggle="tab" href="#http://localhost/WebPhongMay/index.php/QLyMonHoc" role="tab" aria-selected="false">Quản lý thời khóa biểu</a>
                <a class="nav-link" data-toggle="tab" href="#http://localhost/WebPhongMay/index.php/QLyNguoiDung" role="tab"role="tab" aria-selected="false">Quản lý người dùng</a>
                </div>
            </div>

      
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main">
                
            



            

            

            
            
