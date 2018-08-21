<?php 

class c_gangguan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_gangguan');
        $this->load->helper('url');
	}

	public function form_data_gangguan() {
		$data=array (
		'status_user' => $this->session->userdata('status_user'),
	   	'gangguan' => $this->m_data_gangguan->tampil_gangguan()
	   	);
	  $this->load->view('element/header',$data);
	  $this->load->view('form_data_gangguan',$data);
	  $this->load->view('element/footer');
	 } 

	 public function tampil_lokasi($id) {
	  $where = array('sid' => $id);
	  $data = array(
	  	'tampil_layanan' => $this->m_data_gangguan->edit_data($where, 'tb_layanan')->result()
	  );
	  $this->load->view('element/header');
	  $this->load->view('area_gangguan',$data);
	  $this->load->view('element/footer');
	 } 

	 public function tampil_waktu($id) {
	  $where = array('id_gangguan' => $id);
	  $data = array(
	  	'status_user' => $this->session->userdata('status_user'),
	  	'tampil_waktu' => $this->m_data_gangguan->edit_data($where, 'tb_gangguan')->result()
	  );
	  $this->load->view('element/header', $data);
	  $this->load->view('waktu_gangguan',$data);
	  $this->load->view('element/footer');
	 } 
// 
	public function form_tambah_gangguan() {
		$data = array(
		'status_user' => $this->session->userdata('status_user'),
	  	'get_layanan' => $this->m_data_gangguan->get_layanan(),
	  	'get_jenisgangguan' => $this->m_data_gangguan->get_jenisgangguan()
	  );
	  $this->load->view('element/header',$data);
	  $this->load->view('form_tambah_data_gangguan', $data);
	  $this->load->view('element/footer');
	 }

	public function form_jenis_gangguan($id) {
	 $where = array('id_gangguan' => $id);
	  $data = array(
	  	'tampil_ket' => $this->m_data_gangguan->edit_data($where, 'tb_gangguan')->result()
	  );
	$this->load->view('element/header');
	$this->load->view('form_jenis_gangguan',$data);
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
		$lokasi_gangguan = $this->input->post('lokasi_gangguan');

		if ($close_date != "0000-00-00" && $close_time !="00:00:00") {
			$start_date = new DateTime($open_date.' '.$open_time);
			$end_date = new DateTime($close_date.' '.$close_time);
			$durasi = date_diff($end_date, $start_date);
			$durasi_jam = $durasi->d*24;
			$input_durasi = ($durasi->h+$durasi_jam).':'.$durasi->i;
		} else {
			$input_durasi = '0:00';
		}
		


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
			'lokasi_gangguan' => $lokasi_gangguan,
			'durasi' => $input_durasi
			
		);
		$this->m_data_gangguan->input_gangguan($data, 'tb_gangguan');
		/*$id_gangguan = $this->m_data_gangguan->get_id($id_gangguan)->id_gangguan;
		$data=array(
			'id_gangguan' => $id_gangguan
		);
		$this->m_data_gangguan->input_progress($data, 'tb_progress');*/
		redirect('c_gangguan/form_data_gangguan');
	}

	function hapus_gangguan($id){
		$data = array(
		'isDelete' => 'yes'
		);
		$where = array(
		'id_gangguan' => $id
		);
		$this->m_data_gangguan->update_data($where,$data,'tb_gangguan');
		redirect('c_gangguan/form_data_gangguan');
	}

	function edit_gangguan($id){
		$where = array('id_gangguan' => $id);
		$data=array (
			'status_user' => $this->session->userdata('status_user'),
        	'gangguan' => $this->m_data_gangguan->edit_data($where,'tb_gangguan')->result(),
        	'get_layanan' => $this->m_data_gangguan->get_layanan(),
	  		'get_jenisgangguan' => $this->m_data_gangguan->get_jenisgangguan()
        	);
		$this->load->view('element/header', $data);
		$this->load->view('edit_data_gangguan',$data);
		$this->load->view('element/footer');
	}

	function update_gangguan(){
		$sid = $this->input->post('sid');
		$id_jenisgangguan = $this->input->post('id_jenisgangguan');
		$deskripsi_jenisgangguan = $this->input->post('deskripsi_jenisgangguan');
		$solusi_gangguan = $this->input->post('solusi_gangguan');
		$penyebab_gangguan = $this->input->post('penyebab_gangguan');
		$open_time = $this->input->post('open_time');
		$close_time = $this->input->post('close_time');
		$open_date = $this->input->post('open_date');
		$close_date = $this->input->post('close_date');
		$id_gangguan = $this->input->post('id_gangguan');
		$isDelete = $this->input->post('isDelete');
		$lokasi_gangguan = $this->input->post('lokasi_gangguan');

		$start_date = new DateTime($open_date.' '.$open_time);
		$end_date = new DateTime($close_date.' '.$close_time);
		$durasi = date_diff($end_date, $start_date);
		$durasi_jam = $durasi->d*24;
		
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
			'lokasi_gangguan' => $lokasi_gangguan,
			'isDelete' => $isDelete,
			'lokasi_gangguan' => $lokasi_gangguan,
			'durasi' => ($durasi->h+$durasi_jam).':'.$durasi->i
			
		);

		$where = array(
			'id_gangguan' => $id_gangguan
		);

		$this->m_data_gangguan->update_data($where,$data,'tb_gangguan');
		redirect('c_gangguan/form_data_gangguan');
	}



	function jenisgangguan(){
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
			'jenisgangguan' => $this->m_data_gangguan->tampil_jenisgangguan()
		);
		$this->load->view('element/header', $data);
  		$this->load->view('jenisgangguan',$data);
 		$this->load->view('element/footer');
	}

	function tambah_jenisgangguan(){
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
		);
		$this->load->view('element/header', $data);
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
		$data = array(
		'isDelete' => 'yes'
		);
		$where = array(
		'id_jenisgangguan' => $id
		);
		$this->m_data_gangguan->update_data($where,$data,'tb_jenisgangguan');
		redirect('c_gangguan/jenisgangguan');
	}


	function edit_jenisgangguan($id){
		$where = array('id_jenisgangguan' => $id);
		$data=array (
			'status_user' => $this->session->userdata('status_user'),
        	'jenisgangguan' => $this->m_data_gangguan->edit_data($where,'tb_jenisgangguan')->result()
        	);
		$this->load->view('element/header', $data);
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

	//tampil progress by id
	public function progress($id) {
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
			'progress' => $this->m_data_gangguan->tampil_progress($id),
			'id' => $id
		);
	  $this->load->view('element/header', $data);
	  $this->load->view('progress',$data);
	  $this->load->view('element/footer');
	 }

	function tambah_progress($id){
		$where = array('id_gangguan' => $id);
		$data=array (
			'status_user' => $this->session->userdata('status_user'),
        	'gangguan' => $this->m_data_gangguan->edit_data($where,'tb_gangguan')->result(),
        	);
		$this->load->view('element/header', $data);
		$this->load->view('form_tambah_progress',$data);
		$this->load->view('element/footer');
	}



	function tambah_aksi_progress(){
		$id_gangguan = $this->input->post('id_gangguan');
		$waktu = $this->input->post('waktu');
		$ket_progress = $this->input->post('ket_progress');
		$status_progress = $this->input->post('status_progress');

		if ($status_progress == 2) {
			$close_date = date("Y-m-d");
			date_default_timezone_set("Asia/Jakarta");
			$close_time = date("h:i a");

			$data=array(
			'close_date' => $close_date,
			'close_time' =>$close_time
			);
			$where = array(
				'id_gangguan' => $id_gangguan
			);

			$this->m_data_gangguan->update_data($where,$data,'tb_gangguan');
		}		

		$data=array(
			'id_gangguan' => $id_gangguan,
			'ket_progress' => $ket_progress,
			'waktu' => $waktu,
			'status_progress' => $status_progress
		);
		$this->m_data_gangguan->input_gangguan($data, 'tb_progress');
		redirect('c_gangguan/progress/'.$id_gangguan);
	}

	function hapus_progress($id){
		$where = array('id_progress' => $id);
		$id_gangguan = $this->db->get_where('tb_progress', $where)->row_array()['id_gangguan'];
		$this->m_data_gangguan->hapus_data($where,'tb_progress');
		redirect('c_gangguan/progress/'.$id_gangguan);
	}

	function edit_progress($id){
		$data=array (
			'status_user' => $this->session->userdata('status_user'),
        	);
		$where = array('id_progress' => $id);
		$data=array (
        	'progress' => $this->m_data_gangguan->edit_data($where,'tb_progress')->result(),
        	);
		$this->load->view('element/header');
		$this->load->view('form_edit_progress',$data);
		$this->load->view('element/footer');
	}

	function update_progress(){
		$id_gangguan = $this->input->post('id_gangguan');
		$waktu = $this->input->post('waktu');
		$ket_progress = $this->input->post('ket_progress');
		$status_progress = $this->input->post('status_progress');
		$id_progress = $this->input->post('id_progress');

		if ($status_progress == 2) {
			$close_date = date("Y-m-d");
			date_default_timezone_set("Asia/Jakarta");
			$close_time = date("h:i a");

			$data=array(
				'close_date' => $close_date,
				'close_time' =>$close_time
			);
			$where = array(
				'id_gangguan' => $id_gangguan
			);

			$this->m_data_gangguan->update_data($where,$data,'tb_gangguan');
		}
		
		$data = array(
			'id_gangguan' => $id_gangguan,
			'ket_progress' => $ket_progress,
			'waktu' => $waktu,
			'status_progress' => $status_progress
		);

		$where = array(
			'id_progress' => $id_progress
		);

		$this->m_data_gangguan->update_data($where,$data,'tb_progress');
		redirect('c_gangguan/progress/'.$id_gangguan);
	}


	public function tampil_ket($id)
	{
		$data =  $this->m_data_gangguan->tampil_gangguan_byid($id);

		echo json_encode($data);
	}

	public function tampil_searchgangguan() {
	  $data = array(
	  	'status_user' => $this->session->userdata('status_user'),
	  	'get_layanan' => $this->m_data_gangguan->get_layanan(),
	  	'get_jenisgangguan' => $this->m_data_gangguan->get_jenisgangguan()
	  	
	  );
	  $this->load->view('element/header', $data);
	  $this->load->view('searchgangguan',$data);
	  $this->load->view('element/footer');
	 } 

	 public function coba_searchgangguan() {
	  $this->load->view('element/header');
	  $this->load->view('coba_searchgangguan');
	  $this->load->view('element/footer');
	 } 




}