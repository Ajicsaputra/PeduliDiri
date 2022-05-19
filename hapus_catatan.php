<?php

$id_catatan = $_GET['id_catatan'];


include'koneksi.php';
$sql = "DELETE FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data Catatan Berhasil Dihapus");
        window.location.assign("user.php?url=catatan_perjalanan");
    </script>
<?php
    
}else{ ?>
    <script>
        alert("Data Catatan Tidak Berhasil Dihapus");
        window.location.assign("user.php?url=catatan_perjalanan");
    </script>
<?php

}