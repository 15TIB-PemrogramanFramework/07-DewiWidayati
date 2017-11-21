<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('memesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<div class="form-group">
				<label>Status</label><br>
				<input type="radio" name="status" value="Sedang diproses"> Sedang diproses &nbsp;
				<input type="radio" name="status" value="Sedang dikirim"> Sedang dikirim
			</div>			
			<input type="hidden" name="id_memesan" value="<?php echo $id_memesan; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('Memesan')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>