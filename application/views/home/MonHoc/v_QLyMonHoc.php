<!-- <h3>Danh sách người dùng</h3> -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Danh sách môn học</a>
  <form class="form-inline" action="" method="post">
    <input class="form-control mr-sm-2" name="ttTimKiem" type="search" placeholder="Nhập thông tin" aria-label="Search" required maxlength="20">
    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm kiếm</button> -->
    <input type="submit" name="btnTimKiem" class="btn btn-outline-dark" value="Tìm kiếm">
  </form>
</nav>

<table class="table">
    <thead>
      <tr>
        <th>Mã môn học</th>
        <th>Tên môn học</th>
        <th>Ngành học</th>
        <th>Số tín chỉ</th>
        <th>Giảng viên phụ trách</th>
        <th>Trạng thái</th>
        <?php
            if($this->session->userdata('LoaiNguoiDung') == "Admin")
            {
                echo '<th>Thao tác</th>';
            }
        ?>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($dsMonHoc as $item)
        {
            if($item['TrangThai'] == "Open")
            {
                echo '<tr>';
                echo '<td>'.$item['MaMonHoc'].'</td>';
                echo '<td>'.$item['TenMonHoc'].'</td>';
                echo '<td>'.$item['NganhHoc'].'</td>';
                echo '<td>'.$item['SoTinChi'].'</td>';
                echo '<td>'.$item['GiangVienPhuTrach'].'</td>';
                echo '<td>'.$item['TrangThai'].'</td>';
                if($this->session->userdata('LoaiNguoiDung') == "Admin")
                {
                    echo '<td>
                        <form method="post">
                        <input type="submit" name="btnSua" class="btn btn-outline-primary" value="Sửa">
                        <input type="submit" name="btnXoa" class="btn btn-outline-danger" value="Xóa">
                        </form>
                        </td>';
                }
            }
            else
            {
                echo '<tr class="table-secondary">';
                echo '<td>'.$item['MaMonHoc'].'</td>';
                echo '<td>'.$item['TenMonHoc'].'</td>';
                echo '<td>'.$item['NganhHoc'].'</td>';
                echo '<td>'.$item['SoTinChi'].'</td>';
                echo '<td>'.$item['GiangVienPhuTrach'].'</td>';
                echo '<td>'.$item['TrangThai'].'</td>';
                if($this->session->userdata('LoaiNguoiDung') == "Admin")
                {
                    echo '<td>
                        <form method="post">
                        <input type="submit" name="btnSua" class="btn btn-outline-primary" value="Sửa">
                        <input type="submit" name="btnXoa" class="btn btn-outline-danger" value="Xóa">
                        </form>
                        </td>';
                }
            }          
        }
        ?>
    </tbody>
  </table>
  <?php
    if($this->session->userdata('LoaiNguoiDung') == "Admin")
    {
        echo '<form method="post">
            <input type="submit" name="btnThem" class="btn btn-primary" value="Thêm môn học">
            </form>';
    }
    ?>
  


  




  











  




           


