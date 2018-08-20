<?php 

class c_user extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_user');
        $this->load->helper('url');
	}

	function user(){
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
			'user' => $this->m_data_user->tampil_user()
		);
		$this->load->view('element/header', $data);
  		$this->load->view('formuser',$data);
 		$this->load->view('element/footer');
	}

	function tambah_user(){
		$data=array(
			'status_user' => $this->session->userdata('status_user'),
			'user' => $this->m_data_user->tampil_user()
		);
		$this->load->view('element/header', $data);
  		$this->load->view('registerpage',$data);
 		$this->load->view('element/footer');
	}

	function tambah_aksi_user(){
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$status_user = $this->input->post('status_user');
		$id_karyawan = $this->input->post('id_karyawan');

		$data=array(
			'nama' => $nama,
			'id_karyawan' => $id_karyawan,
			'password' => $password,
			'status_user' => $status_user

		);
		$this->m_data_user->input_user($data, 'tb_user');
		redirect('c_user/user');
	}

	function hapus_user($id){
		$data = array(
		'isDelete' => 'yes'
		);
		$where = array(
		'id_karyawan' => $id);
		$this->m_data_user->update_data($where,$data,'tb_user');
		redirect('c_user/user');
	}

	// function hapus_user($id){
	// 	$where = array('id_karyawan' => $id);
	// 	$this->m_data_user->hapus_user($where,'tb_user');
	// 	redirect('c_user/user');
	// }

	function edit_user($id){
		$where = array('id_karyawan' => $id);
		$data=array (
			'status_user' => $this->session->userdata('status_user'),
        	'user' => $this->m_data_user->edit_data($where,'tb_user')->result()
        	);
		$this->load->view('element/header', $data);
		$this->load->view('form_edit_user',$data);
		$this->load->view('element/footer');
	}

	function update_user(){
		$id_karyawan = $this->input->post('id_karyawan');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$status_user = $this->input->post('status_user');
		
		$data = array(
			'nama' => $nama,
			'password' => $password,
			'status_user' => $status_user
		);

		$where = array(
			'id_karyawan' => $id_karyawan
		);

		$this->m_data_user->update_data($where,$data,'tb_user');
		redirect('c_user/user');
	}

}
