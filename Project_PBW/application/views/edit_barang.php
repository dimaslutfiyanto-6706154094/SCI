<html>
<head>
	<title>Storage Of Culture Informations</title>
	<link href="<?php echo base_url('files/css/style.css') ?>" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div id="profile">
		<b>Selamat Datang : <i><?php echo $this->session->userdata("nama"); ?></i></b>
		<b id="logout"><a href="<?php echo base_url('index.php/login/logout'); ?>">Log out</a></b>
	</div>
	<div id="header">
        <ul id="menu-utama"> 
			<li><a href="<?php echo base_url('index.php/admin/index') ?>">Tambah Data</a></li>
			<li><a href="<?php echo base_url('index.php/admin/update') ?>">Update Data</a></li> 
			<li><a href="<?php echo base_url('index.php/admin/lihat') ?>" target="_blank">Lihat</a></li>
        </ul>
	</div>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			<li role="presentation" class="active"><a href="<?php echo base_url('index.php/admin/index') ?>">Tambah Barang</a></li>
			<li role="presentation"><a href="<?php echo base_url('index.php/admin/penjual') ?>">Toko Rekomendasi</a></li>
		</ul>
		<div id="content">
		<?php echo form_open_multipart(base_url('index.php/admin/action_edit_barang')); ?>
			<form method="POST">	
				Kode Barang 	:
				<input type="text" name="cd" value='<?php echo $kd ?>' class="form-control" disabled/><br />	
				Nama Barang 	:
				<input type="text" name="nb" class="form-control"/><br />	
				Asal Daerah 	:
				<input type="text" name="ad" class="form-control"/><br />	
				Kategori		:
				<input type="text" name="kate" class="form-control"/>	<br />				
				Keterangan		:
				<input type="text" name="ket" class="form-control"/><br />
				<input type="submit" name="submit" value="Update" class="btn-primary"/>
			</form>
		</div>
	</div>
</body>
</html>