<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alljob extends CI_Controller {

	public function index()
	{
		if ($this->session->id  == "") {

			redirect('Login/logout');
		} else {

		$data = [
			'view_list' => 'alljob_view',
			 'title' => 'รายการแจ้งซ่อมทั้งหมด',
			 'menu' => 'alljob' 
		  ];
		  $data['job']= $this->job_model->get_job();
		$this->load->view('/layout/template',$data);
		}
	}
}
