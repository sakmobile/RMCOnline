<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class office extends CI_Controller {


	public function index()
	{
		if ($this->session->id  == "") {

			redirect('Login/logout');
		} else {
		$data = [
			'view_list' => 'office_view',
			 'title' => 'รายชื่อหน่วยงาน',
			 'menu' => 'office' 
		  ];
          $data['section'] = $this->section_model->get_section();
		$this->load->view('/layout/template',$data);
		}
	}
}