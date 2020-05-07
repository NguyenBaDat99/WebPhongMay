<?php
    class m_MayCon extends CI_Model
    {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->table = 'may_con';
        }

        public function ds_maycon($maPhongMay)
        {
            $query=$this->db->query("select * from may_con where MaPhongMay='".$maPhongMay."'");
            return $query->result_array();
        }

        public function tim_maycon($maMayCon)
        {
            $query=$this->db->query("select * from may_con where MaMayCon='".$maMayCon."'");
            return $query->row_array();
        }
        
        public function xoa_may($maMayCon,$maPhongMay)
        {
            $this->db->query("delete from may_con where MaMayCon='".$maMayCon."' and MaPhongMay='".$maPhongMay."'");
        }
        //Thêm máy
        public function them_maycon($maMayCon, $tinhTrang, $maPhongMay)
        {
            $this->db->query("insert into may_con 
            values('".$maMayCon."', '".$tinhTrang."', '".$maPhongMay."')");
        }

        //sửa thông tin máy
        public function sua_may($maMayCon, $tinhTrang)
        {
            $this->db->query("update may_con set TinhTrang='".$tinhTrang."'where MaMayCon = '".$maMayCon."'");
        }
        
    }
?>