<?php
session_start();
?>
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
                  <a href="home.php" class="list-group-item list-group-item-action active text-center">
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
              Tulis Laporan
            </div>
            <div class="card-body">
              <form method="post" action="simpan_laporan.php"  enctype="multipart/form-data">

                

                <div>
                  Kode
                  <input type="text" name="prop_kode" class="form-control">
                </div>

                <div>
                  Kabupaten
                  <input type="text" name="ibukota" class="form-control">
                </div>

                <div>
                  Provinsi
                <select class="form-select" aria-label="Default select example" name="prop_nama" requied>
                    <option value="">-- Pilih --</option>
                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM provinsi");
                    
                    while ($data = mysqli_fetch_array($sql)) {
                        

                        ?>
                        <option value ="<?php echo $data['nama'];?>"><?php echo $data['nama'];?></option>
                    <?php
                    }
                    ?>
                </select>
                  
                </div>

                <div>
                  Jumlah Penduduk Pria
                  <input type="text" name="prop_jml_penduduk_pria" class="form-control">
                </div>

                <div>
                  Jumlah Penduduk Wanita
                  <input type="text" name="prop_jml_penduduk_wanita" class="form-control">
                </div>

                <div>
                  Website
                  <input type="text" name="prop_website" class="form-control">
                </div><br>
               


               

                <div>
                  <input type="submit" value="Simpan" class="btn btn-primary">
                  <input type="reset" value="Kosongkan" class="btn btn-warning">
                </div>
                
              </form>

                              
 
</body>
</html>