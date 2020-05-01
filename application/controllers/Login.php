<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->Model("m_NguoiDung");
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('form_validation');
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

			// $this->form_validation->set_rules('tenNguoiDung', 'Tên người dùng', 'required|min_length[6]');
   //      	$this->form_validation->set_rules('matKhau', 'Mật khẩu', 'required|min_length[6]|max_length[25]');
   //      	 if($this->form_validation->run() == FALSE){
				
   //      	}
			foreach($users as $item)
			{
				// tennguoidung chu hoa hay thuong deu vao duoc
				$tenDB	= strtolower($tenNguoiDung);
				$tenbox = strtolower($item['TenNguoiDung']);

				if($tenDB == $tenbox && $item['MatKhau'] == $matKhau)
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
					return;
				}	
				
	
			}
			$this->session->set_flashdata('msg','Tên đăng nhập hoặc mật khẩu không hợp lệ !');
			
			//redirect(Login);
			$this->index();
			// $data['content'] = 'login/f_login';
			// $this->load->view('login/index', $data);
		}
	}

	 public function logout()
    {
         $this->session->sess_destroy();
   		 $this->session->unset_userdata('nguoidungmoi');
    	echo "<script>alert('Đăng xuất..!!');window.location='http://localhost/WebPhongMay/index.php'</script>";
    }



    
}
