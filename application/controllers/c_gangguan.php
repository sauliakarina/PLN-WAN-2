<?php 

class c_gangguan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_gangguan');
        $this->load->helper('url');
	}

	public function form_data_gangguan() {
	  $this->load->view('element/header');
	  $this->load->view('form_data_gangguan');
	  $this->load->view('element/footer');
	 } 

	public function form_tambah_gangguan() {
		$data = array(
	  	'get_layanan' => $this->m_data_gangguan->get_layanan(),
	  	'get_jenisgangguan' => $this->m_data_gangguan->get_jenisgangguan()
	  );
	  $this->load->view('element/header');
	  $this->load->view('form_tambah_data_gangguan', $data);
	  $this->load->view('element/footer');
	 } 

	 function tambah_aksi_gangguan(){
		$sid = $this->input->post('sid');
		$id_jenisgangguan= $this->input->post('id_jenisgangguan');
		$deskripsi_jenisgangguan = $this->input->post('deskripsi_jenisgangguan');
		$solusi_gangguan = $this->input->post('solusi_gangguan');
		$penyebab_gangguan = $this->input->post('penyebab_gangguan');
		$open_time = $this->input->post('open_time');
		$close_time = $this->input->post('close_time');
		$open_date = $this->input->post('open_date');
		$close_date = $this->input->post('close_date');


		$data=array(
			'sid' => $sid,
			'id_jenisgangguan' => $id_jenisgangguan,
			'deskripsi_jenisgangguan' => $deskripsi_jenisgangguan,
			'solusi_gangguan' => $solusi_gangguan,
			'penyebab_gangguan' => $penyebab_gangguan,
			'open_time' => $open_time,
			'close_time' => $close_time,
			'open_date' => $open_date,
			'close_date' => $close_date,
			
		);
		$this->m_data_gangguan->input_gangguan($data, 'tb_gangguan');

		$id_gangguan = $this->m_data_gangguan->get_id($id_gangguan)->id_gangguan;
		$data=array(
			'id_gangguan' => $id_gangguan
		);
		$this->m_data_gangguan->input_progress($data, 'tb_progress');
		redirect('c_gangguan/form_data_gangguan');
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