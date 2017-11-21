<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Pemesanan</h1>
		</div><?=$this->session->flashdata('memesan')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Pesan</th>
					<th>Nama Barang</th>
					<th>Nama Customer</th>
					<th>Alamat</th>
					<th>No Hp</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Status Pesanan</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($memesan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_memesan; ?></td>
					<td><?php echo $value->nama_barang; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td><?php echo $value->no_hp; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td><?php echo $value->jumlah; ?></td>
					<td><?php echo $value->status; ?></td>
					<td>
						<a href="<?php echo site_url('index.php/Memesan/delete/'.$value->id_memesan); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('index.php/Memesan/update/'.$value->id_memesan); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('templates/admin/footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>