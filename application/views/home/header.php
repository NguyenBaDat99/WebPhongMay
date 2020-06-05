<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Website Quản lý phòng máy</title>

    <link rel="stylesheet" href="http://localhost/WebPhongMay/asset/css/bootstrap.min.css">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>
        
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            /* margin-bottom: 40px; */
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #17a2b8;
            color: #fff;
            transition: all 0.3s;
            margin-left: -250px;
        }

        #sidebar.active {
            margin-left: 0px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #1490a3;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #17a2b8;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }

        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */

        #content {
            width: 100%;
            /* padding: 20px; */
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #sidebarCollapse span {
                display: none;
            }
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Web Phòng Máy</h3>
            </div>

            <ul class="list-unstyled ">
                <p style="background-color: darkturquoise">Danh sách chức năng</p>                
                <li>
                    <a href="http://localhost/WebPhongMay/index.php/QLyPhongMay"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Quản lý phòng máy</a>
                </li>
                <li>
                    <a href="http://localhost/WebPhongMay/index.php/QLyMonHoc"><i class="fas fa-book"></i>&nbsp;&nbsp;Quản lý môn học</a>
                </li>
                <li>
                    <a href="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Quản lý thời khóa biểu</a>
                </li>

                <?php
                    if($this->session->userdata('LoaiNguoiDung') == 'Admin')
                    {?>
                <li>
                    <a href="http://localhost/WebPhongMay/index.php/QLyNguoiDung"><i class="fas fa-users"></i>&nbsp;&nbsp;Quản lý người dùng</a>
                </li>

                <?php
                }?>
                <!-- Kiểu dropdown cho mục sidebar -->
                <!-- <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
            <!-- <ul class="list-unstyled CTAs list-unstyled components">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> -->
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>&nbsp;
                        <span>Website Quản lý phòng máy</span>
                    </button>
                    <span></span>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyPhongMay"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Phòng máy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyMonHoc"><i class="fas fa-book"></i>&nbsp;&nbsp;Môn học</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Thời khóa biểu</a>
                            </li>

                            <?php
                            if($this->session->userdata('LoaiNguoiDung') == 'Admin')
                                {?>

                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/WebPhongMay/index.php/QLyNguoiDung"><i class="fas fa-users"></i>&nbsp;&nbsp;Người dùng</a>
                            </li>

                            <?php
                            }?>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-id-card"></i>&nbsp;&nbsp;<?php echo $this->session->userdata('TenNguoiDung');?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href= <?php echo "http://localhost/WebPhongMay/index.php/QLyNguoiDung/load_suaNguoiDung/".$this->session->userdata('MaNguoiDung');?>><i class="fas fa-user-cog"></i>&nbsp;&nbsp;Tùy chỉnh</a>
                            <?php  
                            if($this->session->userdata('LoaiNguoiDung') != "Admin"){
                            
                            ?> 
                            <a class="dropdown-item" href="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;Thời khóa biểu cá nhân</a>
                            <?php }
                            ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href=" http://localhost/WebPhongMay/index.php/login/logout"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </nav>

            
            

            
