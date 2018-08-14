<?php 
 
class M_data_user extends CI_Model{

	function tampil_user(){
		$this->db->select('*');
		$query = $this->db->get('tb_user');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function input_user($data,$table) {
		$this->db->insert($table, $data);
	}
}