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
	public function SL()
	{
		// Mở và thống kê số lượt truy cập trong file txt
		// r : Mở file ở chế độ chỉ đọc
		// w: Mở file ở chế độ chỉ viết , nếu file không tồn tại sẽ khởi tạo nếu file , nếu file tồn tại nội dung sẽ bị xóa, con trỏ đặt ở đầu file
		$fp = "count.txt";
		$fo = fopen($fp,'r');
		$fr = fread($fo, filesize($fp));
		$fr++;
		$fc =fclose($fo);
		// Mở ghi lại số lượng bằng thuộc tính w, w++
		$fo =  fopen($fp, 'w');
		$fw = fwrite($fo, $fr);
		$fc = fclose($fo);
		$session['fr'] = $fr;
		return $fr;
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
				// $this->SL();
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
							'Luottruycap' =>$this->SL(),
							'logged_in' => TRUE
						);
						$this->session->set_userdata($nguoidungmoi);
						if(isset($_POST['NhoMatKhau'])){
							setcookie('tenNguoiDung_cookie',$tenNguoiDung,time() +(86400*30),"/");
							setcookie('matKhau_cookie',$matKhau,time() +(86400*30),"/");
							$data['content'] = 'home/intro';
							$this->load->view('home/index', $data);
							return;
						}	
							$data['content'] = 'home/intro';
							$this->load->view('home/index',$data);
							return;
					}

			}
				$this->session->set_flashdata('msg','Tên đăng nhập hoặc mật khẩu không hợp lệ !');
				$this->index();
				
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('nguoidungmoi');

		echo "<script>window.location='http://localhost/WebPhongMay/index.php'</script>";
	}


}
