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
		if(isset($_POST['btnDangNhap']))
		{
			$tenNguoiDung = $this->input->post('TenNguoiDung');
			$matKhau = $this->input->post('MatKhau');
			$users = $this->m_NguoiDung->ds_nguoidung();
			foreach($users as $item)
			{
				$tenDB	= strtolower($tenNguoiDung);  // tennguoidung chu hoa hay thuong deu vao duoc
				$tenbox = strtolower($item['TenNguoiDung']);  
				$isCorrect = password_verify($matKhau, $item['MatKhau']); // KT mat khau da băm   
					if($tenDB == $tenbox && $item['MatKhau'] == $matKhau||$tenDB == $tenbox && $isCorrect)   //còn  kiem tra mk chưa băm
					{	
						$nguoidungmoi = array(
							'MaNguoiDung' => $item['MaNguoiDung'],
							'TenNguoiDung' => $item['TenNguoiDung'],
							'MatKhau' => $item['MatKhau'],
							'LoaiNguoiDung' => $item['LoaiNguoiDung'],
							'logged_in' => TRUE
						);
						$this->session->set_userdata($nguoidungmoi);
						if(isset($_POST['NhoMatKhau'])){
							setcookie('tenNguoiDung_cookie',$tenNguoiDung,time() +(86400*30),"/");
							setcookie('matKhau_cookie',$matKhau,time() +(86400*30),"/");

							$data['content'] = 'home/intro';
							$this->load->view('home/index', $data);

							//redirect('/QLyPhongMay');
							return;
						}
						
							$data['content'] = 'home/intro';
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
		echo "<script>window.location='http://localhost/WebPhongMay/index.php'</script>";
	}


}
