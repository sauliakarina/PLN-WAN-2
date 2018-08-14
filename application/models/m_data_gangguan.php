<?php 
 
class M_data_gangguan extends CI_Model{

	function tampil_jenisgangguan(){
		$this->db->select('*');
		$query = $this->db->get('tb_jenisgangguan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function input_gangguan($data,$table) {
		$this->db->insert($table, $data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}