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

    public function ds_monhoc_open()
    {
        $query=$this->db->query("select * from mon_hoc where TrangThai='Open' ");
        return $query->result_array();
    }

    //Lấy ds môn học SẮP XẾP theo TÊN MÔN HỌC
    public function ds_monhoc_sapxep_tenMH($sapXep)
    {
        $query=$this->db->query("select * from mon_hoc order by TenMonHoc ".$sapXep);
        return $query->result_array();
    }
    //---------------------------------------



    //Lấy ds môn học SẮP XẾP theo MÃ MÔN HỌC
    public function ds_monhoc_sapxep_maMH($sapXep)
    {
        $query=$this->db->query("select * from mon_hoc order by MaMonHoc ".$sapXep);
        return $query->result_array();
    }
    //---------------------------------------



    //Lấy ds môn học SẮP XẾP theo TRẠNG THÁI MÔN HỌC
    public function ds_monhoc_sapxep_trangthai($trangThai)
    {
        if($trangThai == 'All')
        {
            $query=$this->db->get("mon_hoc");
            return $query->result_array();
        }
        else
        {
            $query=$this->db->query("select * from mon_hoc where TrangThai = '".$trangThai."'");
            return $query->result_array();
        }        
    }
    //---------------------------------------



    //Lấy ds môn học SẮP XẾP theo GIÁO VIÊN PHỤ TRÁCH
    public function ds_monhoc_sapxep_gv_sapXep_only($sapXep)
    {
        $query=$this->db->query("select * from mon_hoc order by GiangVienPhuTrach ".$sapXep);
        return $query->result_array();
    }

    public function ds_monhoc_sapxep_gv_Only($dsGV)
    {
        $query=$this->db->query("select * from mon_hoc where GiangVienPhuTrach in (".$dsGV.")");
        return $query->result_array();
    }

    public function ds_monhoc_sapxep_gv($dsGV, $sapXep)
    {
        $query=$this->db->query("select * from mon_hoc where GiangVienPhuTrach in (".$dsGV.") order by GiangVienPhuTrach ".$sapXep);
        return $query->result_array();
    }
    //---------------------------------------
   


    //Lấy ds môn học SẮP XẾP theo NGÀNH HỌC
    public function ds_monhoc_sapxep_nganhhoc_sapXep_only($sapXep)
    {
        $query=$this->db->query("select * from mon_hoc order by NganhHoc ".$sapXep);
        return $query->result_array();
    }

    public function ds_monhoc_sapxep_nganhhoc_Only($dsNganhHoc)
    {
        $query=$this->db->query("select * from mon_hoc where NganhHoc in (".$dsNganhHoc.")");
        return $query->result_array();
    }

    public function ds_monhoc_sapxep_nganhhoc($dsNganhHoc, $sapXep)
    {
        $query=$this->db->query("select * from mon_hoc where NganhHoc in (".$dsNganhHoc.") order by NganhHoc ".$sapXep);
        return $query->result_array();
    }
    //---------------------------------------


    //Lấy ds môn học SẮP XẾP theo SỐ TÍN CHỈ
    public function ds_monhoc_sapxep_tinchi_sapXep_only($sapXep)
    {
        $query=$this->db->query("select * from mon_hoc order by SoTinChi ".$sapXep);
        return $query->result_array();
    }

    public function ds_monhoc_sapxep_tinchi_Only($dsSoTinChi)
    {
        $query=$this->db->query("select * from mon_hoc where SoTinChi in (".$dsSoTinChi.")");
        return $query->result_array();
    }

    public function ds_monhoc_sapxep_tinchi($dsSoTinChi, $sapXep)
    {
        $query=$this->db->query("select * from mon_hoc where SoTinChi in (".$dsSoTinChi.") order by SoTinChi ".$sapXep);
        return $query->result_array();
    }
    //---------------------------------------

    public function ds_nganhhoc()
    {
        $query=$this->db->query("select distinct NganhHoc FROM mon_hoc");
        return $query->result_array();
    }

    public function ds_giangvienphutrach()
    {
        $query=$this->db->query("select distinct GiangVienPhuTrach FROM mon_hoc");
        return $query->result_array();
    }

    public function ds_sotinchi()
    {
        $query=$this->db->query("select distinct SoTinChi FROM mon_hoc");
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
