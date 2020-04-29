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
    }

	public function index()
	{
        // $data['content'] = 'home/MonHoc/v_QLyMonHoc';
        // $this->load->view('home/index', $data);
        
        $this->load->view('home/header');

        $data['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
        $data['dsNguoiDung'] = $this->m_NguoiDung->ds_nguoidung();
        $view['content'] = $this->load->view('home/MonHoc/v_QLyMonHoc', $data);

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
            $this->index();
        }
    }

    public function suaMonHoc()
    {
        // $currentURL= current_url();
        if($this->input->post('btnSua') != '')
        {
            $maMonHoc = $_POST['MaMonHoc'];
            $tenMonHoc = $_POST['TenMonHoc'];
            $nganhHoc = $_POST['NganhHoc'];
            $soTinChi = $_POST['SoTinChi'];
            $giangVienPhuTrach = $_POST['GiangVienPhuTrach'];
            $trangThai = $_POST['TrangThai'];

            $this->m_MonHoc->sua_monhoc($maMonHoc, $tenMonHoc, $nganhHoc, $soTinChi, $giangVienPhuTrach, $trangThai);
            $this->index();
            
            // redirect($currentURL);
        }
    }

    public function xoaMonHoc($maMonHoc)
    {
        if($this->input->post('btnXoa') != '')
        {
            $this->m_MonHoc->xoa_monhoc($maMonHoc);
            $this->index();
        }
    }

    public function timMonHoc()
    {
        if($this->input->post('btnTimKiem') != '')
        {            
            $thongTin = $this->input->post('ttTimKiem');
            
            $this->load->view('home/header');

            $data['dsMonHoc'] = $this->m_MonHoc->tim_monhoc($thongTin);
            $data['dsNguoiDung'] = $this->m_NguoiDung->ds_nguoidung();
            $view['content'] = $this->load->view('home/MonHoc/v_TimMonHoc', $data);

            $this->load->view('home/footer');
        }
    }

}
	
?>

