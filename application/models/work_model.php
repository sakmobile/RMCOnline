<?php

class work_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    function get_work_new($name,$status)
    {
        // $this->db->select('*');
        // $this->db->from('job');
        // $this->db->where('`Man Repair`',$name);
        // $this->db->where('State_work',null);
        $sql_query = "SELECT * FROM job WHERE `Man Repair` = ? AND `State_work` = ?";
        // $colum = `Karupan No`;
        //  $this->db->select('*');
        //  $this->db->from('job a');
        //  $this->db->where("a.`JOB Work ID`", $code);



        $query =  $this->db->query($sql_query, array($name,$status));
       // $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->num_rows();
        } else {
            return false;
        }
        // $query = $this->db->get();
        // if ($query->num_rows() != 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
    }
    function get_new($name)
    {
      
       //$this->db->select('*');
       //$this->db->from(`job`);
       // $this->db->where(`Man Repair`,$name);
       $sql_query = "SELECT * FROM job WHERE `Man Repair` = ? AND `State_work`= 'งานใหม่'";
       // $this->db->where(`State_work`,null);
       // $query = $this->db->get();
       $query =  $this->db->query($sql_query, array($name));
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
        // $query = $this->db->get();
        // if ($query->num_rows() != 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
     
    }
    function get_success($name,$status)
    {
      
       //$this->db->select('*');
       //$this->db->from(`job`);
       // $this->db->where(`Man Repair`,$name);
       $sql_query = "SELECT * FROM job WHERE `Man Repair` = ? AND `State_work` = ?";
       // $this->db->where(`State_work`,null);
       // $query = $this->db->get();
       $query =  $this->db->query($sql_query, array($name,$status));
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
        // $query = $this->db->get();
        // if ($query->num_rows() != 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
     
    }
    function get_workking($name,$status)
    {
      
       //$this->db->select('*');
       //$this->db->from(`job`);
       // $this->db->where(`Man Repair`,$name);
       $sql_query = "SELECT * FROM job WHERE `Man Repair` = ? AND `State_work` = ?";
       // $this->db->where(`State_work`,null);
       // $query = $this->db->get();
       $query =  $this->db->query($sql_query, array($name,$status));
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
        // $query = $this->db->get();
        // if ($query->num_rows() != 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
     
    }
    function get_des($name,$status)
    {
      
       //$this->db->select('*');
       //$this->db->from(`job`);
       // $this->db->where(`Man Repair`,$name);
       $sql_query = "SELECT * FROM job WHERE `Man Repair` = ? AND `State_work` = ?";
       // $this->db->where(`State_work`,null);
       // $query = $this->db->get();
       $query =  $this->db->query($sql_query, array($name,$status));
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
        // $query = $this->db->get();
        // if ($query->num_rows() != 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
     
    }
    function update($data,$id){
       $sql_query = "UPDATE job SET `State_work` = ? WHERE `JOB Work ID`=?";
       $query =  $this->db->query($sql_query, array($data,$id));
       
    }
   
 
    function add_item($data)
    {
        $this->db->insert(`use spair`,$data);
    }
    function get_item($id){
        $sql_query = "SELECT `Use Spair ID`, `Job work ID`,`Spair ID`, `Price-1`,`Amount-1` FROM `use spair` WHERE  `Job work ID` = ?";
  
        $query =  $this->db->query($sql_query, array($id));
     
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
      
     }
     function del_item($id)
    {
        $sql_query = "DELETE FROM `use spair` WHERE  `Job work ID` = ?";
  
        $query =  $this->db->query($sql_query, array($id));
     
       
    }
    function del_job($id)
    {
        $sql_query = "DELETE FROM `job` WHERE  `Job work ID` = ?";
  
        $query =  $this->db->query($sql_query, array($id));
     
       
    }
    
}