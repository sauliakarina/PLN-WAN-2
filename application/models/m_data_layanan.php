<?php 
 
class M_data_layanan extends CI_Model{

	function tampil_jenislayanan(){
		$this->db->select('*');
		$query = $this->db->get('tb_jenislayanan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function input_layanan($data,$table) {
		$this->db->insert($table, $data);
	}
}