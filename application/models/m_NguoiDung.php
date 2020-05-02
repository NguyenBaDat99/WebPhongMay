<?php
class m_NguoiDung extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'nguoi_dung';
    }

    public function ds_nguoidung()    
    {
        $query=$this->db->get("nguoi_dung");
        return $query->result_array();
    }

        

    public function xoa_nguoidung_id($maNguoiDung)
    {
        $this->db->query("delete from nguoi_dung where MaNguoiDung='".$maNguoiDung."'");
    }

    public function them_nguoidung($tenNguoiDung, $matKhau, $loaiNguoiDung)
    {
        $maNguoiDung = 1;
        $ds_nguoidung = $this->ds_nguoidung();
        foreach($ds_nguoidung as $item)
        {
            if($maNguoiDung < $item['MaNguoiDung'])
            {
                break;
            }
            $maNguoiDung++;
        }
         $maHoaMK= password_hash($matKhau, PASSWORD_DEFAULT);
        $this->db->query("insert into nguoi_dung values("
        .$maNguoiDung.",'".$tenNguoiDung."', '".$maHoaMK."', '".$loaiNguoiDung."')");
        //$this->db->query("insert into nguoi_dung values(5,'".$tenNguoiDung."', '".$matKhau."')");
    }

    public function tim_nguoidung($thongTin)
    {
        if(is_numeric($thongTin))
        {
            $query=$this->db->query("select * from nguoi_dung where MaNguoiDung=".$thongTin);
            return $query->result_array();
        }
        else
        {
            
            // $query=$this->db->query("call tim_nguoidung('".$thongTin."');");
            // return $query->result_array();
            $query = $this->db->query("call tim_nguoidung('".$thongTin."')");
            $res = $query->result_array();

            $query->next_result(); 
            $query->free_result(); 

            return $res;
        }
    }
    public function tim_nguoidung_ten($tenNguoiDung)
    {
        $query=$this->db->query("select * from nguoi_dung where TenNguoiDung='".$tenNguoiDung."'");
        return $query->row_array();
    }

    public function tim_nguoidung_id($maNguoiDung)
    {
        $query=$this->db->query("select * from nguoi_dung where MaNguoiDung=".$maNguoiDung."");
        return $query->row_array();
    }

    public function sua_nguoidung($maNguoiDung, $tenNguoiDung, $matKhau)
    {
        $maHoaMK= password_hash($matKhau, PASSWORD_DEFAULT);
        $this->db->query("update nguoi_dung set TenNguoiDung='".$tenNguoiDung."',MatKhau='".$maHoaMK."' where MaNguoiDung=".$maNguoiDung."");
    }

    public function sua_nguoidung_loainguoidung($maNguoiDung, $loaiNguoiDung)
    {
        $this->db->query("update nguoi_dung set LoaiNguoiDung='".$loaiNguoiDung."' where MaNguoiDung=".$maNguoiDung."");
    }
    


    



    // public function product_list()
    // {
    //     $query=$this->db->get("sanpham");
    //     return $query->result_array();
    // }

    // public function product_detail($masp){
    //     $query=$this->db->query("select * from Sanpham where MaSP=$masp");
    //     return $query->result_array();
    // }
}
?>
