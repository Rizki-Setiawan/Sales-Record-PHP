  <section class="content-header">
      <h1>
        Tambah
        <small>Data Cabang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Cabang</a></li>
        <li class="active"><a href="#">Tambah Data</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">

            <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Cabang</h3>
            </div>
            <form role="form" method="post" onsubmit="return validasi_input(this)">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Cabang</label>
                  <input type="text" class="form-control" name="nama_cabang" placeholder="Masukan Nama Cabang">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label>Jam Buka</label>
                  <input type="text" class="form-control" name="jam_buka" placeholder="Masukan Keterangan Produk">
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a href="./index.php?page=cabang" class="btn btn-success">Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>

<script type="text/javascript">
function validasi_input(form){
   if (form.nama_cabang.value == ""){
    alert("Masukan Nama Cabang!");
    form.nama_cabang.focus();
    return (false);
  }

   if (form.jam_buka.value == ""){
    alert("Masukan Jam Buka!");
    form.jam_buka.focus();
    return (false);
  }

return (true);
}
</script>
<?php

$submit=@$_REQUEST['submit'];
if(isset($submit)){
    $nama_cabang=$_REQUEST['nama_cabang'];
    $jam_buka=$_REQUEST['jam_buka'];

         
  $sql="INSERT INTO `cabang`(id_cabang,nama_cabang,jam_buka)VALUES(null,'$nama_cabang','$jam_buka')";

        $result=mysqli_query($con,$sql);
        if($result ==true){
        ?><script type="text/javascript">
            alert('Data Berhasil Di input! ');
            window.location='./index.php?page=cabang';
        </script><?php
    }else{
        echo "error";
    }
   
}   

?>

  </div>
</section>

