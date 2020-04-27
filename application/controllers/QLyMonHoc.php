<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QLyMonHoc extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->Model("m_MonHoc");
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

        $dsMonHoc['dsMonHoc'] = $this->m_MonHoc->ds_monhoc();
        $view['content'] = $this->load->view('home/MonHoc/v_QLyMonHoc', $dsMonHoc);

        $this->load->view('home/footer');
    }
}
	
?>

