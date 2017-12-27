<script src='modul/mod_mahasiswa/js_mahasiswa.js'></script>

<!-- Trigger the modal with a button -->
<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#ModalFormData'>Tambah Data Mahasiswa</button>
<br /><br />
<table class='table table-condensed table-bordered' id='Record'>
	<thead>
	<tr>
		<th>NIM</th>
		<th>Nama Lengkap</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th colspan='2'>Aksi</th>
	</tr>
	</thead>

	<tbody>
	</tbody>
</table>

<!-- Modal For Form Data Mahasiswa-->
<div class='modal fade bs-example-modal-lg' id='ModalFormData' role='dialog'>
	<div class='modal-dialog'>

	<!-- Modal content-->
	<form name='FormData' id="FormData" method='POST'>
	<div class='modal-content'>
		<div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'>&times;</button>
			<h4 class='modal-title'>Tambah Data Mahasiswa</h4>
		</div>

		<div class='modal-body'>
			<div class='form-group'>
				<label for='nim'>NIM</label>
				<input type='text' class='form-control' name='nim' id='nim' placeholder='NIM' />
			</div>
			<div class='form-group'>
				<label for='nama'>Nama Lengkap</label>
				<input type='text' class='form-control' name='nama' id='nama' placeholder='Nama Lengkap' />
			</div>
			<div class='form-group'>
				<label for='alamat'>Alamat</label>
				<input type='text' class='form-control' name='alamat' id='alamat' placeholder='Alamat' />
			</div>
			<div class='form-group'>
				<label for='jenis_kelamin'>Jenis Kelamin</label>
				<select class='form-control' name='jenis_kelamin' id='jenis_kelamin'>
				</select>
			</div>
			<div class='form-group'>
				<label for='agama'>Agama</label>
				<select class='form-control' name='agama' id='agama'>
				</select>
			</div>
		</div>
		
		<div class='modal-footer'>
			<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
			<button type='reset'  class='btn btn-default'>Reset</button>
			<button type='button' class='btn btn-primary' id='submit'>Create Data</button>
		</div>
	</div>
	</form>

	</div>
</div>

<!-- Modal For Delete Data Mahasiswa-->
<div class='modal fade' id='ModalDeleteData' role='dialog'>
	<div class='modal-dialog'>

	<!-- Modal content-->
	<div class='modal-content'>
		<div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'>&times;</button>
			<h4 class='modal-title'>Delete Data Mahasiswa</h4>
		</div>

		<div class='modal-body'>Apakah anda yakin ingin menghapus data mahasiswa dengan NIM : <b><span id='nimDelete'></span></b> ?</div>
		
		<div class='modal-footer'>
			<button type='button' class='btn btn-danger'>Yes</button>
			<button type='button' class='btn btn-primary' data-dismiss='modal'>No</button>
		</div>
	</div>

	</div>
</div>