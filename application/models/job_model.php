<?php

class job_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function get_job()
    {
        $this->db->select('*');
        $this->db->from('job');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_jobid()
    {
        $sql_query = "SELECT MAX(`JOB Work ID`) FROM job";
        // $this->db->select('*');
        // $this->db->from('pasadu');
        // $this->db->where("`Pasadu ID`", $code);
        $query =  $this->db->query($sql_query);
       // $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function get_office(){
       
        $this->db->select('*');
        $this->db->from('job');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    
       
    }

    function get_jobprint($code)
    {
       
        $sql_query = "SELECT * FROM job WHERE `JOB Work ID` = ?";
        // $colum = `Karupan No`;
        //  $this->db->select('*');
        //  $this->db->from('job a');
        //  $this->db->where("a.`JOB Work ID`", $code);



        $query =  $this->db->query($sql_query, array($code));
       // $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_boss($name){
        $sql_query = "SELECT * FROM job WHERE `Boss` LIKE ?";
        // $colum = `Karupan No`;
          $this->db->select('*');
         $this->db->from('job');
          $this->db->like('Boss', $name);
        


      //  $query =  $this->db->query($sql_query, '%'.$name.'%');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
   

   
    
    
}
