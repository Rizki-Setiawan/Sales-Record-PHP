  <section class="content-header">
      <h1>
        Tambah
        <small>Data Manajer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Manajer</a></li>
        <li class="active"><a href="#">Tambah Data</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">

            <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Manajer</h3>
            </div>
            <form role="form" method="post" onsubmit="return validasi_input(this)">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Manajer</label>
                  <input type="text" class="form-control" name="nama_manajer" placeholder="Masukan Nama Manajer">
                </div>
              </div>
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
                  <label>Nama Akun</label>
                  <select name="id_akun" class="form-control" >
                            <option value="" disabled selected>Pilih Akun</option>
                              <?php
                                  include 'db.php';
                                  $res=$con->query("SELECT * FROM akun");
                                  while ($row=$res->fetch_array()) {
                              ?>
                            <option value="<?php echo $row['id_akun'];?>">
                              <?php echo $row['username'];?>
                            </option>
                              <?php
                                }
                                ?>
                          </select>
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a href="./index.php?page=manajer" class="btn btn-success">Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>

<script type="text/javascript">
function validasi_input(form){
   if (form.nama_manajer.value == ""){
    alert("Masukan Nama Manajer!");
    form.nama_manajer.focus();
    return (false);
  }

   if (form.id_cabang.value == ""){
    alert("Masukan Cabang!");
    form.id_cabang.focus();
    return (false);
  }

   if (form.id_akun.value == ""){
    alert("Masukan Nama Akun!");
    form.id_akun.focus();
    return (false);
  }
return (true);
}
</script>
<?php

$submit=@$_REQUEST['submit'];
if(isset($submit)){
    $nama_manajer=$_REQUEST['nama_manajer'];
    $id_cabang=$_REQUEST['id_cabang'];
    $id_akun=$_REQUEST['id_akun'];

         
  $sql="INSERT INTO `manajer`(id_manajer,nama_manajer,id_cabang,id_akun)VALUES(null,'$nama_manajer','$id_cabang','$id_akun')";

        $result=mysqli_query($con,$sql);
        if($result ==true){
        ?><script type="text/javascript">
            alert('Data Berhasil Di input! ');
            window.location='./index.php?page=manajer';
        </script><?php
    }else{
        echo "error";
    }
   
}   

?>

  </div>
</section>

