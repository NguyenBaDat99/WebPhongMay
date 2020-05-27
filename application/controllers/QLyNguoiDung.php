<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QLyNguoiDung extends CI_Controller {

	function __construct()
    {
        parent::__construct();
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
        // không cho user truy cap bang link 
        if($this->session->userdata['LoaiNguoiDung'] != "Admin"){
            echo '<script>
                    window.history.back();
                </script>';
        }
        $this->load->view('home/header');
        $dsNguoiDung['dsNguoiDung'] = $this->m_NguoiDung->ds_nguoidung();
        $view['content'] = $this->load->view('home/NguoiDung/v_QLyNguoiDung', $dsNguoiDung);
        $this->load->view('home/footer');
        // $data['content'] = 'home/v_QLyNguoiDung';
		// $this->load->view('home/index', $data);
    }
    
    public function xoaNguoiDung($maNguoiDung)
    {
        if($this->input->post('btnXoa') != '')
        {
            $this->m_NguoiDung->xoa_nguoidung_id($maNguoiDung);
            $this->index();
        }
    }

    public function suaLoaiNguoiDung()
    {
        if($this->input->post('btnSua') != '')
        {
            $maNguoiDung = $_POST['MaNguoiDung'];
            $loaiNguoiDung = $_POST['LoaiNguoiDung'];
            $this->m_NguoiDung->sua_nguoidung_loainguoidung($maNguoiDung, $loaiNguoiDung);
            $this->index();
        }
    }

    // public function btnSuaND($MaDangNhap)
    // {
    //     if($this->input->post('btnSua') != '')
    //     {
    //         $this->load_suaNguoiDung($MaDangNhap);
    //     }
    // }

    public function load_suaNguoiDung($maDangNhap)
    {
        $this->load->view('home/header');

        $data['NguoiDung'] = $this->m_NguoiDung->tim_nguoidung_id($maDangNhap);
        $this->load->view('home/NguoiDung/v_SuaNguoiDung', $data);

        $this->load->view('home/footer');
    }
    //Tải view Thêm người dùng
    public function load_themNguoiDung()
    {
        $this->load->view('home/header');

        $this->load->view('home/NguoiDung/v_ThemNguoiDung');

        $this->load->view('home/footer');
    }
    //Các hành động để thêm người dùng
    public function themNguoiDung()
    {
        if($this->input->post('btnHuy') != '')
        {
            $this->index();
        }
        if($this->input->post('btnThem') != '')
        {
            $this->load->library('form_validation');
            //Kiểm tra các điều kiện hợp lệ cơ bản
            $this->form_validation->set_rules('TenNguoiDung', 'Tên người dùng', 'required|min_length[3]');
            $this->form_validation->set_rules('MatKhau', 'Mật khẩu', 'required|min_length[3]');
            $this->form_validation->set_rules('XacNhanMatKhau', 'Xác nhận mật khẩu', 'required|matches[MatKhau]');

            if($this->form_validation->run() == TRUE)
            {
                //Giá trị vào biến
                $tenNguoiDung = $this->input->post('TenNguoiDung');
                $matKhau = $this->input->post('MatKhau');
                $loaiNguoiDung = $this->input->post('LoaiNguoiDung');

                //Kiểm lỗi trùng Tên đăng nhập
                $ds_nguoidung = $this->m_NguoiDung->ds_nguoidung();
                foreach($ds_nguoidung as $item)
                {
                    if($item['TenNguoiDung'] == $tenNguoiDung)
                    {
                        $this->session->set_flashdata('msg','Tên người dùng đã tồn tại!');
                        $this->load_themNguoiDung();
                        return;
                    }
                }

                //Các lỗi đã được xử => Thêm người dùng vào database
                $this->m_NguoiDung->them_nguoidung($tenNguoiDung, $matKhau, $loaiNguoiDung);
                echo "<script>alert('Thêm thành công..!!');</script>";
                $this->index();
            }
            else{
                // $this->form_validation->set_message('Ten dang nhap', 'Invalid username or password');
			    // return;
                // redirect('/QLyNguoiDung/Load_themNguoiDung');
                $this->session->set_flashdata('msg','');
                $this->load_themNguoiDung();
            }

        }
    }

    public function suaNguoiDung()
    {
        $maNguoiDung = $this->input->post('MaNguoiDung');
        if($this->input->post('btnHuy') != '')
        {
            if($this->session->userdata['LoaiNguoiDung'] == "Admin")
            {
                $this->index();
            }
            else
            {
                $data['content'] = 'home/intro';
                $this->load->view('home/index', $data);
                //redirect('/QLyPhongMay');
            }
            
        }
        if($this->input->post('btnSua') != '')
        {
            $this->load->library('form_validation');
            //Kiểm tra các điều kiện hợp lệ cơ bản
            $this->form_validation->set_rules('TenNguoiDung', 'Tên người dùng', 'required|min_length[3]');
            $this->form_validation->set_rules('MatKhau', 'Mật khẩu mới', 'required|min_length[3]');
            $this->form_validation->set_rules('XacNhanMatKhau', 'Xác nhận mật khẩu mới', 'required|matches[MatKhau]');
            $this->form_validation->set_rules('XacNhanMatKhauCu', 'Xác nhận mật khẩu cũ', 'required');

            if($this->form_validation->run() == TRUE)
            {
                //Giá trị vào biến
               
                $tenNguoiDung = $this->input->post('TenNguoiDung');
                $matKhau = $this->input->post('MatKhau');
                $matKhauCu = $this->input->post('XacNhanMatKhauCu');
                $loaiNguoiDung = 'User';
                if($this->session->userdata['LoaiNguoiDung'] == "Admin")
                {
                    $loaiNguoiDung = $this->input->post('LoaiNguoiDung');
                }             
                
                //Kiểm lỗi trùng Tên đăng nhập
                // $ds_nguoidung = $this->m_NguoiDung->ds_nguoidung();
                // foreach($ds_nguoidung as $item)
                // {
                //     if($item['MaNguoiDung'] != $maNguoiDung && $item['TenNguoiDung'] == $tenNguoiDung)
                //     {
                //         $this->load_suaNguoiDung($maNguoiDung);

                //         return;
                //     }
                // }

                //Kiểm tra mật khẩu cũ
                $matKhauXacNhan = $this->m_NguoiDung->tim_nguoidung_ten($tenNguoiDung);
                $isCorrect = password_verify($matKhauCu, $matKhauXacNhan['MatKhau']);
				if( !($matKhauXacNhan['MatKhau'] == $matKhauCu|| $isCorrect))   //còn  kiem tra mk chưa băm
				{
                    $this->session->set_flashdata('msg','Mật khẩu cũ không chính xác!');
                    $this->load_suaNguoiDung($maNguoiDung);
                    return;
                }

                //Các lỗi đã được xử => Sửa thông tin người dùng        
                $this->m_NguoiDung->sua_nguoidung($maNguoiDung, $tenNguoiDung, $matKhau, $loaiNguoiDung);
                 echo "<script>alert('Sửa thành công..!!');</script>";
                 
                 $data['content'] = 'home/intro';
                 $this->load->view('home/index', $data);
            }
            else
            {
                $this->session->set_flashdata('msg','');
                $this->load_suaNguoiDung($maNguoiDung);
            }

        }
    }

    //Hàm tìm kiếm người dùng
    public function tim_NguoiDung()
    {
        if($this->input->post('btnTimKiem') != '')
        {
            $thongTin = $this->input->post('ttTimKiem');
            
            $this->load->view('home/header');

            $dsNguoiDung['dsNguoiDung'] = $this->m_NguoiDung->tim_nguoidung($thongTin);
            $view['content'] = $this->load->view('home/NguoiDung/v_TimNguoiDung', $dsNguoiDung);

            $this->load->view('home/footer');
        }
    }

}
	
?>