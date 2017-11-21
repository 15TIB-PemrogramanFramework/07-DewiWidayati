<?php 
/**
* 
*/
class Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->helper('url');
	}

	function index()
	{
		//print_r($this->customer_model->ambil_data());
		$data['customer'] = $this->Customer_model->ambil_data();
		$this->load->view('Member/Login',$data);
	}

	
	function daftar()
	{
		$data = array(
			'aksi' 			=> site_url('index.php/customer/daftar_aksi'),
			'nama' 			=> set_value('nama'),
			'username' 		=> set_value('username'),
			'password' 		=> set_value('password'),			
			'alamat' 		=> set_value('alamat'),
			'no_hp' 		=> set_value('no_hp'),
			'id_customer' 	=> set_value('id_customer'),
			'button' 		=> 'Daftar'
			);
		$this->load->view('Member/Registrasi',$data);
	}

	function daftar_aksi()
	{
		$data = array(
			'nama'			=> $this->input->post('nama'),
			'username' 		=> $this->input->post('username'),
			'password'		=> $this->input->post('password'),
			'alamat' 		=> $this->input->post('alamat'),
			'no_hp' 		=> $this->input->post('no_hp')
			);

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'username', 'Username',
			'is_unique[customer.username]|is_unique[admin.username]',
			array(
				'required'      => 'You have not provided %s.',
				'is_unique'     => 'This %s already exists.'
			)
		);
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			redirect(site_url('Customer/daftar'));
		}
		else
		{
		$this->Customer_model->tambah_data($data);
		$this->session->set_flashdata("memesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil ditambahkan!!</div></div>");
		redirect('index.php/LoginMember');
	}
}
	function login()
	{
		$this->load->view('Member/Login');
	}

	function home()
	{
		$this->load->view('Member/Index');
	}




/* ADMIN */

	function delete($id)
	{
		$this->Customer_model->hapus_data($id);
		$this->session->set_flashdata("memesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect(site_url('index.php/Customer/data_customer'));
	}

	function update($id)
	{
		$customer = $this->Customer_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('index.php/customer/update_aksi'),
			'nama' 				=> set_value('nama',$customer->nama),
			'username' 			=> set_value('username',$customer->username),
			'password' 			=> set_value('password',$customer->password),
			'alamat'		 	=> set_value('alamat',$customer->alamat),
			'no_hp' 			=> set_value('no_hp',$customer->no_hp),
			'id_customer' 		=> set_value('id_customer',$customer->id_customer),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Customer_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama' 				=> $this->input->post('nama'),
			'username' 			=> $this->input->post('username'),
			'password'		 	=> $this->input->post('password'),
			'alamat' 			=> $this->input->post('alamat'),
			'no_hp' 			=> $this->input->post('no_hp')
			);	
		$id_customer = $this->input->post('id_customer');
		$this->Customer_model->edit_data($id_customer,$data);
		$this->session->set_flashdata("memesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('index.php/Customer/data_customer');
	}
	function data_customer()
	{
		//print_r($this->customer_model->ambil_data());
		$data['customer'] = $this->Customer_model->ambil_data();
		$this->load->view('Admin/Customer_list',$data);
	}


	function mau_daftar()
	{
		
		$this->load->view('Member/Registrasi');
	}
}
 ?>