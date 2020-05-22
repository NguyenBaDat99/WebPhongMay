<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QLyThoiKhoaBieu extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->Model("m_ThoiKhoaBieu");

        if(!$this->session->userdata('MaNguoiDung')){
            return redirect('Login');
        }
        $GLOBALS['dsThoiKhoaBieu']= $this->m_ThoiKhoaBieu->ds_thoikhoabieu();
    }

    public function index()
    {
        $this->load->view('home/header');
        
        if($this->session->userdata('LoaiNguoiDung') == "Admin")
        {
            $this->load->view('home/ThoiKhoaBieu/v_QLyThoiKhoaBieu_Admin', $GLOBALS);
        }
        else
        {
            $this->load->view('home/ThoiKhoaBieu/v_QLyThoiKhoaBieu_User', $GLOBALS);
        }
        

        $this->load->view('home/footer');
    }
}

?>