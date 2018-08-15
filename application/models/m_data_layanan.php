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

	function tampil_layanan(){
		$this->db->select('*');
		$query = $this->db->get('tb_layanan');
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

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}


    function get_jenislayanan() {
    	$this->db->distinct();
		$this->db->select('*');
		$query = $this->db->get('tb_jenislayanan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }

    public function tambah_jenislayanan($id_jenislayanan)
	{
		$this->db->select('*');
		$this->db->where('id_jenislayanan',$id_jenislayanan);
		$query = $this->db->get('tb_jenislayanan');
		return $query->row();
	}

	

}