<!-- <h3>Danh sách người dùng</h3> -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Danh sách môn học</a>
  <form class="form-inline" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/timMonHoc" method="post">
    <input class="form-control mr-sm-2" name="ttTimKiem" type="search" placeholder="Nhập thông tin" aria-label="Search" required maxlength="20" readonly>
    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm kiếm</button> -->
    <input type="submit" name="btnTimKiem" class="btn btn-outline-dark" value="Tìm kiếm" disabled>
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
        <!-- <th>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Giảng viên phụ trách
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <form class="px-4 py-3">
                  
                  <div class="form-group">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck">
                      <label class="form-check-label" for="dropdownCheck">
                        Sắp xếp A-Z
                      </label>
                      <br/>
                      <input type="checkbox" class="form-check-input" id="dropdownCheck">
                      <label class="form-check-label" for="dropdownCheck">
                        Sắp xếp Z-A
                      </label>

                      <?php
                        foreach($dsMonHoc as $item){
                          echo '<br/>
                              <input type="checkbox" class="form-check-input" id="dropdownCheck">
                              <label class="form-check-label" for="dropdownCheck">'
                                .$item['GiangVienPhuTrach'].
                              '</label>';     
                        }
                      ?>
                    </div>
                  </div>
                  
              </form>
            </div>
          </div>
        </th> -->
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
            //Kiểm tra trạng thái môn học đóng hoặc mở
            if($item['TrangThai'] == "Open") //Nếu trạng thái mở tô màu DEFAULT
            {
                echo '<tr>';
                echo '<td>'.$item['MaMonHoc'].'</td>';
                echo '<td>'.$item['TenMonHoc'].'</td>';
                echo '<td>'.$item['NganhHoc'].'</td>';
                echo '<td>'.$item['SoTinChi'].'</td>';
                echo '<td>'.$item['GiangVienPhuTrach'].'</td>';
                echo '<td>'.$item['TrangThai'].'</td>';
                if($this->session->userdata('LoaiNguoiDung') == "Admin") //Kiểm tra loại người dùng là Admin để mở chức năng sửa xóa
                {
                    echo '<td>
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalSua'.$item['MaMonHoc'].'">
                          Sửa
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa'.$item['MaMonHoc'].'">
                          Xóa
                        </button>
                        </td>';
                }
            }
            else //Nếu trạng thái mở tô màu XÁM
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
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalSua'.$item['MaMonHoc'].'">
                          Sửa
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa'.$item['MaMonHoc'].'">
                          Xóa
                        </button>
                        </td>';
                }
            }
            //Modal sửa thông tin môn học
            echo '<div class="modal fade" id="modalSua'.$item['MaMonHoc'].'" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Sửa môn học</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/suaMonHoc">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label>Mã môn học</label>
                        <input type="text" name="MaMonHoc" class="form-control" id="inputMaMonHoc" value="'.$item['MaMonHoc'].'" readonly autofocus>
                      </div>
                      <div class="form-group col-md-8">
                        <label>Tên môn học</label>
                        <input type="text" name="TenMonHoc" class="form-control" id="inputTenMonHoc" value="'.$item['TenMonHoc'].'" required>
                      </div>
                    </div>
                        <div class="form-row">
                          <div class="form-group col-md-8">
                            <label>Ngành học</label>
                            <input type="text" name="NganhHoc" class="form-control" id="inputNganhHoc" value="'.$item['NganhHoc'].'">
                          </div>
                          <div class="form-group col-md-4">
                            <label>Số tín chỉ</label>
                            <input type="number" name="SoTinChi" class="form-control" id="inputSoTinChi" value="'.$item['SoTinChi'].'" min="1" max="10" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Giảng viên phụ trách</label>
                                <select id="inputGiangVienPhuTrach" name="GiangVienPhuTrach" class="form-control">
                                  <option selected>'.$item['GiangVienPhuTrach'].'</option>';
                                    foreach($dsNguoiDung as $i)
                                    {
                                      if($i['TenNguoiDung'] != $item['GiangVienPhuTrach']){
                                        echo '<option>'.$i['TenNguoiDung'].'</option>';
                                      }
                                    }
                                  echo '
                                </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Trạng thái</label>
                                <select id="inputTrangThai" name="TrangThai" class="form-control">';
                                  if($item['TrangThai'] == 'Close')
                                  {
                                    echo '<option checked>Close</option>
                                          <option>Open</option>';
                                  }
                                  else
                                  {
                                    echo '<option checked>Open</option>
                                          <option>Close</option>';
                                  }
                                echo '</select>
                          </div>
                        </div>
                        <input type="submit" name="btnSua" class="btn btn-primary right" value="Sửa môn học">
                      </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <!-- <button type="button" class="btn btn-primary">Thêm môn học</button> -->
                      </div>
                    </div>
                  </div>
                </div>';
          
          //Modal xóa môn học
          echo '<div class="modal fade" id="modalXoa'.$item['MaMonHoc'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xóa môn học</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Bạn có muốn xóa môn học có mã là: '.$item['MaMonHoc'].'('.$item['TenMonHoc'].')

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/xoaMonHoc/'.$item['MaMonHoc'].'">
                        <input type="submit" name="btnXoa" class="btn btn-danger" value="Xóa môn học">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>';
        }
        ?>
    </tbody>
  </table>
  
  <!-- Nút quay lại  -->
  <form action="http://localhost/WebPhongMay/index.php/QLyMonHoc">
    <input type="submit" class="btn btn-dark" value="Quay lại">
  </form>
  
  


  




  











  




           


