<?php 
/**
* 
*/
class Memesan_model extends CI_Model
{
	public $memesan		= 'memesan';
	public $id			= 'id_memesan';
	public $id_customer = 'id_customer';
	public $id2			= 'id_customer';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('memesan.id_memesan, barang.nama_barang, customer.nama, customer.alamat, customer.no_hp, barang.harga, memesan.jumlah, memesan.status');
        $this->db->from('memesan');
        $this->db->join('customer', 'memesan.id_customer = customer.id_customer');
        $this->db->join('barang', 'memesan.id_barang = barang.id_barang');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->memesan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->memesan)->row();//1 data
	}
		function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->memesan);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->memesan,$data);
	}
	function ambil_data_pesan($id_customer){
		$this->db->where($this->id_customer,$id_customer);
		return $this->db->get($this->memesan)->result();
	}
	function ambil_data_id2($id)
	{
		$this->db->where($this->id2,$id);
		return $this->db->get($this->memesan)->result();//1 data
	}
}
 ?>