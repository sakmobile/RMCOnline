<?php

class things_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
   
    function get_company()
    {
        $this->db->select('*');
        $this->db->from('company');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_pasadu_oder()
    {
        $this->db->select('*');
        $this->db->from('pasadu oder');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_ttype(){
        $this->db->select('*');
        $this->db->from('ttype');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    function get_way(){
        $this->db->select('*');
        $this->db->from('way');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function get_budget(){
        $this->db->select('*');
        $this->db->from('budget');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

   
    
    
}
