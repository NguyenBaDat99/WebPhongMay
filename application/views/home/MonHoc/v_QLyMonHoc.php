<!-- <h3>Danh sách người dùng</h3> -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/WebPhongMay/index.php/QLyMonHoc">Danh sách môn học</a>
  
  <form class="form-inline" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/timMonHoc" method="post">
    <?php
      if($this->session->userdata('LoaiNguoiDung') == "Admin")
      {
        echo '<button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#modalThemMonHoc">
          Thêm môn học
        </button>';
      }
      ?>
    
    &emsp;
    <input class="form-control mr-sm-2" name="ttTimKiem" type="search" placeholder="Nhập thông tin" aria-label="Search" required maxlength="20">
    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm kiếm</button> -->
    <input type="submit" name="btnTimKiem" class="btn btn-outline-dark" value="Tìm kiếm">
  </form>
</nav>

<table class="table">
    <thead>
      <tr>
        <!-- <th>Mã môn học</th> -->
        <th>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Mã môn học</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-weight: normal">
              <form class="px-3" method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/sapXepMaMH">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios1" value="ASC" checked>Sắp xếp chữ cái A-Z
              </div>
              <div class="dropdown-divider"></div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios2" value="DESC">Sắp xếp chữ cái Z-A
              </div>
              <div class="dropdown-divider"></div>
              <input type="submit" name="btnApDung" class="btn btn-outline-dark" value="Áp dụng">
              </form>
            </div>
          </div>
        </th>

        <!-- <th>Tên môn học</th> -->
        <th>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Tên môn học</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-weight: normal">
              <form class="px-3" method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/sapXepTenMH">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios1" value="ASC" checked>Sắp xếp chữ cái A-Z
              </div>
              <div class="dropdown-divider"></div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios2" value="DESC">Sắp xếp chữ cái Z-A
              </div>
              <div class="dropdown-divider"></div>
              <input type="submit" name="btnApDung" class="btn btn-outline-dark" value="Áp dụng">
              </form>
            </div>
          </div>
        </th>

        <!-- <th>Ngành học</th> -->
        <th>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Ngành học</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-weight: normal">
              <form class="px-3" method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/sapXepNganhHoc">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios1" value="ASC">Sắp xếp chữ A-Z
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios2" value="DESC">Sắp xếp chữ Z-A
              </div>
              <div class="dropdown-divider"></div>
              <?php
                  foreach($dsNganhHoc as $item)
                  {
                    echo'
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="chonLua[]" id="checkbox" value="'.$item['NganhHoc'].'">
                          '.$item['NganhHoc'].'
                        </div>
                    ';
                  }
              ?>
              <div class="dropdown-divider"></div>
              <input type="submit" name="btnApDung" class="btn btn-outline-dark" value="Áp dụng">
              </form>
            </div>
          </div>
        </th>

        <!-- <th>Số tín chỉ</th> -->
        <th>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Số tín chỉ</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-weight: normal">
              <form class="px-3" method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/sapXepSoTinChi">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios1" value="ASC">Sắp tăng dần
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios2" value="DESC">Sắp giảm dần
              </div>
              <div class="dropdown-divider"></div>
              <?php
                  foreach($dsSoTinChi as $item)
                  {
                    echo'
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="chonLua[]" id="checkbox" value="'.$item['SoTinChi'].'">
                          '.$item['SoTinChi'].'
                        </div>
                    ';
                  }
              ?>
              <div class="dropdown-divider"></div>
              <input type="submit" name="btnApDung" class="btn btn-outline-dark" value="Áp dụng">
              </form>
            </div>
          </div>
        </th>

        <!-- <th>Giảng viên phụ trách</th> -->
        <th>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Giảng viên phụ trách</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-weight: normal">
              <form class="px-3" method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/sapXepGVMH">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios1" value="ASC">Sắp xếp chữ cái A-Z
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios2" value="DESC">Sắp xếp chữ cái Z-A
              </div>
              <div class="dropdown-divider"></div>
              <?php
                  foreach($dsGiangVienPhuTrach as $item)
                  {
                    echo'
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="chonLua[]" id="checkbox" value="'.$item['GiangVienPhuTrach'].'">
                          '.$item['GiangVienPhuTrach'].'
                        </div>
                    ';
                  }
              ?>
              <div class="dropdown-divider"></div>
              <input type="submit" name="btnApDung" class="btn btn-outline-dark" value="Áp dụng">
              </form>
            </div>
          </div>
        </th>

        <!-- <th>Trạng thái</th> -->
        <th>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Trạng thái</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-weight: normal">
              <form class="px-3" method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/sapXepTrangThaiMH">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios1" value="All" checked>Tất cả
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios1" value="Open">Open
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sapXep" id="exampleRadios2" value="Close">Close
              </div>
              <div class="dropdown-divider"></div>
              <input type="submit" name="btnApDung" class="btn btn-outline-dark" value="Áp dụng">
              </form>
            </div>
          </div>
        </th>

        <!-- <th>Thao tác</th> -->
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
                        <div class="dropdown-divider"></div>
                        <input type="submit" name="btnSua" class="btn btn-primary left" value="Sửa môn học">
                        <button type="button" class="btn btn-secondary right" data-dismiss="modal">Hủy</button>
                      </form>
                      </div>
                      <!--
                      <div class="modal-footer">
                      <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/suaMonHoc">
                        <input type="submit" name="btnSua" class="btn btn-primary left" value="Sửa môn học">
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                      </div>
                      -->
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
  
  <!-- Nút thêm môn học -->
  <?php
    if($this->session->userdata('LoaiNguoiDung') == "Admin") //Kiểm tra loại người dùng là Admin để mở chức năng thêm môn học
    {?>
        <div class="dropdown-divider"></div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalThemMonHoc">
          Thêm môn học
        </button>

        <!-- Modal thêm môn học -->
        <div class="modal fade" id="modalThemMonHoc" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Thêm môn học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyMonHoc/themMonHoc">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>Mã môn học</label>
                    <input type="text" name="MaMonHoc" class="form-control" id="inputMaMonHoc" placeholder="ITDL01" required autofocus>
                  </div>
                  <div class="form-group col-md-8">
                    <label>Tên môn học</label>
                    <input type="text" name="TenMonHoc" class="form-control" id="inputTenMonHoc" placeholder="Lập trình cơ sở dữ liệu" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label>Ngành học</label>
                    <input type="text" name="NganhHoc" class="form-control" id="inputNganhHoc" placeholder="Khoa học máy tính">
                  </div>
                  <div class="form-group col-md-4">
                    <label>Số tín chỉ</label>
                    <input type="number" name="SoTinChi" class="form-control" id="inputSoTinChi" placeholder="4" min="1" max="10" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Giảng viên phụ trách</label>
                        <select id="inputGiangVienPhuTrach" name="GiangVienPhuTrach" class="form-control">
                          <option selected></option>
                          <?php
                            foreach($dsNguoiDung as $item)
                            {
                              echo '<option>'.$item['TenNguoiDung'].'</option>';
                            }
                          ?>
                        </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Trạng thái</label>
                        <select id="inputTrangThai" name="TrangThai" class="form-control">
                          <option selected>Open</option>
                          <option>Close</option>
                        </select>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <input type="submit" name="btnThem" class="btn btn-primary" value="Thêm môn học">
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
<?php }
    ?>
<br/>
<br/>
                      

    
  


  




  











  




           


