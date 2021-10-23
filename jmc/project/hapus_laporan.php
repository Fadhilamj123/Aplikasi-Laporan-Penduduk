<?php
$koneksi = mysqli_connect("localhost","root","","jmc") or die (mysqli_connect_error());
$kode = $_GET['prop_id'];

$sql=mysqli_query($koneksi,"delete from info_penduduk_propinsi where prop_id ='$kode' ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='index.php';
    </script>
    <?php
    }
    ?>