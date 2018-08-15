<?php 

class c_layanan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_layanan');
        $this->load->helper('url');
	}

	function jenislayanan(){
		$data=array(
			'jenislayanan' => $this->m_data_layanan->tampil_jenislayanan()
		);
		$this->load->view('element/header');
  		$this->load->view('jenislayanan',$data);
 		$this->load->view('element/footer');
	}

	function tambah_jenislayanan(){
		$data=array(
			'jenislayanan' => $this->m_data_layanan->tampil_jenislayanan()
		);
		$this->load->view('element/header');
  		$this->load->view('tambahlayanan',$data);
 		$this->load->view('element/footer');
	}

	function tambah_aksi_jenislayanan(){
		$jenis_layanan = $this->input->post('nama_layanan');

		$data=array(
			'nama_layanan' => $jenis_layanan,
		);
		$this->m_data_layanan->input_layanan($data, 'tb_jenislayanan');
		redirect('c_layanan/jenislayanan');
	}

	function hapus_jenislayanan($id){
		$where = array('id_jenislayanan' => $id);
		$this->m_data_keluhan->hapus_data($where,'tb_jeniskeluhan');
		redirect('c_layanan/jenislayanan');
	}


}