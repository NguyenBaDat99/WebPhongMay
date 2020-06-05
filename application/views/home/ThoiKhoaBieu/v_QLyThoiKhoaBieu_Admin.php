<!-- <h4>Thời khóa biểu Admin</h4> -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu">Danh sách thời khóa biểu</a>

    <form class="form-inline" action="" method="post">
        <button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#modalThemTKB">
            Thêm thời khóa biểu
        </button>

        &emsp;
        <!-- <input class="form-control mr-sm-2" name="ttTimKiem" type="search" placeholder="Nhập thông tin" aria-label="Search" required maxlength="20">
        <input type="submit" name="btnTimKiem" class="btn btn-outline-dark" value="Tìm kiếm"> -->
    </form>
</nav>

<div class="modal fade" id="modalThemTKB" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm thời khóa biểu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu/themThoiKhoaBieu">
                    <!-- <div class="form-group">
                        <label>Môn học</label>
                        <select id="inputMonHoc" name="MonHoc" class="form-control">
                            <option selected></option>
                            <?php
                            // foreach ($dsMonHoc as $item) {
                            //     echo '<option>' . $item['MaMonHoc'] . ' - ' . $item['TenMonHoc'] . '</option>';
                            // }
                            ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label>Môn học và Giảng viên</label>
                        <select id="inputMonHoc" name="MonHoc" class="form-control">
                            <!-- <option selected></option> -->
                            <?php
                            foreach ($dsMonHoc as $item) {
                                echo '<option>' . $item['MaMonHoc'] . ' - ' . $item['TenMonHoc'] . ' - ' . $item['GiangVienPhuTrach'] . '</option>';
                            }
                            ?>
                        </select>
                        <!-- <select id="inputGiangVien" name="GiangVien" class="form-control">
                                <option selected></option> -->
                        <?php
                        // foreach ($dsGiangVien as $item) {
                        //     echo '<option>' . $item['MaNguoiDung'] . ' - ' . $item['TenNguoiDung'] . '</option>';
                        // }
                        ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Phòng máy</label>
                            <select id="inputPhongMay" name="PhongMay" class="form-control">
                                <!-- <option selected></option> -->
                                <?php
                                foreach ($dsPhongMay as $item) {
                                    echo '<option>' . $item['MaPhongMay'] . ' - ' . $item['TenPhongMay'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Thời gian bắt đầu</label>
                            <input type="date" id="inputThoiGianBatDau" name="ThoiGianBatDau" value="2020-02-02" min="2020-02-02" style="width: 100%; text-align: center;">
                        </div>
                        <!-- <div class="form-group col-md-6">
                            <label>Thời gian kết thúc</label>
                            <input type="date" id="inputThoiGianKetThuc" name="ThoiGianKetThuc" value="2020-02-02" min="2020-02-02" style="width: 100%; text-align: center;">
                        </div> -->
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Thứ học</label>
                            <select id="inputThu" name="ThuHoc" class="form-control">
                                <option selected>2 (Thứ hai)</option>
                                <option>3 (Thứ ba)</option>
                                <option>4 (Thứ tư)</option>
                                <option>5 (Thứ năm)</option>
                                <option>6 (Thứ sáu)</option>
                                <option>7 (Thứ bảy)</option>
                                <option>8 (Chủ nhật)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Buổi học</label>
                            <select id="inputBuoiHoc" name="BuoiHoc" class="form-control">
                                <option selected>12345 (7h-11h)</option>
                                <option>12 (7h-8h40)</option>
                                <option>345 (9h-11h)</option>
                                <option>67890 (13h-5h)</option>
                                <option>67 (13h-14h40)</option>
                                <option>890 (15h-17h)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Số buổi</label>
                            <input type="number" name="SoBuoi" class="form-control" id="inputSoBuoi" placeholder="8" min="1" max="15" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" id="inputGhiChu" name="GhiChu"></textarea>
                    </div>
                    <div class="dropdown-divider"></div>
                    <input type="submit" name="btnThem" class="btn btn-primary" value="Thêm">
                    <button type="button" class="btn btn-secondary right" data-dismiss="modal">Hủy</button>
                </form>
            </div>
            <!--
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
              </div>
              -->
        </div>
    </div>
</div>



<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã TKB</th>
            <th scope="col">Mã môn học</th>
            <th scope="col">Tên môn học</th>
            <th scope="col">Mã giảng viên</th>
            <th scope="col">Tên giảng viên</th>
            <th scope="col">Mã phòng máy</th>
            <th scope="col">Buổi học</th>
            <th scope="col">Thứ học</th>
            <th scope="col">Số buổi</th>
            <th scope="col">Thời gian bắt đầu</th>
            <th scope="col">Thời gian kết thúc</th>
            <th scope="col">Ghi chú</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dsThoiKhoaBieu as $item) {
            if($item['ThoiGianKetThuc'] < $today = date("Y-m-d"))
            {
                echo '<tr class="table-secondary">';
                echo '<th>' . $item['MaThoiKhoaBieu'] . '</th>';
                echo '<td>' . $item['MaMonHoc'] . '</td>';
                echo '<td>' . $item['TenMonHoc'] . '</td>';
                echo '<td>' . $item['MaGiangVien'] . '</td>';
                echo '<td>' . $item['TenGiangVien'] . '</td>';
                echo '<td>' . $item['MaPhongMay'] . '</td>';
                echo '<td>' . $item['BuoiHoc'] . '</td>';
                echo '<td>' . $item['ThuHoc'] . '</td>';
                echo '<td>' . $item['SoBuoi'] . '</td>';
                echo '<td>' . $item['ThoiGianBatDau'] . '</td>';
                echo '<td>' . $item['ThoiGianKetThuc'] . '</td>';
                echo '<td>' . $item['GhiChu'] . '</td>';
                echo '<td> <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa' . $item['MaThoiKhoaBieu'] . '">
                              Xóa
                            </button> 
                        </td>';
                echo '</tr>';
            }
            else
            {
                echo '<tr>';
                echo '<th>' . $item['MaThoiKhoaBieu'] . '</th>';
                echo '<td>' . $item['MaMonHoc'] . '</td>';
                echo '<td>' . $item['TenMonHoc'] . '</td>';
                echo '<td>' . $item['MaGiangVien'] . '</td>';
                echo '<td>' . $item['TenGiangVien'] . '</td>';
                echo '<td>' . $item['MaPhongMay'] . '</td>';
                echo '<td>' . $item['BuoiHoc'] . '</td>';
                echo '<td>' . $item['ThuHoc'] . '</td>';
                echo '<td>' . $item['SoBuoi'] . '</td>';
                echo '<td>' . $item['ThoiGianBatDau'] . '</td>';
                echo '<td>' . $item['ThoiGianKetThuc'] . '</td>';
                echo '<td>' . $item['GhiChu'] . '</td>';
                echo '<td> <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa' . $item['MaThoiKhoaBieu'] . '">
                              Xóa
                            </button> 
                        </td>';
                echo '</tr>';
            }
            


            echo '<div class="modal fade" id="modalXoa' . $item['MaThoiKhoaBieu'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xóa thời khóa biểu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Bạn có muốn xóa thời khóa biểu có mã là: ' . $item['MaThoiKhoaBieu'] . '(' . $item['TenMonHoc'] . ')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyThoiKhoaBieu/xoaThoiKhoaBieu/' . $item['MaThoiKhoaBieu'] . '">
                                    <input type="submit" name="btnXoa" class="btn btn-danger" value="Xóa">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
        }
        ?>
    </tbody>
</table>