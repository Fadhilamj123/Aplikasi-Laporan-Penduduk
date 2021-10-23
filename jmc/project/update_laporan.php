<?php
$koneksi = mysqli_connect("localhost","root","","jmc") or die (mysqli_connect_error());
$id = $_POST['prop_id'];
$kode = $_POST['prop_kode'];
$ibu = $_POST['ibukota'];
$pria = $_POST['prop_jml_penduduk_pria'];
$wanita = $_POST['prop_jml_penduduk_wanita'];
$web = $_POST['prop_website'];
$nama = $_POST['prop_nama'];

$sql = mysqli_query($koneksi, "update info_penduduk_propinsi set prop_kode='$kode', prop_nama='$nama', 
 ibukota='$ibu', prop_jml_penduduk_pria='$pria', prop_jml_penduduk_wanita='$wanita', prop_website='$web'where prop_kode='$kode'");
if ($sql)
{
    ?>
    <script type="text/javascript">
    alert('Data Berhasil Di Update');
    window.location="index.php";
    </script>
    <?php
}
?>
