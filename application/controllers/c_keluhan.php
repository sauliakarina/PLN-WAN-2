<?php 

class c_keluhan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_keluhan');
        $this->load->helper('url');
	}

	public function tampil_lokasi($id) {
	  $where = array('sid' => $id);
	  $data = array(
	  	'tampil_layanan' => $this->m_data_keluhan->edit_data($where, 'tb_layanan')->result()
	  );
	  $this->load->view('element/header');
	  $this->load->view('area_keluhan',$data);
	  $this->load->view('element/footer');
	 } 

	 public function tampil_waktu($id) {
	  $where = array('id_keluhan' => $id);
	  $data = array(
	  	'tampil_waktu' => $this->m_data_keluhan->edit_data($where, 'tb_keluhan')->result()
	  );
	  $this->load->view('element/header');
	  $this->load->view('waktu_keluhan',$data);
	  $this->load->view('element/footer');
	 } 

	public function form_data_keluhan() {
	$data=array (
   	'keluhan' => $this->m_data_keluhan->tampil_keluhan()
   	);

	  $this->load->view('element/header');
	  $this->load->view('form_data_keluhan', $data);
	  $this->load->view('element/footer');
	 } 


	public function form_tambah_keluhan() {
		$data = array(
	  	'get_layanan' => $this->m_data_keluhan->get_layanan(),
	  	'get_jeniskeluhan' => $this->m_data_keluhan->get_jeniskeluhan()
	  );
	  $this->load->view('element/header');
	  $this->load->view('form_tambah_keluhan', $data);
	  $this->load->view('element/footer');
	 } 

	 function tambah_aksi_keluhan(){
		$sid = $this->input->post('sid');
		$id_jeniskeluhan = $this->input->post('id_jeniskeluhan');
		$deskripsi_jeniskeluhan = $this->input->post('deskripsi_jeniskeluhan');
		$solusi = $this->input->post('solusi');
		$penyebab = $this->input->post('penyebab');
		$open_time = $this->input->post('open_time');
		$close_time = $this->input->post('close_time');
		$open_date = $this->input->post('open_date');
		$close_date = $this->input->post('close_date');
		$isDelete = $this->input->post('isDelete');


		$data=array(
			'sid' => $sid,
			'id_jeniskeluhan' => $id_jeniskeluhan,
			'deskripsi_jeniskeluhan' => $deskripsi_jeniskeluhan,
			'solusi_keluhan' => $solusi,
			'penyebab_keluhan' => $penyebab,
			'open_time' => $open_time,
			'close_time' => $close_time,
			'open_date' => $open_date,
			'close_date' => $close_date,
			'isDelete' => $isDelete
			
		);
		$this->m_data_keluhan->input_keluhan($data, 'tb_keluhan');
		redirect('c_keluhan/form_data_keluhan');
	}

	function jeniskeluhan(){
		$data=array(
			'jeniskeluhan' => $this->m_data_keluhan->tampil_jeniskeluhan()
		);
		$this->load->view('element/header');
  		$this->load->view('jeniskeluhan',$data);
 		$this->load->view('element/footer');
	}

	function tambah_aksi_jeniskeluhan(){
		$jenis_keluhan = $this->input->post('jenis_keluhan');
		$ket_keluhan = $this->input->post('ket_keluhan');

		$data=array(
			'jenis_keluhan' => $jenis_keluhan,
			'ket_keluhan' => $ket_keluhan
		);
		$this->m_data_keluhan->input_keluhan($data, 'tb_jeniskeluhan');
		redirect('c_keluhan/jeniskeluhan');
	}


	function edit_jeniskeluhan($id){
		$where = array('id_jeniskeluhan' => $id);
		$data=array (
        	'jeniskeluhan' => $this->m_data_keluhan->edit_data($where,'tb_jeniskeluhan')->result()
        	);
		$this->load->view('element/header');
		$this->load->view('editkeluhan',$data);
		$this->load->view('element/footer');
	}

	function update_jeniskeluhan(){
		$id_jeniskeluhan = $this->input->post('id_jeniskeluhan');
		$jenis_keluhan = $this->input->post('jenis_keluhan');
		$ket_keluhan = $this->input->post('ket_keluhan');
		
		$data = array(
			'jenis_keluhan' => $jenis_keluhan,
			'ket_keluhan' => $ket_keluhan
		);

		$where = array(
			'id_jeniskeluhan' => $id_jeniskeluhan
		);

		$this->m_data_keluhan->update_data($where,$data,'tb_jeniskeluhan');
		redirect('c_keluhan/jeniskeluhan');
	}


	function hapus_jeniskeluhan($id){
		$where = array('id_jeniskeluhan' => $id);
		$this->m_data_keluhan->hapus_data($where,'tb_jeniskeluhan');
		redirect('c_keluhan/jeniskeluhan');
	}

}
?>