<?php 

class c_gangguan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_gangguan');
        $this->load->helper('url');
	}

	function jenisgangguan(){
		$data=array(
			'jenisgangguan' => $this->m_data_gangguan->tampil_jenisgangguan()
		);
		$this->load->view('element/header');
  		$this->load->view('jenisgangguan',$data);
 		$this->load->view('element/footer');
	}

	function tambah_jenisgangguan(){
		$data=array(
			'jenisgangguan' => $this->m_data_gangguan->tampil_jenisgangguan()
		);
		$this->load->view('element/header');
  		$this->load->view('tambahgangguan',$data);
 		$this->load->view('element/footer');
	}

	function tambah_aksi_jenisgangguan(){
		$jenis_gangguan = $this->input->post('jenis_gangguan');
		$ket_gangguan = $this->input->post('ket_gangguan');

		$data=array(
			'jenis_gangguan' => $jenis_gangguan,
			'ket_gangguan' => $ket_gangguan
		);
		$this->m_data_gangguan->input_gangguan($data, 'tb_jenisgangguan');
		redirect('c_gangguan/jenisgangguan');
	}
}