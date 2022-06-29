<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alljob extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
