<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QLyThoiKhoaBieu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->Model("m_ThoiKhoaBieu");
        $this->load->Model("m_MonHoc");
        $this->load->Model("m_NguoiDung");
        $this->load->Model("m_PhongMay");

        if (!$this->session->userdata('MaNguoiDung')) {
            return redirect('Login');
        }
        $GLOBALS['dsThoiKhoaBieu'] = $this->m_ThoiKhoaBieu->ds_thoikhoabieu();
        $GLOBALS['dsThoiKhoaBieu_CaNhan'] = $this->m_ThoiKhoaBieu->ds_thoikhoabieu_nguoidung($this->session->userdata('MaNguoiDung'));
        $GLOBALS['dsMonHoc'] = $this->m_MonHoc->ds_monhoc_open();
        $GLOBALS['dsGiangVien'] = $this->m_NguoiDung->ds_nguoidung();
        $GLOBALS['dsPhongMay'] = $this->m_PhongMay->ds_phongmay();
    }

    public function index()
    {
        $this->load->view('home/header');

        if ($this->session->userdata('LoaiNguoiDung') == "Admin") {
            $this->load->view('home/ThoiKhoaBieu/v_QLyThoiKhoaBieu_Admin', $GLOBALS);
        } else {
            $this->load->view('home/ThoiKhoaBieu/v_QLyThoiKhoaBieu_User', $GLOBALS);
        }


        $this->load->view('home/footer');
    }

    public function themThoiKhoaBieu()
    {
        if ($this->input->post('btnThem') != '') {
            $monHoc = explode(' - ', $_POST['MonHoc']);
            // $giangVien = explode(' - ', $_POST['GiangVien']);
            $phongMay = explode(' - ', $_POST['PhongMay']);

            $giangVien = $this->m_NguoiDung->tim_nguoidung_ten($monHoc[2]);

            $thuHoc = explode(' ', $_POST['ThuHoc']);
            $buoiHoc = explode(' ', $_POST['BuoiHoc']);

            $soBuoi = $_POST['SoBuoi'];
            $thoiGianBatDau = $_POST['ThoiGianBatDau'];
            // $thoiGianKetThuc = $_POST['ThoiGianKetThuc'];
            $ghiChu = $_POST['GhiChu'];

            $isTKBrong = $this->m_ThoiKhoaBieu->is_thoikhoabieutrung($phongMay[0], $buoiHoc[0], $thuHoc[0], $thoiGianBatDau);

            if ($isTKBrong == null) {
                // echo 'Kiểm tra TKB không bị trùng. Được phép thêm TKB mới';
                $this->m_ThoiKhoaBieu->them_thoikhoabieu($monHoc[0], $monHoc[1], $giangVien['MaNguoiDung'], $giangVien['TenNguoiDung'], $phongMay[0], $phongMay[1], $buoiHoc[0], $thuHoc[0], $soBuoi, $thoiGianBatDau, $ghiChu);
                $GLOBALS['dsThoiKhoaBieu'] = $this->m_ThoiKhoaBieu->ds_thoikhoabieu();
                $this->index();
            } else {
                // echo 'TKB bị trùng!!! Không được phép thêm';
                echo "<script>alert('Trùng thời khóa biểu!!!');</script>";
                $this->index();
            }
        }
    }
}
