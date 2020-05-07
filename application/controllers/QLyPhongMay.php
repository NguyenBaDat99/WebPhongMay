<?php
class QLyPhongMay extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('m_PhongMay');
        if(!$this->session->userdata('MaNguoiDung')){
        return redirect('Login');
        }
    }
    public function index()
    {   
        $this->load->view('home/header');
        $dsPhongMay['dsPhongMay'] = $this->m_PhongMay->ds_phongmay();
        $view['$content'] = $this->load->view('home/PhongMay/v_QLyPhongMay', $dsPhongMay);
        $this->load->view('home/footer');

    }

    public function xoa_PhongMay($maPhongMay)
    {
        
        if($this->input->post('btnXoa') != '')
        {
            $this->m_PhongMay->xoa_phongmay_id($maPhongMay);
            $this->index();
        }
    }
    
    public function themPhongMay()
    {
        
        if($this->input->post('btnHuy') != '')
        {
            $this->index();
        }
       if($this->input->post('btnThem') != '')
        {
            $this->load->library('form_validation');
            //Kiểm tra các điều kiện hợp lệ cơ bản
            $this->form_validation->set_rules('TenPhongMay','Ten phong may','required|min_length[4]');
            if($this->form_validation->run() == TRUE)
            {
                $maPhongMay = $this->input->post('MaPhongMay');
                $TenPhongMay = $this->input->post('TenPhongMay');
                $ds_phongmay = $this->m_PhongMay->ds_phongmay();
                    foreach($ds_phongmay as $item)
                        {
                            if($item['TenPhongMay'] == $TenPhongMay)
                            {
                               $error= $this->session->set_flashdata('msg','Phòng máy đã tồn tại!');
                                redirect('http://localhost/WebPhongMay/index.php/QLyPhongMay');
                                return;
                                  
                            }
                        }
                        $this->m_PhongMay->them_phongmay($maPhongMay,$TenPhongMay);
                        $this->index();
                        
            }
            else
            {
                
                $this->index();
            }
           
        }
    }

    public function suaPhongMay()
    {
       
        if($this->input->post('btnHuy') != '')
        {
            $this->index();
        }
        if($this->input->post('btnSua') != '')
        {   
            $this->load->library('form_validation');
            $this->form_validation->set_rules('TenPhongMay','Ten phong may','required|min_length[4]');
            if($this->form_validation->run() == TRUE)
            {
                $TenPhongMay = $this->input->post('TenPhongMay');
                $maPhongMay = $this->input->post('MaPhongMay'); 
                $dsPhongMay = $this->m_PhongMay->ds_phongmay();
                foreach ($dsPhongMay as $item ) {
                 if($item['TenPhongMay'] == $TenPhongMay)
                 {
                    $error= $this->session->set_flashdata('msg','Phòng máy đã tồn tại!');
                    redirect('http://localhost/WebPhongMay/index.php/QLyPhongMay');
                    return;
                 }
             }
                $this->m_PhongMay->sua_phongmay($maPhongMay,$TenPhongMay);
                $this->index();  
            
            }    
        }
        
    }

    public function tim_PhongMay()
    {           
            $thongTin = $this->input->post('ttTimKiem');
            $this->load->view('home/header');            
            $dsPhongMay['dsPhongMay'] = $this->m_PhongMay->tim_phongmay($thongTin);
            $view['content'] = $this->load->view('home/PhongMay/v_TimPhongMay',$dsPhongMay);
            $this->load->view('home/footer');      
    }

    
}
?>