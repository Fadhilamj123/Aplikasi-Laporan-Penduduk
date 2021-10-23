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
              Edit Laporan
            </div>
            <div class="card-body">
            <div>
            <a href="index.php" class="btn btn-primary">
            Kembali
            </a>
            </div>

            <?php
                $koneksi = mysqli_connect("localhost","root","","jmc") or die (mysqli_connect_error());
                $sql=mysqli_query($koneksi,"select * from info_penduduk_propinsi where prop_id='$_GET[prop_id]' ");
                if($data=mysqli_fetch_array($sql))
                {
                    ?>

              <form method="post" action="update_laporan.php"  enctype="multipart/form-data">

                <div>
                  Kode
                  <input type="text" name="prop_kode" class="form-control" value="<?php echo $data['prop_kode']; ?>" readonly>
                </div>

                <div>
                  Kabupaten
                  <input type="text" name="ibukota" class="form-control" value="<?php echo $data['ibukota']; ?>">
                </div>         

                <div>
                  Jumlah Penduduk Pria
                  <input type="text" name="prop_jml_penduduk_pria" class="form-control" value="<?php echo $data['prop_jml_penduduk_pria']; ?>">
                </div>

                <div>
                  Jumlah Penduduk Wanita
                  <input type="text" name="prop_jml_penduduk_wanita" class="form-control" value="<?php echo $data['prop_jml_penduduk_wanita']; ?>">
                </div>

                <div>
                  Website
                  <input type="text" name="prop_website" class="form-control" value="<?php echo $data['prop_website']; ?>">
                </div>
                <div>
                  Provinsi
                <select class="form-select" aria-label="Default select example" name="prop_nama" requied value="<?php echo $data['prop_nama']; ?>">
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
                </select></div><br>

               

                <div>
                  <input type="submit" value="Update" class="btn btn-warning">
            
                </div>
                
              </form>
              <?php } ?>

                              
 
</body>
</html>