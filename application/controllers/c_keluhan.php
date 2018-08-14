<?php 

class c_keluhan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_keluhan');
        $this->load->helper('url');
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
}
?>