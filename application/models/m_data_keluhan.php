<?php 
 
class M_data_keluhan extends CI_Model{

	function tampil_jeniskeluhan(){
		$this->db->select('*');
		$query = $this->db->get('tb_jeniskeluhan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function input_keluhan($data,$table) {
		$this->db->insert($table, $data);
	}
}