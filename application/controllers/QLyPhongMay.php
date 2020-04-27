<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QLyPhongMay extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // $this->load->Model("_Model");
        $this->load->library('session');
        $this->load->helper('url');
        if(!$this->session->userdata('MaNguoiDung')){
        return redirect('Login');
    }
    }

	public function index()
	{
        $data['content'] = 'home/PhongMay/v_QLyPhongMay';
		$this->load->view('home/index', $data);
    }
}
	
?>