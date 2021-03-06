<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Customer</h1>
		</div><?=$this->session->flashdata('memesan')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id customer</th>
					<th>Nama customer</th>
					<th>Username</th>
					<th>Password</th>
					<th>Alamat</th>
					<th>No Hp</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($customer as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_customer; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->username; ?></td>
					<td><?php echo $value->password; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td><?php echo $value->no_hp; ?></td>
					<td>
						<a href="<?php echo site_url('index.php/Customer/delete/'.$value->id_customer); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('index.php/Customer/update/'.$value->id_customer); ?>"
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