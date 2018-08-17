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

	function tampil_gangguan(){
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		//tambah sort by open date and open time
		$query = $this->db->get('tb_gangguan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function tampil_progress($id=null){
		if (isset($id)) {
			$this->db->select('*');
			//tambah sort by open date and open time
			$query = $this->db->get_where('tb_progress',array('id_gangguan'=>$id));
			if($query->num_rows()>0)
			{
				return $query->result();
			} else{
				return $query->result();
			}
		} else {
			$this->db->select('*');
			//tambah sort by open date and open time
			$query = $this->db->get('tb_progress');
			if($query->num_rows()>0)
			{
				return $query->result();
			} else{
				return $query->result();
			}
		}	

	}

	public function get_last_progress($id)
	{
		$this->db->order_by('id_progress','DESC');
		$this->db->limit(1); 
		return $this->db->get_where('tb_progress',array('id_gangguan'=>$id))->row_array();
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

	public function tampil_jenislayanan($id)
	{
		$this->db->select('*');
		$this->db->where('id_jenislayanan',$id);
		$query = $this->db->get('tb_jenislayanan');
		return $query->row();
	}

	public function tampil_layanan($id)
	{
		$this->db->select('*');
		$this->db->where('sid',$id);
		$query = $this->db->get('tb_layanan');
		return $query->row();
	}

	public function tampil_jenisgangguan_byid($id)
	{
		$this->db->select('*');
		$this->db->where('id_jenisgangguan',$id);
		$query = $this->db->get('tb_jenisgangguan');
		return $query->row();
	}


}