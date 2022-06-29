<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Things extends CI_Controller {

	
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