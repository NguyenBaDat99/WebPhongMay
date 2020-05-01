<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QLyMonHoc extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->Model("m_MonHoc");
        $this->load->Model("m_NguoiDung");
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper(array('url', 'form'));
        if(!$this->session->userdata('MaNguoiDung')){
        return redirect('Login');
        }
        
        $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
        $GLOBALS['dsNguoiDung'] = $this->m_NguoiDung->ds_nguoidung(); 
        $GLOBALS['dsGiangVienPhuTrach'] = $this->m_MonHoc->ds_giangvienphutrach(); 
        $GLOBALS['dsNganhHoc'] = $this->m_MonHoc->ds_nganhhoc(); 
        $GLOBALS['dsSoTinChi'] = $this->m_MonHoc->ds_sotinchi(); 
    }

    
    
    // public $data = null;


    // public function duLieu($duLieuMH, $duLieuND)
    // {
    //     $data['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
    //     $data['dsNguoiDung'] = $this->m_NguoiDung->ds_nguoidung();  
    //     return $data;
    // }
    

	public function index()
	{
        $this->load->view('home/header');

        // $data['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
        // $data['dsNguoiDung'] = $this->m_NguoiDung->ds_nguoidung(); 
        
        // $view['content'] = $this->load->view('home/MonHoc/v_QLyMonHoc',$GLOBALS);
        $this->load->view('home/MonHoc/v_QLyMonHoc',$GLOBALS);

        $this->load->view('home/footer');
    }

    public function themMonHoc()
    {
        if($this->input->post('btnThem') != '')
        {
            $maMonHoc = $_POST['MaMonHoc'];
            $tenMonHoc = $_POST['TenMonHoc'];
            $nganhHoc = $_POST['NganhHoc'];
            $soTinChi = $_POST['SoTinChi'];
            $giangVienPhuTrach = $_POST['GiangVienPhuTrach'];
            $trangThai = $_POST['TrangThai'];
            
            $this->m_MonHoc->them_monhoc($maMonHoc, $tenMonHoc, $nganhHoc, $soTinChi, $giangVienPhuTrach, $trangThai);
            $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
            $this->index();
        }
    }

    public function suaMonHoc()
    {
        // $currentURL= current_url().'/'.$this->input->post('ttTiemKiem');
        if($this->input->post('btnSua') != '')
        {
            $maMonHoc = $_POST['MaMonHoc'];
            $tenMonHoc = $_POST['TenMonHoc'];
            $nganhHoc = $_POST['NganhHoc'];
            $soTinChi = $_POST['SoTinChi'];
            $giangVienPhuTrach = $_POST['GiangVienPhuTrach'];
            $trangThai = $_POST['TrangThai'];

            $this->m_MonHoc->sua_monhoc($maMonHoc, $tenMonHoc, $nganhHoc, $soTinChi, $giangVienPhuTrach, $trangThai);
            $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
            $this->index();
            // echo '<script>
            //         window.history.back();
            //     </script>';
            // redirect($currentURL);
        }
    }

    public function xoaMonHoc($maMonHoc)
    {
        if($this->input->post('btnXoa') != '')
        {
            $this->m_MonHoc->xoa_monhoc($maMonHoc);
            $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
            $this->index();
        }
    }

    public function timMonHoc()
    {
        if($this->input->post('ttTimKiem') != '')
        {            
            $thongTin = $this->input->post('ttTimKiem');

            // $GLOBALS['dsMonHoc'] = $this->m_MonHoc->tim_monhoc($thongTin);
            // $this->index();

            $this->load->view('home/header');

            $GLOBALS['dsMonHoc'] = $this->m_MonHoc->tim_monhoc($thongTin);
            $GLOBALS['thongTin'] = $thongTin;
            $view['content'] = $this->load->view('home/MonHoc/v_TimMonHoc', $GLOBALS);

            $this->load->view('home/footer');
        }
    }

    public function sapXepTenMH()
    {
        if($this->input->post('btnApDung') != '')
        {
            if(isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_tenMH($_POST['sapXep']);
                $this->index();
            }
        }
    }
    public function sapXepMaMH()
    {
        if($this->input->post('btnApDung') != '')
        {
            if(isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_maMH($_POST['sapXep']);
                $this->index();
            }
        }
    }

    public function sapXepTrangThaiMH()
    {
        if($this->input->post('btnApDung') != '')
        {
            if(isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_trangthai($_POST['sapXep']);
                $this->index();
            }
        }
    }

    public function sapXepGVMH()
    {
        if($this->input->post('btnApDung') != '')
        {
            if(!isset($_POST['chonLua']) && !isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
                $this->index();
            }
            else if(!isset($_POST['chonLua']) && isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_gv_sapXep_only($_POST['sapXep']);
                $this->index();
            }
            else if(isset($_POST['chonLua']) && !isset($_POST['sapXep']))
            {
                $dsGV = "";
                foreach($_POST['chonLua'] as $item)
                {
                $dsGV = $dsGV."'".$item."',";
                }
                $dsGV = substr($dsGV, 0, strlen($dsGV) -1);
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_gv_Only($dsGV);
                $this->index();
            }
            else
            {
                $dsGV = "";
                foreach($_POST['chonLua'] as $item)
                {
                    $dsGV = $dsGV."'".$item."',";
                }
                $dsGV = substr($dsGV, 0, strlen($dsGV) -1);
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_gv($dsGV, $_POST['sapXep']);
                $this->index(); 
            }
        }
    }

    public function sapXepNganhHoc()
    {
        if($this->input->post('btnApDung') != '')
        {
            if(!isset($_POST['chonLua']) && !isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
                $this->index();
            }
            else if(!isset($_POST['chonLua']) && isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_nganhhoc_sapXep_only($_POST['sapXep']);
                $this->index();
            }
            else if(isset($_POST['chonLua']) && !isset($_POST['sapXep']))
            {
                $dsNganhHoc = "";
                foreach($_POST['chonLua'] as $item)
                {
                $dsNganhHoc = $dsNganhHoc."'".$item."',";
                }
                $dsNganhHoc = substr($dsNganhHoc, 0, strlen($dsNganhHoc) -1);
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_nganhhoc_Only($dsNganhHoc);
                $this->index();
            }
            else
            {
                $dsNganhHoc = "";
                foreach($_POST['chonLua'] as $item)
                {
                    $dsNganhHoc = $dsNganhHoc."'".$item."',";
                }
                $dsNganhHoc = substr($dsNganhHoc, 0, strlen($dsNganhHoc) -1);
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_nganhhoc($dsNganhHoc, $_POST['sapXep']);
                $this->index(); 
            }
        }
    }

    public function sapXepSoTinChi()
    {
        if($this->input->post('btnApDung') != '')
        {
            if(!isset($_POST['chonLua']) && !isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
                $this->index();
            }
            else if(!isset($_POST['chonLua']) && isset($_POST['sapXep']))
            {
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_tinchi_sapXep_only($_POST['sapXep']);
                $this->index();
            }
            else if(isset($_POST['chonLua']) && !isset($_POST['sapXep']))
            {
                $dsSoTinChi = "";
                foreach($_POST['chonLua'] as $item)
                {
                $dsSoTinChi = $dsSoTinChi."".$item.",";
                }
                $dsSoTinChi = substr($dsSoTinChi, 0, strlen($dsSoTinChi) -1);
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_tinchi_Only($dsSoTinChi);
                $this->index();
            }
            else
            {
                $dsSoTinChi = "";
                foreach($_POST['chonLua'] as $item)
                {
                    $dsSoTinChi = $dsSoTinChi."".$item.",";
                }
                $dsSoTinChi = substr($dsSoTinChi, 0, strlen($dsSoTinChi) -1);
                $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_sapxep_tinchi($dsSoTinChi, $_POST['sapXep']);
                $this->index(); 
            }
        }
    }
}
	
?>

