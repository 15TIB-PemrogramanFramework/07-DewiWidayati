<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->model('Customer_model');
		$this->load->model('Memesan_model');
		$this->load->helper(array('url'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/Index.php/welcome
	 *	- or -
	 * 		http://example.com/Index.php/welcome/Index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /Index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Index()
	{
		$this->load->view('Member/Index');
	}
	public function About()
	{
		$this->load->view('Member/About');
	}
	public function Produk()
	{
		$data['Barang'] = $this->Barang_model->ambil_data();
		$this->load->view('Member/Produk', $data);
	}
	public function Contact()
	{
		$this->load->view('Member/Contact');
	}
	public function Login()
	{
		$this->load->view('Member/Login');
	}
	public function Registrasi()
	{
		$this->load->view('Member/Registrasi');
	}

		public function Index_member()
	{
		$this->load->view('Member/Index_Member');
	}
	public function About_member()
	{
		$this->load->view('Member/About_Member');
	}
	public function Produk_member()
	{
		$data['Barang'] = $this->Barang_model->ambil_data();
		$this->load->view('Member/Produk_Member', $data);
	}
	public function Contact_member()
	{
		$this->load->view('Member/Contact_Member');
	}
	public function Pemesanan()
	{
		$this->load->view('Member/Pemesanan');
	}
	public function Status_member($id)
	{
		$Customer = $this->Customer_model->ambil_data_user($id);
		//$id2 = $Member->id_Member;
		$data['pesan'] = $this->Memesan_model->ambil_data_id2($Customer->id_customer);
		$this->load->view('Member/Status_Member',$data);
	}
	public function Gagal()
	{
		$this->load->view('Gagal');
	}

	public function Gagal_Login()
	{
		$this->load->view('Gagal_login');
}
}