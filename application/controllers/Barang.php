<?php 
/**
* 
*/
class Barang extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['barang'] = $this->Barang_model->ambil_data();
		$this->load->view('Admin/Barang_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('index.php/Barang/tambah_aksi'),
			'nama' 				=> set_value('nama'),
			'bahan' 			=> set_value('bahan'),
			'keterangan'		=> set_value('keterangan'),
			'harga' 			=> set_value('harga'),
			'id_barang' 		=> set_value('id_barang'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Admin/Barang_form',$data);
	}

	function tambah_aksi()
	{

		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/admin/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 			=>$gbr['file_name'],
                'nama_barang' 		=> $this->input->post('nama'),
				'bahan' 			=> $this->input->post('bahan'),
				'keterangan' 		=> $this->input->post('keterangan'),
				'harga' 			=> $this->input->post('harga'),                  
                );
                $this->Barang_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('index.php/Barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Barang_form'); //jika gagal maka akan ditampilkan form upload
            }
        }


		$data = array(
			'nama_barang' 		=> $this->input->post('nama'),
			'bahan' 			=> $this->input->post('bahan'),
			'keterangan' 		=> $this->input->post('keterangan'),
			'harga' 			=> $this->input->post('harga'),
			);
		$this->Barang_model->tambah_data($data);
		redirect(site_url('Barang'));
	}

	function delete($id)
	{
		$this->Barang_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('index.php/Barang');
	}

	function update($id)
	{
		$barang = $this->Barang_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('index.php/barang/update_aksi'),
			'nama' 				=> set_value('nama',$barang->nama_barang),
			'bahan' 			=> set_value('merk',$barang->bahan),
			'keterangan'		=> set_value('tipe',$barang->keterangan),
			'harga' 			=> set_value('harga',$barang->harga),
			'id_barang' 		=> set_value('id_barang',$barang->id_barang),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Barang_form',$data);		
	}

	function update_aksi()
	{
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/admin/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 			=>$gbr['file_name'],
                'nama_barang'		=> $this->input->post('nama'),
				'bahan' 			=> $this->input->post('bahan'),
				'keterangan' 		=> $this->input->post('keterangan'),
				'harga' 			=> $this->input->post('harga'),                  
                );
                $id_barang=$this->input->post('id_barang');
                $this->Barang_model->edit_data($id_barang,$data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('index.php/Barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Barang_form','refresh'); //jika gagal maka akan ditampilkan form upload
            }
        }

		$data = array(
			'nama_barang'		=> $this->input->post('nama'),
			'bahan' 			=> $this->input->post('bahan'),
			'keterangan' 		=> $this->input->post('keterangan'),
			'harga' 			=> $this->input->post('harga'),
			);	
		$id_barang = $this->input->post('id_barang');
		$this->Barang_model->edit_data($id_barang,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('index.php/Barang');
	}
}

 ?>