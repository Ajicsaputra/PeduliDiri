<?php

$id_catatan = $_GET['id_catatan'];
include'koneksi.php';
$sql = "SELECT*FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>
<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
         </a>
    </div>
    <div clas="card-body">
        <form method="post" action="simpan_edit_catatan.php">
            <input type="hidden" name='id_catatan' value="<?= $id_catatan ?>">
            <div class="form-group">
                <label>Tanggal Perjalanan</label>
                <input id="datePIckerId" value="<?= $value['tanggal'] ?>" name="tanggal" class="form-control" type="date" placeholder="Pilih Tanggal" required>
            </div>
            <div class="form-group">
                <label>Waktu Perjalanan</label>
                <input value="<?= $value['waktu'] ?>" name="waktu" class="form-control" type="time" placeholder="Pilih Waktu" required>
            </div>
            <div class="form-group">
                <label>Lokasi Perjalanan</label>
                <input value="<?= $value['lokasi'] ?>" name="lokasi" class="form-control" type="text" placeholder="Masukan Lokasi Perjalanan" required>
            </div>
            <div class="form-group">
                <label>Suhu Tubuh</label>
                <input value="<?= $value['suhu'] ?>" name="suhu" class="form-control" type="text" placeholder="Masukan Suhu Tubuh" required>
            </div>
            <div class="from-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
                <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN</button>
            </div>
        </form>
        <script>
            datePIckerId.max=new Date().toISOString().split("T")[0];
        </script>
    </div>
</div>