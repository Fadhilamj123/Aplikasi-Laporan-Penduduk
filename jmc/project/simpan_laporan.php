<?php
$koneksi = mysqli_connect("localhost","root","","jmc") or die (mysqli_connect_error());


$kode=$_POST['prop_kode'];
$kota=$_POST['ibukota'];
$nama=$_POST['prop_nama'];
$pria=$_POST['prop_jml_penduduk_pria'];
$wanita=$_POST['prop_jml_penduduk_wanita'];
$web=$_POST['prop_website'];

$st=0;

$sql=mysqli_query($koneksi, "insert into info_penduduk_propinsi(prop_kode,ibukota,prop_nama,prop_jml_penduduk_pria,prop_jml_penduduk_wanita,prop_website) 
values('$kode','$kota','$nama','$pria','$wanita','$web')");

if ($sql) 
{
	?>
	<script type="text/javascript">
		alert ('Data berhasil disimpan, Terimakasih sudah menulis laporan ');
		window.location="index.php";
	</script>
	<?php
}
?>
