<!--
buat ngedit ya brooo.......!
-->
<?php
include "config.php";
$id=$_GET['id_reservasi'];
$modal = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE id_reservasi ='$id'");
var_dump($modal);
while ($r = mysqli_fetch_array($modal)) {
?>


	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Edit Data Menggunakan Modal Boostrap (Model popup)</h4>
			</div>

			<div class="modal-body">
				<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="nama_reservasi">Nama_Reservasi</label>
						<input type="hidden" name="id_reservasi" class="form-control" value="<?php echo $r['id_reservasi']; ?>" />
						<input type="text" name="nama_reservasi" class="form-control" value="<?php echo $r['nama_reservasi']; ?>" maxlength="9" minlength="9" />
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="tlp_reservasi">Telp_Reseervasi</label>
						<input type="text" name="tlp_reservasi" class="form-control" value="<?php echo $r['tlp_reservasi']; ?>" />
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="alamat_reservasi">Alamat_Reservasi</label>
						<!-- <input type="hidden" name="modal_id" class="form-control" value="<?php echo $r['modal_id']; ?>" /> -->
						<input type="text" name="alamat_reservasi" class="form-control" value="<?php echo $r['alamat_reservasi']; ?>" />
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="created_at">Tanggal_Reservasi_Masuk</label>
						<input type="text" name="created_at" class="form-control" value="<?php echo $r['tgl_reservasi_masuk']; ?>" disabled />
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="created_at">Tanggal_Reservasi_Keluar</label>
						<input type="text" name="created_at" class="form-control" value="<?php echo $r['tgl_reservasi_keluar']; ?>" disabled />
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="id_kamar">Id_Kamar</label>
						<!-- <input type="hidden" name="modal_id" class="form-control" value="<?php echo $r['modal_id']; ?>" /> -->
						<input type="text" name="id_kamar" class="form-control" value="<?php echo $r['id_kamar']; ?>" />
					</div>

					<div class="form-group" style="padding-bottom: 20px;">
						<label for="status_reservasi">Status_Reservasi</label>
						<!-- <input type="hidden" name="modal_id" class="form-control" value="<?php echo $r['modal_id']; ?>" /> -->
						<input type="text" name="status_reservasi" class="form-control" value="<?php echo $r['status_reservasi']; ?>" />
					</div>
				
					<div class="modal-footer">
						<button class="btn btn-success btn-sm" type="submit">
							Confirm
						</button>

						<button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">
							Cancel
						</button>
					</div>

				</form>

			<?php } ?>

			</div>


		</div>
	</div>