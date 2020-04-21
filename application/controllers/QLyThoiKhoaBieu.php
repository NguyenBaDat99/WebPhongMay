<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QLyThoiKhoaBieu extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // $this->load->Model("_Model");
        $this->load->library('session');
    }

	public function index()
	{
        $data['content'] = 'home/ThoiKhoaBieu/v_QLyThoiKhoaBieu';
		$this->load->view('home/index', $data);
    }
}
	
?>