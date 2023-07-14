<?php 

	$sql = mysqli_query($con, "SELECT * FROM tbl_penduduk ORDER BY date DESC");

 ?>
  <div class="mb-3">
    <label for="no" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="no"  name="kode" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="namab" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="namab"  name="nama" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="namap" class="form-label">Pekerjaan </label>
    <input type="text" class="form-control" id="namap"  name="namap" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIK</label>
    <input type="text" class="form-control" id="nim"  name="nim" autocomplete="off">
  </div>
  <div class="mb-3">
  <label for="kembalian" class="form-label">Jenis Kelamin</label>
  <select class="form-select"  name="jenkel">
  <option selected>Pilih Jenis Kelamin</option>
  <option value="Perempuan">Perempuan</option>
  <option value="Laki - Laki">Laki - Laki</option>
</select>
  </div>
  <div class="mb-3">
    <label for="kembalian" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="kembalian"  name="tan">
  </div>
  <div class="mb-3">
    <label for="no" class="form-label">No.KK</label>
    <input type="text" class="form-control" id="no"  name="hp" autocomplete="off">
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
