<?php
class m_ThoiKhoaBieu extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'thoi_khoa_bieu';
    }

    public function ds_thoikhoabieu()    
    {
        $query=$this->db->get("thoi_khoa_bieu");
        return $query->result_array();
    }

    public function ds_thoikhoabieu_nguoidung($maGiangVien)
    {
        $query = $this->db->query("select * FROM thoi_khoa_bieu where MaGiangVien = ". $maGiangVien);
        return $query->result_array();

    }

    public function is_thoikhoabieutrung($maPM, $buoiHoc, $thuHoc, $thoiGianBatDau)
    {
        $query = $this->db->query("select * FROM thoi_khoa_bieu where MaPhongMay = ".$maPM." and ( LOCATE('".$buoiHoc."',BuoiHoc)>0 OR LOCATE(BuoiHoc,'".$buoiHoc."')>0 ) and ThuHoc=".$thuHoc." and ThoiGianKetThuc>='".$thoiGianBatDau."'");
        return $query->result_array();
    }

    public function them_thoikhoabieu($maMH, $tenMH, $maGV, $tenGV, $maPM, $tenPM, $buoiHoc, $thuHoc, $soBuoi, $tgBatDau, $tgKetThuc, $ghiChu)
    {
        $maTKB = 1;
        $ds_thoikhoabieu = $this->ds_thoikhoabieu();
        foreach($ds_thoikhoabieu as $item)
        {
            if($maTKB < $item['MaThoiKhoaBieu'])
            {
                break;
            }
            $maTKB++;
        }
        $this->db->query("insert into thoi_khoa_bieu 
        values(".$maTKB.", '".$maMH."', '".$tenMH."', ".$maGV.", '".$tenGV."', ".$maPM.", '".$tenPM."', '".$buoiHoc."', ".$thuHoc.", ".$soBuoi.", '".$tgBatDau."', '".$tgKetThuc."', '".$ghiChu."')");
    }

}
?>
