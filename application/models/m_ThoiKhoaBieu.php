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

}
?>
