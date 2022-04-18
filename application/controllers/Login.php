<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

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


        $this->load->view('login');
    }

    public function check_login()
    {

        if ($this->input->server('REQUEST_METHOD') == TRUE) {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
  
            $intpass = 0;
            $chars = str_split($pass);
            foreach ($chars as $char) {

                $intpass = $intpass + ord($char);
            }
            $passhas = md5($intpass);

            $result = $this->Login_model->user_login(mb_strtoupper($user, "UTF-8"), $passhas);
           
             if ($result) {
            //     foreach ($result as $row) {
                     $sess_data = array(
                         'id' => $result[0]['userid'],
                         'name' => $result[0]['username']
                     );
            //     } 

                    $this->session->set_userdata($sess_data);
            //     //      // $this->session->t_name;
                  // print_r($this->session->all_userdata());
                  $member = array("เตชสิทธิ์ กำเนิด", "นายเอกชัย สุภาพันธ์", "วีรชัย อ่อนมณี", "นิวัฒน์ สุกวัน");
                  $result_array   = array_search($this->session->name, $member);
                  if ($result_array != FALSE) { 
                    redirect('Work', 'refresh');
                  }else{
                    redirect('home', 'refresh');
                  }
                 

                 // $this->load->view('home');


             } else {

                 $data['error'] = '<script>toastr["warning"]("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");</script>';
                 $this->load->view('login', $data);
             }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('id', 'name'));
        redirect('login', 'refresh');
    }
}
