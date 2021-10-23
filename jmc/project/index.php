<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <div class="row">
            <div class="col-md-2">
                <div class="list-group-flush">
                  <a href="home.php" class="list-group-item list-group-item-action active text-center" >
                    PENDUDUK
                   </a>
                    <a href="tulis_laporan.php" class="list-group-item list-group-item-action">
                       Tulis Laporan
                    </a>
                    <a href="index.php" class="list-group-item list-group-item-action">
                    Laporan</a>  
                    <a href="logout.php" class="list-group-item list-group-item-action">
                     Keluar</a>  
                </div>
            </div>
            
            
            <div class="col-md-10">
            <h2>APLIKASI LAPORAN PENDUDUK</h2> 
           <br><br>
           
           <div class="card shadow">
            <div class="card-header">
              Data Laporan
            </div>
            <div class="card-body">
              
                <table class="table table-bordered">
                  
                    <tr>
                      <th>ID</th>
                      <th>Kode</th>
                      <th>Kabupaten</th>
                      <th>Provinsi</th>
                      <th>Jumlah Penduduk Pria</th>
                      <th>Jumlah Penduduk Wanita</th>
                      <th>Website</th>
                      <th>Aksi</th>
                    </tr>

                  
                  <?php
                  include "koneksi.php";
                	$koneksi = mysqli_query($koneksi,"SELECT * FROM info_penduduk_propinsi");
                  while($data = mysqli_fetch_array($koneksi)) {
                
                  ?>
                  
                    <tr>
                    <td><?php echo $data['prop_id']; ?></td>
                    <td><?php echo $data['prop_kode']; ?></td>
                    <td><?php echo $data['ibukota']; ?></td>
                    <td><?php echo $data['prop_nama']; ?></td>
                    <td><?php echo $data['prop_jml_penduduk_pria']; ?></td>
                    <td><?php echo $data['prop_jml_penduduk_wanita']; ?></td>
                    <td><?php echo $data['prop_website']; ?></td>
                    <td>
                    <!--button-->
                            

                            

                            <a href="edit_laporan.php?prop_id=<?php echo $data['prop_id']; ?>" class="btn btn-warning">                            
                            Edit
                            </a><br><br>

                            <a href="hapus_laporan.php?prop_id=<?php echo $data['prop_id']; ?>" class="btn btn-danger">                            
                            Hapus
                            </a><br>  

                            
                    </td>

                    </tr>
                  
                <?php } ?>

                  </table>
           </div>


                              
 
</body>
</html>