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
		  $data['get_pasadu_state'] = $this->things_model->get_pasadu_state();
		  $data['get_years'] = $this->things_model->get_years();
		  //$data['maxID'] = $data['id'][0]->$Pasadu_ID;
		$this->load->view('/layout/template',$data);
		}
	}
public function Edit(){
	$id = $this->input->post('id_');

	$data = $this->pasadu_model->getdetail($id);
	echo json_encode($data);
}
public function update(){

	

	$id = $this->input->post("id_");
	// $res = $this->things_model->update($id, $data);
	//$compe = $this->db->query($sql);
	$sql = "UPDATE `pasadu` SET `Noid` = '".$this->input->post('Noid')."',
	`NAME` = '".$this->input->post('NAME')."',
	`Model` = '".$this->input->post('Model')."', 
      `SERIAL_NO` = '".$this->input->post('SERIAL_NO')."', 
	  `COMPANY` = '".$this->input->post('company')."',
	   `Div` = '".$this->input->post('pasadu_oder')."',
	    `TYPE` = '".$this->input->post('ttype')."',
		 `TMONEY` = '".$this->input->post('way')."',
		  `KMONEY` = '".$this->input->post('budge')."',
		   `PERUNIT` = '".$this->input->post('PERUNIT')."', 
		   `RECEIVE` = '".$this->input->post('RECEIVE')."', 
		   `NOID-Old` = '".$this->input->post('NOID_Old')."',
		   `Expire DOC Date`= '".$this->input->post('doc_date')."',
		   `New Date` = '".$this->input->post('new_date')."', 
		   `Section oder` = '".$this->input->post('pasadu_oder')."',
			`อายุการใช้งาน` = '".$this->input->post('Exp')."',
			 `ค่าซาก1` = '".$this->input->post('ks1')."',
			  `ค่าซาก` = '".$this->input->post('ks')."',
			   `วันที่คำนวณ` = '".$this->input->post('date_sum')."',
			    `ค่าเสื่อมสะสม` = '".$this->input->post('data_ss')."',
				 `มูลค่าสุทธิ` = '".$this->input->post('sum')."',
				  `DOCNO` = '".$this->input->post('doc')."',
				   `วันที่` = '".$this->input->post('approve')."', 
				   `ปีงบ` = '".$this->input->post('year_ng')."' WHERE `Pasadu ID` = '".$id."'";

				   $compe = $this->db->query($sql);
      echo json_encode($compe);

}
public function add(){

	$oder = `Section oder`;
	$new_date = "`New Date`";
	$Expire_DOC_Date = `Expire DOC Date`;
	$data[$oder] =  $this->input->post('pasadu_oder');
	$data[$new_date] =$this->input->post('new_date');
	$data[$Expire_DOC_Date] =$this->input->post('doc_date');
	$data = array(
	'Noid' => $this->input->post('Noid'),
	'NAME' =>$this->input->post('NAME'),
	'Model' =>$this->input->post('Model'),
	'SERIAL_NO' =>$this->input->post('SERIAL_NO'),
	'COMPANY' =>$this->input->post('company'),
	'Div' =>$this->input->post('pasadu_oder'),
	'TYPE' =>$this->input->post('ttype'),
	'TMONEY' =>$this->input->post('way'),
	'KMONEY' =>$this->input->post('budge'),
	'PERUNIT' =>$this->input->post('PERUNIT'),
	'RECEIVE' =>$this->input->post('RECEIVE'),
	'NOID-Old' =>$this->input->post('NOID_Old'),
	'อายุการใช้งาน' =>$this->input->post('Exp'),
	'ค่าซาก1' =>$this->input->post('ks1'),
	'ค่าซาก' =>$this->input->post('ks'),
	'วันที่คำนวณ' =>$this->input->post('date_sum'),   
	'ค่าเสื่อมสะสม' =>$this->input->post('data_ss'),
	'มูลค่าสุทธิ' =>$this->input->post('sum'),
	'DOCNO' =>$this->input->post('doc'),
	'วันที่' =>$this->input->post('approve'),
	'ปีงบ' =>$this->input->post('year_ng')
	);

	//$res = $this->things_model->add($data);
	$sql = "INSERT INTO `pasadu` (`Noid`,`NAME`,`Model`,`SERIAL_NO`,`COMPANY`,`Div`,`TYPE`,`TMONEY`,`KMONEY`,`PERUNIT`,`RECEIVE`,`NOID-Old`,`Expire DOC Date`,`New Date`,`Section oder`,`อายุการใช้งาน`,`ค่าซาก1`,`ค่าซาก`,`วันที่คำนวณ`,`ค่าเสื่อมสะสม`,`มูลค่าสุทธิ`,`DOCNO`,`วันที่`,`ปีงบ`)
            values ('".$this->input->post('Noid')."',
	'".$this->input->post('NAME')."',
	'".$this->input->post('Model')."', 
    '".$this->input->post('SERIAL_NO')."', 
	'".$this->input->post('company')."',
	'".$this->input->post('pasadu_oder')."',
	'".$this->input->post('ttype')."',
	'".$this->input->post('way')."',
	'".$this->input->post('budge')."',
	'".$this->input->post('PERUNIT')."', 
	'".$this->input->post('RECEIVE')."', 
	'".$this->input->post('NOID_Old')."',
	'".$this->input->post('doc_date')."',
	'".$this->input->post('new_date')."', 
	'".$this->input->post('pasadu_oder')."',
	'".$this->input->post('Exp')."',
	'".$this->input->post('ks1')."',
	'".$this->input->post('ks')."',
	'".$this->input->post('date_sum')."',
	'".$this->input->post('data_ss')."',
	'".$this->input->post('sum')."',
	'".$this->input->post('doc')."',
	'".$this->input->post('approve')."', 
	'".$this->input->post('year_ng')."')";
	$compe = $this->db->query($sql);
	echo json_encode($compe);

}
public function del(){
	$id = $this->input->post("id_");
	$sql = "DELETE FROM `pasadu`  WHERE `Pasadu ID` = '".$id."'";
	$compe = $this->db->query($sql);
	echo json_encode($compe);
}
}