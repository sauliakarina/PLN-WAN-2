<?php 

class c_layanan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_layanan');
        $this->load->helper('url');
	}

	 public function form_layanan(){
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
			'layanan' => $this->m_data_layanan->tampil_layanan()

		);
	  $this->load->view('element/header', $data);
	  $this->load->view('form_layanan', $data);
	  $this->load->view('element/footer');
	 }


	public function form_tambah_layanan(){
	  $data = array(
	  	'status_user' => $this->session->userdata('status_user'),
	  	'get_jenislayanan' => $this->m_data_layanan->get_jenislayanan()
	  );
	  $this->load->view('element/header', $data);
	  $this->load->view('form_tambah_layanan', $data);
	  $this->load->view('element/footer');
	 }

	function hapus_layanan($id){
		$data = array(
		'isDelete' => 'yes'
		);
		$where = array(
		'sid' => $id
		);
		$this->m_data_layanan->update_data($where,$data,'tb_layanan');
		redirect('c_layanan/form_layanan');
	}


	 function edit_layanan($id){
		$where = array('sid' => $id);
		$data=array (
			'status_user' => $this->session->userdata('status_user'),
        	'layanan' => $this->m_data_layanan->edit_data($where,'tb_layanan')->result(),
        	'get_jenislayanan' => $this->m_data_layanan->get_jenislayanan()
        	);
		$this->load->view('element/header', $data);
		$this->load->view('form_edit_layanan',$data);
		$this->load->view('element/footer');
	}

	function update_layanan(){
		$sid = $this->input->post('sid');
		$lokasi = $this->input->post('lokasi'); 
		$kapasitas = $this->input->post('kapasitas'); 
		$nama_pic = $this->input->post('nama_pic');
		$no_hp_pic = $this->input->post('no_hp_pic');
		$email = $this->input->post('email');
		$id_jenislayanan = $this->input->post('id_jenislayanan');
		$isDelete = $this->input->post('isDelete');


		$data=array(
			'lokasi' => $lokasi,
			'kapasitas' => $kapasitas,
			'nama_pic' => $nama_pic,
			'no_hp_pic' => $no_hp_pic,
			'email' => $email,
			'id_jenislayanan' => $id_jenislayanan,
			'isDelete' => $isDelete

		);

		$where = array(
			'sid' => $sid
		);

		$this->m_data_layanan->update_data($where,$data,'tb_layanan');
		redirect('c_layanan/form_layanan');
	}


	function jenislayanan(){
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
			'jenislayanan' => $this->m_data_layanan->tampil_jenislayanan()
		);
		$this->load->view('element/header', $data);
  		$this->load->view('jenislayanan',$data);
 		$this->load->view('element/footer');
	}

	function tambah_jenislayanan(){
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
			'jenislayanan' => $this->m_data_layanan->tampil_jenislayanan()
		);
		$this->load->view('element/header', $data);
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
			'status_user' => $this->session->userdata('status_user'),
        	'jenislayanan' => $this->m_data_layanan->edit_data($where,'tb_jenislayanan')->result()
        	);
		$this->load->view('element/header', $data);
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
	
	function hapus_jenislayanan($id){
		$data = array(
		'isDelete' => 'yes'
		);
		$where = array(
		'id_jenislayanan' => $id
		);
		$this->m_data_layanan->update_data($where,$data,'tb_jenislayanan');
		redirect('c_layanan/jenislayanan');
	}

	function tambah_layanan(){
		$this->load->view('element/header');
  		$this->load->view('form_tambah_layanan');
 		$this->load->view('element/footer');
	}

	function tambah_aksi_layanan(){
		$sid = $this->input->post('sid');
		$lokasi = $this->input->post('lokasi');
		$kapasitas = $this->input->post('kapasitas');
		$nama_pic = $this->input->post('nama_pic');
		$no_hp_pic = $this->input->post('no_hp_pic');
		$email = $this->input->post('email');
		$id_jenislayanan = $this->input->post('id_jenislayanan');


		$data=array(
			'sid' => $sid,
			'lokasi' => $lokasi,
			'kapasitas' => $kapasitas,
			'nama_pic' => $nama_pic,
			'no_hp_pic' => $no_hp_pic,
			'email' => $email,
			'id_jenislayanan' => $id_jenislayanan,

		);
		$this->m_data_layanan->input_layanan($data, 'tb_layanan');
		redirect('c_layanan/form_layanan');
	}

}