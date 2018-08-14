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
		$this->load->view('element/header');
  		$this->load->view('tambahgangguan');
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

	function hapus_jenisgangguan($id){
		$where = array('id_jenisgangguan' => $id);
		$this->m_data_gangguan->hapus_data($where,'tb_jenisgangguan');
		redirect('c_gangguan/jenisgangguan');
	}

	function edit_jenisgangguan($id){
		$where = array('id_jenisgangguan' => $id);
		$data=array (
        	'jenisgangguan' => $this->m_data_gangguan->edit_data($where,'tb_jenisgangguan')->result()
        	);
		$this->load->view('element/header');
		$this->load->view('editgangguan',$data);
		$this->load->view('element/footer');
	}

	function update_jenisgangguan(){
		$id_jenisgangguan = $this->input->post('id_jenisgangguan');
		$jenis_gangguan = $this->input->post('jenis_gangguan');
		$ket_gangguan = $this->input->post('ket_gangguan');
		
		$data = array(
			'jenis_gangguan' => $jenis_gangguan,
			'ket_gangguan' => $ket_gangguan
		);

		$where = array(
			'id_jenisgangguan' => $id_jenisgangguan
		);

		$this->m_data_gangguan->update_data($where,$data,'tb_jenisgangguan');
		redirect('c_gangguan/jenisgangguan');
	}
}