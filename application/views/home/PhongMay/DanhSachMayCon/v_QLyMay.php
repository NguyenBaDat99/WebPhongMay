<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Thông tin phòng máy <?php echo $MaPhongMay; ?> </a>
</nav>
<div class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Mã máy con</th>
        <th>Tình trạng</th>
        <th>Phòng máy</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($dsMay as $item) {
        echo '<tr>';
        echo '<td>'.$item['MaMayCon'].'</td>';
        echo '<td>'.$item['TinhTrang'].'</td>';
        echo '<td>'.$item['MaPhongMay'].'</td>';
        echo '<td>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalSua'.$item['MaMayCon'].'">
        Sửa
        </button>
        &nbsp;
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalXoa'.$item['MaMayCon'].'">
        Xóa
        </button>
        </td>
        </tr>';
                 //Modal sửa máy
        echo '<div class="modal fade" id="modalSua'.$item['MaMayCon'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sửa tình trạng máy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">                          
        <form method="POST" action="http://localhost/WebPhongMay/index.php/QLyMay/suaTTMay/'.$item['MaMayCon'].'/'.$item['MaPhongMay'].'">
        <div class="form-row">
        <div class="form-group col-md-4">
        <label>Mã máy</label>
        <input type="text" name="MaMayCon" class="form-control" id="inputMaMayCon" value="'.$item['MaMayCon'].'" readonly>
        </div>
        <div class="form-group col-md-8">
        <label>Tình trạng:</label>
        <select class="custom-select" name="TinhTrang">
        <option value="On">On</option>
        <option value="Off">Off</option>
        <option value="Broken">Broken</option>
        </select>
        </div>
        </div>
        <div class="modal-footer"></div>
        
        <input type="submit" name="btnSua" class="btn btn-primary" value="Lưu thông tin máy">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
        </form>
        </div>
        </div>
        </div>
        </div>';
                //Modal xóa máy
        echo '<div class="modal fade" id="modalXoa'.$item['MaMayCon'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xóa Máy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        Bạn có muốn xóa máy '.$item['MaMayCon'].'
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <form method="post" action="http://localhost/WebPhongMay/index.php/QLyMay/xoaMay/'.$item['MaMayCon'].'/'.$item['MaPhongMay'].'">
        <input type="submit" name="btnXoa" class="btn btn-danger" value="Xóa máy">
        </form>
        </div>
        </div>
        </div>
        </div>';
      }
      ?>
    </tbody>
  </table>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalThemMay">
    Thêm máy
  </button>
  <!-- Modal thêm máy -->
  <div class="modal fade" id="modalThemMay" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm máy</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php
          echo '<form method="POST" action="http://localhost/WebPhongMay/index.php/QLyMay/themMay/'.$MaPhongMay.'">';
          ?>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Mã máy:</label>
              <input type="text" name="MaMayCon" class="form-control" id="inputMaMayCon" required autofocus>
            </div>
            <div class="form-group col-md-8">
              <label>Tình trạng:</label>
              <select class="custom-select" name="TinhTrang">
                <option value="On">On</option>
                <option value="Off">Off</option>
                <option value="Broken">Broken</option>
                
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
          <input type="submit" name="btnThem" class="btn btn-primary" value="Thêm">  
          
          
        </div>
      </form>        
    </div>
  </div>
</div>
<?php
$error = $this->session->flashdata('msg');
if($error== true){
  echo  '<div class="alert alert-danger" style="width: 280px; margin-top:10px;"> '.$this->session->flashdata('msg').'</div>';
}
?>
<a href="http://localhost/WebPhongMay/index.php/QLyPhongMay" class="btn btn-dark" role="button" aria-pressed="true">Quay lại</a>
</div>
