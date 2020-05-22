<h4>Thời khóa biểu Admin</h4>

<table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Mã thời khóa biểu</th>
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
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($dsThoiKhoaBieu as $item)
                {
                    echo '<tr>';
                    echo '<th>'.$item['MaThoiKhoaBieu'].'</th>';
                    echo '<td>'.$item['MaMonHoc'].'</td>';
                    echo '<td>'.$item['TenMonHoc'].'</td>';
                    echo '<td>'.$item['MaGiangVien'].'</td>';
                    echo '<td>'.$item['TenGiangVien'].'</td>';
                    echo '<td>'.$item['MaPhongMay'].'</td>';
                    echo '<td>'.$item['BuoiHoc'].'</td>';
                    echo '<td>'.$item['ThuHoc'].'</td>';
                    echo '<td>'.$item['SoBuoi'].'</td>';
                    echo '<td>'.$item['ThoiGianBatDau'].'</td>';
                    echo '<td>'.$item['ThoiGianKetThuc'].'</td>';
                    echo '<td>'.$item['GhiChu'].'</td>';
                    echo '</tr>';
                }            
            ?>
        </tbody>
        </table>