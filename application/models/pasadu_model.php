<?php

class pasadu_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
   
    function get_pasadu()
    {
        $this->db->select('*');
        $this->db->from('pasadu');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getdetail($code)
    {
        $Pasadu_ID = "`Pasadu ID`";
        $sql_query = "SELECT * FROM pasadu WHERE `Pasadu ID` = ?";
        // $this->db->select('*');
        // $this->db->from('pasadu');
        // $this->db->where("`Pasadu ID`", $code);
        $query =  $this->db->query($sql_query, array($code));
        //$query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_print($code)
    {
        
        $this->db->select('*');
        $this->db->from('pasadu');
        $this->db->where("Noid", $code);



      // $query =  $this->db->query($sql_query, array($code));
       $query = $this->db->get();
       if ($query->num_rows() != 0) {
           return $query->result_array();
       } else {
           return false;
       }
    }
    function getMaxID()
    {

        $sql_query = "SELECT * FROM  pasadu ORDER BY `Pasadu ID` DESC LIMIT 1 ;";
        // $this->db->select('*');
        // $this->db->from('pasadu');
        // $this->db->where("`Pasadu ID`", $code);
        $query =  $this->db->query($sql_query);
        //$query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

   
    
    
}
