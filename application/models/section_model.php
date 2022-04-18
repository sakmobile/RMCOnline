<?php

class section_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function get_section()
    {
        $this->db->select('*');
        $this->db->from('section');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

   
    
    
}
