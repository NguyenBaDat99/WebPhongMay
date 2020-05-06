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
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($dsPhongMay as $item) {
        echo '<tr>';
        echo '<td>'.$item['MaPhongMay'].'</td>';
        echo '<td>'.$item['TenPhongMay'].'</td>';
        echo '<tr>';
      }
    ?>
  </tbody>
</table>
<form action="http://localhost/WebPhongMay/index.php/QLyPhongMay">
    <input type="submit" class="btn btn-dark" value="Quay lại">
</form>
</div>

