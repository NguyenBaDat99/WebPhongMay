<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->Model("m_NguoiDung");
		$this->load->library('session');
		$this->load->helper('url');
    }

	public function index()
	{
        $data['content'] = 'login/f_login';
		$this->load->view('login/index', $data);
	}

	// Cach 1
	public function check_login()
	{
		if($this->input->post('btnDangNhap') != '')
		{
			$tenNguoiDung = $this->input->post('TenNguoiDung');
			$matKhau = $this->input->post('MatKhau');
			$users = $this->m_NguoiDung->ds_nguoidung();

			foreach($users as $item)
			{
				if($item['TenNguoiDung'] == $tenNguoiDung && $item['MatKhau'] == $matKhau)
				{
					$nguoidungmoi = array(
						'MaNguoiDung' => $item['MaNguoiDung'],
						'TenNguoiDung' => $item['TenNguoiDung'],
						'MatKhau' => $item['MatKhau'],
						'LoaiNguoiDung' => $item['LoaiNguoiDung'],
						'logged_in' => TRUE
					);
					$this->session->set_userdata($nguoidungmoi);

					// $data['content'] = 'home/v_QLyNguoiDung';
					// $this->load->view('home/index', $data);
					$data['content'] = 'home/PhongMay/v_QLyPhongMay';
					$this->load->view('home/index', $data);
					//redirect('/QLyPhongMay');
					// return;
				}	
			}
			
			$this->index();
			// $data['content'] = 'login/f_login';
			// $this->load->view('login/index', $data);
		}
	}

    
}
