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

    function get_jeniskeluhan() {
    	$this->db->distinct();
		$this->db->select('*');
		$query = $this->db->get('tb_jeniskeluhan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }

   	function tampil_keluhan(){
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$query = $this->db->get('tb_keluhan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	public function tampil_layanan($id)
	{
		$this->db->select('*');
		$this->db->where('sid',$id);
		$query = $this->db->get('tb_layanan');
		return $query->row();
	}

	public function tampil_jenislayanan($id)
	{
		$this->db->select('*');
		$this->db->where('id_jenislayanan',$id);
		$query = $this->db->get('tb_jenislayanan');
		return $query->row();
	}

	public function tampil_jeniskeluhan_byid($id)
	{
		$this->db->select('*');
		$this->db->where('id_jeniskeluhan',$id);
		$query = $this->db->get('tb_jeniskeluhan');
		return $query->row();
	}

	/* public function tambah_lokasi($id)
	{
		$this->db->select('*');
		$this->db->where('sid',$id);
		$query = $this->db->get('tb_layanan');
		return $query->row();
	}*/

}