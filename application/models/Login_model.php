<?php

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->hosdata = $this->load->database('hosdata',TRUE);
        
    }

    public function user_login($user,$passhas){
        $this->hosdata->select('*');
        $this->hosdata->from('user'); 
        $this->hosdata->where('userlogin',$user);
        $this->hosdata->where('netpass',$passhas);
        $query = $this->hosdata->get();
        if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        
        
       }
}