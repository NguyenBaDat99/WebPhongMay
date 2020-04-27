<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QLyThoiKhoaBieu extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        if(!$this->session->userdata('MaNguoiDung')){
        return redirect('Login');
    }
        // $this->load->Model("_Model");
}

public function index()
{
    $data['content'] = 'home/ThoiKhoaBieu/v_QLyThoiKhoaBieu';
    $this->load->view('home/index', $data);
}
}

?>