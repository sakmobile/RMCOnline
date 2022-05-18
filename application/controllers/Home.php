<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class Home extends CI_Controller
{

	public function index()
	{

		if ($this->session->id  == "") {

			redirect('Login/logout');
		} else {
			$data = [
				'view_list' => 'home_view',
				'title' => 'แจ้งซ่อม',
				'menu' => 'home',
				'username' => $this->session->name

			];

			$data['job_user'] = $this->job_model->get_boss($this->session->name);

			$data['section'] = $this->section_model->get_section();
			$data['pasadu'] = $this->pasadu_model->get_pasadu();
			$data['activity'] = $this->activity_model->get_activity();
			$this->load->view('/layout/template', $data);
		}
	}

	public function get_pasadu()
	{
		$code = $this->input->post('code');

		$data =	$this->pasadu_model->getdetail($code);

		echo json_encode($data);
	}

	public function save()
	{
		if ($this->session->id  == "") {

			redirect('Login/logout');
		} else {


			$workid  =	$this->job_model->get_jobid();
			$text = "MAX(`JOB Work ID`)";
			$idjob = $workid[0][$text];
			$sum = $idjob + 1;
			$to = $this->input->post('To');
			$datenow = date("Y-m-d H:i:s");
			$y = date("Y") + 543;
			$yy = substr($y, 2);
			$c1 = "K1-" . $yy . "-00" . $sum;
			$newjob = 'งานใหม่';
			$sql = "INSERT INTO `job` (`JOBNUMBER`, `Equipment`, `Detial`,`Karupan No`,`Serial No`,`Section`,`Type Work`,`Man Repair`,`Boss`,`level`,`Cause`,`Text Paper`, `Date Send Job`,`State_work`)
                  values ('" . $c1 . "','" . $this->input->post("name") . "','" . $this->input->post("Model") . "','" . $this->input->post("Noid") . "','" . $this->input->post("SERIAL_NO") . "','" . $this->input->post("section") . "','" . $this->input->post("activity") . "','" . $this->input->post("man_repair") . "','" . $this->input->post("boss") . "','" . $this->input->post("lavel") . "','" . $this->input->post("cause") . "','" . $this->input->post("text_paper") . "','" . $datenow . "','" . $newjob . "')";
			$compe = $this->db->query($sql);


			//$this->job_model->save($data);
			 if ($compe == 1) {

			$success = 'success';
			echo $success;
				$message =
					"\n" .
					'วันที่แจ้ง: ' .
					$datenow .
					"\n" .
					'ผู้แจ้ง: ' .
					$this->input->post('boss') .
					"\n" .
					'เบอร์โทร : ' .
					$to .
					"\n" .
					'หน่วยงานที่แจ้ง: ' .
					$this->input->post('section') .
					"\n" .
					'ครุภัณฑ์: ' .
					$this->input->post('name') .
					"\n" .
					'ยี่ห้อ/รุ่น: ' .
					$this->input->post('Model') .
					"\n" .
					'ความเร่งด่วน: ' .
					$this->input->post('lavel') .
					"\n" .
					'แจ้งช่าง: ' .
					$this->input->post('man_repair') .
					"\n" .
					'สาเหต/อาการ: ' .
					$this->input->post('cause') .
					"\n" .
					'บันทึกส่งซ่อม: ' .
					$this->input->post('text_paper') .
					"\n";
				$this->sendlinemesg();
				header('Content-Type: text/html; charset=utf8');
				$res = notify_message($message);
			} else {
				$error = "error";
				echo $error;
			}
		}
	}




	function sendlinemesg()
	{
		define('LINE_API', "https://notify-api.line.me/api/notify");
		define('LINE_TOKEN', "EGZ4JeLqupjdMnphrdGZoeq0O7ulu0pwJqsrLk9g9jh"); //เปลี่ยนใส่ Token ของเราที่นี่ 

		function notify_message($message)
		{
			$queryData = array('message' => $message);
			$queryData = http_build_query($queryData, '', '&');
			$headerOptions = array(
				'http' => array(
					'method' => 'POST',
					'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
						. "Authorization: Bearer " . LINE_TOKEN . "\r\n"
						. "Content-Length: " . strlen($queryData) . "\r\n",
					'content' => $queryData
				)
			);
			$context = stream_context_create($headerOptions);
			$result = file_get_contents(LINE_API, FALSE, $context);
			$res = json_decode($result);
			return $res;
		}
	}

	public	function print_from($id)
	{
		$code = $id;
		$job = $this->job_model->get_jobprint($code);
		$item = $this->work_model->get_item($code);
		$data = array();
		if ($job[0]["Karupan No"] != '') {

			$pasadu =  $this->pasadu_model->get_print($job[0]["Karupan No"]);
			$data['item'] = $this->work_model->get_item($code);
			$data = array(
				'job' => $job,
				'pasadu' => $pasadu,
				'item' => $item
			);
		} else {
			$data = array(
				'job' => $job,
				'pasadu' => 'NULL'

			);
		}


		//print_r($data['item']);
		// print_r($data['pasadu']);
		$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
		$fontDirs = $defaultConfig['fontDir'];
		$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
		$fontData = $defaultFontConfig['fontdata'];

		$mpdf = new \Mpdf\Mpdf([
			'fontDir' => array_merge($fontDirs, [
				__DIR__ . '/tmp',
			]),
			'fontdata' => $fontData + [
				'sarabun' => [
					'R' => 'THSarabunNew.ttf',
					'I' => 'HSarabunNew Italic.ttf',
					'B' => 'THSarabunNew Bold.ttf',
					'BI' => 'THSarabunNew BoldItalic.ttf'
				]
			],

			'default_font' => 'sarabun'
		]);
		$html = $this->load->view('./report', $data, true);
		//	 $mpdf->SetHeader('Document Title|Center Text|{PAGENO}');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
}
