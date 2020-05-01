<!-- <h3>Danh sách người dùng</h3> -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Danh sách người dùng</a>
  <form class="form-inline" action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/tim_NguoiDung" method="post">
    <input class="form-control mr-sm-2" name="ttTimKiem" type="search" placeholder="Nhập thông tin" aria-label="Search" required maxlength="20">
    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm kiếm</button> -->
    <input type="submit" name="btnTimKiem" class="btn btn-outline-dark" value="Tìm kiếm">
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
                <form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/btnSuaND/'.$item['MaNguoiDung'].'" method="post">
                <input type="submit" name="btnSua" class="btn btn-outline-primary" value="Sửa">
                </form>
                </td>';
              echo'</tr>';
            }
            else
            {
              echo '<td>
                <form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/btnSuaND/'.$item['MaNguoiDung'].'" method="post">
                <input type="submit" name="btnSua" class="btn btn-outline-primary" value="Sửa">
                &nbsp;
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa'.$item['MaNguoiDung'].'">
                  Xóa
                </button>
                </form>
                </td>
                </tr>';
              //Modal xóa Người dùng
              echo '<div class="modal fade" id="modalXoa'.$item['MaNguoiDung'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa môn học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Bạn có muốn xóa người dùng có mã là: '.$item['MaNguoiDung'].' ('.$item['TenNguoiDung'].')
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/xoaNguoiDung/'.$item['MaNguoiDung'].'">
                    <input type="submit" name="btnXoa" class="btn btn-danger" value="Xóa người dùng">
                    </form>
                  </div>
                </div>
              </div>
            </div>';                
            }
        }
        ?>
    </tbody>
  </table>
  
  <form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/load_themNguoiDung" method="post">
    &nbsp;&nbsp;&nbsp;<input type="submit" name="btnThem" class="btn btn-primary" value="Thêm người dùng">
  </form>


  




  











  



