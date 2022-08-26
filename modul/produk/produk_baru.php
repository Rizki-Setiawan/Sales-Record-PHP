  <section class="content-header">
      <h1>
        Tambah
        <small>Data Produk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Produk</a></li>
        <li class="active"><a href="#">Tambah Data</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">

            <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Produk</h3>
            </div>
            <form role="form" method="post" onsubmit="return validasi_input(this)">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" class="form-control" name="nama_produk" placeholder="Masukan Nama Produk">
                </div>
              </div>
              <div class="col-md-6">
                   <div class="form-group">
                  <label>Jenis Produk</label>
                 <select name="jenis_produk" class="form-control" >
                    <option value="" disabled selected>Pilih Jenis Produk</option>
                    <option value="Makanan" >Makanan</option>
                    <option value="Minuman" >Minuman</option>
                  </select>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan Produk">
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a href="./index.php?page=produk" class="btn btn-success">Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>

<script type="text/javascript">
function validasi_input(form){
   if (form.nama_produk.value == ""){
    alert("Masukan Nama Produk!");
    form.nama_produk.focus();
    return (false);
  }

   if (form.jenis_produk.value == ""){
    alert("Masukan Jenis Produk!");
    form.jenis_produk.focus();
    return (false);
  }

   if (form.keterangan.value == ""){
    alert("Masukan Keterangan Produk!");
    form.keterangan.focus();
    return (false);
  }

return (true);
}
</script>
<?php

$submit=@$_REQUEST['submit'];
if(isset($submit)){
    $nama_produk=$_REQUEST['nama_produk'];
    $jenis_produk=$_REQUEST['jenis_produk'];
    $keterangan=$_REQUEST['keterangan'];

         
  $sql="INSERT INTO `produk`(id_produk,nama_produk,jenis_produk,keterangan)VALUES(null,'$nama_produk','$jenis_produk','$keterangan')";

        $result=mysqli_query($con,$sql);
        if($result ==true){
        ?><script type="text/javascript">
            alert('Data Berhasil Di input! ');
            window.location='./index.php?page=produk';
        </script><?php
    }else{
        echo "error";
    }
   
}   

?>

  </div>
</section>

