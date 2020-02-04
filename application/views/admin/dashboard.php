<body>

	<?php
	$this->load->view("admin/navs");

	$username =  $this->session->userdata("nama_adm");
	$nama = $this->db->query("SELECT nama FROM admin WHERE username = '" . $username . "'")->result_array();

	?>
	<!-- Page Layout here -->
	<div class="row">

		<!-- Grey navigation panel -->
		<div class="col m3">

		</div>

		<div class="col m8">
			<!-- content -->
			<h3>Dashboard Admin</h3>
			<div class="divider"></div>
			<h5>Masukkan data Mahasiswa</h5>

			<div class="row">
				<div class="col m8">
					<?php echo $this->session->flashdata('message_hapus'); ?>
				</div>
				<div class="col s12">
					<form action="<?= site_url("admin/tambahMahasiswa"); ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="input-field col s8">
								<input placeholder="Andri Ilham" id="nama" type="text" class="validate" name="nama" required>
								<label for="nama">Nama Lengkap</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s8">
								<input placeholder="17111322" id="npm" type="number" class="validate" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="12" name="npm" required>
								<label for="npm">Nomor Pokok Mahasiswa</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s8">
								<select name="prodi" required>
									<option value="" disabled selected>Pilih Program Studi</option>
									<option value="Teknik Informatika">Teknik Informatika</option>
									<option value="Teknik Industri">Teknik Industri</option>
									<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
								</select>
								<label>Program Studi</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s8">
								<select name="kelas" required>
									<option value="" disabled selected>Pilih Kelas yang diikuti</option>
									<option value="Reguler Pagi">Reguler Pagi</option>
									<option value="Reguler Malam">Reguler Malam</option>
									<option value="Kelas Karyawan">Kelas Karyawan</option>
								</select>
								<label>Kelas</label>
							</div>
						</div>
						<div class="row">
							<div class="col s8">
								<button class="btn waves-effect waves-light btn-large" type="submit" name="action">Submit
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
		<div class="col s1"></div>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/und/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap.4.3.1/js/bootstrap.min.js"></script>


	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.19/datatables.min.js"></script>

	<script type="text/javascript">
		$('.mydatatable').DataTable();
	</script>
</body>