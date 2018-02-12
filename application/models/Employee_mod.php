<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_mod extends CI_Model{

       
      var $table = 'tbl_employee';

       public function __construct(){

       	parent::__construct();
       	$this->load->database('tbl_employee');
       
       }
       
       public function getEmployee()
       {

        return $this->db->get('tbl_employee')->result(); 

       }


       public function insert($data)
       {
              $this->db->insert($this->table,$data);
              return $this->db->insert_id();
       }


       public function delete_by_id($emp_id)
       {
              $this->db->where('emp_id',$emp_id);
              $this->db->delete('student'); 
       }

       public function update($where,$data)
       {

              // $this->db->where('id',$id);
              // $this->db->update('student'); 
              $this->db->update($this->table,$data,$where);
               return $this->db->affected_rows();

       }
       public function get_by_id($emp_id)
       {

              $this->db->from($this->table);
              $this->db->where('emp_id',$emp_id);
              $query = $this->db->get();

              return $query->row();

       }
             
}