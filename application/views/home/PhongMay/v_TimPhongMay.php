<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Danh sách phòng máy</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" name="ttTimKiem" type="search" placeholder="Nhập thông tin" aria-label="Search" required disabled>
    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm kiếm</button> -->
    <input type="submit" name="btnTimKiem" class="btn btn-outline-dark" value="Tìm kiếm" disabled>
  </form>
</nav>
<div class="container-fluid">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Mã phòng máy</th>
        <th>Tên phòng máy</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($dsPhongMay as $item) {
        echo '<tr>';
        echo '<td>'.$item['MaPhongMay'].'</td>';
        echo '<td>'.$item['TenPhongMay'].'</td>';
        echo '<td>
          <form action="http://localhost/WebPhongMay/index.php/QLyPhongMay/xoa_PhongMay/'.$item['MaPhongMay'].'" method="post">                            
         <button type="button" formaction="http://localhost/WebPhongMay/index.php/QLyPhongMay/suaPhongMay/'.$item['MaPhongMay'].'" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalSua'.$item['MaPhongMay'].'">
                  Sửa
          </button> &emsp;
          <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa'.$item['MaPhongMay'].'">
                  Xóa
          </button> &emsp; 
          <input type="submit" name="btnXem" formaction="http://localhost/WebPhongMay/index.php/QLyPhongMay" class="btn btn-outline-info" value="Xem">    
          </form>       
          </td>
          </tr>';?>
          <?php
        //Modal xóa Người dùng
        echo '<div class="modal fade" id="modalXoa'.$item['MaPhongMay'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xóa phòng máy</h5>         
                  </div>
                  <div class="modal-body">
                    Bạn có muốn xóa phòng máy có mã là: '.$item['MaPhongMay'].' ('.$item['TenPhongMay'].')
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyPhongMay/xoa_PhongMay/'.$item['MaPhongMay'].'">
                    <input type="submit" name="btnXoa" class="btn btn-danger" value="Xóa phòng máy">
                    </form>
                  </div>
                </div>
              </div>
            </div>';
            // Modal Sửa 
            echo '<div class="modal fade" id="modalSua'.$item['MaPhongMay'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa phòng máy</h5>         
                  </div>
                  <div class="modal-body">
                  <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyPhongMay/suaPhongMay/'.$item['MaPhongMay'].'">
                      <label>Mã phòng máy:</label>
                      <input class="form-control" style="width: 300px;" name="MaPhongMay" value="'.$item['MaPhongMay'].'" readonly>
                      <label>Tên phòng máy:</label>
                      <input class="form-control" style="width: 300px;" name="TenPhongMay" value="'.$item['TenPhongMay'].'"
                  </div>
                  <br>
                
                  <div class="modal-footer"></div>
                    <input type="submit" name="btnSua" class="btn btn-primary" value="Lưu phòng máy">
                    <button type="btnHuy" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                    </form>

                    
                </div>
              </div>
            </div>
            ';      
          }
          ?>   
  </tbody>
</table>
<form action="http://localhost/WebPhongMay/index.php/QLyPhongMay">
    <input type="submit" class="btn btn-dark" value="Quay lại">
</form>
</div>

