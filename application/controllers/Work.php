<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class Work extends CI_Controller
{
	public function index()
	{

		if ($this->session->id  == "") {

			redirect('Login/logout');
		} else {
			$data = [
				'view_list' => 'work_view',
				'title' => 'งานของคุณ',
				'menu' => 'work',
				'username' => $this->session->name

			];
			$name = ' นาย' . $this->session->name;
			$data['countwork_new'] = $this->work_model->get_work_new($name, "งานใหม่");
			$data['countwork_Success'] = $this->work_model->get_work_new($name, "งานเสร็จส่งคืน");
			$data['countwork_carryout'] = $this->work_model->get_work_new($name, "อยู่ระหว่างดำเนินการ");
			$data['countwork_defective'] = $this->work_model->get_work_new($name, "แทงชำรุด");
			$status = 'งานเสร็จส่งคืน';
			$status1 = 'อยู่ระหว่างดำเนินการ';
			$status2 = 'แทงชำรุด';
			$data['new'] = $this->work_model->get_new($name);
			$data['success'] = $this->work_model->get_success($name, $status);
			$data['workking'] = $this->work_model->get_workking($name, $status1);
			$data['des'] = $this->work_model->get_des($name, $status2);

			$this->load->view('/layout/template', $data);
		}
	}
	public function get_a_job()
	{
		$id = $this->input->post('j_id');
		$data = 'อยู่ระหว่างดำเนินการ';
		$this->work_model->update($data, $id);
		echo 'ok';
	}
	public function add_item()
	{
		$data = $this->input->post('dataarray');
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$this->work_model->del_item($id);
		$array = array();
		if ($data == '') {
			$this->work_model->update($status, $id);
		} else {
			foreach ($data as $value) {
				$sql = "INSERT INTO `use spair` (`Job work ID`, `Spair ID`, `Price-1`,`Amount-1`)
			 values ('" . $value['id'] . "','" . $value['name'] . "','" . $value['price'] . "','" . $value['count'] . "')";
				$compe = $this->db->query($sql);
			}
			$this->work_model->update($status, $id);
		}
		echo "ok";
	}
	public function get_item()
	{
		$id = $this->input->post('id');

		$compe = $this->work_model->get_item($id);
		if ($compe == '') {
			$new_array[] = array("error" => "error");
			echo json_encode($new_array);
		} else {
			foreach ($compe as $value) {
				$new_array[] = array(
					"id" => $value['Job work ID'],
					"name" => $value['Spair ID'],
					"price" => $value['Price-1'],
					"count" => $value['Amount-1']
				);
			}
			echo json_encode($new_array);
		}
	}
}
