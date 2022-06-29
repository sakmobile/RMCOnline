<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Things extends CI_Controller {

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
			'view_list' => 'things_view',
			 'title' => 'รายชื่อครุภัณฑ์',
			 'menu' => 'things'
		  ];
		  $data['budge'] = $this->things_model->get_budget();
		  $data['way'] = $this->things_model->get_way();
		  $data['ttype'] = $this->things_model->get_ttype();
		  $data['pasadu_oder'] = $this->things_model->get_pasadu_oder();
		  $data['company'] = $this->things_model->get_company();
		  $data['pasadu'] = $this->pasadu_model->get_pasadu();
		  $Pasadu_ID = "Pasadu ID";
          $data['pa'] = $this->pasadu_model->get_pasadu();
		  $data['id'] = $this->pasadu_model->getMaxID();
		  $data['maxID'] = $data['id'][0]->$Pasadu_ID;
		$this->load->view('/layout/template',$data);
		}
	}
}