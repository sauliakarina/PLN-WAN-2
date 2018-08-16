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

	function input_progress($data,$table) {
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

	function get_layanan() {
    	$this->db->distinct();
		$this->db->select('*');
		$query = $this->db->get('tb_layanan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }

    function get_jenisgangguan() {
    	$this->db->distinct();
		$this->db->select('*');
		$query = $this->db->get('tb_jenisgangguan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }

     public function get_id($id)
	{
		$this->db->select('*');
		$this->db->where('id_gangguan',$id);
		$query = $this->db->get('tb_gangguan');
		return $query->row();
	}


}