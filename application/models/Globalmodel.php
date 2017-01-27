<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Globalmodel extends CI_Model {

	
	public function get($table , $where = FALSE)
	{
		if ($where) {
				$this->db->where($where);
			}	
		return $this->db->get($table);
	}

	public function insert($table, $data)
	{
		$this->db->insert($table , $data);
		return $this->db->insert_id();
	}

	public function update($table, $set, $where)
	{
		$this->db->where($where);
		$this->db->update($table ,$set);
		return $this->db->affected_rows();
	}

	public function delete($table, $where)
	{
		$this->db->where($where); 
		$this->db->delete($table);
		return $this->db->affected_rows();
	}


}

/* End of file Globalmodel.php */
/* Location: ./application/models/Globalmodel.php */