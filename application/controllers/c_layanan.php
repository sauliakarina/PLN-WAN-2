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

	function edit_jenislayanan($id){
		$where = array('id_jenislayanan' => $id);
		$data=array (
        	'jenislayanan' => $this->m_data_layanan->edit_data($where,'tb_jenislayanan')->result()
        	);
		$this->load->view('element/header');
		$this->load->view('form_edit_jenis_layanan',$data);
		$this->load->view('element/footer');
	}

	function update_jenislayanan(){
		$id_jenislayanan = $this->input->post('id_jenislayanan');
		$nama_layanan = $this->input->post('nama_layanan');
		
		$data = array(
			'nama_layanan' => $nama_layanan
		);

		$where = array(
			'id_jenislayanan' => $id_jenislayanan
		);

		$this->m_data_layanan->update_data($where,$data,'tb_jenislayanan');
		redirect('c_layanan/jenislayanan');
	}

}