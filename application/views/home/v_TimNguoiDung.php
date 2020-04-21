<!-- <h3>Danh sách người dùng</h3> -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Danh sách người dùng</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" name="ttTimKiem" type="search" placeholder="Nhập thông tin" aria-label="Search" required disabled>
    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm kiếm</button> -->
    <input type="submit" name="btnTimKiem" class="btn btn-outline-dark" value="Tìm kiếm" disabled>
  </form>
</nav>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Mã ND</th>
        <th>Tên người dùng</th>
        <th>Loại người dùng</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($dsNguoiDung as $item)
        {
            echo '<tr>';
            
            echo '<td>'.$item['MaNguoiDung'].'</td>';
            echo '<td>'.$item['TenNguoiDung'].'</td>';
            echo '<td>'.$item['LoaiNguoiDung'].'</td>';
            if($item['LoaiNguoiDung'] == 'Admin' || $item['TenNguoiDung'] == $this->session->userdata('TenNguoiDung'))
            {
              echo '<td>
                <form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/suaXoaTT/'.$item['TenNguoiDung'].'" method="post">
                <input type="submit" name="btnSua" class="btn btn-outline-primary" value="Sửa">
                </form>
                </td>';
              echo'</tr>';
            }
            else
            {
              echo '<td>
                <form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/suaXoaTT/'.$item['TenNguoiDung'].'" method="post">
                <input type="submit" name="btnSua" class="btn btn-outline-primary" value="Sửa">
                &emsp;
                <input type="submit" name="btnXoa" class="btn btn-outline-danger" value="Xóa">
                </form>
                </td>';
              echo'</tr>';
            }
        }
    ?>
    </tbody>
  </table>
  <form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung">
    <input type="submit" class="btn btn-dark" value="Quay lại">
  </form>
  













  



