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
            if($item['TenNguoiDung'] == $this->session->userdata('TenNguoiDung'))
            {
                echo '<td></td>';
            }
            else if($item['LoaiNguoiDung'] == 'Admin')
            {
              echo '<td>
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalSua'.$item['MaNguoiDung'].'">
                    Sửa
                  </button>
                  </td>';
              echo'</tr>';
            }
            else
            {
              echo '<td>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalSua'.$item['MaNguoiDung'].'">
                  Sửa
                </button>
                &nbsp;
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa'.$item['MaNguoiDung'].'">
                  Xóa
                </button>
                </td>
                </tr>';         
            }
            //Modal sửa người dùng
            echo '<div class="modal fade" id="modalSua'.$item['MaNguoiDung'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Sửa loại người dùng</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">                          
                  <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/suaLoaiNguoiDung">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label>Mã người dùng</label>
                        <input type="text" name="MaNguoiDung" class="form-control" id="inputMaNguoiDung" value="'.$item['MaNguoiDung'].'" readonly autofocus>
                      </div>
                      <div class="form-group col-md-8">
                        <label>Tên người dùng</label>
                        <input type="text" name="TenNguoiDung" class="form-control" id="inputTenNguoiDung" value="'.$item['TenNguoiDung'].'" readonly autofocus>
                      </div>
                    </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Loại người dùng</label>
                                <select id="inputLoaiNguoiDung" name="LoaiNguoiDung" class="form-control">';
                                  if($item['LoaiNguoiDung'] == 'User')
                                  {
                                    echo '<option checked>User</option>
                                          <option>Admin</option>';
                                  }
                                  else
                                  {
                                    echo '<option checked>Admin</option>
                                          <option>User</option>';
                                  }
                                echo '</select>
                          </div>
                      </div>
                        <div class="dropdown-divider"></div>
                        <input type="submit" name="btnSua" class="btn btn-primary left" value="Sửa người dùng">
                        <button type="button" class="btn btn-secondary right" data-dismiss="modal">Hủy</button>
                      </form>
                </div>
              </div>
            </div>
          </div>';
      //Modal xóa Người dùng
      echo '<div class="modal fade" id="modalXoa'.$item['MaNguoiDung'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Xóa người dùng</h5>
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
        ?>
    </tbody>
  </table>
  
  <form action="http://localhost/WebPhongMay/index.php/QLyNguoiDung/load_themNguoiDung" method="post">
    &nbsp;&nbsp;&nbsp;<input type="submit" name="btnThem" class="btn btn-primary" value="Thêm người dùng">
  </form>


  




  











  



