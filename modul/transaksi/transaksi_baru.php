  <section class="content-header">
      <h1>
        Tambah
        <small>Data Transaksi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Transaksi </a></li>
        <li class="active"><a href="#">Tambah Data</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">

            <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Transaksi</h3>
            </div>
            <form role="form" method="post" onsubmit="return validasi_input(this)">
              <div class="box-body">
                 <div class="col-md-6">
                   <div class="form-group">
                  <label>Cabang</label>
                  <select name="id_cabang" class="form-control" >
                            <option value="" disabled selected>Pilih Cabang</option>
                              <?php
                                  include 'db.php';
                                  $res=$con->query("SELECT * FROM cabang");
                                  while ($row=$res->fetch_array()) {
                              ?>
                            <option value="<?php echo $row['id_cabang'];?>">
                              <?php echo $row['nama_cabang'];?>
                            </option>
                              <?php
                                }
                                ?>
                          </select>
                </div>
              </div>
             <div class="col-md-6">
                   <div class="form-group">
                  <label>Nama Manajer</label>
                  <select name="id_manajer" class="form-control" >
                            <option value="" disabled selected>Pilih Manajer</option>
                              <?php
                                  include 'db.php';
                                  $res=$con->query("SELECT * FROM manajer");
                                  while ($row=$res->fetch_array()) {
                              ?>
                            <option value="<?php echo $row['id_manajer'];?>">
                              <?php echo $row['nama_manajer'];?>
                            </option>
                              <?php
                                }
                                ?>
                          </select>
                </div>
              </div>
                 <div class="col-md-6">
                   <div class="form-group">
                  <label>Nama Kasir</label>
                  <select name="id_kasir" class="form-control" >
                            <option value="" disabled selected>Pilih Kasir</option>
                              <?php
                                  include 'db.php';
                                  $res=$con->query("SELECT * FROM kasir");
                                  while ($row=$res->fetch_array()) {
                              ?>
                            <option value="<?php echo $row['id_kasir'];?>">
                              <?php echo $row['nama_kasir'];?>
                            </option>
                              <?php
                                }
                                ?>
                          </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" class="form-control" name="tanggal" placeholder="Masukan Tanggal">
                </div>
              </div>
               <div class="col-md-6">
                   <div class="form-group">
                  <label>Nama Produk</label>
                  <select name="id_produk" class="form-control" >
                            <option value="" disabled selected>Pilih Produk</option>
                              <?php
                                  include 'db.php';
                                  $res=$con->query("SELECT * FROM produk");
                                  while ($row=$res->fetch_array()) {
                              ?>
                            <option value="<?php echo $row['id_produk'];?>">
                              <?php echo $row['nama_produk'];?>
                            </option>
                              <?php
                                }
                                ?>
                          </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" class="form-control" name="harga" placeholder="Masukan Harga Produk">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Banyak</label>
                  <input type="number" class="form-control" name="banyak" placeholder="Masukan Banyak Produk">
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a href="./index.php?page=transaksi" class="btn btn-success">Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>

<script type="text/javascript">
function validasi_input(form){
   if (form.id_cabang.value == ""){
    alert("Masukan Cabang!");
    form.id_cabang.focus();
    return (false);
  }

   if (form.id_manajer.value == ""){
    alert("Masukan Nama Manajer!");
    form.id_manajer.focus();
    return (false);
  }

   if (form.id_kasir.value == ""){
    alert("Masukan Nama Kasir!");
    form.id_kasir.focus();
    return (false);
  }
   if (form.tanggal.value == ""){
    alert("Masukan Tanggal!");
    form.tanggal.focus();
    return (false);
  }
   if (form.id_produk.value == ""){
    alert("Masukan Nama Produk!");
    form.id_produk.focus();
    return (false);
  }
     if (form.harga.value == ""){
    alert("Masukan Harga Produk!");
    form.harga.focus();
    return (false);
  }
     if (form.banyak.value == ""){
    alert("Masukan Banyak Produk!");
    form.banyak.focus();
    return (false);
  }

return (true);
}
</script>
<?php

$submit=@$_REQUEST['submit'];
if(isset($submit)){
    $id_cabang=$_REQUEST['id_cabang'];
    $id_manajer=$_REQUEST['id_manajer'];
    $id_kasir=$_REQUEST['id_kasir'];
    $tanggal=$_REQUEST['tanggal'];
    $id_produk=$_REQUEST['id_produk'];
    $harga=$_REQUEST['harga'];
    $banyak=$_REQUEST['banyak'];



         
  $sql="INSERT INTO `transaksi` (id_transaksi, id_cabang,id_manajer,id_kasir,tanggal,id_produk,harga,banyak,total) VALUES (NULL, '$id_cabang', '$id_manajer', '$id_kasir', '$tanggal', '$id_produk','$harga','$banyak' ,'$harga'*'$banyak')";

        $result=mysqli_query($con,$sql);
        if($result ==true){
        ?><script type="text/javascript">
            alert('Data Berhasil Di input! ');
            window.location='./index.php?page=transaksi';
        </script><?php
    }else{
        echo "error";
    }
   
}   

?>

  </div>
</section>

