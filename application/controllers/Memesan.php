<?php 
/**
* 
*/
class Memesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Memesan_model');
		$this->load->model('Customer_model');
		$this->load->model('Barang_model');
	}

	function index()
	{
		$data['memesan'] = $this->Memesan_model->ambil_data();
		$this->load->view('Admin/Memesan_list',$data);
	}

	function tambah($id_barang)
	{
		$username = $this->session->userdata('username');
		$barang = $this->Barang_model->ambil_data_id($id_barang);
		$customer = $this->Customer_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('index.php/Memesan/tambah_aksi'),
			'id_memesan' 		=> set_value('id_memesan'),
			'id_customer' 		=> set_value('id_customer',$customer->id_customer),
			'id_barang'		 	=> set_value('id_barang',$barang->id_barang),
			'jumlah' 			=> set_value('jumlah'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Member/Pemesanan',$data);
	}
	function tambah_aksi()
	{
		$data = array(
			'id_memesan' 		=> $this->input->post('id_memesan'),
			'id_customer' 		=> $this->input->post('id_customer'),
			'id_barang' 		=> $this->input->post('id_barang'),
			'jumlah'			=> $this->input->post('jumlah')
			);
		$this->Memesan_model->tambah_data($data);
		 $this->session->set_flashdata("memesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('index.php/Welcome/Produk_member');
	}


	function delete($id)
	{
		$this->Memesan_model->hapus_data($id);
		$this->session->set_flashdata("memesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('index.php/Memesan');
	}

	function update($id)
	{
		$memesan = $this->Memesan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('index.php/memesan/update_aksi'),
			'status' 			=> set_value('jumlah',$memesan->jumlah),
			'id_memesan' 		=> set_value('id_memesan',$memesan->id_memesan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Memesan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'status' 		=> $this->input->post('status')
			);	
		$id_memesan = $this->input->post('id_memesan');
		$this->Memesan_model->edit_data($id_memesan,$data);
		$this->session->set_flashdata("memesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('index.php/Memesan');
	}

}

 ?>