<?php
    class QLyMay extends CI_Controller
     {
        public function __construct()
        {
            parent::__construct();
            $this->load->Model('m_MayCon');
            if(!$this->session->userdata('MaNguoiDung')){
            return redirect('Login');
            }
        }


        public function load_TTMayCon($maPhongMay)   
        {
            if($this->input->post('btnXem') != '')
            {   
                $data['dsMay'] = $this->m_MayCon->ds_maycon($maPhongMay);
                $data['MaPhongMay'] = $maPhongMay;
                $this->load->view('home/header');
                $view['$content'] = $this->load->view('home/PhongMay/DanhSachMayCon/v_QLyMay', $data);
                $this->load->view('home/footer');
            }
            else
            {
                $data['dsMay'] = $this->m_MayCon->ds_maycon($maPhongMay);
                $data['MaPhongMay'] = $maPhongMay;
                $this->load->view('home/header');
                $view['$content'] = $this->load->view('home/PhongMay/DanhSachMayCon/v_QLyMay', $data);
                $this->load->view('home/footer');
            }
        }
        
        public function xoaMay($maMayCon,$maPhongMay)
        {
            
            if($this->input->post('btnXoa') != '')
            {
                $this->m_MayCon->xoa_may($maMayCon,$maPhongMay);
                $data['dsMay'] = $this->m_MayCon->ds_maycon($maPhongMay);                
                $this->load_TTMayCon($maPhongMay);

            }
        }
        public function themMay($maPhongMay)
        {
            $this->load->library('form_validation');
            if($this->input->post('btnThem') != '')
            {
                $this->form_validation->set_rules('MaMayCon','MaMayCon','required|min_length[2]');
                $dsMayCon =$this->m_MayCon->ds_maycon($maPhongMay);
                $maMayCon = $_POST['MaMayCon'];
                $tinhTrang = $_POST['TinhTrang'];

                if($this->form_validation->run()==true)
                {    
                    foreach ($dsMayCon as $item) {
                        if($item['MaMayCon'] == $maMayCon)
                            {
                               $error= $this->session->set_flashdata('msg','Máy đã tồn tại!');
                                redirect('http://localhost/WebPhongMay/index.php/QLyMay/load_TTMayCon/'.$item['MaPhongMay'].'');
                                return;
                                  
                            }       
                }
                
                    $this->m_MayCon->them_maycon($maMayCon, $tinhTrang, $maPhongMay);
                    $this->load_TTMayCon($maPhongMay);
            }
            else{
                $this->load_TTMayCon($maPhongMay);
            }
        }
    }

        public function suaTTMay($maMayCon, $maPhongMay)
        {
            if($this->input->post('btnSua') != '')
            {
                $tinhTrang = $_POST['TinhTrang'];  
                $this->m_MayCon->sua_may($maMayCon, $tinhTrang);
                $this->load_TTMayCon($maPhongMay);
            }
        }
    }
?>