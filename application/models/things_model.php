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


    function get_pasadu_state()
    {

        $table = `pasadu state`;
        $query = $this->db->query('SELECT * FROM `pasadu state`');
        return $query->result();
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
    function get_ttype()
    {
        $this->db->select('*');
        $this->db->from('ttype');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function get_way()
    {
        $this->db->select('*');
        $this->db->from('way');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function get_budget()
    {
        $this->db->select('*');
        $this->db->from('budget');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_years()
    {
        $this->db->select('*');
        $this->db->from('years');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function get_edit($id)
    {
        $this->db->select('*');
        $this->db->from('pasadu');
        $this->db->where('`Pasadu ID` =', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function add($data)
    {
        $this->db->insert('pasadu', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    function del($id)
    {
        $id = `Pasadu ID`;
        $this->db->where($id, $id);
	    $this->db->delete("pasadu");
        
    }
    function update($id,$data){
       // $this->db->where("`Pasadu ID` = '$id'", NULL, false);
         //$this->db->update('pasadu', $data, NULL, false);
         return $data;
    }
}
