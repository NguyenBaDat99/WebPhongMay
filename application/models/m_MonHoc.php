<?php
class m_MonHoc extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'mon_hoc';
    }

    public function ds_monhoc()    
    {
        $query=$this->db->get("mon_hoc");
        return $query->result_array();
    }

    public function xoa_monhoc($maMonHoc)
    {
        $this->db->query("delete from mon_hoc where MaMonHoc='".$maMonHoc."'");
    }

    public function them_monhoc($maMonHoc, $tenMonHoc, $nganhHoc, $soTinChi, $giangVienPhuTrach, $trangThai)
    {
        $this->db->query("insert into mon_hoc 
        values('".$maMonHoc."', '".$tenMonHoc."', '".$nganhHoc."', ".$soTinChi.", '".$giangVienPhuTrach."', '".$trangThai."')");
    }

    public function sua_monhoc($maMonHoc, $tenMonHoc, $nganhHoc, $soTinChi, $giangVienPhuTrach, $trangThai)
    {
        $this->db->query("update mon_hoc  
        set TenMonHoc = '".$tenMonHoc."', NganhHoc = '".$nganhHoc."', SoTinChi = ".$soTinChi.", GiangVienPhuTrach = '".$giangVienPhuTrach."', TrangThai = '".$trangThai."'
        where MaMonHoc = '".$maMonHoc."'");
    }

    public function tim_monhoc($thongTin)
    {
        if(is_numeric($thongTin))
        {
            $query=$this->db->query("select * from mon_hoc where SoTinChi=".$thongTin);
            return $query->result_array();
        }
        else
        {
            $query = $this->db->query("call tim_monhoc('".$thongTin."')");
            $res = $query->result_array();

            $query->next_result(); 
            $query->free_result(); 

            return $res;
        }
    }


    // public function them_nguoidung($tenNguoiDung, $matKhau, $loaiNguoiDung)
    // {
    //     $maNguoiDung = 1;
    //     $ds_nguoidung = $this->ds_nguoidung();
    //     foreach($ds_nguoidung as $item)
    //     {
    //         if($maNguoiDung < $item['MaNguoiDung'])
    //         {
    //             break;
    //         }
    //         $maNguoiDung++;
    //     }
    //     $this->db->query("insert into nguoi_dung values("
    //     .$maNguoiDung.",'".$tenNguoiDung."', '".$matKhau."', '".$loaiNguoiDung."')");
    //     //$this->db->query("insert into nguoi_dung values(5,'".$tenNguoiDung."', '".$matKhau."')");
    // }

    // public function tim_nguoidung($thongTin)
    // {
    //     if(is_numeric($thongTin))
    //     {
    //         $query=$this->db->query("select * from nguoi_dung where MaNguoiDung=".$thongTin);
    //         return $query->result_array();
    //     }
    //     else
    //     {
    //         $query=$this->db->query("call tim_nguoidung('".$thongTin."');");
    //         return $query->result_array();
    //     }
    // }
    // public function tim_nguoidung_ten($tenNguoiDung)
    // {
    //     $query=$this->db->query("select * from nguoi_dung where TenNguoiDung='".$tenNguoiDung."'");
    //     return $query->row_array();
    // }

    // public function tim_nguoidung_id($maNguoiDung)
    // {
    //     $query=$this->db->query("select * from nguoi_dung where MaNguoiDung=".$maNguoiDung."");
    //     return $query->row_array();
    // }

    // public function sua_nguoidung($maNguoiDung, $tenNguoiDung, $matKhau, $loaiNguoiDung)
    // {
    //     $this->db->query("update nguoi_dung set TenNguoiDung='".$tenNguoiDung."',MatKhau='".$matKhau."', LoaiNguoiDung='".$loaiNguoiDung."' where MaNguoiDung=".$maNguoiDung."");
    // }

}
?>
