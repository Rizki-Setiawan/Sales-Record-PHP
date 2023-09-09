<?php

    if( isset( $_REQUEST['submit'] )){
        $id_produk =$_REQUEST['id_produk'];
        $nama_produk = $_REQUEST['nama_produk'];
        $jenis_produk = $_REQUEST['jenis_produk'];
        $keterangan= $_REQUEST['keterangan'];



        $sql = mysqli_query($con, "UPDATE produk SET nama_produk='$nama_produk', jenis_produk='$jenis_produk',keterangan='$keterangan' WHERE id_produk='$id_produk'");

        if($sql == true){
                ?>
                 <script type="text/javascript">
                    alert("Data berhasil di Edit. "); 

                document.location='./index.php?page=produk';
                </script>
                <?php
            die();
        } else {
            echo 'ERROR! Periksa penulisan querynya.';
        }
    } else {
    $id_produk = $_REQUEST['id_produk'];

    $sql = mysqli_query($con, "SELECT * FROM produk WHERE id_produk='$id_produk'");
    while($row = mysqli_fetch_array($sql)){

?>
  <section class="content-header">
      <h1>
        Edit
        <small>Data Produk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Produk</a></li>
        <li class="active"><a href="#">Edit Data</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">

         <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Produk</h3>
            </div>
            <form role="form" method="post" >
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" class="form-control" name="nama_produk" value="<?php echo $row['nama_produk'] ?>">
                </div>
                </div>
                 <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis Produk</label>
                 <select name="jenis_produk" class="form-control" >
                    <option value="<?php echo $row['jenis_produk'] ?>"><?php echo $row['jenis_produk'] ?></option>
                    <option value="Makanan" >Makanan</option>
                    <option value="Minuman" >Minuman</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" value="<?php echo $row['keterangan'] ?>">
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
<?php
    }
}
?>

    </div>
    </section>
