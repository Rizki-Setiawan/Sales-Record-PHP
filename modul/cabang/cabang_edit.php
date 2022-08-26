<?php

    if( isset( $_REQUEST['submit'] )){
        $id_cabang =$_REQUEST['id_cabang'];
        $nama_cabang = $_REQUEST['nama_cabang'];
        $jam_buka = $_REQUEST['jam_buka'];



        $sql = mysqli_query($con, "UPDATE cabang SET nama_cabang='$nama_cabang', jam_buka='$jam_buka' WHERE id_cabang='$id_cabang'");

        if($sql == true){
                ?>
                 <script type="text/javascript">
                    alert("Data berhasil di Edit. "); 

                document.location='./index.php?page=cabang';
                </script>
                <?php
            die();
        } else {
            echo 'ERROR! Periksa penulisan querynya.';
        }
    } else {
    $id_cabang = $_REQUEST['id_cabang'];

    $sql = mysqli_query($con, "SELECT * FROM cabang WHERE id_cabang='$id_cabang'");
    while($row = mysqli_fetch_array($sql)){

?>
  <section class="content-header">
      <h1>
        Edit
        <small>Data Cabang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Cabang</a></li>
        <li class="active"><a href="#">Edit Data</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">

         <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Cabang</h3>
            </div>
            <form role="form" method="post" >
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Cabang</label>
                  <input type="text" class="form-control" name="nama_cabang" value="<?php echo $row['nama_cabang'] ?>">
                </div>
                </div>
             <div class="col-md-6">
                <div class="form-group">
                  <label>Jam Buka</label>
                  <input type="text" class="form-control" name="jam_buka" value="<?php echo $row['jam_buka'] ?>">
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
<?php
    }
}
?>

    </div>
    </section>
